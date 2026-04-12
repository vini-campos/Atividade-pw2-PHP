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
                <?php
                    $nome = $_POST["nome"];
                    //primeira letra maiuscula no nnome e sobrenome
                    $nome = ucfirst($nome);

                    $sobrenome = $_POST["sobrenome"];
                    $sobrenome = ucfirst($sobrenome);

                    $email = $_POST["email"];
                    $endereco = $_POST["endereco"];
                    $telefone = $_POST["telefone"];
                    $datanasc = $_POST["datanasc"];

                    $b = $datanasc;
                    $c = new DateTime("$b", new DateTimeZone("America/Sao_Paulo"));
                    $dataformatada = $c ->format("d/m/Y");
                ?>

                <h1>Dados do Formulário</h1>
                <p><strong>Nome:</strong> <?php echo $nome; ?></p>
                <p><strong>Sobrenome:</strong> <?php echo $sobrenome; ?></p>
                <p><strong>Email:</strong> <?php echo $email; ?></p>
                <p><strong>Endereço:</strong> <?php echo $endereco; ?></p>
                <p><strong>Telefone:</strong> <?php echo $telefone; ?></p>
                <p><strong>Data de Nascimento:</strong> <?php echo $dataformatada; ?></p>
            </div>
        </div>

        <div class="form-direita">
            <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['arq']))
                {
                    $nome = $_FILES['arq']['name'];
                    $temporario = $_FILES['arq']['tmp_name'];
                    $caminho = "uploads/" . $nome;
                    move_uploaded_file($temporario, $caminho);
                }
            ?>
            <div class="foto-enviada">
                <?php echo "<img src='$caminho' style='max-width: 100%; height: auto; max-height: 300px;'>"; ?>
            </div>
        </div>  
    </div>
</body>

</html>