<div>
    <div class="mb-3">
        <label class="form-label">Nome</label>
        <input class="form-control @error('nome') is-invalid @enderror" type="text" name="nome" id="nome" value="{{$registro->nome ?? old('nome')}}">
        @error('nome')
        <span class = "invalid-feedback">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Apelido</label>
        <input class="form-control @error('nome') is-invalid @enderror" type="text" name="apelido" id="apelido" value="{{$registro->apelido ?? old('apelido')}}">
        @error('apelido')
        <span class="invalid-feedback">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Cidade</label>
        <input class="form-control @error('nome') is-invalid @enderror" type="text" name="cidade" id="cidade" value="{{$registro->cidade ?? old('cidade')}}">
        @error('cidade')
        <span class="invalid-feedback">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Bairro</label>
        <input class="form-control @error('nome') is-invalid @enderror" type="text" name="bairro" id="bairro" value="{{$registro->bairro ?? old('bairro')}}">
        @error('bairro')
        <span class="invalid-feedback">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Cep</label>
        <input class="form-control @error('nome') is-invalid @enderror" type="text" name="cep" id="cep" value="{{$registro->cep ?? old ('cep')}}">
        @error('cep')
        <span class="invalid-feedback">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">E-mail</label>
        <input class="form-control @error('nome') is-invalid @enderror" type="text" name="email" id="email" value="{{$registro->email ?? old('email')}}">
        @error('email')
        <span class="invalid-feedback">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Telefone</label>
        <input class="form-control @error('nome') is-invalid @enderror" type="text" name="telefone" id="telefone" value="{{$registro->telefone ?? old('telefone')}}">
        @error('telefone')
        <span class="invalid-feedback">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

    </div>
</div>

<!--
<pre>
    {{print_r($errors)}}
</pre> -->