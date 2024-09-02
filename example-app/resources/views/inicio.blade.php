@extends('body.cuerpo')

@section('title', 'Inicio')

@section('content')

@include('partials.navbar')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<script src="{{ asset('js/dashboard.js') }}"></script>
@endsection
