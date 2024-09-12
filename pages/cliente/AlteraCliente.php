<?php
    include('../../includes/conexao.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM cliente WHERE id=$id";
    $result = mysqli_query($con, $sql);

    // Verifica se a consulta retornou um resultado válido
    if (!$result) {
        die('Erro na consulta SQL: ' . mysqli_error($con));
    }

    // Verifica se encontrou algum registro
    if (mysqli_num_rows($result) == 0) {
        die('Nenhum cliente encontrado com o ID fornecido.');
    }

    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Alteração de Cliente</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Estilos customizados -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f0f0;
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
        .btn-primary {
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="mb-4">Formulário de Alteração de Cliente</h2>
        <form action="AlteraClienteExe.php" method="post">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" name="nome" id="nome" value="<?php echo htmlspecialchars($row['nome']) ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" id="email" value="<?php echo htmlspecialchars($row['email']) ?>" required>
            </div>
            <div class="form-group">
                <label for="senha">Nova Senha:</label>
                <input type="password" class="form-control" name="senha" id="senha">
            </div>
            <input type="hidden" name="id" value="<?php echo $row['ID']; ?>">
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Alterar Dados</button>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS (opcional, apenas se você precisar de funcionalidades do Bootstrap que usam JavaScript) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
