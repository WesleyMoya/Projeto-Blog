<?php
    require_once '../core/sql.php';

    $id = 1;
    $nome = 'josefino almeida';
    $email = 'josegamer123@mail.com';
    $senha = '123456';
    $dados = ['nome' => $nome, 'email' => $email, 'senha' => $senha];

    $entidade = 'usuario';
    $criterio = [['id', '=', $id]];
    $campos = ['id', 'nome', 'email'];
    print_r($dados);
    echo '<br>';
    print_r($campos);
    echo '<br>';
    print_r($criterio);
    echo '<br>';

    //teste geração insert
    $instrucao = insert($entidade, $dados);
    echo $instrucao.'<BR>';

    //teste geração update
    $instrucao = update($entidade, $dados, $criterio);
    echo $instrucao.'<BR>';

    //teste geração select
    $instrucao = select($entidade, $campos, $criterio);
    echo $instrucao.'<BR>';

    //teste geração delete
    $instrucao = delete($entidade, $criterio);
    echo $instrucao.'<BR>';
?>