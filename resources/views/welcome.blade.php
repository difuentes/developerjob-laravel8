<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
@extends('layouts.app')

@section('content')
    <div class="grid grid-flow-col auto-cols-max">
        <div class="grid-cols-10 text-center">
            <h1 class="text-teal-800 text-bold">DiFuentes</h1>
        </div>
        
    </div>
    
@endsection
</body>
</html>
