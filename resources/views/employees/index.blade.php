@extends('app')

@section('titulo', 'Lista de Funcionários')

@section('conteudo')
    <h1>Lista de Funcionários</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Data de Contratação</th>
                <th scope="col">Situação</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($employees as $employee)
                <tr>
                    <th scope="row">{{ $employee->id }}</th>
                    <td><a href="{{ route('employees.show', $employee) }}">{{ $employee->nome }}</a></td>
                    <td>{{ date_to_br($employee->data_contratacao) }}</td>
                    <td>{{ situacao_funcionario($employee->data_demissao) }}</td>

                    <td>
                        <a class="btn btn-primary" href="{{ route('employees.edit', $employee) }}">Atualizar</a>
                        <form action="{{ route('employees.destroy', $employee) }}" method="POST" style="display: inline;">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger" type="submit" onclick="return confirm('Tem certeza que deseja apagar?')">Apagar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td></td>
                    <td>Nenhum Funcionário Cadastrado</td>
                    <td></td>
                    <td></td>
                </tr>     
            @endforelse
        </tbody>
    </table>

    {{ $employees->links() }}

    <a class="btn btn-success" href="{{ route('employees.create') }}">Novo Funcionário</a>
@endsection    