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
                    <input class="form-control"
                           id="nome"
                           name="nome"
                           value="{{ Auth::user()->dado->nome }}"
                           disabled>
                </div>
                <div class="form-group label-floating">
                    <label for="apelido" class="control-label">Apelido</label>
                    <input class="form-control"
                           id="apelido"
                           name="apelido"
                           value="{{ Auth::user()->dado->apelido }}">
                </div>
                <div class="form-group">
                    <label class="control-label">Sexo</label>
                    <div class="radio">
                        <label>
                            <input type="radio" name="sexo" value="0" {{ Auth::user()->dado->sexo ?: 'checked' }}>
                            Masculino
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="sexo" value="1" {{ Auth::user()->dado->sexo ? 'checked' : '' }}>
                            Feminino
                        </label>
                    </div>
                </div>
                <div class="form-group label-floating">
                    <label for="nome_pai" class="control-label">Nome do pai</label>
                    <input class="form-control"
                           id="nome_pai"
                           name="nome_pai"
                           value="{{ Auth::user()->dado->getPai->nome }}"
                           disabled>
                </div>
                <div class="form-group label-floating">
                    <label for="nome_mae" class="control-label">Nome da mãe</label>
                    <input class="form-control"
                           id="nome_mae"
                           name="nome_mae"
                           value="{{ Auth::user()->dado->getMae->nome }}"
                           disabled>
                </div>
                <div class="form-group label-floating">
                    <label for="data_de_nascimento" class="control-label">Data de nascimento</label>
                    <input class="form-control"
                           id="data_de_nascimento"
                           name="data_de_nascimento"
                           value="{{ date("d/m/Y", strtotime(Auth::user()->dado->data_de_nascimento)) }}"
                           disabled>
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
                    <input class="form-control"
                           id="rg"
                           name="rg"
                           value="{{ Auth::user()->dado->rg }}"
                           disabled>
                </div>
                <div class="form-group label-floating">
                    <label for="emissao_do_rg" class="control-label">Emissão do R.G.</label>
                    <input class="form-control"
                           id="emissao_do_rg"
                           name="emissao_do_rg"
                           value="{{ date("d/m/Y", strtotime(Auth::user()->dado->emissao_do_rg)) }}"
                           disabled>
                </div>
            </div>
            <div class="col-md-6">
                <h1>Dados de endereço</h1>
                <div class="form-group label-floating">
                    <label for="logradouro" class="control-label">Logradouro</label>
                    <input class="form-control"
                           id="logradouro"
                           name="logradouro"
                           value="{{ Auth::user()->dado->getEndereco->logradouro }}">
                </div>
                <div class="form-group label-floating">
                    <label for="numero" class="control-label">Número</label>
                    <input class="form-control"
                           id="numero"
                           name="numero"
                           value="{{ Auth::user()->dado->getEndereco->numero }}">
                </div>
                <div class="form-group label-floating">
                    <label for="complemento" class="control-label">Complemento</label>
                    <input class="form-control"
                           id="complemento"
                           name="complemento"
                           value="{{ Auth::user()->dado->getEndereco->complemento }}">
                </div>
                <div class="form-group label-floating">
                    <label for="bairro" class="control-label">Bairro</label>
                    <input class="form-control"
                           id="bairro"
                           name="bairro"
                           value="{{ Auth::user()->dado->getEndereco->bairro }}">
                </div>
                <div class="form-group">
                    <label for="pais">País</label>
                    <select name="pais" class="form-control" id="pais">
                        @foreach(\App\Pais::orderBy('nome')->get() as $pais)
                            <option value="{{ $pais->codigo }}"
                                    {{ $pais->codigo==Auth::user()->dado->getEndereco->pais->codigo ? 'selected' : '' }}>
                                {{ $pais->nome }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="uf">U.F.</label>
                    <select name="uf" class="form-control" id="uf">
                        @foreach(\App\Estado::orderBy('uf')->get()->where('pais', '=', Auth::user()->dado->getEndereco->pais->codigo) as $estado)
                            <option value="{{ $estado->codigo }}"
                                    {{ $estado->codigo==Auth::user()->dado->getEndereco->estado->codigo ? 'selected' : '' }}>
                                {{ $estado->uf }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="cidade">Cidade</label>
                    <select name="cidade" class="form-control" id="cidade">
                        @foreach(\App\Cidade::orderBy('nome')->get()->where('estado', '=', Auth::user()->dado->getEndereco->estado->codigo) as $cidade)
                            <option value="{{ $cidade->codigo }}"
                                    {{ $cidade->codigo==Auth::user()->dado->getEndereco->cidade ? 'selected' : '' }}>
                                {{ $cidade->nome }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
        </fieldset>
    </form>
    <!-- End Signup Form -->
@endsection
