@extends('layouts.app')

@section('content')
    <ul class="nav nav-tabs">
        <li class="active"><a href="#geral" data-toggle="tab">Geral</a></li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="mural" data-target="">
                Horário de provas <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li><a href="#provas1" data-toggle="tab">1&deg; Bimestre</a></li>
                <li><a href="#provas2" data-toggle="tab">2&deg; Bimestre</a></li>
                <li><a href="#provas3" data-toggle="tab">3&deg; Bimestre</a></li>
                <li><a href="#provas4" data-toggle="tab">4&deg; Bimestre</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="mural" data-target="">
                Horário de aulas <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li><a href="#info-aulas" data-toggle="tab">Informática</a></li>
                <li><a href="#eletro-aulas" data-toggle="tab">Eletrônica</a></li>
                <li><a href="#meca-aulas" data-toggle="tab">Mecânica</a></li>
            </ul>
        </li>
    </ul>
    <div id="tab-content" class="tab-content">
        <div class="tab-pane fade active in" id="geral">
            <div class="list-group">
                <hr>
                <div class="list-group-item">
                    <div class="row-content">
                        <div class="least-content">21/03/2017</div>
                        <h4 class="list-group-item-heading">Horário de plantão</h4>
                        <a href="http://www.cti.feb.unesp.br/Home/mural/horario-de-plantao1.pdf" target="_blank"
                           class="list-group-item-text">http://www.cti.feb.unesp.br/Home/mural/horario-de-plantao1.pdf</a>
                    </div>
                </div>
                <hr>
                <div class="list-group-item">
                    <div class="row-content">
                        <h4 class="list-group-item-heading">Horário de ônibus</h4>
                        <a href="https://editor.mobilibus.com/web/timetable/27b4n" target="_blank"
                           class="list-group-item-text">https://editor.mobilibus.com/web/timetable/27b4n</a>
                    </div>
                </div>
                <hr>
                <div class="list-group-item">
                    <div class="row-content">
                        <div class="least-content">09/05/2016</div>
                        <h4 class="list-group-item-heading">Plano escolar</h4>
                        <a href="http://www.cti.feb.unesp.br/Home/mural/plano-escolar-2016.pdf" target="_blank"
                           class="list-group-item-text">http://www.cti.feb.unesp.br/Home/mural/plano-escolar-2016.pdf</a>
                    </div>
                </div>
                <hr>
                <div class="list-group-item">
                    <div class="row-content">
                        <div class="least-content">01/01/2017</div>
                        <h4 class="list-group-item-heading">Código disciplinar</h4>
                        <a href="http://www.cti.feb.unesp.br/Home/mural/codigo-disciplinar---cti-08dez16.pdf"
                           target="_blank"
                           class="list-group-item-text">
                            http://www.cti.feb.unesp.br/Home/mural/codigo-disciplinar---cti-08dez16.pdf
                        </a>
                    </div>
                </div>
                <hr>
                <div class="list-group-item">
                    <div class="row-content">
                        <div class="least-content">21/11/2016</div>
                        <h4 class="list-group-item-heading">Calendário escolar</h4>
                        <a href="http://www.cti.feb.unesp.br/Home/mural/calendario-escolar-2017-homologado-pela-d.e..pdf"
                           target="_blank"
                           class="list-group-item-text">
                            http://www.cti.feb.unesp.br/Home/mural/calendario-escolar-2017-homologado-pela-d.e..pdf
                        </a>
                    </div>
                </div>
                <hr>
                <div class="list-group-item">
                    <div class="row-content">
                        <div class="least-content">01/11/2015</div>
                        <h4 class="list-group-item-heading">Projeto político pedagógico</h4>
                        <a href="http://www.cti.feb.unesp.br/Home/mural/proposta-pedagogica---nov15-1.pdf"
                           target="_blank"
                           class="list-group-item-text">
                            hhttp://www.cti.feb.unesp.br/Home/mural/proposta-pedagogica---nov15-1.pdf
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="provas1">
            <div class="tab-pane fade active in" id="geral">
                <div class="list-group">
                    <hr>
                    <div class="list-group-item">
                        <div class="row-content">
                            <div class="least-content">21/03/2017</div>
                            <h4>Informática</h4>
                            <a href="http://www.cti.feb.unesp.br/Home/mural/horprovasinfo1bi17.pdf" target="_blank"
                               class="list-group-item-text"> <strong>Integral</strong> -
                                http://www.cti.feb.unesp.br/Home/mural/horprovasinfo1bi17.pdf</a><br>
                            <a href="http://www.cti.feb.unesp.br/Home/mural/horprovas-1bi-2017---informatica---noturno.pdf"
                               target="_blank"
                               class="list-group-item-text"> <strong>Noturno</strong> -
                                http://www.cti.feb.unesp.br/Home/mural/horprovas-1bi-2017---informatica---noturno.pdf</a>
                        </div>
                    </div>
                    <hr>
                    <div class="list-group-item">
                        <div class="row-content">
                            <div class="least-content">21/03/2017</div>
                            <h4>Eletrônica</h4>
                            <a href="http://www.cti.feb.unesp.br/Home/mural/horario-de-provas---1bi---2017---diurno---300317---eletronica.pdf"
                               target="_blank"
                               class="list-group-item-text"> <strong>Integral</strong> -
                                http://www.cti.feb.unesp.br/Home/mural/horario-de-provas---1bi---2017---diurno---300317---eletronica.pdf</a><br>
                            <a href="http://www.cti.feb.unesp.br/Home/mural/horario-de-provas---1-bi---eletronica---noite---v3.pdf"
                               target="_blank"
                               class="list-group-item-text"> <strong>Noturno</strong> -
                                http://www.cti.feb.unesp.br/Home/mural/horario-de-provas---1-bi---eletronica---noite---v3.pdf</a>
                        </div>
                    </div>
                    <hr>
                    <div class="list-group-item">
                        <div class="row-content">
                            <div class="least-content">21/03/2017</div>
                            <h4>Mecânica</h4>
                            <a href="http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf" target="_blank"
                               class="list-group-item-text"> <strong>Integral</strong> -
                                http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf</a><br>
                            <a href="http://www.cti.feb.unesp.br/Home/mural/horario-provas-1bi---2017-mecanica-noite.pdf"
                               target="_blank"
                               class="list-group-item-text"> <strong>Noturno</strong> -
                                http://www.cti.feb.unesp.br/Home/mural/horario-provas-1bi---2017-mecanica-noite.pdf</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="provas2">
            <div class="tab-pane fade active in" id="geral">
                <div class="list-group">
                    <hr>
                    <div class="list-group-item">
                        <div class="row-content">
                            <div class="least-content">21/03/2017</div>
                            <h4>Informática</h4>
                            <a href="http://www.cti.feb.unesp.br/Home/mural/horprovasinfo1bi17.pdf" target="_blank"
                               class="list-group-item-text"> <strong>Integral</strong> -
                                http://www.cti.feb.unesp.br/Home/mural/horprovasinfo1bi17.pdf</a><br>
                            <a href="http://www.cti.feb.unesp.br/Home/mural/horprovas-1bi-2017---informatica---noturno.pdf"
                               target="_blank"
                               class="list-group-item-text"> <strong>Noturno</strong> -
                                http://www.cti.feb.unesp.br/Home/mural/horprovas-1bi-2017---informatica---noturno.pdf</a>
                        </div>
                    </div>
                    <hr>
                    <div class="list-group-item">
                        <div class="row-content">
                            <div class="least-content">21/03/2017</div>
                            <h4>Eletrônica</h4>
                            <a href="http://www.cti.feb.unesp.br/Home/mural/horario-de-provas---1bi---2017---diurno---300317---eletronica.pdf"
                               target="_blank"
                               class="list-group-item-text"> <strong>Integral</strong> -
                                http://www.cti.feb.unesp.br/Home/mural/horario-de-provas---1bi---2017---diurno---300317---eletronica.pdf</a><br>
                            <a href="http://www.cti.feb.unesp.br/Home/mural/horario-de-provas---1-bi---eletronica---noite---v3.pdf"
                               target="_blank"
                               class="list-group-item-text"> <strong>Noturno</strong> -
                                http://www.cti.feb.unesp.br/Home/mural/horario-de-provas---1-bi---eletronica---noite---v3.pdf</a>
                        </div>
                    </div>
                    <hr>
                    <div class="list-group-item">
                        <div class="row-content">
                            <div class="least-content">21/03/2017</div>
                            <h4>Mecânica</h4>
                            <a href="http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf" target="_blank"
                               class="list-group-item-text"> <strong>Integral</strong> -
                                http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf</a><br>
                            <a href="http://www.cti.feb.unesp.br/Home/mural/horario-provas-1bi---2017-mecanica-noite.pdf"
                               target="_blank"
                               class="list-group-item-text"> <strong>Noturno</strong> -
                                http://www.cti.feb.unesp.br/Home/mural/horario-provas-1bi---2017-mecanica-noite.pdf</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="provas3">
            <div class="tab-pane fade active in" id="geral">
                <div class="list-group">
                    <hr>
                    <div class="list-group-item">
                        <div class="row-content">
                            <div class="least-content">21/03/2017</div>
                            <h4>Informática</h4>
                            <a href="http://www.cti.feb.unesp.br/Home/mural/horprovasinfo1bi17.pdf" target="_blank"
                               class="list-group-item-text"> <strong>Integral</strong> -
                                http://www.cti.feb.unesp.br/Home/mural/horprovasinfo1bi17.pdf</a><br>
                            <a href="http://www.cti.feb.unesp.br/Home/mural/horprovas-1bi-2017---informatica---noturno.pdf"
                               target="_blank"
                               class="list-group-item-text"> <strong>Noturno</strong> -
                                http://www.cti.feb.unesp.br/Home/mural/horprovas-1bi-2017---informatica---noturno.pdf</a>
                        </div>
                    </div>
                    <hr>
                    <div class="list-group-item">
                        <div class="row-content">
                            <div class="least-content">21/03/2017</div>
                            <h4>Eletrônica</h4>
                            <a href="http://www.cti.feb.unesp.br/Home/mural/horario-de-provas---1bi---2017---diurno---300317---eletronica.pdf"
                               target="_blank"
                               class="list-group-item-text"> <strong>Integral</strong> -
                                http://www.cti.feb.unesp.br/Home/mural/horario-de-provas---1bi---2017---diurno---300317---eletronica.pdf</a><br>
                            <a href="http://www.cti.feb.unesp.br/Home/mural/horario-de-provas---1-bi---eletronica---noite---v3.pdf"
                               target="_blank"
                               class="list-group-item-text"> <strong>Noturno</strong> -
                                http://www.cti.feb.unesp.br/Home/mural/horario-de-provas---1-bi---eletronica---noite---v3.pdf</a>
                        </div>
                    </div>
                    <hr>
                    <div class="list-group-item">
                        <div class="row-content">
                            <div class="least-content">21/03/2017</div>
                            <h4>Mecânica</h4>
                            <a href="http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf" target="_blank"
                               class="list-group-item-text"> <strong>Integral</strong> -
                                http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf</a><br>
                            <a href="http://www.cti.feb.unesp.br/Home/mural/horario-provas-1bi---2017-mecanica-noite.pdf"
                               target="_blank"
                               class="list-group-item-text"> <strong>Noturno</strong> -
                                http://www.cti.feb.unesp.br/Home/mural/horario-provas-1bi---2017-mecanica-noite.pdf</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="provas4">
            <div class="tab-pane fade active in" id="geral">
                <div class="list-group">
                    <hr>
                    <div class="list-group-item">
                        <div class="row-content">
                            <div class="least-content">21/03/2017</div>
                            <h4>Informática</h4>
                            <a href="http://www.cti.feb.unesp.br/Home/mural/horprovasinfo1bi17.pdf" target="_blank"
                               class="list-group-item-text"> <strong>Integral</strong> -
                                http://www.cti.feb.unesp.br/Home/mural/horprovasinfo1bi17.pdf</a><br>
                            <a href="http://www.cti.feb.unesp.br/Home/mural/horprovas-1bi-2017---informatica---noturno.pdf"
                               target="_blank"
                               class="list-group-item-text"> <strong>Noturno</strong> -
                                http://www.cti.feb.unesp.br/Home/mural/horprovas-1bi-2017---informatica---noturno.pdf</a>
                        </div>
                    </div>
                    <hr>
                    <div class="list-group-item">
                        <div class="row-content">
                            <div class="least-content">21/03/2017</div>
                            <h4>Eletrônica</h4>
                            <a href="http://www.cti.feb.unesp.br/Home/mural/horario-de-provas---1bi---2017---diurno---300317---eletronica.pdf"
                               target="_blank"
                               class="list-group-item-text"> <strong>Integral</strong> -
                                http://www.cti.feb.unesp.br/Home/mural/horario-de-provas---1bi---2017---diurno---300317---eletronica.pdf</a><br>
                            <a href="http://www.cti.feb.unesp.br/Home/mural/horario-de-provas---1-bi---eletronica---noite---v3.pdf"
                               target="_blank"
                               class="list-group-item-text"> <strong>Noturno</strong> -
                                http://www.cti.feb.unesp.br/Home/mural/horario-de-provas---1-bi---eletronica---noite---v3.pdf</a>
                        </div>
                    </div>
                    <hr>
                    <div class="list-group-item">
                        <div class="row-content">
                            <div class="least-content">21/03/2017</div>
                            <h4>Mecânica</h4>
                            <a href="http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf" target="_blank"
                               class="list-group-item-text"> <strong>Integral</strong> -
                                http://www.cti.feb.unesp.br/Home/mural/horprovamec1bi17.pdf</a><br>
                            <a href="http://www.cti.feb.unesp.br/Home/mural/horario-provas-1bi---2017-mecanica-noite.pdf"
                               target="_blank"
                               class="list-group-item-text"> <strong>Noturno</strong> -
                                http://www.cti.feb.unesp.br/Home/mural/horario-provas-1bi---2017-mecanica-noite.pdf</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="info-aulas">
            <div class="tab-pane fade active in" id="geral">
                <div class="list-group">
                    <hr>
                    <div class="list-group-item">
                        <div class="row-content">
                            <div class="least-content">21/03/2017</div>
                            <h4>Integral</h4>
                            <a href="#link" target="_blank"
                               class="list-group-item-text"> <strong>71A</strong> -
                                >link<</a><br>
                            <a href="#link" target="_blank"
                               class="list-group-item-text"> <strong>71B</strong> -
                                >link<</a><br>
                            <a href="#link" target="_blank"
                               class="list-group-item-text"> <strong>72A</strong> -
                                >link<</a><br>
                            <a href="#link" target="_blank"
                               class="list-group-item-text"> <strong>72B</strong> -
                                >link<</a><br>
                            <a href="#link" target="_blank"
                               class="list-group-item-text"> <strong>73B</strong> -
                                >link<</a><br>
                            <a href="#link" target="_blank"
                               class="list-group-item-text"> <strong>73B</strong> -
                                >link<</a><br>
                        </div>
                    </div>
                    <hr>
                    <div class="list-group-item">
                        <div class="row-content">
                            <div class="least-content">21/03/2017</div>
                            <h4>Integral</h4>
                            <a href="#link" target="_blank"
                               class="list-group-item-text"> <strong>71C</strong> -
                                >link<</a><br>
                            <a href="#link" target="_blank"
                               class="list-group-item-text"> <strong>72C</strong> -
                                >link<</a><br>
                            <a href="#link" target="_blank"
                               class="list-group-item-text"> <strong>72D</strong> -
                                >link<</a><br>
                            <a href="#link" target="_blank"
                               class="list-group-item-text"> <strong>73C</strong> -
                                >link<</a><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="eletro-aulas">
            <div class="tab-pane fade active in" id="geral">
                <div class="list-group">
                    <hr>
                    <div class="list-group-item">
                        <div class="row-content">
                            <div class="least-content">21/03/2017</div>
                            <h4>Integral</h4>
                            <a href="#link" target="_blank"
                               class="list-group-item-text"> <strong>51A</strong> -
                                >link<</a><br>
                            <a href="#link" target="_blank"
                               class="list-group-item-text"> <strong>52A</strong> -
                                >link<</a><br>
                            <a href="#link" target="_blank"
                               class="list-group-item-text"> <strong>53A</strong> -
                                >link<</a><br>
                        </div>
                    </div>
                    <hr>
                    <div class="list-group-item">
                        <div class="row-content">
                            <div class="least-content">21/03/2017</div>
                            <h4>Integral</h4>
                            <a href="#link" target="_blank"
                               class="list-group-item-text"> <strong>51B</strong> -
                                >link<</a><br>
                            <a href="#link" target="_blank"
                               class="list-group-item-text"> <strong>52B</strong> -
                                >link<</a><br>
                            <a href="#link" target="_blank"
                               class="list-group-item-text"> <strong>53B</strong> -
                                >link<</a><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="meca-aulas">
            <div class="tab-pane fade active in" id="geral">
                <div class="list-group">
                    <hr>
                    <div class="list-group-item">
                        <div class="row-content">
                            <div class="least-content">21/03/2017</div>
                            <h4>Integral</h4>
                            <a href="#link" target="_blank"
                               class="list-group-item-text"> <strong>11A</strong> -
                                >link<</a><br>
                            <a href="#link" target="_blank"
                               class="list-group-item-text"> <strong>12A</strong> -
                                >link<</a><br>
                            <a href="#link" target="_blank"
                               class="list-group-item-text"> <strong>13A</strong> -
                                >link<</a><br>
                        </div>
                    </div>
                    <hr>
                    <div class="list-group-item">
                        <div class="row-content">
                            <div class="least-content">21/03/2017</div>
                            <h4>Integral</h4>
                            <a href="#link" target="_blank"
                               class="list-group-item-text"> <strong>11B</strong> -
                                >link<</a><br>
                            <a href="#link" target="_blank"
                               class="list-group-item-text"> <strong>12B</strong> -
                                >link<</a><br>
                            <a href="#link" target="_blank"
                               class="list-group-item-text"> <strong>13B</strong> -
                                >link<</a><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
