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
    <div class="form-grid">
        <div class="form-esquerda">
            <div class="form-container">
                <h1>Dados do Formulário</h1>
                <p><strong>Nome:</strong> <?php echo $_POST['nome']; ?></p>
                <p><strong>Sobrenome:</strong> <?php echo $_POST['sobrenome']; ?></p>
                <p><strong>Email:</strong> <?php echo $_POST['email']; ?></p>
                <p><strong>Endereço:</strong> <?php echo $_POST['endereco']; ?></p>
                <?php
                    $telefone = $_POST['telefone'];
                    $a = substr($telefone,  0, 2);
                ?>
                <p><strong>Telefone:</strong> <?php echo $telefone?></p>
                <?php
                    $a = $_POST["datanasc"];
                    $d = new DateTime("$a", new DateTimeZone("America/Sao_Paulo"));
                ?>
                <p><strong>Data de Nascimento:</strong> <?php echo $d->format("d/m/Y")?></p>
            </div>
        </div>

        <div class="form-direita">
            <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['arq'])) {
                    $nome = $_FILES['arq']['name'];
                    $tmp = $_FILES['arq']['tmp_name'];
                    $caminho = "uploads/" . $nome;
                    move_uploaded_file($tmp, $caminho);
                }
            ?>
            <div style="align-items: center; justify-content: center; display: flex;">
                <?php echo "<img src='$caminho' style='max-width: 100%; height: auto; max-height: 300px;'>"; ?>
            </div>
        </div>
    </div>
</body>

</html>