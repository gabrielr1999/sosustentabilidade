@extends('layout.site')

@section('titulo','Denuncias')

@section('conteudo')

    <div class="container">
        <h3 class="center">Entrar no sistema</h3>
        <div class="row">
            <form action="{{route('site.login.entrar')}}" method="post">
                {{csrf_field()}}

                <div class="input-field">
                    <input type="text" name="email">
                    <label>E-mail</label>
                </div>

                <div class="input-field">
                    <input type="password" name="senha">
                    <label>Senha</label>
                </div>

                <button class="btn deep-orange">Entrar</button>
            </form>
        </div>  
    </div>
@endsection