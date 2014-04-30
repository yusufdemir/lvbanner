<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	 
	public function showRegisterForm(){
		return View::make('auth/register');
	}

	public function registerUser(){
		//Register User Functions
		//Validate Control
		$rules = array(
			'name'		=> 'required|between:4,15',
			'username'	=> 'required|between:4,15',
			'email'   	=> 'required|email|unique:users,email',
			'password'  =>'Required|AlphaNum|Between:4,8|Confirmed',
        	'password_confirmation'=>'Required|AlphaNum|Between:4,8'
		);
		/*Edit Messages spesificied the form*/
		$messages = array(
			'name.required' => 'E-mail Alanını Doldurmanız Gerekmektedir.',
			'required' => ':attribute Alanını Doldurmanız Gerekmektedir.',
		);
		
		$validator = Validator::make(Input::all(), $rules,$messages);
		
		if($validator->fails()){
			return Redirect::to('auth/register')->withErrors($validator)->withInput(Input::except('password'));
			}else{
				// ADD TO DB
				$user= new User;
				$user -> username = Input::get('username');
				$user -> name = Input::get('name');
				$user -> email = Input::get('email');
				$user -> password = Hash::make(Input::get('password'));
				$user -> save();
				
				Session::flash('message','Üyelik Başarıyla Oluşturuldu.');
				return Redirect::to('/');
				}
		
	}

	public function showLoginForm(){
		return View::make('auth/login');
	}

	public function loginUser()
	{
		// validate the info, create rules for the inputs
		$rules = array(
			'email'    => 'required|email', // make sure the email is an actual email
			'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
		);

		// run the validation rules on the inputs from the form
		$validator = Validator::make(Input::all(), $rules);

		// if the validator fails, redirect back to the form
		if ($validator->fails()) {
			return Redirect::to('auth/login')
				->withErrors($validator) // send back all errors to the login form
				->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
		} else {

			// create our user data for the authentication
			$userdata = array(
				'email' 	=> Input::get('email'),
				'password' 	=> Input::get('password')
			);

			// attempt to do the login
			if (Auth::attempt($userdata)) {

				// validation successful!
				// redirect them to the secure section or whatever
				// return Redirect::to('secure');
				// for now we'll just echo success (even though echoing in a controller is bad)
				echo 'SUCCESS!';

			} else {	 	

				// validation not successful, send back to form	
				return Redirect::to('auth/login');

			}

		}
	}	

}