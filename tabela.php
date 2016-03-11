<table>
    <tr>
        <th>Cpf</th>
        <th>Nome</th>
        <th>Email</th>
    </tr>
    <?php foreach ($banco->buscar_pessoas() as $pessoa) : ?>
        <tr>
            <td>
                <?php echo $pessoa['cpf']; ?>
            </td>
            <td>
                <?php echo $pessoa['nome']; ?>
            </td>
            <td>
                <?php echo $pessoa['email']; ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>