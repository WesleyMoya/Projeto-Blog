<?php
    include('../../includes/conexao.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM cidade WHERE id=$id";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Alteração de Cidade</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Estilos customizados -->
    <style>
        body {
            font-family: 'Arial', sans-serif; /* Fonte padrão */
            background-image: url('images/mapamundi.jpg');
            background-repeat: no-repeat; /* Não repete a imagem */
            background-size: cover; /* Cobre toda a área disponível */
            background-position: center; /* Centraliza a imagem */
            padding-top: 4rem; /* Espaçamento no topo */
        }
        .container {
            max-width: 500px; /* Largura máxima do formulário */
            background-color: #fff; /* Fundo branco */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1); /* Sombra suave */
        }
        h2 {
            font-size: 2.5rem; /* Tamanho do título */
            text-align: center;
            margin-bottom: 30px;
            color: #333; /* Cor do título */
        }
        label {
            font-weight: bold; /* Negrito nas labels */
        }
        .form-control {
            margin-bottom: 20px; /* Espaçamento entre os campos */
        }
        .btn-primary {
            width: 100%; /* Botão de largura total */
        }
        .btn-secondary {
            width: 100%; /* Botão de largura total */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="mb-4">Formulário de Alteração de Cidade</h2>
        <form action="AlteraCidadeExe.php" method="post">
            <div class="form-group">
                <label for="nome">Nome da Cidade:</label>
                <input type="text" class="form-control" name="nome" id="nome" value="<?php echo $row['nome']?>" required>
            </div>
            <div class="form-group">
                <label for="estado">Estado:</label>
                <select class="form-control" name="estado" id="estado" required>
                    <option value="">Selecione o estado</option>
                    <option value="AC" <?php echo $row['estado'] == "AC" ? "selected" : "" ?>>Acre</option>
                    <option value="AL" <?php echo $row['estado'] == "AL" ? "selected" : "" ?>>Alagoas</option>
                    <option value="AP" <?php echo $row['estado'] == "AP" ? "selected" : "" ?>>Amapá</option>
                    <option value="AM" <?php echo $row['estado'] == "AM" ? "selected" : "" ?>>Amazonas</option>
                    <option value="BA" <?php echo $row['estado'] == "BA" ? "selected" : "" ?>>Bahia</option>
                    <option value="CE" <?php echo $row['estado'] == "CE" ? "selected" : "" ?>>Ceará</option>
                    <option value="DF" <?php echo $row['estado'] == "DF" ? "selected" : "" ?>>Distrito Federal</option>
                    <option value="ES" <?php echo $row['estado'] == "ES" ? "selected" : "" ?>>Espírito Santo</option>
                    <option value="GO" <?php echo $row['estado'] == "GO" ? "selected" : "" ?>>Goiás</option>
                    <option value="MA" <?php echo $row['estado'] == "MA" ? "selected" : "" ?>>Maranhão</option>
                    <option value="MT" <?php echo $row['estado'] == "MT" ? "selected" : "" ?>>Mato Grosso</option>
                    <option value="MS" <?php echo $row['estado'] == "MS" ? "selected" : "" ?>>Mato Grosso do Sul</option>
                    <option value="MG" <?php echo $row['estado'] == "MG" ? "selected" : "" ?>>Minas Gerais</option>
                    <option value="PA" <?php echo $row['estado'] == "PA" ? "selected" : "" ?>>Pará</option>
                    <option value="PB" <?php echo $row['estado'] == "PB" ? "selected" : "" ?>>Paraíba</option>
                    <option value="PR" <?php echo $row['estado'] == "PR" ? "selected" : "" ?>>Paraná</option>
                    <option value="PE" <?php echo $row['estado'] == "PE" ? "selected" : "" ?>>Pernambuco</option>
                    <option value="PI" <?php echo $row['estado'] == "PI" ? "selected" : "" ?>>Piauí</option>
                    <option value="RJ" <?php echo $row['estado'] == "RJ" ? "selected" : "" ?>>Rio de Janeiro</option>
                    <option value="RN" <?php echo $row['estado'] == "RN" ? "selected" : "" ?>>Rio Grande do Norte</option>
                    <option value="RS" <?php echo $row['estado'] == "RS" ? "selected" : "" ?>>Rio Grande do Sul</option>
                    <option value="RO" <?php echo $row['estado'] == "RO" ? "selected" : "" ?>>Rondônia</option>
                    <option value="RR" <?php echo $row['estado'] == "RR" ? "selected" : "" ?>>Roraima</option>
                    <option value="SC" <?php echo $row['estado'] == "SC" ? "selected" : "" ?>>Santa Catarina</option>
                    <option value="SP" <?php echo $row['estado'] == "SP" ? "selected" : "" ?>>São Paulo</option>
                    <option value="SE" <?php echo $row['estado'] == "SE" ? "selected" : "" ?>>Sergipe</option>
                    <option value="TO" <?php echo $row['estado'] == "TO" ? "selected" : "" ?>>Tocantins</option>
                </select>
            </div>
            <div>
                <input type="hidden" name ="ID" value = <?php echo $row['ID']?>>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Alterar</button>
            </div>
            
        </form>
    </div>

    <!-- Bootstrap JS (opcional, apenas se você precisar de funcionalidades do Bootstrap que usam JavaScript) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>