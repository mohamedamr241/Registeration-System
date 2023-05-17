@extends('master')

@section('signup | login')
<li><a href="{{url('/')}}"><button id="btnLogin">Sign-Up</button></a></li>
@endsection

@section('head')
@parent
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Login</title>
<link rel="stylesheet" type="text/css" href="{{url('CSS/style.css')}}">
<link rel="stylesheet" href="{{url('CSS\log.css')}}">
<link rel="stylesheet" href="{{url('CSS\nav.css')}}">
@endsection


@section('body')
    <div class="wrapper">
        <div class="form-box">
            <h2>Login</h2>
            <form action="{{route('sendUserData')}}" method="post" id="form">
                @csrf
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="text" name="un" required>
                    <label>Username</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="pass" required>
                    <label>Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">Remember me </label>

                    <!-- <a href="#">Forgot Password?</a> -->
                </div>
                <input type="submit" class="btn" value="Login">
                <div class="login-register">
                    <p>Don't have an account?<a href="{{url('/')}}" class="register-link">Register</a></p>
                </div>
                <div id="error"></div>
            </form>
        </div>

    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="{{url('JS\logIn.js')}}"></script>
@endsection

