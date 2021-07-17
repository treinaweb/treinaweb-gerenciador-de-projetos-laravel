@csrf

<div class="row mb-2">
    <div class="col-md-4">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input value="{{ $employee->nome ?? '' }}" class="form-control" type="text" name="nome" id="nome" placeholder="Digite o nome">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="cpf">CPF</label>
            <input value="{{ $employee->cpf ?? '' }}" class="form-control" type="text" name="cpf" id="cpf" placeholder="Digite o cpf">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="data_contratacao">Data Contratação</label>
            <input value="{{ $employee->data_contratacao ?? '' }}" class="form-control" type="text" name="data_contratacao" id="data_contratacao" placeholder="Digite a data de contratação">
        </div>
    </div>
</div>

<div class="row mb-2">
    <div class="col-md-4">
        <div class="form-group">
            <label for="logradouro">Logradouro</label>
            <input  class="form-control" type="text" name="logradouro" id="logradouro" placeholder="Digite o logradouro">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="numero">Número</label>
            <input class="form-control" type="text" name="numero" id="numero" placeholder="Digite o número">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="complemento">Complemento</label>
            <input class="form-control" type="text" name="complemento" id="complemento" placeholder="Digite o complemento">
        </div>
    </div>
</div>

<div class="row mb-2">
    <div class="col-md-3">
        <div class="form-group">
            <label for="bairro">Bairro</label>
            <input  class="form-control" type="text" name="bairro" id="bairro" placeholder="Digite o bairro">
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="cidade">Cidade</label>
            <input class="form-control" type="text" name="cidade" id="cidade" placeholder="Digite a cidade">
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="cep">CEP</label>
            <input class="form-control" type="text" name="cep" id="cep" placeholder="Digite o CEP">
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="estado">Estado</label>
            <input class="form-control" type="text" name="estado" id="estado" placeholder="Digite o estado">
        </div>
    </div>
</div>

<button class="btn btn-success" type="submit">Salvar</button>