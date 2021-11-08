@extends('layout.site')

@section('titulo','Denuncias')

@section('conteudo')

    <div class="container">
        <h3 class="center">Entrar no sistema</h3>
        <div class="row">
            <form action="{{route('site.login.entrar')}}" method="post">
                {{csrf_field()}}

                <div class="input-field">
                    <input type="text" name="email" required="required">
                    <label>E-mail</label>
                </div>

                <div class="input-field">
                    <input type="password" name="senha" required="required">
                    <label>Senha</label>
                </div>

                <button class="btn #26a69a teal lighten-1">Entrar</button>
                <button class="btn #00695c teal darken-3"><a href="{{route('site.cadastro')}}" style="color: white;">Cadastrar</button>
            </form>
        </div>  
    </div>
    <br>
    <br>
    <br>
    <br>
@endsection