@extends('layouts.app')

@section('content')
    <!-- Signup Form -->
    <form action="signup.php" method="post" class="" id="frm-signup">
        <div class="avatar img-circle center-block"
             style="background-size: cover; background-image: url(../images/{{ Auth::user()->matricula }}/avatar.jpg)">
            <input type="file" name="avatar" id="avatar" class="hidden">
            <label for="avatar" class="glyphicon glyphicon-camera"></label>
            <i class="glyphicon glyphicon-remove"></i>
        </div>
        <fieldset class="container-fluid">
            <div class="col-md-6">
                <h1>Dados pessoais</h1>
                <div class="form-group label-floating">
                    <label for="nome" class="control-label">Nome</label>
                    <input type="text"
                           class="form-control"
                           id="nome"
                           name="nome"
                           value="{{ Auth::user()->dado->nome }}">
                </div>
                <div class="form-group label-floating">
                    <label for="apelido" class="control-label">Apelido</label>
                    <input type="text"
                           class="form-control"
                           id="apelido"
                           name="apelido"
                           value="{{ Auth::user()->dado->apelido }}">
                </div>
                <div class="form-group">
                    <label class="control-label">Sexo</label>
                    <div class="radio">
                        <label>
                            <input type="radio" name="sample1" value="option1" checked="">
                            Masculino
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="sample1" value="option1">
                            Feminino
                        </label>
                    </div>
                </div>
                <div class="form-group label-floating">
                    <label for="nome_pai" class="control-label">Nome do pai</label>
                    <input type="text"
                           class="form-control"
                           id="nome_pai"
                           name="nome_pai">
                </div>
                <div class="form-group label-floating">
                    <label for="nome_mae" class="control-label">Nome da mãe</label>
                    <input type="text"
                           class="form-control"
                           id="nome_mae"
                           name="nome_mae">
                </div>
                <div class="form-group label-floating">
                    <label for="data_de_nascimento" class="control-label">Data de nascimento</label>
                    <input type="text"
                           class="form-control"
                           id="data_de_nascimento"
                           name="data_de_nascimento"
                           value="{{ Auth::user()->dado->data_de_nascimento }}">
                </div>
                <div class="form-group">
                    <label for="cidade_nascimento">Cidade de nascimento</label>
                    <select name="cidade_nascimento" class="form-control" id="cidade_nascimento">
                        <option value="Bauru">Bauru</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="uf_nascimento">U.F. de nascimento</label>
                    <select name="uf_nascimento" class="form-control" id="uf_nascimento">
                        <option value="SP">SP</option>
                    </select>
                </div>
                <div class="form-group label-floating">
                    <label for="rg" class="control-label">R.G.</label>
                    <input type="text"
                           class="form-control"
                           id="rg"
                           name="rg"
                           maxlength="12">
                </div>
                <div class="form-group label-floating">
                    <label for="emissao_do_rg" class="control-label">Emissão do R.G.</label>
                    <input type="text"
                           class="form-control"
                           id="emissao_do_rg"
                           name="emissao_do_rg">
                </div>
            </div>
            <div class="col-md-6">
                <h1>Dados de endereço</h1>
                <div class="form-group label-floating">
                    <label for="logradouro" class="control-label">Logradouro</label>
                    <input type="text"
                           class="form-control"
                           id="logradouro"
                           name="logradouro">
                </div>
                <div class="form-group label-floating">
                    <label for="numero" class="control-label">Número</label>
                    <input type="text"
                           class="form-control"
                           id="numero"
                           name="numero">
                </div>
                <div class="form-group label-floating">
                    <label for="complemento" class="control-label">Complemento</label>
                    <input type="text"
                           class="form-control"
                           id="complemento"
                           name="complemento">
                </div>
                <div class="form-group label-floating">
                    <label for="bairro" class="control-label">Bairro</label>
                    <input type="text"
                           class="form-control"
                           id="bairro"
                           name="bairro">
                </div>
                <div class="form-group">
                    <label for="cidade">Cidade</label>
                    <select name="cidade" class="form-control" id="cidade">
                        <option value="Bauru">Bauru</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="uf">U.F.</label>
                    <select name="uf" class="form-control" id="uf">
                        <option value="SP">SP</option>
                    </select>
                </div>
            </div>
        </fieldset>
    </form>
    <!-- End Signup Form -->
@endsection
