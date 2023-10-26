@extends('layouts/template')

@section('title', 'Registrar Libros | Libros')

@section('contenido')
<main>
    @include('books.header')
    <div class="container py-4">
        <h2>{{trans('books.Register')}}</h2>

        @if($errors->any())

        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        @endif

        <form action="{{ url('books') }}" method="post" novalidate="novalidate">

            @csrf

            <div class="mb-3 row">
                <label for="title" class="col-sm-2 col-fomr-label">{{trans('books.Title')}}</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="author" class="col-sm-2 col-fomr-label">{{trans('books.Author')}}</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="author" id="author" value="{{ old('author') }}" required>
                </div>
            </div>

            <a href="{{ url('books') }}" class="btn btn-secondary">{{trans('books.Back')}}</a>

            <button type="submit" class="btn btn-success">{{trans('books.Send')}}</button>

        </form>

    </div>
</main>
