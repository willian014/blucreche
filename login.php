<?php
# INDEX
require_once("classes/usuario.class.php");

$usuario    = new Usuario();
echo $usuario->login();
echo $usuario->logado();
echo $usuario->logout();
echo $usuario->loginForm();

?>