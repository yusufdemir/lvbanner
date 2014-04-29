@extends('layout/layout')

@if(Session::has('message'))
    <p class="alert">{{ Session::get('message') }}</p>
@endif

@section('content')
        	<h1 class="page-head"> Üyelik İşlemleri <i class="glyphicon glyphicon-user pull-right"></i></h1>
            
            <div class="box">
            	<div class="post-type"><i class="glyphicon glyphicon-cog pull-right"></i></div>
				<div class="post-head" style="text-align:center;">
                	Giriş Formu
                </div>
                <div class="data">
                    {{ Form::open(array('url'=>'auth/create', 'class'=>'form-signup')) }}
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                     <div class="register-form">
                        {{ Form::text('firstname', null, array('class'=>'', 'placeholder'=>'Adınız')) }}
                        {{ Form::text('lastname', null, array('class'=>'', 'placeholder'=>'Soyadınız')) }}
                        {{ Form::text('email', null, array('class'=>'', 'placeholder'=>'Email Adresiniz')) }}
                        {{ Form::password('password', array('class'=>'', 'placeholder'=>'Şifreniz')) }}
                        {{ Form::password('password_confirmation', array('class'=>'', 'placeholder'=>'Tekrar Şifreniz')) }}
                     
                        {{ Form::submit('Kayıt Ol', array('class'=>'btn btn-large btn-primary btn-block'))}}
                     </div>
                    {{ Form::close() }}
                </div>
            </div><!--END POST-->
@stop