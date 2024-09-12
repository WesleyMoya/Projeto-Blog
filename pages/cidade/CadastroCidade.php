<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CadstroCidadeIFSP</title>
</head>
<body>  
    <?php
        include('../../includes/conexao.php');
        $nome = $_POST['nome'];
        $estado = $_POST['estado'];
        $sql = "INSERT INTO cidade (nome, estado)";
        $sql .= " VALUES ('".$nome."','".$estado."')";

        echo "<h1>Dados da Cidade</h1>";
        echo "Nome: $nome<br>";
        echo "Estado: $estado<br>";
        //Executa comando no BND
        $result = mysqli_query($con,$sql);
        if($result){
            echo "<h2>Dados cadastrados com sucesso</h2>";
        } else{
            echo "<h2>Erro ao cadastrar</h2>";
            echo mysqli_error($con);
        }
    ?>
    <a href="ListarCidade.php">Listar Cidades Cadastradas</a>
    <a href="CadastroCidade.html">Cadastrar outra cidade</a>
</body>
</html>
