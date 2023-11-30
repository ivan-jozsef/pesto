@extends('layouts.main')

@section('title', 'Pesto Fajták')

@section('content')
<div class="row">
    @foreach ($pestos as $pesto)
    <div class="col-12 col-md-6 col-lg-4">
        <div class="card">
            @foreach ($photos as $photo)
                @if($photo->pesto_id == $pesto->id)
                <img src="{{ asset('img/' . $photo->filename) }}" class="card-img-top" alt="{{ $pesto->name }}">
                @endif
            @endforeach
            <div class="card-body">
                <h5 class="card-title">{{ $pesto->name }}</h5>
                <a href="{{ route('pesto.view', ['id' => $pesto->id]) }}" class="btn btn-success">Hozzávalók</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection