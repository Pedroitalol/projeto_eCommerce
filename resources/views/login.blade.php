@extends("master")
@section("content")
<h2>Pagina de login.</h2>
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 offset-sm-4">
            <form action="login" method="POST">
                <div class="mb-3">
                    @csrf
                    <label for="exampleInputEmail1" class="form-label">Endereço de e-mail:</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Senha:</label>
                    <input type="password" name="senha" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Entrar</button>
            </form>
        </div>
    </div>
</div>
@endsection