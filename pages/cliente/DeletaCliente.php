<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DeletarCliente</title>
</head>
<body>
    <h1>Deletar Cliente</h1>
    <?php
        include('../../includes/conexao.php');
        $id = $_GET['id'];
        $sql = "DELETE FROM cliente WHERE ID = $id";
        $result = mysqli_query($con,$sql);
        if($result){
            echo "<h2>Dados Deletados</h2>";
        }
        else{
            echo "<h2>Erro ao Deletar dados</h2>";
        }
    ?>
    <a href="ListarCliente.php">Voltar</a>
</body>
</html>