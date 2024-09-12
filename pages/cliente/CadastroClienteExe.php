<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
</head>
<body>  
    <?php
        // Inclui o arquivo de conexão com o banco de dados
        include('../../includes/conexao.php');

        // Obtém os dados enviados pelo formulário
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $ativo = $_POST['ativo'];

        // Prepara o comando SQL para inserção dos dados
        $sql = "INSERT INTO cliente (nome, email, senha, ativo)";
        $sql .= " VALUES ('$nome', '$email', '$senha', '$ativo')";

        echo "<h1>Dados do Cliente</h1>";
        echo "Nome: $nome<br>";
        echo "Email: $email<br>";   
        echo "Senha: $senha<br>";
        echo "Ativo: $ativo<br>";
        
        // Executa o comando no banco de dados
        $result = mysqli_query($con, $sql);

        // Verifica se a operação foi bem-sucedida
        if($result){
            echo "<h2>Dados cadastrados com sucesso</h2>";
        } else {
            echo "<h2>Erro ao cadastrar</h2>";
            echo mysqli_error($con); // Mostra o erro do MySQL, se houver
        }
    ?>
    <a href="ListarCliente.php">Listar Clientes Cadastrados</a>
    <a href="CadastroCliente.php">Cadastrar outro cliente</a>
</body>
</html>