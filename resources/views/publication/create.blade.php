@extends('layouts.master')

@section('title', 'Registrar publicación')

@section('content')
    <div class="row pt-4">
        <div class="col">
            <div class="card">  
                <h6 class="card-header py-3">Registrar nueva publicación</h6>
                <div class="card-body">
                    <form class="px-3" action="{{ route('publications.store') }}" method="post" autocomplete="off">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Titulo</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}">
                            @error('title')
                                <small class="text-danger">*{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="content" class="form-label">Contenido</label>
                            <textarea class="form-control" name="content" id="content" rows="10">{{old('content')}}</textarea>
                            @error('content')
                                <small class="text-danger">*{{$message}}</small>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
