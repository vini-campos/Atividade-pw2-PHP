<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="form-container">
        <h1>Formulário de Cadastro</h1>

        <form action="dados.php" method="post" enctype="multipart/form-data">
            <div class="row-cols-2-custom">
                <div>
                    <label for="nom" class="form-label">Nome</label>
                    <input type="text" class="form-control" name="nome" id="nom" maxlength="50"
                        placeholder="Seu nome" required>
                </div>

                <div>
                    <label for="sob" class="form-label">Sobrenome</label>
                    <input type="text" class="form-control" name="sobrenome" id="sob" maxlength="50"
                        placeholder="Seu sobrenome" required>
                </div>
            </div>

            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" maxlength="50"
                    placeholder="Seu email" required>
            </div>

            <div class="mb-3">
                <label for="end" class="form-label">Endereço</label>
                <input type="text" class="form-control" name="endereco" id="end" maxlength="50"
                    placeholder="Seu endereço" required>
            </div>

            <div class="row-cols-2-custom">
                <div>
                    <label for="tel" class="form-label">Telefone</label>
                    <input type="tel" class="form-control" name="telefone" id="tel" maxlength="50"
                        placeholder="(00) 00000-0000" required>
                </div>

                <div>
                    <label for="dtnasc" class="form-label">Data de nascimento</label>
                    <input type="date" class="form-control" name="datanasc" id="dtnasc"
                        min="2012-01-01" max="2020-12-31" required>
                </div>
            </div>

            <div class="mb-4 mt-3">
                <label for="arquivo" class="form-label">Foto</label>
                <input type="file" class="form-control" accept="image/*" name="arq" id="arquivo">
            </div>

            <button type="submit" class="btn-submit">Enviar</button>
        </form>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>