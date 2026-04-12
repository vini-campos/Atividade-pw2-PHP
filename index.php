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
        <h2>Formulário de Cadastro</h2>

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

            <div class="mb-1">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" maxlength="50"
                    placeholder="Seu email" required>
            </div>

            <div class="mb-1">
                <label for="end" class="form-label">Endereço</label>
                <input type="text" class="form-control" name="endereco" id="end" maxlength="50"
                    placeholder="Seu endereço" required>
            </div>

            <div class="row-cols-2-custom">
                <div>
                    <label for="tel" class="form-label">Telefone</label>
                    <input type="tel" class="form-control" name="telefone" id="tel" maxlength="15"
                        placeholder="(00) 00000-0000" required>
                    <div id="erro-tel" style="color:red; display:none;">
                        Número incompleto
                    </div>
                </div>

                <div>
                    <label for="dtnasc" class="form-label">Data de nascimento</label>
                    <input type="date" class="form-control" name="datanasc" id="dtnasc"
                        min="1950-01-01" max="2008-12-31" required>
                </div>
            </div>

            <div class="mb-1">
                <label for="arquivo" class="form-label">Foto</label>
                <div id="div-img-preview">

                </div>
                <input type="file" class="form-control" accept="image/*" name="arq" id="arquivo"
                    required="Selecione uma imagem">
            </div>

            <button type="submit" class="btn-submit mt-3">Enviar</button>
        </form>
    </div>
    <script>
        const input = document.getElementById("tel");
        const erro = document.getElementById("erro-tel");
        const form = document.querySelector("form");

        function soNumeros(v) {
            return v.replace(/\D/g, '');
        }

        function formatarTelefone(valor) {
            let v = soNumeros(valor);

            if (v.length > 2) {
                v = "(" + v.slice(0, 2) + ") " + v.slice(2);
            }

            if (v.length > 10) {
                v = v.slice(0, 10) + "-" + v.slice(10);
            }

            return v;
        }

        function validarTelefone(valor) {
            return soNumeros(valor).length === 11;
        }

        input.addEventListener("input", function(e) {
            e.target.value = formatarTelefone(e.target.value);
        });

        input.addEventListener("blur", function() {
            if (!validarTelefone(input.value) && input.value.length > 0) {
                erro.style.display = "block";
                input.style.borderColor = "red";
            } else {
                erro.style.display = "none";
                input.style.borderColor = "";
            }
        });

        form.addEventListener("submit", function(e) {
            if (!validarTelefone(input.value)) {
                e.preventDefault();

                erro.style.display = "block";
                input.style.borderColor = "red";
            }
        });
    </script>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/preview.js"></script>

</body>

</html>