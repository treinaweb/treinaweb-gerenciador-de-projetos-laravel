@extends('app')

@section('titulo', 'Detalhes do Funcionário')

@section('conteudo')
    <div class="card mt-3">
        <h5 class="card-header">Detalhes do Funcionário {{ $employee->nome }}</h5>
        <div class="card-body">
            <p><strong>ID: </strong> {{ $employee->id }}</p>
            <p><strong>nome: </strong> {{ $employee->nome }}</p>
            <p><strong>CPF: </strong> {{ formata_cpf($employee->cpf) }}</p>
            <p><strong>Data de Contratação: </strong> {{ date_to_br($employee->data_contratacao) }}</p>
            <p><strong>Situação: </strong> {{ situacao_funcionario($employee->data_demissao) }}</p>
        </div>
    </div>  
    <div class="card mt-3">
        <h5 class="card-header">Endereço do Funcionário</h5>
        <div class="card-body">
            <p><strong>Logradouro: </strong> {{ $employee->address->logradouro }}</p>
            <p><strong>Número: </strong> {{ $employee->address->numero }}</p>
            <p><strong>Complemento: </strong> {{ $employee->address->complemento }}</p>
            <p><strong>Bairro: </strong> {{ $employee->address->bairro }}</p>
            <p><strong>Cidade: </strong> {{ $employee->address->cidade }}</p>
            <p><strong>Estado: </strong> {{ $employee->address->estado }}</p>
            <p><strong>CEP: </strong> {{ formata_cep($employee->address->cep) }}</p>
            <br>
            <a class="btn btn-success" href="{{ route('employees.index') }}">Voltar para lista</a>
        </div>
    </div>  
@endsection    
