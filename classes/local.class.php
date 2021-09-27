<?php
require_once("classes/core.class.php");
# usuario
class Local extends Core{

	// metodos
	public $nome;
	public $valor;

	// nome da tabela do banusuarioco de dados dessa classe
	public $tabela = "creche";
	// perguntar
	public function localizacao(){
		?>
	<div class="row">
    <div class="col-7 map">
    	<!-- se tu achar necessario, muda o espacamento aqui.. e apaga esse comentario depois -->
    	<br>
    	<!-- Campo de pesquisa e botao -->
    	<div class="col-12 botaoPesquisa">
    		<div class="input-group mb-3">
			  <input type="text" class="form-control" placeholder="Buscar Creche.." aria-label="Buscar Creche.." aria-describedby="botaoPesquisa">
			  <div class="input-group-append">
			    <button class="btn btn-outline-secondary" type="button" id="botaoPesquisa">Buscar</button>
			  </div>
			</div>
    	</div>
    	<!-- Campos com Nome, localizacao, informacoes gerais -->
    	<h1 id="nomeCreche">
    		<?php
		$this->sql = "SELECT * FROM $this->tabela";
		$this->prepara = mysqli_query($this->conexao, $this->sql);

		while ($this->rs = mysqli_fetch_array($this->prepara)) {
			
			echo "<tr>";
		    echo "  <td>".$this->rs['empresa']."</td>";
			echo "  <td>";
    		
    		?>
    	</h1>
		<hr>
    	<h2 id="localCreche">
    		<?php 
    		echo "<tr>";
		    echo "  <td>".$this->rs['endereco'].", </td>";
			echo "  <td>";

			echo "<tr>";
		    echo "  <td>".$this->rs['cidade'].", </td>";
			echo "  <td>";

			echo "<tr>";
		    echo "  <td>".$this->rs['uf']."</td>";
			echo "  <td>";
		}
			?>
    	</h2>
    		
    	<hr>
    	
    	<p id="foto">
    		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vitae ligula non lacus sodales consequat iaculis eget tortor. Duis pharetra justo ac lorem gravida iaculis in aliquam nunc. Sed in iaculis ex, non venenatis libero Quisque vel leo ut neque gravida mollis. Vestibulum nisl lorem, rhoncus in risus ut, maximus cursus risus. Sed semper tempus tortor, eu gravida tortor tempor vitae. Mauris diam nisi, ornare quis metus sit amet, consequat gravida dui. Suspendisse potenti.
    	</p>

    	<!-- Blocos com cadastro, fila de espera, contato da creche -->
    	<hr>
    	<div class="row">
	        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4 mapa">
	        	<div class="jumbotron">
				  <h1 class="display-4">Melhor rota!</h1>
				  <p class="lead">Clique aqui para encontrar a rota mais rapida.</p>
				 
	        	  
				  <a  href="#"><i class="fas fa-route" id="iconRota"></i></a>
				</div>
	    	</div>
	        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
	        	<div class="jumbotron">
				  <h1 class="display-4">Fila de espera!</h1>
				  <p class="lead">Clique aqui para saber a quantidade de vagas.</p>	

	        	  
				  <a href=""><i class="fas fa-clipboard-list" id="iconFila"></i></a>

	    		</div>
	    	</div>
	        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
	        	<div class="jumbotron">
				  <h1 class="display-4">Nosso contato!</h1>
				  <p class="lead">Entre em contato conosco para mais informações!</p>

				
				
				  	
	        	<a href=""><i class="fas fa-phone" id="iconContato"></i></a>
				
				  
				</div>
	    	</div>
	        
      	</div>
    </div>
    <div class="row">
    	<div class="col-sm-12 col-md-6 col-lg-5 col-xl-5 mapa">
    		<!-- no src="" vai a variavel mais pra frente.. -->
    		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14234.153836304813!2d-49.08219456015936!3d-26.88640118022164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94df1ee046bc8c85%3A0x72b67f4a2d897735!2sCEI+Meninos+e+Meninas!5e0!3m2!1spt-BR!2sbr!4v1533837142162" width="580" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
    	</div>
    </div>
  </div>

		<?php
}
}