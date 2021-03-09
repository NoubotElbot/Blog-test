@extends('layouts.master')

@section('title', 'Inicio')

@section('content')
    <div class="row pt-4">
        <div class="col-12">
            <article class="blog-post">
                <h2>{{ $publication->title }}</h2>
                <p class="text-justify">{{ $publication->content }}</p>
            </article>
        </div>

    </div>
@endsection
