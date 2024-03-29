<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
</head>

<body>
    <h1>Lista de Usuarios</h1>
    <table class="bordered striped centered">
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Usuario</th>
            <th>Email</th>
            <th>Senha</th>
      
 

        </tr>

        <?php foreach ($model->rows as $item) : ?>
            <tr>
                <td><?= $item['id'] ?></td>
                <td><?= $item['nome'] ?></td>
                <td><?= $item['usuario'] ?></td>
                <td><?= $item['email'] ?></td>
                <td><?= $item['senha'] ?></td>
                <td><a href="/pessoa/form?id=<?= $item['id'] ?>">editar</a></td>
                <td><a href="/pessoa/excluir?id=<?= $item['id'] ?>">deletar</a></td>
            </tr>
        <?php endforeach ?>
    </table>

</body>

</html>