@if(session()->has('img') && session()->has('username') && session()->has('email'))
@extends('master')    

@section('head')
@parent    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="CSS/style.css">
<title>Profile</title>
@endsection

@section('body')
        <div id="wrap" class="d-flex justify-content-center align-items-center vh-100">
            <div class="w-350 p-3 text-center">
                <img id="sora" src="picture/{{session('img')}}" class="img-fluid rounded-circle">
                <h3 class="display-5 ">{{session('username')}}</h3>
                <p class="display-8 ">{{session('email')}}</p>
                <form method="GET" action="{{route('loggingOut')}}">@csrf<input type="submit" name="logout" value="logout"></form>
            </div>
        </div>
@endsection

@endif

