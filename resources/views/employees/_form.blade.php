@csrf

<div class="row mb-2">
    <div class="col-md-4">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input class="form-control" type="text" name="nome" id="nome" placeholder="Digite o nome">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="cpf">CPF</label>
            <input class="form-control" type="text" name="cpf" id="cpf" placeholder="Digite o cpf">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="data_contratacao">Data Contratação</label>
            <input class="form-control" type="text" name="data_contratacao" id="data_contratacao" placeholder="Digite a data de contratação">
        </div>
    </div>
</div>

<button class="btn btn-success" type="submit">Salvar</button>