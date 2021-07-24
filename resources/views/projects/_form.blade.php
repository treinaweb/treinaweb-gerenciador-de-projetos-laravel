@csrf

<div class="row mb-2">
    <div class="col-md-4">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input required value="{{ old('nome', $project->nome ?? '') }}" class="form-control" type="text" name="nome" id="nome" maxlength="100" placeholder="Digite o nome">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="orcamento">Orçamento</label>
            <input required value="{{ old('orcamento', $project->orcamento ?? '') }}" class="form-control" type="text" name="orcamento" id="orcamento" placeholder="Digite o Orçamento">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="cliente_id">Cliente</label>
            <select class="form-control" id="cliente_id" required="required" name="client_id">
                <option>Selecione o cliente</option>
                @foreach ($clientes as $cliente)
                    <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>

<div class="row mb-2">
    <div class="col-md-4">
        <div class="form-group">
            <label for="data_inicio">Data Início</label>
            <input required value="{{ old('data_inicio', $project->data_inicio ?? '') }}"  class="form-control" type="text" name="data_inicio" id="data_inicio" placeholder="Digite a data de início">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="data_final">Data Final</label>
            <input required value="{{ old('data_final', $project->data_final ?? '') }}" class="form-control" type="text" name="data_final" id="data_final"  placeholder="Digite a data de Final">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="funcionarios">Funcionários Alocados</label>
            <select class="form-control" name="funcionarios[]" multiple required="required">
                @foreach ($funcionarios as $funcionario)
                    <option value="{{ $funcionario->id }}">{{ $funcionario->nome }}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>

<button class="btn btn-success" type="submit">Salvar</button>