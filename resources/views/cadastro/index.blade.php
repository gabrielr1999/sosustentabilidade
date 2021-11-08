@extends('layout.site')

@section('titulo','Denuncias')

@section('conteudo')

    <div class="container">
        <h3 class="center">Cadastro</h3>
        <div class="row">
            <form action="{{route('site.cadastro.salvar')}}" method="post">
                {{csrf_field()}}

                <div class="input-field">
                    <input type="text" name="nome" required="required">
                    <label>Nome</label>
                </div>

                <div class="input-field">
                    <input type="text" name="email" required="required">
                    <label>E-mail</label>
                </div>

                <div class="input-field">
                    <input type="password" name="senha" required="required">
                    <label>Senha</label>
                </div>

                <button class="btn #26a69a teal lighten-1">Salvar</button>
            </form>
        </div>  
    </div>
@endsection