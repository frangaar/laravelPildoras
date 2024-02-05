@extends('layouts.static')

@section('logo')
    
<img src="{{ asset('../resources/media/logo.jfif') }}" id="logo" alt="Bootstrap" width="200px">

@endsection

@section('contenido')
    
    <div class="container">
        <img src="{{ asset('../resources/media/logo.jfif') }}" id="logo" alt="Bootstrap" height="200px">
    </div>

@endsection