@extends('layouts.static')

@section('titulo')
    Cursos
@endsection

@section('logo')
    
<img src="{{ asset('../resources/media/logo.jfif') }}" id="logo" alt="Bootstrap" width="200px">

@endsection

@section('contenido')

<table class="table table-hover">
    <thead>
      <tr class="table-active">
        <th scope="col">Id</th>
            <th scope="col">Sigles</th>
            <th scope="col">Nom</th>
            <th scope="col">Sigles Cicle</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($cursos as $item)
        <tr>
            <th scope="row">{{ $item->getId() }}</th>
            <td>{{ $item->getSigles() }}</td>
            <td>{{ $item->getNom() }}</td>
            <td>{{ $item->getSiglesCicle() }}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
@endsection

