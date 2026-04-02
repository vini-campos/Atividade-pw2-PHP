<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Formulário</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="form-container">
        <h1>Dados do Formulário</h1>
        <p><strong>Nome:</strong> <?php echo $_POST['nome']; ?></p>
        <p><strong>Sobrenome:</strong> <?php echo $_POST['sobrenome']; ?></p>
        <p><strong>Email:</strong> <?php echo $_POST['email']; ?></p>
        <p><strong>Endereço:</strong> <?php echo $_POST['endereco']; ?></p>
        <p><strong>Telefone:</strong> <?php echo $_POST['telefone']; ?></p>
        <p><strong>Data de Nascimento:</strong> <?php echo $_POST['datanasc']; ?></p>
        //colocar o campo de aparecer a foto aqui.....
    </div>
</body>

</html>