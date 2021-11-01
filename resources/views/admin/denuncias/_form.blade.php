<div class="input-field">
    <input type="text" name="titulo" value="{{isset($registro->titulo) ? $registro->titulo : ''}}">
    <label>Título</label>
</div>

<div class="input-field">
    <input type="text" name="descricao" value="{{isset($registro->descricao) ? $registro->descricao : ''}}">
    <label>Descrição</label>
</div>

<div class="input-field">
    <input type="text" name="estado" value="{{isset($registro->estado) ? $registro->estado : ''}}">
    <label>Estado</label>
</div>

<div class="input-field">
    <input type="text" name="municipio" value="{{isset($registro->municipio) ? $registro->municipio : ''}}">
    <label>Município</label>
</div>

<div class="input-field">
    <input type="text" name="bairro" value="{{isset($registro->bairro) ? $registro->bairro : ''}}">
    <label>Bairro</label>
</div>

<div class="input-field">
    <input type="text" name="pntReferencia" value="{{isset($registro->pntReferencia) ? $registro->pntReferencia : ''}}">
    <label>Ponto de referência</label>
</div>

<div class="input-field">
    <input type="text" name="problema" value="{{isset($registro->problema) ? $registro->problema : ''}}">
    <label>Problema</label>
</div>

<div class="file-field input-field">
    <div class="btn blue">    
        <span>Imagem</span>    
        <input type="file"name="imagem">
    </div>
    <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
    </div>
</div>
@if(isset($registro->imagem))
<div class="input-field">
    <img width="150" src="{{asset($registro->imagem)}}">
</div>
@endif

<div class="input-field">
    <p>
        <label for="test5">
            <input type="checkbox" id="test5" {{isset($registro->resolvido) && $registro->resolvido == 'Sim' ? 'checked' : ''}} value="true">
            <span>Solucionado?</span>
        </label>
    </p>
    <br><br>
</div>

<!-- <div class="input-field">
    <input type="text" name="resolvido" value="{{isset($registro->resolvido) ? $registro->resolvido == 'nao' : ''}}">
    <label>Solucionado?</label>
</div> -->