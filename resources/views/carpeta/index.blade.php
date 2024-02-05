@extends('layouts.static')

@section('contenido')
    

    <table>
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Sigles</th>
            <th scope="col">Nom</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($cicles as $item)
            <tr>
                <th scope="row">{{ $item->getId() }}</th>
                <td>{{ $item->getSigles() }}</td>
                <td>{{ $item->getNom() }}</td>
            </tr>
            @endforeach
    </table>

@endsection

