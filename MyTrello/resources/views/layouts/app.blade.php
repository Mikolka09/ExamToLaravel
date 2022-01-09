<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">


</head>
<body style="background: url(img/wallpapers-nature-029.jpg) no-repeat center center fixed;
background-size: cover;">
<div class="min-h-screen">
@include('layouts.navigation')
@auth()
    <!-- Page Heading -->
        @if(($tables=(collect(\App\Models\MyTable::all()->where('user_id', '==', auth()->id()))))->count()>1)

            <div class="dropdown">
                <button class="btn btn-info dropdown-toggle fw-bold" style="margin: 6px;" type="button"
                        id="dropdownTables"
                        data-bs-toggle="dropdown" aria-expanded="false">
                    Tables List
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownTables">
                    @foreach($tables as $table)
                        <li><a class="dropdown-item" href='<x-header-table title="{{$table->title}}"/>'>{{$table->title}}</a></li>
                    @endforeach
                </ul>
            </div>
        @else
            <x-header-table title="{{$tables->first()->title}}"/>

        @endif
        <hr style="color: crimson; height: 2px; margin-top: 0; opacity: 1;"/>
        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    @endauth
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
<!-- Scripts -->
{{-- <script src="{{ asset('js/app.js') }}" defer></script>--}}
</body>
</html>
