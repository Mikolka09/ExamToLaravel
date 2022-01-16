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
<body style="background: url({{$url}}) no-repeat center center fixed;
    background-size: cover;">
<div class="min-h-screen">
@include('layouts.navigation')
@auth()
    <!-- Page Heading -->

        {{--{{dd($table)}}--}}
        @if(!$table->isEmpty())
            <x-header-table title="{{$table->first()->title}}"/>
        @elseif($tables->count()>1)
            <x-tables-list/>
        @else
            <x-header-table title="{{$tables->first()->title}}"/>
        @endif

        <hr style="color: crimson; height: 2px; margin-top: 0; opacity: 1;"/>
        <!-- Page Content -->
        <main>
            <div class="container-fluid">
                <div class="row">
                    @if($columns->isEmpty())
                        <x-table-column/>
                    @endif
                    @foreach($columns as $column)
                        <x-table-column title="{{$column->title}} id={{$column->id}}"/>
                    @endforeach
                    <div class="col-2">
                        <button type="submit" style="box-shadow: 0 0 10px rgba(0,0,0,0.5);" class="btn btn-info fw-bold btn-sm">Create Column</button>
                    </div>
                </div>
            </div>
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
