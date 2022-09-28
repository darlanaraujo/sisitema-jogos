<?php
    // Objeto mysql que cria a conexão com o BD;
    $conexao = new mysqli('localhost', 'root', '', 'bd_games');
    if($conexao->connect_errno) {
        echo "<p>Encontrei um erro! $conexao->errno --> $conexao->connect_error</p>"; // Mostra o erro;
        die(); // Encerra a conexão
    }

    // Comandos que forçam o navegador a reconhecer a lingua portuguessa;
    $conexao->query("SET NAMES 'utf8'");
    $conexao->query("SET character_set_connection=utf8");
    $conexao->query("SET character_set_client=utf8");
    $conexao->query("SET character_set_results=utf8");



    // <pre><?php
    // Objeto mysql que cria a conexão com o BD;
    // $conexao = new mysqli('localhost', 'root', '', 'bd_games');
    // if($conexao->connect_errno) {
    //     echo "<p>Encontrei um erro! $conexao->errno --> $conexao->connect_error</p>"; // Mostra o erro;
    //     die(); // Encerra a conexão
    // }

    // Comandos que forçam o navegador a reconhecer a lingua portuguessa;
    // $conexao->query("SET NAMES 'utf8'");
    // $conexao->query("SET character_set_connection=utf8");
    // $conexao->query("SET character_set_client=utf8");
    // $conexao->query("SET character_set_results=utf8");

    // // Objeto que recebe a conexão com uma instrução sql para fazer uma query;
    // $busca = $conexao->query("select * from jogos");
    // if(!$busca) {
    //     echo "<p>Falha na busca! $conexao->error</p>"; // Verifica se tem erro;
    // } else {
    //     while($registros = $busca->fetch_object()) { // Faz um loop na lista da tabela do BD;
    //         print_r($registros); // Mostra os dados dentro da tabela;
    //     }
    // }