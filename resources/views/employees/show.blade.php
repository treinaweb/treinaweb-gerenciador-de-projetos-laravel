@extends('app')

@section('titulo', 'Detalhes do Funcionário')

@section('conteudo')
    <div class="card">
        <h5 class="card-header">Detalhes do Funcionário {{ $employee->nome }}</h5>
        <div class="card-body">
            <p><strong>ID: </strong> {{ $employee->id }}</p>
            <p><strong>nome: </strong> {{ $employee->nome }}</p>
            <p><strong>CPF: </strong> {{ $employee->cpf }}</p>
            <p><strong>Data de Contratação: </strong> {{ $employee->data_contratacao }}</p>
            <p><strong>Situação: </strong> {{ $employee->data_demissao === null ? 'Ativo' : 'Demitido' }}</p>
            <br>
            <a class="btn btn-success" href="{{ route('employees.index') }}">Voltar para lista</a>
        </div>
    </div>   
@endsection    
