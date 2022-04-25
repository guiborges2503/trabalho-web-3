<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produto</title>
</head>

<body>
    <h1>Lista de Produto</h1>
    <table border="3">
        <tr>
            <th>Id</th>
            <th>Codigo</th>
            <th>Produto</th>
            <th>Descrição</th>
            <th>Data</th>
            <th>Valor</th>
        </tr>

        <?php foreach ($model->rows as $item) : ?>
            <tr>
                <td><?= $item['id'] ?></td>
                <td><?= $item['codigo'] ?></td>
                <td><?= $item['produto'] ?></td>
                <td><?= $item['descricao'] ?></td>
                <td><?= $item['data'] ?></td>
                <td><?= $item['valor'] ?></td>
            </tr>
        <?php endforeach ?>
    </table>
</body>

</html>