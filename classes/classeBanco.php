<?php
class Banco
{
    private $bd;
    public function __construct($bd)
    {
        $this->bd = $bd;
    }
    public function gravar_pessoa(Pessoa $pessoa)
    {
        $cpf = $pessoa->getCpf();
        $nome = $pessoa->getNome();
        $email = $pessoa->getEmail();
        $sqlGravar = "
            INSERT INTO pessoas
            (cpf, nome, email)
            VALUES
            (
                '{$cpf}',
                '{$nome}',
                '{$email}'
            )
        ";
        $this->bd->query($sqlGravar);
    }

    public function listar_pessoas()
    {
        $sqlBusca = 'SELECT * FROM pessoas';
        $resultado = $this->bd->query($sqlBusca);
        $this->pessoas = [];
        
        while ($pessoa = mysqli_fetch_assoc($resultado)) {
            $this->pessoas[] = $pessoa;
        }
        return $this->pessoas;
    }
}