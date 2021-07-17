@extends('app')

@section('titulo', 'Novo Funcionário')

@section('conteudo')
    <h1>Novo Funcionário</h1>

    <form action="{{ route('employees.store') }}" method="post">
        @include('employees._form')
    </form>
@endsection