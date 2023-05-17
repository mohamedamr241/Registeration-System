<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('CSS\nav.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Registration</title>
    <script src="{{URL('JS\nav.js')}}"></script>

</head>

<body>
    <header id="navbar">
        <a href="{{url('/')}}">
            <div class="logo">
                <img id="mm" src="{{url('logo.png')}}" alt="Logo">
            </div>
        </a>
        <div class="navbar">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
                @section('signup | login')    
                @show
            </ul>
        </div>
    </header>
</body>

</html>