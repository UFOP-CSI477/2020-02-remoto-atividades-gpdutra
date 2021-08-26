<div class="card-body">
    <div class="form-group">
        <label for="pessoa_id">Pessoa :</label>
        <select class="form-control" id="pessoa_id" name="pessoa_id">
            <?php $peoples = \App\Models\Pessoas::all() ?>
            @foreach($peoples as $people)
            <option  value="{{ $people['id'] }}" <?=(old('nome') == $people['id']) ?'selected':''?> >{{$people->nome}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="unidade_id">Unidade :</label>
        <select class="form-control" id="unidade_id" name="unidade_id">
            <?php $unities = \App\Models\Unidade::all() ?>
            @foreach($unities as $unity)
            <option  value="{{ $unity['id'] }}" <?=(old('nome') == $unity['id']) ?'selected':''?> >{{$unity->nome}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="vacina_id">Sala :</label>
        <select class="form-control" id="vacina_id" name="vacina_id">
            <?php $vaccines = \App\Models\Vacina::all() ?>
            @foreach($vaccines as $vaccine)
            <option  value="{{ $vaccine['id'] }}" <?=(old('nome') == $unity['id']) ?'selected':''?> >{{$vaccine->nome}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="dose">Dose</label>
        <input type="num" class="form-control" id="dose" name="dose" placeholder="Dose">
    </div>
    <div class="form-group">
        <label for="data">Data de Vacinação</label>
        <input type="date" class="form-control" id="data" name="data" placeholder="Data de Vacinação">
    </div>
</div>
<!-- /.card-body -->