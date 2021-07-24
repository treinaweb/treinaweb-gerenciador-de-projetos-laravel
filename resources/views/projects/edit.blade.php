@extends('app')

@section('titulo', 'Editar o Projeto')

@section('conteudo')
    <h1>Editar o Projeto</h1>

    <form action="{{ route('projects.update', $project) }}" method="post">
        @method('PUT')
        @include('projects._form')
    </form>
@endsection