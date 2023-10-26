@extends('layouts.template')

@section('title', 'Books | Libros')

@section('contenido')

    <main>
        @include('books.header')
        <div class="container py-4">
            <h2>{{trans('contacts.Contact')}}</h2>

            <form action="{{ url('contacts') }}" method="post" novalidate="novalidate">

                @csrf

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">{{trans('contacts.Email')}}</label>
                    <input type="email" name="email"  value="{{ old('email') }}"  class="form-control {{($errors->first('email') ? 'is-invalid' : '')}}"  id="email">
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">{{trans('contacts.Message')}}</label>
                    <textarea class="form-control {{($errors->first('description') ? 'is-invalid' : '')}}" name="description" value="{{ old('description') }}" id="description" rows="3"></textarea>
                    @if ($errors->has('description'))
                        <span class="text-danger">{{ $errors->first('description') }}</span>
                    @endif
                </div>

                <a href="{{ url('books') }}" class="btn btn-secondary">{{trans('contacts.Back')}}</a>

                <button type="submit" class="btn btn-success">{{trans('contacts.Send')}}</button>

            </form>

        </div>

