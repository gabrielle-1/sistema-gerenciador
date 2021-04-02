<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.13/jquery.mask.min.js"></script> 
  
</head>
<body>

<div class="form-group d-flex justify-content-center">
<img src="../img/logo-uniweb.png" alt=""class="img-responsive"  >
</div>

<div class="offset-md-3">
<div class="container">

<form name="" action="checar-cadastro.php" method="POST" class="login">

<div class="form-group col-md-6">
      <label class="form-group" for="inputNome">Nome completo:</label>
      <input type="" name="nome" class="form-control" id="inputNome" placeholder="Nome" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputCpf4">CPF:</label>
      <input type="" id="cpf" name="cpf_estudante" class="form-control" placeholder="000.000.0000-00" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputData">Data de Nascimento:</label>
      <input type="date" name="data_nascimento" class="form-control" id="inputData" placeholder="00/00/0000" required>
    </div>

    <fieldset class="form-group col-md-6">
   
    <label for="inputData">Usuário:</label>
      <div class="col-sm-10">
        <div class="">
          <input class="form-check-input" type="radio" name="usuario" id="gridRadios1" value="estudante" checked>
          <label class="form-check-label" for="gridRadios1">
            Estudante
          </label>
        </div>
        <div class="">
          <input class="form-check-input" type="radio" name="usuario" id="gridRadios2" value="professor">
          <label class="form-check-label" for="gridRadios2">
            Professor
          </label>
        </div>
  <div class="form-group col-md-4">
  <div class="form-group col-md-6">
  
</form>
</div>
</div><button type="button" class="btn btn-botao" id="cadastrou">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-check-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
  <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
  </svg>  
  Cadastrar</button>

<script>
  $(document).ready(function(){
     $('#cpf').mask('000.000.000-00');
 });  
 </script>

 
</body>
</html>
    