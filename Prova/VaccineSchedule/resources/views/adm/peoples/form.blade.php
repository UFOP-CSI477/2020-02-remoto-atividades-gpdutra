<div class="card-body">
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control{{ $errors->has('nome') ? 'is-invalid' : '' }}" value="{{old('nome') ?? $pessoas->nome}}" id="nome" name="nome" placeholder="Nome">
    </div>
    <div class="form-group">
        <label for="bairro">Bairro:</label>
        <input type="text" class="form-control{{ $errors->has('bairro') ? 'is-invalid' : '' }}" value="{{old('bairro') ?? $pessoas->bairro}}" id="bairro" name="bairro" placeholder="Bairro">
    </div>
    <div class="form-group">
        <label for="cidade">Cidade</label>
        <input type="text" class="form-control{{ $errors->has('cidade') ? 'is-invalid' : '' }}" value="{{old('cidade') ?? $pessoas->cidade}}" id="cidade" name="cidade" placeholder="Cidade">
    </div>
    <div class="form-group">
        <label for="data_nascimento">Data de Nascimento</label>
        <input type="date" class="form-control{{ $errors->has('data_nascimento') ? 'is-invalid' : '' }}" value="{{old('data_nascimento') ?? $pessoas->data_nascimento}}" id="data_nascimento" name="data_nascimento" placeholder="Data de Nascimento">
    </div>
</div>
<!-- /.card-body -->