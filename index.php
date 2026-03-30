<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            background: #3d3b3b;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .form-container {
            background: #c7c7c7;
            border-radius: 10px;
            padding: 45px;
            max-width: 700px;
            width: 100%;
        }

        .form-container h1 {
            text-align: center;
            padding-bottom: 25px;
        }

        .form-label {
            font-weight: 500;
            color: #2c2b2b;
        }

        .form-control {
            padding: 9px;

        }

        .form-control:focus {
            box-shadow: 0 0 0 2.5px rgba(93, 118, 230, 0.25);
        }

        .btn-submit {
            background: #626263;
            border: none;
            color: white;
            font-weight: 600;
            padding: 12px;
            border-radius: 6px;
            width: 100%;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .btn-submit:hover {
            transform: translateY(-1px);
            box-shadow: 0 8px 20px rgba(86, 87, 88, 0.4);
        }

        .row-cols-2-custom {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        @media (max-width: 576px) {
            .row-cols-2-custom {
                grid-template-columns: 1fr;
            }

            .form-container {
                padding: 15px;
            }
        }
    </style>
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