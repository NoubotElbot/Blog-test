@extends('layouts.master')

@section('title', 'Inicio')

@section('content')
    <div class="row pt-4">
        <div class="col-12 text-end mb-4">
            <div class="btn-group">
                <a href="{{ route('publications.create') }}" class="btn btn-primary">Nueva Publicación</a>
            </div>
        </div>

        @if (!empty($publications))
            @foreach ($publications as $item)
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->title }}</h5>
                            <p class="card-text">{{ $item->content }}</p>
                            <a href="{{ route('publications.show', $item->id)}}" class="btn btn-link">Continuar leyendo</a>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="col-12">
                <div class="mx-auto text-center py-5">
                    <h4>No hay publicaiones disponibles</h4>
                </div>
            </div>
        @endif

    </div>

@endsection
