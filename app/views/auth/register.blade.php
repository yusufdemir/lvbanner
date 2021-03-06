@extends('layout/layout')


@section('content')
        	<h1 class="page-head"> Üyelik İşlemleri <i class="glyphicon glyphicon-user pull-right"></i></h1>
            
            <div class="box">
            	<div class="post-type"><i class="glyphicon glyphicon-cog pull-right"></i></div>
				<div class="post-head" style="text-align:center;">
                	Üyelik Formu
                </div>
                <div class="data">
                    {{ Form::open(array('url'=>'auth/register', 'class'=>'form-signup')) }}
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                     <div class="register-form">
                        {{ Form::text('name', null, array('class'=>'form-control', 'placeholder'=>'Adınız Soyadınız')) }}
                        {{ Form::text('username', null, array('class'=>'form-control', 'placeholder'=>'Kullanıcı Adınız')) }}
                        {{ Form::text('email', null, array('class'=>'form-control', 'placeholder'=>'Email Adresiniz')) }}
                        {{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Şifreniz')) }}
                        {{ Form::password('password_confirmation', array('class'=>'form-control', 'placeholder'=>'Tekrar Şifreniz')) }}
                     
                        {{ Form::submit('Kayıt Ol', array('class'=>'btn btn-large btn-primary btn-block'))}}
                     </div>
                    {{ Form::close() }}
                </div>
            </div><!--END POST-->
@stop