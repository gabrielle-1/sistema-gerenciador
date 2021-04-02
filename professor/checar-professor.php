<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<link rel="stylesheet" href="css/bootstrap.css">

<?php include "../banco_de_dados/conexao.php"; ?>

<?php

$cpf_professor = $_POST['cpf_professor'];
$senha = $_POST['senha'];

    //Formatando o cpf
    $cpf_professor = trim($cpf_professor);
    $cpf_professor = str_replace(".", "", $cpf_professor);
    $cpf_professor = str_replace("-", "", $cpf_professor);
    $cpf_professor = str_replace(" ", "", $cpf_professor);
    $cpf_professor = str_replace("-", "", $cpf_professor);

    $select_professor = "SELECT cpf_professor FROM professor WHERE cpf_professor = '{$cpf_professor}'"; 

    //Seleciona os registros
   $professor = mysqli_query($conexao, $select_professor);

   //Verifica se encontrou alguma professor
   if(($professor) && ($professor->num_rows != 0)){
    while($row_msg_cont = mysqli_fetch_assoc($professor)){
        if(($cpf_professor == $row_msg_cont['cpf_professor']) && ($senha == $row_msg_cont['cpf_professor'])){
            header('Location: disciplina.php');
            echo $row_msg_cont['cpf_professor'] . "<br>";
        } else {
        ?> <script> 
        alert('Senha incorreta, Por favor digite novamente!');
        window.location.href="professor.php";</script>
        <a href="professor.php">Tentar Novamente</a> <?php   
            }
        }
    }
?>
         
 
