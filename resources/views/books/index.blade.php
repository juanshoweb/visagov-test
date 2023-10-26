@extends('layouts/template')

@section('title', 'Books | Libros')

@section('contenido')

<main>
    @include('books.header')

    <div class="container py-4">
        <h2>{{trans('books.Books')}}</h2>

        <a href="{{ url('books/create') }}" class="btn btn-primary btn-sm">{{trans('books.Create')}}</a>

        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col"> {{trans('books.Title')}}</th>
                <th scope="col">{{trans('books.Author')}}</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>

                @foreach($books as $book)
                    <tr>
                        <td>{{ $book->id }}</td>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->author }}</td>
                        <td>
                            <a href="{{ url('books/'.$book->id.'/edit') }}" class="btn btn-primary btn-sm">
                                {{trans('books.Edit')}}
                            </a>
                        </td>
                        <td>
                            <form action="{{ url('books/'.$book->id) }}" method="post">
                                @method("DELETE")
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm">
                                    {{trans('books.Delete')}}
                                </button>
                            </form>

                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>
</main>


