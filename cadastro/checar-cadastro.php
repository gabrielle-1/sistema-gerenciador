<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<link rel="stylesheet" href="css/bootstrap.css">
<?php include "../db/conexao.php"; ?>

<?php
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$data_nascimento = $_POST['data_nascimento'];
$usuario = $_POST['usuario'];


  if($usuario == 'estudante'){
  $insert_no_banco = "INSERT INTO estudante (nome_estudante, cpf_estudante, data_nascimento_estudante) VALUES ('$nome', '$cpf', '$data_nascimento')";
  } else if($usuario == 'professor'){
    $insert_no_banco = "INSERT INTO professor(nome_professor, cpf_professor, data_nascimento_professor) VALUES ('$nome', '$cpf', '$data_nascimento')"; 
  }

  //Insere no banco de dados
   $query = mysqli_query($conexao, $insert_no_banco)or die('não foi possivel acessar Banco de Dados');

  //Verifica se foi inserido no banco


   //Verifica se encontrou alguma estudante
   if($query){
      echo "<br><div class='container'><div class='alert alert-success' role='alert'>
      Cadastro realizado com sucesso!
    </div></div>";
        } else{
        ?> 
        <a href="estudante.php"><br><div class='container'><div class='alert alert-danger' role='alert'>
          Cadastro não realizado
        </div></div></a> 
         
         <?php
        }
     

?>
