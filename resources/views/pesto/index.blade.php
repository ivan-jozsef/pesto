

@extends('layouts.main')

@section('title', 'Pesto Fajták')

@section('content')
    <div class="row">
        @foreach ($pestos as $pesto)
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card">
                    <img src="{{ asset('public/img/$pesto->filename) }}" class="card-img-top" alt="{{ $pesto->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $pesto->name }}</h5>
                        <a href="{{ url('/pesto/' . $pesto->id) }}" class="btn btn-success">Hozzávalók</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection