<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro de Cliente</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Estilos customizados -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            padding-top: 4rem;
        }
        .container {
            max-width: 500px;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        }
        h2 {
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }
        label {
            font-weight: bold;
        }
        .form-control {
            margin-bottom: 20px;
        }
        .btn-primary, .btn-secondary {
            width: 100%;
            margin-top: 10px; /* Adicionando espaço entre botões */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="mb-4">Formulário de Cadastro de Cliente</h2>
        <form action="CadastroClienteExe.php" method="post">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" name="nome" id="nome" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" class="form-control" name="senha" id="senha" required>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="ativo" name="ativo" value="1" checked>
                    <label class="form-check-label" for="ativo">
                        Cliente Ativo
                    </label>
                </div>
            </div>
            <div>
                <label for="cidade">Cidade:</label>
                <select name="cidade" id="cidade">
                    <?php
                        include('../../includes/conexao.php');
                        $sql = "SELECT * FROM cidade";
                        $result = mysqli_query($con,$sql);
                        while($row = mysqli_fetch_array($result)){
                            echo "<option value = '".$row['ID']."'>".$row['nome']."/".$row['estado']."</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Registrar</button>
                <a href="ListarCliente.php" class="btn btn-secondary">Ver Clientes Registrados</a>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS (opcional, apenas se necessário para funcionalidades do Bootstrap que usam JavaScript) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
