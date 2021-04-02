<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="../css/style.css">


<?php require "../db/conexao.php"; 

    $select_disciplinas = "SELECT * FROM disciplina";

    $select_disciplina = "SELECT disciplina.codigo as 'codigo_disciplina', estudante.codigo_estudante as 'codigo_estudante' FROM disciplina INNER JOIN estudante ON estudante.codigo_estudante = disciplina.codigo_estudante";
    
    //Insert no banco
   $query = mysqli_query($conexao, $select_disciplina)or die('não foi possivel acessar Banco de Dados');

   while($row_msg_cont = mysqli_fetch_assoc($query)){
    ?> 
<?php
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
      </thead>
      <tbody>
    </div>

    <td><?php $row_msg_cont['codigo_disciplina'] ;?></td>
    <td><?php  $row_msg_cont['codigo_estudante'] ;?></td>
    <?php
    $insert_disciplinas = "INSERT INTO disciplina_estudante (codigo_disciplina, codigo_estudante) VALUES ('codigo_disciplina', 'codigo_estudante')";
    
     } 
    ?>

    </table>

    