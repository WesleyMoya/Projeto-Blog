<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ListarCidadeIFSP</title>
</head>
<body>
    <?php
        include('../../includes/conexao.php');
        $sql = "SELECT * FROM cidade";
        /// Executa a consulta
        $result = mysqli_query($con, $sql);
        /// Retorna apenas uma linha
       // $row = mysqli_fetch_array($result);
    ?>
    <h1>Consulta de Cidades</h1>
    <a href = "CadastroCidade.html">Cadastrar Nova Cidade</a>
    <table align = "center" border = "1" width = "500">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Estado</th>
            <th>Alterar</th>
            <th>Excluir</th>
        </tr>
        <?php
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['nome']."</td>";
                echo "<td>".$row['estado']."</td>";
                echo "<td><a href='AlteraCidade.php?id=".$row['id']."'>Alterar</a></td>";
                echo "<td><a href='DeletaCidade.php?id=".$row['id']."'>Excluir</a></td>";
            }
        ?>
    </table>
</body>
</html>