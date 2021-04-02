<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">


<?php require "../db/conexao.php"; 

  $select_qtd_estudantes = "SELECT disciplina.nome, COUNT(disciplina.codigo_estudante) AS qtd_estudantes
  FROM estudante, disciplina, disciplina_estudante
  WHERE disciplina_estudante.codigo_estudante = estudante.codigo_estudante GROUP BY disciplina.codigo";
  //count(estudante.codigo) AS 'Estudantes Matriculados' FROM disciplina JOIN professor on professor.codigo = disciplina.codigo JOIN estudante on estudante.codigo = disciplina.codigo";
    $select_disciplinas = "SELECT  * FROM disciplina INNER JOIN professor on professor.codigo_professor = disciplina.codigo_professor INNER JOIN estudante on estudante.codigo_estudante = disciplina.codigo_estudante;";
  //Seleciona os registros
    $lista_disciplinas = mysqli_query($conexao, $select_disciplinas);
    $lista_qtd_estudantes = mysqli_query($conexao, $select_qtd_estudantes);
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
            <th></th>
      </thead>
      <tbody>
    </div>
    <?php
      //Listagem de Disciplinas
      while($row_msg_cont = mysqli_fetch_assoc($lista_disciplinas)){
       //while($row_msg_cont = mysqli_fetch_assoc($lista_qtd_estudantes)){
          ?> 
           <tr>
          <td><?php echo $row_msg_cont['codigo'] . "<br>";?></td>
          <td><?php echo $row_msg_cont['nome'] . "<br>";?></td>
          <td><?php echo $row_msg_cont['nome_professor'] . "<br>";?></td>
          <td><button class="btn btn-danger" id="remv">Remover Discplina</button>
          <button class="btn btn-success" id="add">Adicionar Discplina</button>
          <button class="btn btn-botao" id="edit">Editar Discplina</button></td>
          <?php }

      ?>
       </tr> </tr>
      
    </table>
    </tbody>
  <?php
    }
   ?>
