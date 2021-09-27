<?php
require_once("classes/core.class.php");
# usuario
class Usuario extends Core{


	public $tabela = "usuario";
	public $usuario;
	public $senha;
# inicializa sessao

		# conectar no banco de dados
		// require_once("classes/conecta.class.php");
		// $conexao = new Conecta();


		public function login(){

// VERIFICAR SE NÃO ESTA NA PÁGINA LOGIN
	// retornar endereço da página
	$url 		= $_SERVER['PHP_SELF'];
	// transforma o endereço em vetor, usando / como
	// criterio de separação
	$vetor_url  = explode('/', $url);
	// pegar ultimo dado do vetor
	$pagina 	= end($vetor_url);

	// verifica se esta em qualquer página que não
	// seja a login.php
	if ($pagina != 'login.php') {
		// verifica se NAO esta autenticado
		if (!isset($_SESSION['autenticado'])) {
			// redireciona pra login.php
			header("Location: login.php");
		}
	}
// receber dados do formulário de LOGIN
if (isset($_POST['usuario']) && isset($_POST['senha']))  {

	// receber dados
	$usuario = $_POST['usuario'];
	$senha 	 = $_POST['senha'];

	// verificar se os campos foram preenchidos
	if ( !empty($usuario) && !empty($senha) ) {

		// verificar se o usuário existe no bando de dados
		$this->sql = "SELECT count(*) FROM $this->tabela 
				WHERE usuario = '".$usuario."'";

		$this->prepara = mysqli_query($this->conexao,$this->sql);
		$this->rs   = mysqli_fetch_array($this->prepara);

	  
	}
}

}
	public function logout(){
	//logout
	if (isset($_GET['sair'])) {
		// destruir sessao ativa
		session_destroy();
		// criar sessao nova
		session_start();
		// redirecionar pra pagina de login
		header("Location: login.php");
	}
	}

	// verifica se o usuário esta logado
	public function logado(){
				// usuario verificar se houve retorno
		if ($this->rs ['count(*)'] > 0) {

			// criptografar senha
			$senha_crypt = hash('sha512', $this->senha);

			$this->sql = "SELECT id, usuario, nome FROM $this->tabela WHERE 
							usuario = '".$this->usuario."' AND
							senha = '".$senha_crypt."'";

			$this->prepara = mysqli_query($this->conexao,$this->sql);
			$this->registro= mysqli_fetch_array($this->prepara);	  	
			$this->rs      = mysqli_num_rows($this->prepara);

			// SENHA | usuário e senha conferem
			if ($this->rs > 0) {

				# SESSION
				// autenticar / criar sessao
				$_SESSION['autenticado']= 'sim';
				$_SESSION['id'] 		= $this->registro['id'];
				$_SESSION['nome'] 		= $this->registro['nome'];
				// redirect pra index.php
				header("Location: index.php");

			} else {
				echo 'dados nao conferem';
			}

		} else {
			echo 'usuario nao existe';
		}	
	}

	// login form
	public function loginForm(){
		?>

<div class="form-row loginbox">
	<div class="col-9 col-sm-6 col-md-6 col-lg-3 col-xl-12 loginBox">

		<h4>Bem vindo 
			<br>
			<small>Preencha os dados para entrar</small>
		</h4>

		<form name="login" method="POST" action="#">
		<p>
			<label>
				Usuario: <br>
				<input type="usuario" class="form-control" name="usuario" placeholder="Digite seu e-mail">
			</label>
		</p>
		<p>
			<label>
				Senha: <br>
				<input type="password" class="form-control" name="senha" placeholder="Digite sua senha">
			</label>
		</p>
		<p>
			<input type="submit" name="Entrar"  class="btn btn-success">
		</p>

		</form>
	</div>
</div>

	<?php
	}

	// trocar senha
	public function alterarSenha(){

	}

	// trocar senha
	public function alterarSenhaForm(){

	}

	// adicionar empresa (gambi)
public function cadastroEmpresa(){
				
		?>

<form method="POST" action="#">


	

<h2>Cadastrar sua Empresa</h2>
<br>

	
 <div class="form-row">
    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
      <label for="validationTooltip01">Nome da creche: </label>
      <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite nome de sua creche">
    </div>
</div>

 <div class="form-row">
    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
        <label for="validationTooltip01">Endereço: </label>
        <input type="text" class="form-control" name="endereco" placeholder="Endereço">
    </div>
</div>

 <div class="form-row">
    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
    <label for="exampleFormControlSelect2">Selecione sua Cidade</label>
    <select  class="form-control" id="exampleFormControlSelect2">
      <option value="Blumenau">Blumenau		  		</option>
      <option value="Indaial">Indaial		  		</option>
      <option value="Timbó">Timbo			  		</option>
      <option value="Jaraguá do Sul">Jaragua do Sul </option>
      <option value="Ascurra">Ascurra		        </option>
    </select>
  </div>
</div>
  
<br>

   Observações da creche:


  <div class="form-row">
     <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8">
      <label for="validationTooltip01"></label>
    <textarea name="comentario" rows="10" cols="90" class="form-control" placeholder="Informe algumas observações da creche"></textarea>
</div>
</div>

<br>
<br>

<p>
    Endereço:
</p>
	
<div class="form-row">

    <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
        <label for="validationTooltip01"></label>
        <input type="text" name="cep" placeholder="Informe seu CEP" class="form-control">
    </div>
</div>

<br>
	<button type="button" class="col-sm-12 col-md-12 col-lg-1 col-xl-1 btn btn-success">Cadastrar</button>
	
	<br>
<br>
	
</form>

		<?php


}
public function cadastroCliente(){
				
		?>
		<?php


}
	// adicionar contato (gambi)
	public function contato(){
				
				?>
<div class="row contato">
	
	<div class="col-sm-4 col-md-6 col-lg-8 col-xl-6 ctContato ">
		
	  <form action="action_page.php">

	    <label for="nome">Nome Completo</label>
	    <input type="text" id="nome" name="nome" placeholder="Digite seu nome">

	    <label for="bairro">Bairro</label>
	    <select id="bairro" name="bairro">
	      <option value="fortaleza">Fortaleza</option>
	      <option value="centro">Centro</option>
	      <option value="vila nova">Vila nova</option>
	    </select>

	    <label for="motivo">Motivo</label>
	    <textarea id="motivo" name="motivo" placeholder="Informe o que aconteceu!" style="height:200px"></textarea>

	    <button type="button" class="btn btn-light botao col-sm-12 col-md-12 col-lg-2 col-xl-2 botao">Enviar</button>

	  </form>
	
	</div>	

</div>
		<?php


}


}




