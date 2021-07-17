@extends('app')

@section('titulo', 'Editar o Funcionário')

@section('conteudo')
    <h1>Editar o Funcionário</h1>

    <form action="{{ route('employees.update', $employee) }}" method="post">
        @method('PUT')
        @include('employees._form')
    </form>
@endsection