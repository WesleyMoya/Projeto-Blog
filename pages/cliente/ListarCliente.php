<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ListarClientes</title>
</head>
<body>
    <?php
        // Inclui o arquivo de conexão
        include('../../includes/conexao.php');
        
        // Consulta para selecionar todos os clientes
        $sql = "SELECT cli.ID, cli.nome nomecliente, cli.email, cli.ativo, cid.nome nomecidade, cid.estado FROM cliente cli LEFT JOIN cidade cid on cid.ID = cli.id_cidade";
        
        // Executa a consulta
        $result = mysqli_query($con, $sql);

        $row = mysqli_fetch_array($result);
    ?>
    <h1>Listagem de Clientes</h1>
    <a href="CadastroCliente.html">Cadastrar Novo Cliente</a>
    <table align="center" border="1" width="600">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Senha</th>
            <th>Ativo</th>
            <th>Alterar</th>
            <th>Excluir</th>
        </tr>
        <?php
            // Loop através dos resultados da consulta
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['nome']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['senha']."</td>";
                echo "<td>".$row['ativo']."</td>";
                echo "<td><a href='AlteraCliente.php?id=".$row['id']."'>Alterar</a></td>";
                echo "<td><a href='DeletaCliente.php?id=".$row['id']."'>Excluir</a></td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>
