<form method="POST">
    <input type="hidden" name="id" value="<?php echo $pessoa->getId(); ?>" />
    <fieldset>
        <legend>Nova Pessoa</legend>
        
        <label>
            Cpf:
            <?php if ($tem_erros && isset($erros_validacao['cpf'])) : ?>
                <span class="erro"><?php echo $erros_validacao['cpf']; ?></span>
            <?php endif; ?>
            <input type="text" name="cpf" value="<?php echo $pessoa->getCpf(); ?>" />
        </label>

        <label>
            
            Nome:
            <?php if ($tem_erros && isset($erros_validacao['nome'])) : ?>
                <span class="erro"><?php echo $erros_validacao['nome']; ?></span>
            <?php endif; ?>
            <input type="text" name="nome" value="<?php echo $pessoa->getNome(); ?>" />
        </label>

        <label>
            Email:
            <input type="text" name="email" value="<?php echo $pessoa->getEmail(); ?>" />
        </label>
        
        <input type="submit" value="Cadastrar" />
    </fieldset>
</form>