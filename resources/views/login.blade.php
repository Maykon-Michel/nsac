<!DOCTYPE html>
<html>
	<head>
    
    	<title>NSAC</title>
        
    	<!-- Meta -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon -->
        <link rel="shortcut icon" href="../img/favicon.png">
        
        <!-- CSS -->
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/bootstrap-theme.css">
        <link rel="stylesheet" href="../css/style.css">
        
        <!-- Javascript -->
        <script src="../js/jquery-3.2.1.js"></script>
        <script src="../js/bootstrap.js"></script>
        <script src="../js/scripts.js"></script>
        
    </head>
    <body login>
    	
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar" role="navigation" tabindex="-1">
            <div class="navbar-header">
                <h1 class="navbar-brand">Login</h1>
            </div>
            <div class="container-fluid">
            	<form action="login.html" method="" id="frm-login">
                	<div class="input-group">
                    	<label for="ra" class="input-group-addon"><i class="glyphicon glyphicon-user"></i></label>
                		<input type="text" class="form-control" id="ra" placeholder="R.A.">
                    </div>
                	<div class="input-group">
                    	<label for="senha" class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></label>
                		<input type="text" class="form-control" id="senha" placeholder="Senha">
                    </div>
                    <input type="submit" class="form-control" value="Entrar">
                </form>
            </div>
        </nav>
        <div class="header">
            NSAC
            <a class="visible-xs visible-sm" onClick="$('#sidebar').focus()">Login</a>
        </div>
        <div class="main">
        	<div class="well">
            	<!-- Main img -->
                <div class="row">
                    <div class="col-md-12">
                        <img class="logo-main center-block" src="../imgs/cti_icon.png" alt="Logo CTI">
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
                                        <img class="feature-img" src="../imgs/face_icon.png" alt="">
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
                                        <img class="feature-img" src="../imgs/unesp_icon.jpg" alt="">
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
                                        <img class="feature-img not-rounded" src="../imgs/adde_icon.png" alt="">
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
            </div>
        </div>
        
    </body>
</html>