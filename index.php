<?php
# INDEX
require_once("classes/core.class.php");

$core    = new Core();

// verificar se ta logado
		# chamar cabeçalho
echo $core->slide();
echo $core->conteudo();
echo $core->conheca();

?>