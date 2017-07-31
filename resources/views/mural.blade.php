@extends('layouts.app')

@section('content')
    <!-- conteudo do desktop-->
    <div class="container-fluid visible-sm visible-md visible-lg">
        <div class="row">
            <div class="col-sm-3  alignRight">
                <a href="#" class="nav-tabs-dropdown btn btn-block btn-primary">Tabs</a>
                <ul id="nav-tabs-wrapper" class="nav nav-tabs nav-pills nav-stacked well">
                    <li class="active"><a href="#vtab1" data-toggle="tab">Geral</a></li>
                    <li><a href="#vtab2" data-toggle="tab">Horários de provas</a></li>
                    <li><a href="#vtab3" data-toggle="tab">Horários de aulas</a></li>
                </ul>
            </div>
            <div class="col-sm-9">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="vtab1">
                        <h3>Geral</h3>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12 ">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Informações gerais</h3>
                                            <span class="pull-right">
                                                        <ul class="nav panel-tabs">
                                                                <!--<li class="active"><a href="#taba" data-toggle="tab">Informática</a></li>-->
                                                        </ul>
                                                    </span>
                                        </div>
                                        <div class="panel-body">
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="taba">
                                                    <div class="panel panel-default">
                                                        <ul class="list-group">
                                                            <li class="list-group-item">
                                                                <a href="http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf"
                                                                   target="_blank">
                                                                    Horário de plantão 2017
                                                                </a>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <a href="http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf"
                                                                   target="_blank">
                                                                    Horário de ônibus
                                                                </a>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <a href="http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf"
                                                                   target="_blank">
                                                                    Plano escolar 2016
                                                                </a>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <a href="http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf"
                                                                   target="_blank">
                                                                    Código disciplinar 2017
                                                                </a>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <a href="http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf"
                                                                   target="_blank">
                                                                    calendário escolar 2017
                                                                </a>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <a href="http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf"
                                                                   target="_blank">
                                                                    Projeto político pedagógico
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="vtab2">
                        <h3>Horários de provas</h3>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12 ">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Horário de provas</h3>
                                            <span class="pull-right">

                                                                            <ul class="nav panel-tabs">
                                                                                <li class="active"><a href="#tab1"
                                                                                                      data-toggle="tab">1&ordm </a></li>
                                                                                <li><a href="#tab2" data-toggle="tab">2&ordm </a></li>
                                                                                <li><a href="#tab3" data-toggle="tab">3&ordm </a></li>
                                                                                <li><a href="#tab4" data-toggle="tab">4&ordm </a></li>
                                                                            </ul>
                                                                        </span>
                                        </div>
                                        <div class="panel-body">
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tab1">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">Integral</div>
                                                        <ul class="list-group">
                                                            <li class="list-group-item"><a
                                                                        href="http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf"
                                                                        target="_blank">Mecânica</a></li>
                                                            <li class="list-group-item"><a
                                                                        href="http://www.cti.feb.unesp.br/Home/mural/horario-de-provas---1bi---2017---diurno---300317---eletronica.pdf"
                                                                        target="_blank">Eletônica</a></li>
                                                            <li class="list-group-item"><a
                                                                        href="http://www.cti.feb.unesp.br/Home/mural/horprovasinfo1bi17.pdf"
                                                                        target="_blank">Informática</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">Noturno</div>
                                                        <ul class="list-group">
                                                            <li class="list-group-item"><a
                                                                        href="http://www.cti.feb.unesp.br/Home/mural/horario-provas-1bi---2017-mecanica-noite.pdf"
                                                                        target="_blank">Mecânica</a></li>
                                                            <li class="list-group-item"><a
                                                                        href="http://www.cti.feb.unesp.br/Home/mural/horario-de-provas---1-bi---eletronica---noite---v3.pdf"
                                                                        target="_blank">Eletônica</a></li>
                                                            <li class="list-group-item"><a
                                                                        href="http://www.cti.feb.unesp.br/Home/mural/horprovas-1bi-2017---informatica---noturno.pdf"
                                                                        target="_blank">Informática</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab2">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">Integral</div>
                                                        <ul class="list-group">
                                                            <li class="list-group-item"><a
                                                                        href="http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf"
                                                                        target="_blank">Mecânica</a></li>
                                                            <li class="list-group-item"><a
                                                                        href="http://www.cti.feb.unesp.br/Home/mural/horario-de-provas---1bi---2017---diurno---300317---eletronica.pdf"
                                                                        target="_blank">Eletônica</a></li>
                                                            <li class="list-group-item"><a
                                                                        href="http://www.cti.feb.unesp.br/Home/mural/horprovasinfo1bi17.pdf"
                                                                        target="_blank">Informática</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">Noturno</div>
                                                        <ul class="list-group">
                                                            <li class="list-group-item"><a
                                                                        href="http://www.cti.feb.unesp.br/Home/mural/horario-provas-1bi---2017-mecanica-noite.pdf"
                                                                        target="_blank">Mecânica</a></li>
                                                            <li class="list-group-item"><a
                                                                        href="http://www.cti.feb.unesp.br/Home/mural/horario-de-provas---1-bi---eletronica---noite---v3.pdf"
                                                                        target="_blank">Eletônica</a></li>
                                                            <li class="list-group-item"><a
                                                                        href="http://www.cti.feb.unesp.br/Home/mural/horprovas-1bi-2017---informatica---noturno.pdf"
                                                                        target="_blank">Informática</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab3">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">Integral</div>
                                                        <ul class="list-group">
                                                            <li class="list-group-item"><a
                                                                        href="http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf"
                                                                        target="_blank">Mecânica</a></li>
                                                            <li class="list-group-item"><a
                                                                        href="http://www.cti.feb.unesp.br/Home/mural/horario-de-provas---1bi---2017---diurno---300317---eletronica.pdf"
                                                                        target="_blank">Eletônica</a></li>
                                                            <li class="list-group-item"><a
                                                                        href="http://www.cti.feb.unesp.br/Home/mural/horprovasinfo1bi17.pdf"
                                                                        target="_blank">Informática</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">Noturno</div>
                                                        <ul class="list-group">
                                                            <li class="list-group-item"><a
                                                                        href="http://www.cti.feb.unesp.br/Home/mural/horario-provas-1bi---2017-mecanica-noite.pdf"
                                                                        target="_blank">Mecânica</a></li>
                                                            <li class="list-group-item"><a
                                                                        href="http://www.cti.feb.unesp.br/Home/mural/horario-de-provas---1-bi---eletronica---noite---v3.pdf"
                                                                        target="_blank">Eletônica</a></li>
                                                            <li class="list-group-item"><a
                                                                        href="http://www.cti.feb.unesp.br/Home/mural/horprovas-1bi-2017---informatica---noturno.pdf"
                                                                        target="_blank">Informática</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab4">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">Integral</div>
                                                        <ul class="list-group">
                                                            <li class="list-group-item"><a
                                                                        href="http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf"
                                                                        target="_blank">Mecânica</a></li>
                                                            <li class="list-group-item"><a
                                                                        href="http://www.cti.feb.unesp.br/Home/mural/horario-de-provas---1bi---2017---diurno---300317---eletronica.pdf"
                                                                        target="_blank">Eletônica</a></li>
                                                            <li class="list-group-item"><a
                                                                        href="http://www.cti.feb.unesp.br/Home/mural/horprovasinfo1bi17.pdf"
                                                                        target="_blank">Informática</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">Noturno</div>
                                                        <ul class="list-group">
                                                            <li class="list-group-item"><a
                                                                        href="http://www.cti.feb.unesp.br/Home/mural/horario-provas-1bi---2017-mecanica-noite.pdf"
                                                                        target="_blank">Mecânica</a></li>
                                                            <li class="list-group-item"><a
                                                                        href="http://www.cti.feb.unesp.br/Home/mural/horario-de-provas---1-bi---eletronica---noite---v3.pdf"
                                                                        target="_blank">Eletônica</a></li>
                                                            <li class="list-group-item"><a
                                                                        href="http://www.cti.feb.unesp.br/Home/mural/horprovas-1bi-2017---informatica---noturno.pdf"
                                                                        target="_blank">Informática</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade in" id="vtab3">
                        <h3>Horários de aulas</h3>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12 ">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Horário de Aulas</h3>
                                            <span class="pull-right">
                                                                                            <ul class="nav panel-tabs">
                                                                                                    <li class="active"><a
                                                                                                                href="#tab5"
                                                                                                                data-toggle="tab">Informática</a></li>
                                                                                                    <li><a href="#tab6"
                                                                                                           data-toggle="tab">Eletrônica </a></li>
                                                                                                    <li><a href="#tab7"
                                                                                                           data-toggle="tab">Mecânica </a></li>
                                                                                            </ul>
                                                                                        </span>
                                        </div>
                                        <div class="panel-body">
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tab5">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">Integral</div>
                                                        <ul class="list-group">
                                                            <li class="list-group-item"><a
                                                                        href="http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf"
                                                                        target="_blank">71A</a></li>
                                                            <li class="list-group-item"><a
                                                                        href="http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf"
                                                                        target="_blank">71B</a></li>
                                                            <li class="list-group-item"><a
                                                                        href="http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf"
                                                                        target="_blank">72A</a></li>
                                                            <li class="list-group-item"><a
                                                                        href="http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf"
                                                                        target="_blank">72B</a></li>
                                                            <li class="list-group-item"><a
                                                                        href="http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf"
                                                                        target="_blank">73A</a></li>
                                                            <li class="list-group-item"><a
                                                                        href="http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf"
                                                                        target="_blank">73B</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">Noturno</div>
                                                        <ul class="list-group">
                                                            <li class="list-group-item"><a
                                                                        href="http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf"
                                                                        target="_blank">71C</a></li>
                                                            <li class="list-group-item"><a
                                                                        href="http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf"
                                                                        target="_blank">72C</a></li>
                                                            <li class="list-group-item"><a
                                                                        href="http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf"
                                                                        target="_blank">72D</a></li>
                                                            <li class="list-group-item"><a
                                                                        href="http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf"
                                                                        target="_blank">73C</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab6">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">Integral</div>
                                                        <ul class="list-group">
                                                            <li class="list-group-item"><a
                                                                        href="http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf"
                                                                        target="_blank">51A</a></li>
                                                            <li class="list-group-item"><a
                                                                        href="http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf"
                                                                        target="_blank">52A</a></li>
                                                            <li class="list-group-item"><a
                                                                        href="http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf"
                                                                        target="_blank">53A</a></li>

                                                        </ul>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">Noturno</div>
                                                        <ul class="list-group">
                                                            <li class="list-group-item"><a
                                                                        href="http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf"
                                                                        target="_blank">51B</a></li>
                                                            <li class="list-group-item"><a
                                                                        href="http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf"
                                                                        target="_blank">52B</a></li>
                                                            <li class="list-group-item"><a
                                                                        href="http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf"
                                                                        target="_blank">53B</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab7">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">Integral</div>
                                                        <ul class="list-group">
                                                            <li class="list-group-item"><a
                                                                        href="http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf"
                                                                        target="_blank">11A</a></li>
                                                            <li class="list-group-item"><a
                                                                        href="http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf"
                                                                        target="_blank">12A</a></li>
                                                            <li class="list-group-item"><a
                                                                        href="http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf"
                                                                        target="_blank">13A</a></li>

                                                        </ul>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">Noturno</div>
                                                        <ul class="list-group">
                                                            <li class="list-group-item"><a
                                                                        href="http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf"
                                                                        target="_blank">11B</a></li>
                                                            <li class="list-group-item"><a
                                                                        href="http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf"
                                                                        target="_blank">12B</a></li>
                                                            <li class="list-group-item"><a
                                                                        href="http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf"
                                                                        target="_blank">13B</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--   Desktop     -->
    <!-- mobile -->
    <div class="container-fluid visible-xs">
        <div class="panel panel-primary">
            <div class="panel-heading " data-toggle="collapse" href="#geral">
                <h4 class="panel-title">
                    Informações gerais
                    <div class="glyphicon glyphicon-sort pull-right"></div>
                </h4>
            </div>
            <div class="row">
                <div class="panel-collapse collapse" id="geral">
                    <div class="panel-body text-center">
                        <div class="panel-body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="taba">
                                    <div class="panel panel-default">
                                        <ul class="list-group">
                                            <li class="list-group-item"><a
                                                        href="http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf"
                                                        target="_blank">Horário de plantão 2017</a></li>
                                            <li class="list-group-item"><a
                                                        href="http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf"
                                                        target="_blank">Horário de ônibus</a></li>
                                            <li class="list-group-item"><a
                                                        href="http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf"
                                                        target="_blank">Plano escolar 2016</a></li>
                                            <li class="list-group-item"><a
                                                        href="http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf"
                                                        target="_blank">Código disciplinar 2017</a></li>
                                            <li class="list-group-item"><a
                                                        href="http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf"
                                                        target="_blank">calendário escolar 2017</a></li>
                                            <li class="list-group-item"><a
                                                        href="http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf"
                                                        target="_blank">Projeto político pedagógico</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr></hr>
        <div class="panel panel-primary">
            <div class="panel-heading " data-toggle="collapse" href="#provas">
                <h4 class="panel-title">
                    Horário de provas
                    <div class="glyphicon glyphicon-sort pull-right"></div>
                </h4>
            </div>
            <div class="row">
                <div class="panel-collapse collapse" id="provas">
                    <div class="panel-body text-center">
                        <div class="panel-body">
                            <div class="tab-content">
                                <div class="container">
                                    <div class="row">
                                        <div class="featurette" id="about">
                                            <!------------------------code---------------start---------------->
                                            <div class="container-fluid">
                                                <div id="custom_carousel" class="carousel slide" data-ride="carousel">
                                                    <!-- Wrapper for slides -->
                                                    <div class="carousel-inner">
                                                        <div class="item active">
                                                            <div class="container-fluid">
                                                                <div class="row">
                                                                    <div class="col-md-3"></div>
                                                                    <div class="col-md-12">
                                                                        <div class="panel panel-default">
                                                                            <div class="panel-heading">Integral</div>
                                                                            <ul class="list-group">
                                                                                <li class="list-group-item"><a
                                                                                            href="http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf"
                                                                                            target="_blank">Mecânica</a>
                                                                                </li>
                                                                                <li class="list-group-item"><a
                                                                                            href="http://www.cti.feb.unesp.br/Home/mural/horario-de-provas---1bi---2017---diurno---300317---eletronica.pdf"
                                                                                            target="_blank">Eletônica</a>
                                                                                </li>
                                                                                <li class="list-group-item"><a
                                                                                            href="http://www.cti.feb.unesp.br/Home/mural/horprovasinfo1bi17.pdf"
                                                                                            target="_blank">Informática</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="panel panel-default">
                                                                            <div class="panel-heading">Noturno</div>
                                                                            <ul class="list-group">
                                                                                <li class="list-group-item"><a
                                                                                            href="http://www.cti.feb.unesp.br/Home/mural/horario-provas-1bi---2017-mecanica-noite.pdf"
                                                                                            target="_blank">Mecânica</a>
                                                                                </li>
                                                                                <li class="list-group-item"><a
                                                                                            href="http://www.cti.feb.unesp.br/Home/mural/horario-de-provas---1-bi---eletronica---noite---v3.pdf"
                                                                                            target="_blank">Eletônica</a>
                                                                                </li>
                                                                                <li class="list-group-item"><a
                                                                                            href="http://www.cti.feb.unesp.br/Home/mural/horprovas-1bi-2017---informatica---noturno.pdf"
                                                                                            target="_blank">Informática</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="container-fluid">
                                                                <div class="row">
                                                                    <div class="col-md-3"></div>
                                                                    <div class="col-md-12">
                                                                        <div class="panel panel-default">
                                                                            <div class="panel-heading">Integral</div>
                                                                            <ul class="list-group">
                                                                                <li class="list-group-item"><a
                                                                                            href="http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf"
                                                                                            target="_blank">Mecânica</a>
                                                                                </li>
                                                                                <li class="list-group-item"><a
                                                                                            href="http://www.cti.feb.unesp.br/Home/mural/horario-de-provas---1bi---2017---diurno---300317---eletronica.pdf"
                                                                                            target="_blank">Eletônica</a>
                                                                                </li>
                                                                                <li class="list-group-item"><a
                                                                                            href="http://www.cti.feb.unesp.br/Home/mural/horprovasinfo1bi17.pdf"
                                                                                            target="_blank">Informática</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="panel panel-default">
                                                                            <div class="panel-heading">Noturno</div>
                                                                            <ul class="list-group">
                                                                                <li class="list-group-item"><a
                                                                                            href="http://www.cti.feb.unesp.br/Home/mural/horario-provas-1bi---2017-mecanica-noite.pdf"
                                                                                            target="_blank">Mecânica</a>
                                                                                </li>
                                                                                <li class="list-group-item"><a
                                                                                            href="http://www.cti.feb.unesp.br/Home/mural/horario-de-provas---1-bi---eletronica---noite---v3.pdf"
                                                                                            target="_blank">Eletônica</a>
                                                                                </li>
                                                                                <li class="list-group-item"><a
                                                                                            href="http://www.cti.feb.unesp.br/Home/mural/horprovas-1bi-2017---informatica---noturno.pdf"
                                                                                            target="_blank">Informática</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="container-fluid">
                                                                <div class="row">
                                                                    <div class="col-md-3"></div>
                                                                    <div class="col-md-12">
                                                                        <div class="panel panel-default">
                                                                            <div class="panel-heading">Integral</div>
                                                                            <ul class="list-group">
                                                                                <li class="list-group-item"><a
                                                                                            href="http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf"
                                                                                            target="_blank">Mecânica</a>
                                                                                </li>
                                                                                <li class="list-group-item"><a
                                                                                            href="http://www.cti.feb.unesp.br/Home/mural/horario-de-provas---1bi---2017---diurno---300317---eletronica.pdf"
                                                                                            target="_blank">Eletônica</a>
                                                                                </li>
                                                                                <li class="list-group-item"><a
                                                                                            href="http://www.cti.feb.unesp.br/Home/mural/horprovasinfo1bi17.pdf"
                                                                                            target="_blank">Informática</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="panel panel-default">
                                                                            <div class="panel-heading">Noturno</div>
                                                                            <ul class="list-group">
                                                                                <li class="list-group-item"><a
                                                                                            href="http://www.cti.feb.unesp.br/Home/mural/horario-provas-1bi---2017-mecanica-noite.pdf"
                                                                                            target="_blank">Mecânica</a>
                                                                                </li>
                                                                                <li class="list-group-item"><a
                                                                                            href="http://www.cti.feb.unesp.br/Home/mural/horario-de-provas---1-bi---eletronica---noite---v3.pdf"
                                                                                            target="_blank">Eletônica</a>
                                                                                </li>
                                                                                <li class="list-group-item"><a
                                                                                            href="http://www.cti.feb.unesp.br/Home/mural/horprovas-1bi-2017---informatica---noturno.pdf"
                                                                                            target="_blank">Informática</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="container-fluid">
                                                                <div class="row">
                                                                    <div class="col-md-3"></div>
                                                                    <div class="col-md-12">
                                                                        <div class="panel panel-default">
                                                                            <div class="panel-heading">Integral</div>
                                                                            <ul class="list-group">
                                                                                <li class="list-group-item"><a
                                                                                            href="http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf"
                                                                                            target="_blank">Mecânica</a>
                                                                                </li>
                                                                                <li class="list-group-item"><a
                                                                                            href="http://www.cti.feb.unesp.br/Home/mural/horario-de-provas---1bi---2017---diurno---300317---eletronica.pdf"
                                                                                            target="_blank">Eletônica</a>
                                                                                </li>
                                                                                <li class="list-group-item"><a
                                                                                            href="http://www.cti.feb.unesp.br/Home/mural/horprovasinfo1bi17.pdf"
                                                                                            target="_blank">Informática</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="panel panel-default">
                                                                            <div class="panel-heading">Noturno</div>
                                                                            <ul class="list-group">
                                                                                <li class="list-group-item"><a
                                                                                            href="http://www.cti.feb.unesp.br/Home/mural/horario-provas-1bi---2017-mecanica-noite.pdf"
                                                                                            target="_blank">Mecânica</a>
                                                                                </li>
                                                                                <li class="list-group-item"><a
                                                                                            href="http://www.cti.feb.unesp.br/Home/mural/horario-de-provas---1-bi---eletronica---noite---v3.pdf"
                                                                                            target="_blank">Eletônica</a>
                                                                                </li>
                                                                                <li class="list-group-item"><a
                                                                                            href="http://www.cti.feb.unesp.br/Home/mural/horprovas-1bi-2017---informatica---noturno.pdf"
                                                                                            target="_blank">Informática</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Item -->
                                                    </div>
                                                    <!-- End Carousel Inner -->
                                                    <div class="controls">
                                                        <ul class="nav">
                                                            <li data-target="#custom_carousel" data-slide-to="0"
                                                                class="active">
                                                                <a href="#" style="font-size:1.5em;">1&ordm</a>
                                                            </li>
                                                            <li data-target="#custom_carousel" data-slide-to="1">
                                                                <a href="#" style="font-size:1.5em;">2&ordm</a>
                                                            </li>
                                                            <li data-target="#custom_carousel" data-slide-to="2">
                                                                <a href="#" style="font-size:1.5em;">3&ordm</a>
                                                            </li>
                                                            <li data-target="#custom_carousel" data-slide-to="3">
                                                                <a href="#" style="font-size:1.5em;">4&ordm</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- End Carousel -->
                                            </div>
                                            <!----Code------end----------------------------------->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr></hr>
        <div class="panel panel-primary">
            <div class="panel-heading " data-toggle="collapse" href="#aulas">
                <h4 class="panel-title">
                    Horário de aulas
                    <div class="glyphicon glyphicon-sort pull-right"></div>
                </h4>
            </div>
            <div class="row">
                <div class="panel-collapse collapse" id="aulas">
                    <div class="panel-body text-center">
                        <div class="panel-body">
                            <div class="tab-content">
                                <div class="container">
                                    <div class="row">
                                        <div class="featurette" id="about">
                                            <!------------------------code---------------start---------------->
                                            <div class="container-fluid">
                                                <div id="custom_carousel2" class="carousel slide" data-ride="carousel">
                                                    <!-- Wrapper for slides -->
                                                    <div class="carousel-inner">
                                                        <div class="item active">
                                                            <div class="container-fluid">
                                                                <div class="row">
                                                                    <div class="col-md-4"></div>
                                                                    <div class="col-md-12">
                                                                        <div class="panel panel-default">
                                                                            <div class="panel-heading">Integral</div>
                                                                            <ul class="list-group">
                                                                                <li class="list-group-item"><a
                                                                                            href="http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf"
                                                                                            target="_blank">71A</a></li>
                                                                                <li class="list-group-item"><a
                                                                                            href="http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf"
                                                                                            target="_blank">71B</a></li>
                                                                                <li class="list-group-item"><a
                                                                                            href="http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf"
                                                                                            target="_blank">72A</a></li>
                                                                                <li class="list-group-item"><a
                                                                                            href="http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf"
                                                                                            target="_blank">72B</a></li>
                                                                                <li class="list-group-item"><a
                                                                                            href="http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf"
                                                                                            target="_blank">73A</a></li>
                                                                                <li class="list-group-item"><a
                                                                                            href="http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf"
                                                                                            target="_blank">73B</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="panel panel-default">
                                                                            <div class="panel-heading">Noturno</div>
                                                                            <ul class="list-group">
                                                                                <li class="list-group-item"><a
                                                                                            href="http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf"
                                                                                            target="_blank">71C</a></li>
                                                                                <li class="list-group-item"><a
                                                                                            href="http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf"
                                                                                            target="_blank">72C</a></li>
                                                                                <li class="list-group-item"><a
                                                                                            href="http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf"
                                                                                            target="_blank">72D</a></li>
                                                                                <li class="list-group-item"><a
                                                                                            href="http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf"
                                                                                            target="_blank">73C</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="container-fluid">
                                                                <div class="row">
                                                                    <div class="col-md-4"></div>
                                                                    <div class="col-md-12">
                                                                        <div class="panel panel-default">
                                                                            <div class="panel-heading">Integral</div>
                                                                            <ul class="list-group">
                                                                                <li class="list-group-item"><a
                                                                                            href="http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf"
                                                                                            target="_blank">51A</a></li>
                                                                                <li class="list-group-item"><a
                                                                                            href="http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf"
                                                                                            target="_blank">52A</a></li>
                                                                                <li class="list-group-item"><a
                                                                                            href="http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf"
                                                                                            target="_blank">53A</a></li>

                                                                            </ul>
                                                                        </div>
                                                                        <div class="panel panel-default">
                                                                            <div class="panel-heading">Noturno</div>
                                                                            <ul class="list-group">
                                                                                <li class="list-group-item"><a
                                                                                            href="http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf"
                                                                                            target="_blank">51B</a></li>
                                                                                <li class="list-group-item"><a
                                                                                            href="http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf"
                                                                                            target="_blank">52B</a></li>
                                                                                <li class="list-group-item"><a
                                                                                            href="http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf"
                                                                                            target="_blank">53B</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="container-fluid">
                                                                <div class="row">
                                                                    <div class="col-md-4"></div>
                                                                    <div class="col-md-12">
                                                                        <div class="panel panel-default">
                                                                            <div class="panel-heading">Integral</div>
                                                                            <ul class="list-group">
                                                                                <li class="list-group-item"><a
                                                                                            href="http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf"
                                                                                            target="_blank">11A</a></li>
                                                                                <li class="list-group-item"><a
                                                                                            href="http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf"
                                                                                            target="_blank">12A</a></li>
                                                                                <li class="list-group-item"><a
                                                                                            href="http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf"
                                                                                            target="_blank">13A</a></li>

                                                                            </ul>
                                                                        </div>
                                                                        <div class="panel panel-default">
                                                                            <div class="panel-heading">Noturno</div>
                                                                            <ul class="list-group">
                                                                                <li class="list-group-item"><a
                                                                                            href="http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf"
                                                                                            target="_blank">11B</a></li>
                                                                                <li class="list-group-item"><a
                                                                                            href="http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf"
                                                                                            target="_blank">12B</a></li>
                                                                                <li class="list-group-item"><a
                                                                                            href="http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf"
                                                                                            target="_blank">13B</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Item -->
                                                    </div>
                                                    <!-- End Carousel Inner -->
                                                    <div class="controls">
                                                        <ul class="nav">
                                                            <li data-target="#custom_carousel2" data-slide-to="0"
                                                                class="active">
                                                                <a href="#">
                                                                    <div style="font-size:1.5em;"
                                                                         class="glyphicon glyphicon-hdd "></div>
                                                                </a>
                                                            </li>
                                                            <li data-target="#custom_carousel2" data-slide-to="1">
                                                                <a href="#">
                                                                    <div style="font-size:1.5em;"
                                                                         class="glyphicon glyphicon-flash "></div>
                                                                </a>
                                                            </li>
                                                            <li data-target="#custom_carousel2" data-slide-to="2">
                                                                <a href="#">
                                                                    <div style="font-size:1.5em;"
                                                                         class="glyphicon glyphicon-wrench "></div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- End Carousel -->
                                            </div>
                                            <!----Code------end----------------------------------->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- mobile -->
    </div>
@endsection
