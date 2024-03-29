


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuario</title>
    <style>
        label, input { display: block;}
    </style>
</head>
<body>
    <form action="/pessoa/save" method="post">
        <fieldset>
            <legend>Cadastro de Usuario</legend>
            <input name="id" id="id" type="hidden" value="<?= $model->id ?>" />
      
            <hr />  
            <label for="nome">Nome:</label>
            <input name="nome" id="nome" type="text" value="<?= $model->nome ?>" />

            <label for="usuario">Usuario:</label>
            <input name="usuario" id="usuario" type="text" value="<?= $model->usuario ?>" />

            <label for="email">E-mail:</label>
            <input name="email" id="email" type="email" value="<?= $model->email ?>" />

            <label for="senha">Senha:</label>
            <input name="senha" id="senha" type="password" value="<?= $model->senha ?>" />

            <button type="submit">Enviar</button>
            
            <hr />

        </fieldset>
    </form>    
</body>
</html>