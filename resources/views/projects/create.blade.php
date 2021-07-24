@extends('app')

@section('titulo', 'Novo Projeto')

@section('conteudo')
    <h1>Novo Projeto</h1>

    <form action="{{ route('projects.store') }}" method="post">
        @include('projects._form')
    </form>
@endsection