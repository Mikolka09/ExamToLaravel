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

        <!-- Scripts -->
        {{--<script src="{{ asset('js/app.js') }}" defer></script>--}}

        <style>
            body {
                overflow-x:hidden;
                background: url({{asset($url)}}) no-repeat center center fixed;
                background-size: cover;
            }
        </style>
    </head>
    <body>
    <div>
        @include('layouts.navigation', ['avatar'=>$avatar])
        @auth()
            @if(!$table->isEmpty() && $tables->count()==1)
                <x-table.header-table title="{{$table->first()->title}}" id="{{$table->first()->id}}"/>
            @elseif(!$table->isEmpty() && $tables->count()>1)
                <x-table.header-table title="{{$table->first()->title}}" id="{{$table->first()->id}}"/>
            @elseif($tables->count()>1 && $table->isEmpty())
                <x-tables-list/>
            @elseif($tables->isEmpty())
                <x-table.header-table title="Please create a table to get started!" id="{{$id}}"/>
            @else
                <x-table.header-table title="{{$tables->first()->title}}" id="{{$table->first()->id}}"/>
            @endif

            <hr style="color: crimson; height: 2px; margin-top: 0; opacity: 1;"/>
            @if(!$table->isEmpty() || $tables->count()==1)
                <x-main-table id="{{$table->first()->id}}"/>
            @endif
        @endauth
    </div>
    <x-footer/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
    </body>
</html>
