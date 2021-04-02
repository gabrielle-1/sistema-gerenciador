<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<link rel="stylesheet" href="css/bootstrap.css">

<?php include "../banco_de_dados/conexao.php"; ?>

<?php

$cpf_estudante = $_POST['cpf_estudante'];
$senha = $_POST['senha'];

    //Formatando o cpf
    $cpf_estudante = trim($cpf_estudante);
    $cpf_estudante = str_replace(".", "", $cpf_estudante);
    $cpf_estudante = str_replace("-", "", $cpf_estudante);
    $cpf_estudante = str_replace(" ", "", $cpf_estudante);
    $cpf_estudante = str_replace("-", "", $cpf_estudante);

    $select_estudantes = "SELECT cpf_estudante FROM estudante WHERE cpf_estudante = '{$cpf_estudante}'"; 

    //Seleciona os registros
   $estudante = mysqli_query($conexao, $select_estudantes);


    //Verifica se encontrou alguma estudante
    if(($estudante) && ($estudante->num_rows != 0)){
        while($row_msg_cont = mysqli_fetch_assoc($estudante)){
            if(($cpf_estudante == $row_msg_cont['cpf_estudante']) && ($senha == $row_msg_cont['cpf_estudante'])){
                header('Location: disciplina.php');
                echo $row_msg_cont['cpf_estudante'] . "<br>";
            }else if(($cpf_estudante == $row_msg_cont['cpf_estudante']) && ($senha != $row_msg_cont['cpf_estudante'])){
            ?>  
            <script>
            alert('Senha incorreta, Por favor digite novamente!');
            window.location.href="estudante.php";
            </script>
            <a href="estudante.php">Tentar Novamente</a> <?php   
              }else if(($cpf_estudante != $row_msg_cont['cpf_estudante']) && ($senha == $row_msg_cont['cpf_estudante'])){
              ?>
                <script>
                alert('CPF incorreto, Por favor digite novamente!');
                 window.location.href="estudante.php";
                 </script>
         <?php }else if($cpf_estudante != $row_msg_cont['cpf_estudante']){ ?>
                    <script>
                    alert('CPF não cadastrado no banco de dados!');
                    window.location.href="cadastro.php";
                    </script>
         
        <?php }}} ?>

         