@extends('layouts.app')

@section('content')
    <!-- Main img -->
    <div class="row">
        <div class="col-md-12">
            <img class="logo-main center-block" src="images/cti_icon.png" alt="Logo CTI">
        </div>
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <p class="text-main">Bem vindo ao NSAC do Colégio Técnico Industrial "Prof. Isaac Portal Roldán"</p>
        </div>
        <div class="col-md-4"></div>
    </div>
    <!-- Feature -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <a class="feature-link" href="https://pt-br.facebook.com/cti.unesp.bauru/" target="_blank">
                    <div class="feature-card center-block">
                        <div class="container-fluid">
                            <img class="feature-img" src="images/face_icon.png" alt="">
                            <h4 class="feature-title">Facebook</h4>
                            <p class="feature-text">
                                <small>Acompanhe a página do Facebook da escola para ficar ligado nas novidades</small>
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a class="feature-link" href="http://www.cti.feb.unesp.br/" target="_blank">
                    <div class="feature-card center-block">
                        <div class="container-fluid">
                            <img class="feature-img" src="images/unesp_icon.jpg" alt="">
                            <h4 class="feature-title">Site do CTI</h4>
                            <p class="feature-text">
                                <small>Acesse o site da escola para obter mais informações sobre eventos, etc...</small>
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a class="feature-link" href="https://pt-br.facebook.com/cti.unesp.bauru/" target="_blank">
                    <div class="feature-card center-block">
                        <div class="container-fluid">
                            <img class="feature-img not-rounded" src="images/adde_icon.png" alt="">
                            <h4 class="feature-title">Facebook</h4>
                            <p class="feature-text">
                                <small>Acesse a página do Facebook do grupo Adde para ter mais informações do grupo</small>
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection