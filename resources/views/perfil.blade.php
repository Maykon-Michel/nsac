@extends('layouts.app')

@section('content')
<!-- Signup Form -->
        <form action="signup.php" method="post" class="well" id="frm-signup" role="form">
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
                            id="apelido"
                            name="apelido"
                            placeholder="Apelido">
                        <label for="sobrenome" class="control-label">Apelido</label>
                    </div>
                    <div class="form-group col-md-12">
                      <input type="text"
                          class="form-control"
                            id="nome_social"
                            name="nome_social"
                            placeholder="Nome Social">
                        <label for="nome_social" class="control-label">Nome social</label>
                    </div>
                    <div class="form-group col-md-12">
                        <select name="sexo" id="sexo" class="form-control">
                            <option value="sexo" label="Sexo*" selected hidden></option>
                            <option value="m" label="Masculino"></option>
                            <option value="f" label="Feminino" selected></option>
                        </select>
                        <label for="sexo" class="control-label">Sexo</label>
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
                <div class="col-md-6">
                  <h1>Dados de contato</h1>
                    <div><!-- na página, é cada uma das linhas de telefone com a descrição  -->
                        <div class="row">
                        <div class="form-group col-md-1">
                          <a href="#">
                              <span class="glyphicon glyphicon-remove" />
                            </a>
                        </div>
                        <div class="form-group col-md-5">
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
                                id="descricao"
                                name="descricao"
                                placeholder="descricao*"
                                maxlength="14">
                            <label for="descricao" class="control-label">Descrição</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-md-1">
                          <a href="#">
                              <span class="glyphicon glyphicon-remove" />
                            </a>
                        </div>
                        <div class="form-group col-md-5">
                          <input type="text"
                              class="form-control"
                                id="celular"
                                name="celular"
                                placeholder="Celular*"
                                maxlength="14">
                            <label for="celular" class="control-label">Celular</label>
                        </div>
                        <div class="form-group col-md-6">
                          <input type="text"
                              class="form-control"
                                id="descricao2"
                                name="descricao2"
                                placeholder="descricao"
                                maxlength="14">
                            <label for="descricao2" class="control-label">Descrição</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-md-1">
                          <a href="#">
                              <span class="glyphicon glyphicon-remove" />
                            </a>
                        </div>
                        <div class="form-group col-md-11">
                          <input type="text"
                              class="form-control"
                                id="email"
                                name="email"
                                placeholder="Email"
                                maxlength="14">
                            <label for="email" class="control-label">Email</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-4">
                              <a class="btn btn-square-toround btn-lg btn-bordered-primary center-block" data-toggle="modal" data-target="#mais_telefone"><span class="glyphicon glyphicon-plus"></span> Telefone</a>
                              <div id="mais_telefone" class="modal fade">
                                <div class="modal-dialog">
                                  <!-- Modal content-->
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h4 class="modal-title title-inline">Telefone(s)</h4>
                                      <span class="glyphicon glyphicon-remove icon-modal" data-dismiss="modal" aria-hidden="true"></span>
                                    </div>
                                    <div class="modal-body">
                                      <br>
                                      <form id="telefoneForm" action="#" method="post">
                                        <ul class="list-group">
                                            <li class="list-group-item">
                                                <div class="row">
                                                  <div class="form-group col-md-1">
                                                    <a href="#">
                                                        <span class="glyphicon glyphicon-plus" />
                                                      </a>
                                                  </div>
                                                  <div class="form-group col-md-5">
                                                    <input type="text"
                                                        class="form-control"
                                                          id="telefone_plus"
                                                          name="telefone_plus"
                                                          placeholder="Telefone*"
                                                          maxlength="14">
                                                      <label for="telefone_plus" class="control-label">Telefone</label>
                                                  </div>
                                                  <div class="form-group col-md-6">
                                                    <input type="text"
                                                        class="form-control"
                                                          id="descricao_plus"
                                                          name="descricao_plus"
                                                          placeholder="descricao*"
                                                          maxlength="14">
                                                      <label for="descricao_plus" class="control-label">Descrição</label>
                                                  </div>
                                              </div>
                                            </li>
                                            <li class="list-group-item">
                                              <div class="row">
                                                <div class="col-md-12">
                                                      <a class="btn btn-square-toround btn-lg btn-bordered-primary center-block " data-toggle="modal" data-target="#"><span class="glyphicon glyphicon-ok"></span> Enviar</a>
                                                </div>
                                              </div>
                                            </li>
                                          </ul>
                                      </form>
                                        <ul class="list-group">
                                          <li class="list-group-item">
                                            <div class="row">
                                              <div class="form-group col-md-1">
                                                <a href="#">
                                                    <span class="glyphicon glyphicon-remove" />
                                                  </a>
                                              </div>
                                              <div class="form-group col-md-5">
                                                  <label class="control-label">Telefone já adicionado</label>
                                              </div>
                                              <div class="form-group col-md-6">
                                                <label class="control-label">Descrição já adicionada</label>
                                              </div>
                                              <br>
                                            </div>
                                          </li>
                                          <li class="list-group-item">
                                            <div class="row">
                                              <div class="form-group col-md-1">
                                                <a href="#">
                                                    <span class="glyphicon glyphicon-remove" />
                                                  </a>
                                              </div>
                                              <div class="form-group col-md-5">
                                                  <label class="control-label">Telefone já adicionado</label>
                                              </div>
                                              <div class="form-group col-md-6">
                                                <label class="control-label">Descrição já adicionada</label>
                                              </div>
                                              <br>
                                            </div>
                                          </li>
                                        </ul>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="col-md-4 pull-right">
                                             <a class="btn btn-square-toround btn-lg btn-bordered-primary center-block btn-default " data-dismiss="modal" data-toggle="modal" data-target="#"><span class="glyphicon glyphicon-arrow-down"></span> Fechar</a>
                                       </div>
                                    </div>
                                    <br><br>
                                  </div>
                                </div>
                              </div>
                        </div>
                        <div class="col-md-4">
                              <a class="btn btn-square-toround btn-lg btn-bordered-primary center-block" data-toggle="modal" data-target="#mais_celular"><span class="glyphicon glyphicon-plus"></span> Celular</a>
                              <div id="mais_celular" class="modal fade">
                                <div class="modal-dialog">
                                  <!-- Modal content-->
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h4 class="modal-title title-inline">Celular(es)</h4>
                                      <span class="glyphicon glyphicon-remove icon-modal" data-dismiss="modal" aria-hidden="true"></span>
                                    </div>
                                    <div class="modal-body">
                                      <br>
                                      <form id="celularForm" action="#" method="post">
                                        <ul class="list-group">
                                            <li class="list-group-item">
                                                <div class="row">
                                                  <div class="form-group col-md-1">
                                                    <a href="#">
                                                        <span class="glyphicon glyphicon-plus" />
                                                      </a>
                                                  </div>
                                                  <div class="form-group col-md-5">
                                                    <input type="text"
                                                        class="form-control"
                                                          id="celular_plus"
                                                          name="celular_plus"
                                                          placeholder="Celular*"
                                                          maxlength="14">
                                                      <label for="celular_plus" class="control-label">Celular</label>
                                                  </div>
                                                  <div class="form-group col-md-6">
                                                    <input type="text"
                                                        class="form-control"
                                                          id="descricao_plus"
                                                          name="descricao_plus"
                                                          placeholder="descricao*"
                                                          maxlength="14">
                                                      <label for="descricao_plus" class="control-label">Descrição</label>
                                                  </div>
                                              </div>
                                            </li>
                                            <li class="list-group-item">
                                              <div class="row">
                                                <div class="col-md-12">
                                                      <a class="btn btn-square-toround btn-lg btn-bordered-primary center-block " data-toggle="modal" data-target="#"><span class="glyphicon glyphicon-ok"></span> Enviar</a>
                                                </div>
                                              </div>
                                            </li>
                                          </ul>
                                      </form>
                                        <ul class="list-group">
                                          <li class="list-group-item">
                                            <div class="row">
                                              <div class="form-group col-md-1">
                                                <a href="#">
                                                    <span class="glyphicon glyphicon-remove" />
                                                  </a>
                                              </div>
                                              <div class="form-group col-md-5">
                                                  <label class="control-label">Celular já adicionado</label>
                                              </div>
                                              <div class="form-group col-md-6">
                                                <label class="control-label">Descrição já adicionada</label>
                                              </div>
                                              <br>
                                            </div>
                                          </li>
                                          <li class="list-group-item">
                                            <div class="row">
                                              <div class="form-group col-md-1">
                                                <a href="#">
                                                    <span class="glyphicon glyphicon-remove" />
                                                  </a>
                                              </div>
                                              <div class="form-group col-md-5">
                                                  <label class="control-label">Celular já adicionado</label>
                                              </div>
                                              <div class="form-group col-md-6">
                                                <label class="control-label">Descrição já adicionada</label>
                                              </div>
                                              <br>
                                            </div>
                                          </li>
                                        </ul>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="col-md-4 pull-right">
                                             <a class="btn btn-square-toround btn-lg btn-bordered-primary center-block btn-default " data-dismiss="modal" data-toggle="modal" data-target="#"><span class="glyphicon glyphicon-arrow-down"></span> Fechar</a>
                                       </div>
                                    </div>
                                    <br><br>
                                  </div>
                                </div>
                              </div>
                        </div>
                        <div class="col-md-4">
                              <a class="btn btn-square-toround btn-lg btn-bordered-primary center-block" data-toggle="modal" data-target="#mais_email"><span class="glyphicon glyphicon-plus"></span> Email</a>
                            <div id="mais_email" class="modal fade">
                              <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h4 class="modal-title title-inline">Email(s)</h4>
                                    <span class="glyphicon glyphicon-remove icon-modal" data-dismiss="modal" aria-hidden="true"></span>
                                  </div>
                                  <div class="modal-body">
                                    <br>
                                    <form id="emailForm" action="#" method="post">
                                      <ul class="list-group">
                                          <li class="list-group-item">
                                              <div class="row">
                                                <div class="form-group col-md-1">
                                                  <a href="#">
                                                      <span class="glyphicon glyphicon-plus" />
                                                    </a>
                                                </div>
                                                <div class="form-group col-md-11">
                                                  <input type="text"
                                                      class="form-control"
                                                        id="email_plus"
                                                        name="email_plus"
                                                        placeholder="Email*"
                                                        maxlength="14">
                                                    <label for="email_plus" class="control-label">Email</label>
                                                </div>
                                            </div>
                                          </li>
                                          <li class="list-group-item">
                                            <div class="row">
                                              <div class="col-md-12">
                                                    <a class="btn btn-square-toround btn-lg btn-bordered-primary center-block " data-toggle="modal" data-target="#"><span class="glyphicon glyphicon-ok"></span> Enviar</a>
                                              </div>
                                            </div>
                                          </li>
                                        </ul>
                                    </form>
                                      <ul class="list-group">
                                        <li class="list-group-item">
                                          <div class="row">
                                            <div class="form-group col-md-1">
                                              <a href="#">
                                                  <span class="glyphicon glyphicon-remove" />
                                                </a>
                                            </div>
                                            <div class="form-group col-md-5">
                                                <label class="control-label">Email já adicionado</label>
                                            </div>
                                            <br>
                                          </div>
                                        </li>
                                        <li class="list-group-item">
                                          <div class="row">
                                            <div class="form-group col-md-1">
                                              <a href="#">
                                                  <span class="glyphicon glyphicon-remove" />
                                                </a>
                                            </div>
                                            <div class="form-group col-md-5">
                                                <label class="control-label">Email já adicionado</label>
                                            </div>
                                            <br>
                                          </div>
                                        </li>
                                      </ul>
                                  </div>
                                  <div class="modal-footer">
                                      <div class="col-md-4 pull-right">
                                           <a class="btn btn-square-toround btn-lg btn-bordered-primary center-block btn-default " data-dismiss="modal" data-toggle="modal" data-target="#"><span class="glyphicon glyphicon-arrow-down"></span> Fechar</a>
                                     </div>
                                  </div>
                                  <br><br>
                                </div>
                              </div>
                            </div>
                        </div>
                      </div>
            </fieldset>
        </form>
        <!-- End Signup Form -->
@endsection
