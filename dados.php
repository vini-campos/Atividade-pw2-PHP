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
        <div>
            //mudar depois antes do lf perguntar sobre tudo isso
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['arq'])) {

                $nome = $_FILES['arq']['name'];
                $tmp = $_FILES['arq']['tmp_name'];

                $caminho = "uploads/" . $nome;

                move_uploaded_file($tmp, $caminho);
            }?>
            <div style="align-items: center; display: flex; flex-direction: column;">
                <?php echo "<img src='$caminho' width='500' height=auto>"; ?>
            </div>
            
        </div>
    </div>
</body>

</html>