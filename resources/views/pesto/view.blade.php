@extends('layouts.main')

@section('title', $pesto->name . ' hozzávalók')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Név</th>
                <th scope="col">Mennyiség</th>
                <th scope="col">Egység</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ingredients as $ingredient)
                <tr>
                    <td>{{ $ingredient->name }}</td>
                    <td>{{ $ingredient->quantity ?: '-' }}</td>
                    <td>{{ $ingredient->unit }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
