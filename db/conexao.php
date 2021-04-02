<?php

    $host = "localhost";
    $usuario = "root";
    $senha = "1234";
    $bd = "sistemagerenciador";

    $conexao = new mysqli($host, $usuario, $senha, $bd);
    return $conexao;

    if($conexao->connect_errno){
        echo "Falha na conexão :(" .$conexao->connet_errno.")".$conexao->connect_error;  
    }

    $consulta_disciplinas = mysqli_query($conexao, "SELECT * FROM disciplina");
    $consulta_estudantes = mysqli_query($conexao, "SELECT estudante.codigo, estudante.nome, disciplina.nome, disciplina.codigo FROM estudante, disciplina, estudante_disciplina where estudante.codigo = estudante_disciplina.codigo and disciplina.codigo = estudante_disciplina.codigo");

?>