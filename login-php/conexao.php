<?php
define('HOST', '');
define('USUARIO', '');
define('SENHA', '');
define('DB', '');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');

// Para proteger os meus dados e do meu site removi os 
// dados de host,usuario,senha e db.