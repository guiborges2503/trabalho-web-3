<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pessoas</title>
</head>

<body>
    <h1>Lista de Pessoas</h1>
    <table border="3">
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Rg</th>
            <th>CPF</th>
            <th>Data Nascimento</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Endereço</th>
        </tr>

        <?php foreach ($model->rows as $item) : ?>
            <tr>
                <td><?= $item['id'] ?></td>
                <td><?= $item['nome'] ?></td>
                <td><?= $item['rg'] ?></td>
                <td><?= $item['cpf'] ?></td>
                <td><?= $item['data_nascimento'] ?></td>
                <td><?= $item['telefone'] ?></td>
                <td><?= $item['email'] ?></td>
                <td><?= $item['endereco'] ?></td>
            </tr>
        <?php endforeach ?>
    </table>

</body>

</html>