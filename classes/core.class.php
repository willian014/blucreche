<?php
# core

class Core {
	// cadastros
	public $id;
	public $nome;

	// bd
	public $local = "localhost";
	public $user  = "root";
	public $pass  = "";
	public $banco = "creche";
	public $conexao;

	// mysql
	public $sql;
	public $prepara;

	public function __construct() {

		# inicializa sessao
		session_start();

		// conexao Mysql
		$this->conexao = mysqli_connect($this->local,$this->user,$this->pass,$this->banco);
		//chamar login
		# chamar cabeçalho
		$this->header();

		# chamar menu
		$this->menu();

	}

	public function __destruct() {


		# chamar rodapé
		$this->footer();


	}


	public function header(){

		?>
			<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <!-- Bootstrap CSS -->
	    <link rel="stylesheet" href="css/bootstrap.min.css">
	    <link rel="stylesheet" href="css/estilos.css">
	    <link rel="stylesheet" href="css/media.css">
	    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

		<title></title>
	</head>
	<body>

<div class="container-fluid">


		<?php
	}

	public function menu(){
		?>
	<nav class="row navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="index.php"><img src="imagens/Logo3.png" width="40"></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Creches
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="local.php">Localização</a>
	          <a class="dropdown-item" href="#">Mais proximas de você</a>
	          <a class="dropdown-item" href="#">Da cidade</a>
	        </div>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="contato.php">Contato</a>
	      </li>
	    </ul>
	  </div>
	</nav>
		<?php

	}
	public function slide(){
		?>
<!-- slide aqui -->
<div id="carouselExampleControls" class="row carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="imagens/crianca1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imagens/crianca2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imagens/crianca3.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

		<?php
	}
	public function conteudo(){
	?>
	<div class="row conteudo">
	
		<div class="col-sm-12 col-md-6 col-lg-4 col-xl-2 menu text-center">
			<p class="textMenu">
			Localiza aqui 	<br>
			Textinho para convercer<br>
			as pessoas a usar o sistema
			</p>

			<i class="fas fa-map-marked-alt"></i> 	

		

		</div>


		<div class="col-sm-12 col-md-6 col-lg-4 col-xl-2 menu text-center">
			
			<p class="textMenu">
			Fila de Espera	<br>
			Veja sua posição<br>
			na fila de espera
			</p>
		<i class="fas fa-clipboard-list"></i>



		</div>

		<div class="col-sm-12 col-md-6 col-lg-4 col-xl-2 menu text-center">
			
			<p class="textMenu">
			Perguntas frequentes<br>
			Veja se da para resolver
			seu problema aqui...
			</p>

		<i class="fas fa-question"></i>
		</div>

		<div class="col-sm-12 col-md-6 col-lg-4 col-xl-2 menu text-center">
			
			<p class="textMenu">
			Perfil 	<br>
			Textinho para convercer<br>
			as pessoas a usar o sistema
			</p>

		<i class="fas fa-user"></i>
		</div>

		<div class="col-sm-12 col-md-6 col-lg-4 col-xl-2 menu text-center">
			
			<p class="textMenu">
				Cadastro <br>
				Textinho para convercer<br>
				as pessoas se cadastrar
			</p>

			<i class="fas fa-user-plus"></i>
		</div>

		<div class="col-sm-12 col-md-6 col-lg-4 col-xl-2 menu text-center">
			
			<p class="textMenu">
				Fale conosco<br>
				Textinho para convercer<br>
				as pessoas se cadastrar
			</p>
			<p>
		<i class="fas fa-phone"></i>
			</p>
		</div>

	</div>
		<?php	
	}

	public function conheca(){

		?>
	<div class="row conheca">		
<!-- 		achar uma creche nunca foi tao facil com blucreche
					saiba mais -->	
		<p class="textoImg">Achar uma creche nunca foi tão fácil assim!!</p>
		<p class="textoImg">	<button type="button" class="btn btn-info">Saiba mais</button>   </p>
		<img src="imagens/mapa3.gif" class="col-12 imagemMapa">
		

	</div>
		<?php
	}
	public function algo(){

		?>
		Algo
		<?php
	}		
public function footer(){
	?>			
	<div class="row rodape">
	    <div class="col-12 text-center">
	        &copy; Isso é a ultima coisa que vou fazer  
	    </div>
	</div>
	    <!-- Optional JavaScript -->
	    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	    <script src="js/jquery-3.3.1.slim.min.js"></script>
	    <script src="js/popper.min.js"></script>
	    <script src="js/bootstrap.min.js"></script>
</div>
</body>
</html>
		<?php
}
}