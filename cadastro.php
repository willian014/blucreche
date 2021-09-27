<?php
# INDEX
require_once("classes/usuario.class.php");

$core    = new Usuario();

// verificar se ta logado
		# chamar cabeçalho
echo $core->cadastroEmpresa();
	



?>