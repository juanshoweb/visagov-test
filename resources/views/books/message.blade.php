@extends('layouts/template')

@section('title', 'Registrar Libros | Libros')

@section('contenido')
<main>
    <div class="container py-4">
        <h2>{{ $msg }}</h2>

        <a href="{{ url('books') }}" class="btn btn-secondary">Regresar</a>
    </div>
</main>
