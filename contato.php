<?php
# INDEX

require_once("classes/usuario.class.php");

$usuario = new Usuario();

// verificar se ta logado
		# chamar cabeçalho
echo $usuario->contato();


?>