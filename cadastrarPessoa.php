<?php
include "config.php";

include "classes/classeBanco.php";
include "classes/classePessoa.php";

//$banco = new Banco($mysqli);

$exibir_tabela = true;
$tem_erros = false;
$erros_validacao = [];

function tem_post()
{
    if (count($_POST) > 0) {
        return true;
    }
    return false;
}

$pessoa = new Pessoa($mysqli);
if (tem_post()) {

    if (array_key_exists('cpf', $_POST) && strlen($_POST['cpf']) > 0) {
        $pessoa->setCpf($_POST['cpf']);
    } else {
        $tem_erros = true;
        $erros_validacao['cpf'] = 'O cpf da pessoa é obrigatório!';
    }

    if (array_key_exists('nome', $_POST) && strlen($_POST['nome']) > 0) {
        $pessoa->setNome($_POST['nome']);
    } else {
        $tem_erros = true;
        $erros_validacao['nome'] = 'O nome da tarefa é obrigatório!';
    }
    if (array_key_exists('email', $_POST)) {
        $pessoa->setEmail($_POST['email']);
    } else {
        $pessoa['email'] = '';
    }


    if (! $tem_erros) {
        $pessoa->gravar_pessoa($pessoa);
        header('Location: cadastrarPessoa.php');
        die();
    }
}
$pessoa->listar_pessoas();
include "template.php";