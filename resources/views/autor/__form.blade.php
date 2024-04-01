<div>
    <div class="mb-3">
        <label class="form-label">Nome</label>
        <input class="form-control" type="text" name="nome" id="nome" value="{{isset($registro->nome) ? $registro->nome : ''}}">
        @error('nome')
        <span>
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Apelido</label>
        <input class="form-control" type="text" name="apelido" id="apelido" value="{{isset($registro->apelido) ? $registro->apelido : ''}}">
        @error('apelido')
        <span>
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Cidade</label>
        <input class="form-control" type="text" name="cidade" id="cidade" value="{{isset($registro->cidade) ? $registro->cidade : ''}}">
        @error('cidade')
        <span>
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Bairro</label>
        <input class="form-control" type="text" name="bairro" id="bairro" value="{{isset($registro->bairro) ? $registro->bairro : ''}}">
        @error('bairro')
        <span>
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Cep</label>
        <input class="form-control" type="text" name="cep" id="cep" value="{{isset($registro->cep) ? $registro->cep : ''}}">
        @error('cep')
        <span>
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">E-mail</label>
        <input class="form-control" type="text" name="email" id="email" value="{{isset($registro->email) ? $registro->email : ''}}">
        @error('email')
        <span>
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Telefone</label>
        <input class="form-control" type="text" name="telefone" id="telefone" value="{{isset($registro->telefone) ? $registro->telefone : ''}}">
        @error('telefone')
        <span>
            <strong>{{ $message }}</strong>
        </span>
        @enderror

    </div>
</div>

<!--
<pre>
    {{print_r($errors)}}
</pre> -->