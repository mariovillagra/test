<?php
// Conexão ao banco de dados (MySQL)
define("BD_SERVIDOR", "localhost");
define("BD_USUARIO", "sistemapessoas");
define("BD_SENHA", "sistema");
define("BD_BANCO", "sistema");

$mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO, BD_SENHA, BD_BANCO);
