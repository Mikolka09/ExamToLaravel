<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MyTrello</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

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
            <a class="btn btn-primary fw-bold" style="box-shadow: 0 0 10px rgba(0,0,0,0.5);">Create Table</a>
        </div>
        <div class="col-3 d-grid gap-2 d-md-flex m-lg-auto justify-content-md-end">
            @if (Route::has('login'))
                <div class="hidden">
                    @auth
                        <a href="{{ url('/dashboard') }}"
                           class="text-sm text-dark-700">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-info fw-bold"
                           style="box-shadow: 0 0 10px rgba(0,0,0,0.5);">Log in</a>

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
    <div style="margin-top: 200px; color: black; background-color: floralwhite;
    opacity: 0.6; padding: 20px; border-radius: 20px;  box-shadow: 0 0 10px rgba(0,0,0,0.5);">
        <h1>Getting started with MyTrello</h1>
        <h3>Welcome to MyTrello! This guide will walk you through everything you need to know about using MyTrello, from setting
            up your first project to equipping your team with all of the tools they need to get the job done. Each chapter
            includes easy to follow steps, tips, and templates that will turn you into a MyTrello champion in no time.</h3>
    </div>
</div>
<div>
    <div class="fw-bolder fs-5" style="margin-top: 350px; text-align: right; margin-right: 10px;
    color: yellow; text-shadow: 1px 1px 2px black, 0 0 1em red;">
        <span class="fst-italic">Matios Mykola</span> © ITStep Academy
    </div>
</div>

</body>
</html>
