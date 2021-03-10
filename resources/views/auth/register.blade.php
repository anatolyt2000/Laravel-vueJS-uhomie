@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                <div class="card-body">
                    <h1>Hello!</h1>
                    <h2>Sign up to get started!</h2>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            
                            <div class="col-md-10">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nombre">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            
                            <div class="col-md-10">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            
                            <div class="col-md-10">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Contracena">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="custom-control custom-checkbox custom-control-inline col-md-10">
                                <input type="checkbox" class="custom-control-input" id="defaultInline1">
                                <label class="custom-control-label" for="defaultInline1">Soy <a href="">agente</a> o <a href="">corredor de propiedades</a></label>
                            </div>
                        </div>
                        
                        

                        <div class="form-group row ">
                            <div class="col-md-10 offset-md-4">
                                <button type="submit" class="btn" style="background-color: #00B4FF;">
                                    {{ __('REGISTRATE') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="form-group row signupusing">
                        <div class="col-md-10 offset-md-4">
                            <span>or Sign up using</span>
                        </div>
                    </div>
                    <div class="form-group row ">
                        <div class="col-md-10 offset-md-4">
                            <button type="button" class="btn facebook" style="background-color: #395799;">
                                {{ __('Facebook') }}
                            </button>
                        </div>
                    </div>
                    <div class="form-group row ">
                        <div class="col-md-10 offset-md-4">
                            <button type="button" class="btn google" style="background-color: #E04A32;">
                                {{ __('Google') }}
                            </button>
                        </div>
                    </div>
                    <div class="form-group row ">
                        <div class="col-md-10 offset-md-4">
                            <label>Ya tienes una cuenta?<a href="">Inicia Sesion</a></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style type="text/css">
    .container{
        padding-top: 60px;
        
    }
    .card{
        text-align: center;
        border:none;
        box-shadow:0 15px 30px 0 rgba(0,0,0,.11), 0 5px 15px 0 rgba(0,0,0,.08);
        padding-top:55px;
        font-family: 'OpenSans';
    }
    .card h1{
        font-family: 'OpenSans-bold';
        font-size:40px;
    }
    .card h2{
        font-family: 'OpenSans-semibold';
        
    }
    form{
        padding-top:50px;
    }
    .form-group div{
        margin:auto;
    }
    .form-group input{
        height:50px;
    }
    .btn{
        width: 100%;
        height:50px;
        font-family: 'OpenSans';
        color:#fff;
        font-size:16px;
    }
    .btn:hover{
        color:#fff;
    }
    .custom-checkbox{
        padding-left:46px;
    }
    .facebook:before{
        position:absolute;
        left: 30%;
        top: 10px;
        content: "";
        width: 28px;
        height: 30px;
        background-image:url(images/icons8-facebook-f.svg);
        background-size:100%;
        background-repeat: no-repeat;
    }
    .google:before{
        position:absolute;
        left: 30%;
        top: 10px;
        content: "";
        width: 28px;
        height: 30px;
        background-image:url(images/icons8-google-plus.svg);
        background-size:100%;
        background-repeat: no-repeat;
    }
    .signupusing{
        
        margin-bottom: 50px;
    }
    .signupusing div{
        border-bottom: 1px solid #000;
    }
    .signupusing span{
        position: relative;
        top: 26px;
        width: 215px;
        display: block;
        font-size: 24px;
        z-index: 999;
        background:#fff;
        padding: 10px;
        margin: auto;
        letter-spacing: 1px;
        color:#676767;
    }
    .form-group label{
        font-size:15px;
        color:#8c8c8c;
    }
    .form-group label a{
        text-decoration: underline;
    }
</style>
@endsection
