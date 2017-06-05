<!DOCTYPE html>
<html ng-app="madmotors" lang="pt-br">
  <head>
    <?php  
    
        session_start();
        
        if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
        {
          unset($_SESSION['login']);
          unset($_SESSION['senha']);
          header('location:login.html');
        }

        $logado = $_SESSION['login'];
    ?>
      
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MadMotors - Encontre aqui seu veículo</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
	   <!-- Customs CSS -->
    <link href="css/modern-business.css" rel="stylesheet">
    <style>
    .btn.btn-primary{
    background-color:#222;
    border-color:#080808;
    }

    .btn.btn-primary:hover{
    background-color:#444;
    border-color:#666;
    }
    </style>
    
    <!-- AngularJS (obrigatório para utilizar o AngularJS -->
    <script type="text/javascript" src="js/angular.min.js"></script>

    <!-- homeCtrl -->
    <script type="text/javascript" src="js/cadastroCtrl.js"></script>

    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  </head>

  <body ng-controller="cadastroCtrl">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><i class="fa fa-home" aria-hidden="true"></i> MadMotors</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li>
                  <a href="login.html"><i class="fa fa-user"></i> Login</a>
                </li>
              </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

	<header id="myCarousel" class="carousel slide" style="margin-top:10px; height:25%;">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('images/slide-one.png');"></div>
                <div class="carousel-caption">
                    <!-- h2>Banner 1</h2 -->
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/slide-two.png');"></div>
                <div class="carousel-caption">
                    <!-- h2>Banner 2</h2 -->
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/slide-three.png');"></div>
                <div class="carousel-caption">
                    <!-- h2>Banner 3</h2 -->
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

	<div class="container" style="margin-top:10px">
		<div class="row">
			<div class="panel panel-default">
				<div class="panel-body" style="padding:20px">
					<div class="row">
						<form name="cadastroForm">
							<div class="col-xs-4 .col-sm-6" style="margin-top:10px">
								<label for="imagem">Imagem:</label>
								<input type="file" name="imagem"/>
							</div>
								<div class="col-md-3" style="margin-top:10px">	
										<input class="form-control" style="margin-bottom:10px" type="text" ng-model="cadastro.id_Usuario" name="usuarioID" placeholder="Usuário ID"/>
										<select class="form-control" style="margin-bottom:10px" ng-model="cadastro.marca" ng-options="marca.nomeMarca for marca in marcas" name="marca" ng-change="carregarModelos(cadastro.marca)">
										  <option value="">Selecione uma marca</option>								  
										</select>								
										<select class="form-control" style="margin-bottom:10px"  ng-model="cadastro.modelo" ng-disabled="!cadastro.marca" ng-options="modelo.nomeModelo for modelo in modelos">								
										  <option value="">Selecione uma modelo</option>													  
										</select>								
										<input class="form-control" style="margin-bottom:10px" type="text" ng-model="cadastro.cor" name="cor" placeholder="Cor"/>								
										<input class="form-control" style="margin-bottom:10px" type="text" ng-model="cadastro.numPortas" name="portas" placeholder="Portas"/>								
										 <label class="form-check-label">Estado</label>								
										<div class="form-check form-check-inline" style="margin-bottom:10px">								
										  <label class="form-check-label" style="margin-right:10px">								  
											<input class="form-check-input" type="radio" ng-model="cadastro.estado" name="inlineRadioOptions" id="novo" value="novo"> Novo								  
										  </label>
										  <label class="form-check-label" style="margin-right:10px">								  
											<input class="form-check-input" type="radio" ng-model="cadastro.estado" name="inlineRadioOptions" id="seminovo" value="seminovo"> Seminovo
										  </label>								
										</div>											
								</div>
								<div class="col-md-3" style="margin-top:10px">
										<input class="form-control" style="margin-bottom:10px" type="text" ng-model="cadastro.ano" name="ano" placeholder="Ano"/>
										<input class="form-control" style="margin-bottom:10px" type="text" ng-model="cadastro.quilometragem" name="km" placeholder="KM"/>
										<input class="form-control" style="margin-bottom:10px" type="text" ng-model="cadastro.combustivel" name="combustivel" placeholder="Combustivel"/>
										<input class="form-control" style="margin-bottom:10px" type="text" ng-model="cadastro.localizacao" name="localizacao" placeholder="Localização"/>
										<select class="form-control" style="margin-bottom:10px" type="text" ng-model="cadastro.cambio" name="cambio" placeholder="Cambio">
										  <option value="">Selecione um cambio</option>
										  <option ng-repeat="cambio in cambios | orderBy:'nome'">{{cambio.nome}}</option>
										</select>
										<select class="form-control" style="margin-bottom:10px" type="text" ng-model="cadastro.carroceria" name="carroceria" placeholder="Carroceria">
										  <option value="">Selecione uma carroceria</option>
										  <option ng-repeat="carroceria in carrocerias | orderBy:'nome'">{{carroceria.nome}}</option>
										</select>
										<input class="form-control" style="margin-bottom:10px" type="text" ng-model="cadastro.preco" name="preco" placeholder="Preço R$"/>
										<textarea class="form-control" style="margin-bottom:10px" type="text" ng-model="cadastro.comentarios" name="comentarios" placeholder="Comentarios"></textarea>		
								</div>
						</form>
					</div>
					<div class="row">
						<div style="text-align: center; margin-top:50px"> 
						
							<button class="btn btn-primary" type="submit" ng-click="cadastrar(cadastro)" ng-disabled="!cadastro.marca || !cadastro.modelo || !cadastro.estado || !cadastro.ano || !cadastro.cor || !cadastro.numPortas
							|| !cadastro.quilometragem || !cadastro.cambio || !cadastro.combustivel || !cadastro.carroceria || !cadastro.localizacao || !cadastro.preco">Cadastrar Anuncio</button>
							
							<button class="btn btn-primary" type="submit" style="margin-left:150px">Cancelar</button>
							
						</div>
					</div>					
				</div>
			</div>
		</div>
	</div>



    <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="js/bootstrap.min.js"></script>

	<!-- Script to Activate the Carousel -->
    <script>
		$('.carousel').carousel({
			interval: 5000 //changes the speed
		})
    </script>
  </body>
</html>