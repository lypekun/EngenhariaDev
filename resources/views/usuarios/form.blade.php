<div class="form-group {{ $errors->has('nome') ? 'has-error' : ''}}">
    <label for="nome" class="col-md-4 control-label">{{ 'Nome' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="nome" type="text" id="nome" value="{{ $usuario->nome or ''}}" >
        {!! $errors->first('nome', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('cpf') ? 'has-error' : ''}}">
    <label for="nome" class="col-md-4 control-label">{{ 'CPF' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="cpf" type="text" id="cpf" value="{{ $usuario->cpf or ''}}" >
        {!! $errors->first('cpf', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('endereco') ? 'has-error' : ''}}">
    <label for="endereco" class="col-md-4 control-label">{{ 'endereco' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="endereco" type="text" id="endereco" value="{{ $usuario->endereco or ''}}" >
        {!! $errors->first('endereco', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('telefone') ? 'has-error' : ''}}">
    <label for="telefone" class="col-md-4 control-label">{{ 'telefone' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="telefone" type="text" id="telefone" value="{{ $usuario->telefone or ''}}" >
        {!! $errors->first('telefone', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="col-md-4 control-label">{{ 'email' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="email" type="text" id="email" value="{{ $usuario->email or ''}}" >
        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('estado_civil') ? 'has-error' : ''}}">
    <label for="estado_civil" class="col-md-4 control-label">{{ 'estado_civil' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="estado_civil" type="text" id="estado_civil" value="{{ $usuario->estado_civil or ''}}" >
        {!! $errors->first('estado_civil', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('data_nascimento') ? 'has-error' : ''}}">
    <label for="data_nascimento" class="col-md-4 control-label">{{ 'data_nascimento' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="data_nascimento" type="text" id="data_nascimento" value="{{ $usuario->data_nascimento or ''}}" >
        {!! $errors->first('data_nascimento', '<p class="help-block">:message</p>') !!}
    </div>
</div>



<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
