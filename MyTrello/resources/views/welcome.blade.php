<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MyTrello</title>

    <!-- Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>
<body style='background: url(img/wallpapers-nature-029.jpg) no-repeat center center fixed;
background-size: cover;'>
<div class="container-fluid">
    <div class="row border-bottom border-warning border-4 p-2">
        <div class="col">
            <a href="/">
                <x-application-logo/>
            </a>
        </div>
        <div class="col-6 d-grid gap-2 d-md-flex m-lg-auto justify-content-md-center">
            <h2 class="fw-bold fst-italic" style="color: coral; text-shadow: 1px 1px 2px black, 0 0 1em red;">Welcome to MyTrello!</h2>
        </div>
        <div class="col-3 d-grid gap-2 d-md-flex m-lg-auto justify-content-md-end">
            @if (Route::has('login'))
                <div class="hidden">
                    @auth
                        <a href="{{ url('/dashboard') }}"
                           class="btn btn-info fw-bold"
                           style="box-shadow: 0 0 10px rgba(0,0,0,0.5);">MyWorkPanel</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-info fw-bold"
                           style="box-shadow: 0 0 10px rgba(0,0,0,0.5);">LogIn</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-success fw-bold"
                               style="box-shadow: 0 0 10px rgba(0,0,0,0.5);">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>
</div>
<div class="container fw-bolder text-center">
    <div style="margin-top: 200px; color: black; background-color: rgba(250, 249, 222, 0.6);
    padding: 20px; border-radius: 20px;  box-shadow: 0 0 10px rgba(0,0,0,0.5);">
        <h1>Getting started with MyTrello</h1>
        <h3>Welcome to MyTrello! To get started, you need to register and confirm your email. This application will help
            you correctly distribute work and monitor its implementation. Enjoy your work with MyTrello!</h3>
    </div>
</div>
<x-footer/>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>


</body>
</html>
