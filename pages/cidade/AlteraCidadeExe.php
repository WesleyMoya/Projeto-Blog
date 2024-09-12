<?php
    include('../../includes/conexao.php');
    $id = $_POST['ID'];
    $nome = $_POST['nome'];
    $estado = $_POST['estado'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterção de cidade</title>
</head>
<body>
    <h1>Alteração de Cidade</h1>
    <?php

        $sql = "UPDATE cidade SET
                nome = '$nome',
                estado = '$estado'
            WHERE id = $id";
        $result = mysqli_query($con, $sql);
        if ($result)
            echo "Dados atualizados";
        else
            echo "Erro ao atualizar dados".mysqli_error($con);
    ?>
    <a href="ListarCidade.php">Voltar</a>
</body>
</html>