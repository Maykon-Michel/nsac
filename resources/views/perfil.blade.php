@extends('layout.app')

@section('content')
    <!-- Signup Form -->
    <form action="signup.php" method="post" id="frm-signup" role="form">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="avatar img-circle center-block" style="background-image: url(../imgs/1557006/avatar.jpg)">
                    <input type="file" name="avatar" id="avatar" class="hidden">
                    <label for="avatar" class="glyphicon glyphicon-camera"></label>
                    <i class="glyphicon glyphicon-remove"></i>
                </div>
            </div>
        </div>
        <fieldset class="container-fluid">
            <div class="col-md-6">
                <h1>Dados pessoais</h1>
                <div class="form-group col-md-6">
                    <input type="text"
                           class="form-control"
                           id="nome"
                           name="nome"
                           placeholder="Nome*">
                    <label for="nome" class="control-label">Nome</label>
                </div>
                <div class="form-group col-md-6">
                    <input type="text"
                           class="form-control"
                           id="sobrenome"
                           name="sobrenome"
                           placeholder="Sobrenome*">
                    <label for="sobrenome" class="control-label">Sobrenome</label>
                </div>
                <div class="form-group col-md-12">
                    <select name="sexo" id="sexo" class="form-control">
                        <option value="sexo" label="Sexo*" selected hidden></option>
                        <option value="m" label="Masculino"></option>
                        <option value="f" label="Feminino" selected></option>
                    </select>
                    <label for="sexo" class="control-label">Sexo</label>
                </div>
                <div class="form-group col-md-12">
                    <input type="text"
                           class="form-control"
                           id="email"
                           name="email"
                           placeholder="Email*">
                    <label for="email" class="control-label">Email</label>
                </div>
                <div class="form-group col-md-6">
                    <input type="text"
                           class="form-control"
                           id="telefone"
                           name="telefone"
                           placeholder="Telefone*"
                           maxlength="14">
                    <label for="telefone" class="control-label">Telefone</label>
                </div>
                <div class="form-group col-md-6">
                    <input type="text"
                           class="form-control"
                           id="celular"
                           name="celular"
                           placeholder="Celular*"
                           maxlength="15">
                    <label for="celular" class="control-label">Celular</label>
                </div>
                <div class="form-group col-md-6">
                    <input type="text"
                           class="form-control"
                           id="nome_pai"
                           name="nome_pai"
                           placeholder="Nome do pai*">
                    <label for="nome_pai" class="control-label">Nome do pai</label>
                </div>
                <div class="form-group col-md-6">
                    <input type="text"
                           class="form-control"
                           id="nome_mae"
                           name="nome_mae"
                           placeholder="Nome da mãe">
                    <label for="nome_mae" class="control-label">Nome da mãe</label>
                </div>
                <div class="form-group col-md-12">
                    <input type="text"
                           class="form-control"
                           id="data_de_nascimento"
                           name="data_de_nascimento"
                           placeholder="Data de nascimento*">
                    <label for="data_de_nascimento" class="control-label">Data de nascimento</label>
                </div>
                <div class="form-group col-md-6">
                    <select name="cidade_nascimento" id="cidade_nascimento" class="form-control">
                        <option value="Bariri" label="Bariri"></option>
                        <option value="Bauru" label="Bauru"></option>
                    </select>
                    <label for="cidade_nascimento" class="control-label">Cidade de nascimento</label>
                </div>
                <div class="form-group col-md-6">
                    <select name="uf_nascimento" id="uf_nascimento" class="form-control">
                        <option value="SP" label="SP"></option>
                    </select>
                    <label for="uf_nascimento" class="control-label">U.F. de nascimento</label>
                </div>
                <div class="form-group col-md-6">
                    <input type="text"
                           class="form-control"
                           id="rg"
                           name="rg"
                           placeholder="R.G.*"
                           maxlength="12">
                    <label for="rg" class="control-label">R.G.</label>
                </div>
                <div class="form-group col-md-6">
                    <input type="text"
                           class="form-control"
                           id="emissao_do_rg"
                           name="emissao_do_rg"
                           placeholder="Emissão do R.G.*">
                    <label for="emissao_do_rg" class="control-label">Emissão do R.G.</label>
                </div>
            </div>
            <div class="col-md-6">
                <h1>Dados de endereço</h1>
                <div class="form-group col-md-6">
                    <input type="text"
                           class="form-control"
                           id="logardouro"
                           name="logradouro"
                           placeholder="Logradouro*">
                    <label for="logradouro" class="control-label">Logradouro</label>
                </div>
                <div class="form-group col-md-6">
                    <input type="text"
                           class="form-control"
                           id="numero"
                           name="numero"
                           placeholder="N&ordm;.*">
                    <label for="numero" class="control-label">Número</label>
                </div>
                <div class="form-group col-md-12">
                    <input type="text"
                           class="form-control"
                           id="complemento"
                           name="complemento"
                           placeholder="Complemento">
                    <label for="complemento" class="control-label">Complemento</label>
                </div>
                <div class="form-group col-md-12">
                    <input type="text"
                           class="form-control"
                           id="bairro"
                           name="bairro"
                           placeholder="Bairro*">
                    <label for="bairro" class="control-label">Bairro</label>
                </div>
                <div class="form-group col-md-6">
                    <select name="cidade" id="cidade" class="form-control">
                        <option value="Bariri" label="Bariri"></option>
                        <option value="Bauru" label="Bauru"></option>
                    </select>
                    <label for="cidade" class="control-label">Cidade</label>
                </div>
                <div class="form-group col-md-6">
                    <select name="uf" id="uf" class="form-control">
                        <option value="SP" label="SP"></option>
                    </select>
                    <label for="uf" class="control-label">U.F.</label>
                </div>
            </div>
        </fieldset>
        <!--div class="row">
            <div class="col-xs-4 col-md-5"></div>
            <div class="col-xs-4 col-md-2">
                <input type="submit" value="Inscrever-se" class="form-control">
            </div>
        </div-->
    </form>
    <!-- End Signup Form -->
@endsection