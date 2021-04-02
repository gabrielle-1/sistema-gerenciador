<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">


<?php require "../db/conexao.php"; 

 //count(estudante.codigo) AS 'Estudantes Matriculados' FROM disciplina JOIN professor on professor.codigo = disciplina.codigo JOIN estudante on estudante.codigo = disciplina.codigo";
    $select_disciplinas = "SELECT disciplina.codigo, disciplina.nome, professor.nome_professor, count(estudante.nome_estudante) AS qtd_estudantes FROM disciplina JOIN professor on professor.codigo_professor = disciplina.codigo JOIN estudante on estudante.codigo_estudante = disciplina.codigo";
  //Seleciona os registros
   $lista_disciplinas = mysqli_query($conexao, $select_disciplinas);

   //Verifica se encontrou alguma disciplina
   if(($lista_disciplinas) AND ($lista_disciplinas->num_rows != 0)){
    ?>
    <div class="container">
    <table class="table table-hover table-bordered">
      <thead>
      <h1> Listar Disciplinas</h1>
          <tr>
            <th>ID</th>
            <th>Disciplina</th>
            <th>Professor</th>
            <th>Estudantes Matriculados</th>
          </tr>
      </thead>
      <tbody>
    </div>
    <?php
      //Listagem de Disciplinas
      while($row_msg_cont = mysqli_fetch_assoc($lista_disciplinas)){
          ?> 
            <tr>
                <td><?php echo $row_msg_cont['codigo'] . "<br>";?></td>
                <td><?php echo $row_msg_cont['nome'] . "<br>";?></td>
                <td><?php echo $row_msg_cont['nome_professor'] . "<br>";?></td>
                <td><?php echo $row_msg_cont['qtd_estudantes'] . "<br>";?></td>
            </tr>
          <?php
       } 
    ?>
    </table>
    </tbody>
  <?php
    } else{
      echo "<div class='container'><div class='alert alert-danger' role='alert'>
      Nenhuma disciplina encontrada!
    </div></div>";
    }


   ?>
