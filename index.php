<?php require "db/conexao.php"; ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>UniWEB</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/icon/icon-universidade" type="image/x-icon"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-notify.min"></script>
    <!-- jQuery v3.6.0 | (c) OpenJS Foundation and other contributors | jquery.org/license -->
</head>
<body>


<div class="form-group d-flex justify-content-center">
<img src="img/logo-uniweb.png" alt=""class="img-responsive"  >
</div>

<div class="container ">
    <form action=""  method="POST" name="" > 

        <div class="form-group">
            <div class="col-md-6 offset-md-3">
            <button type="button" class="btn btn-botao" id="estudante">Estudante</button><br>
            <button type="button" class="btn btn-botao" id="professor">Professor</button><br>
            <button type="button" class="btn btn-botao" id="cadastrar">Cadastrar</button><br>
        </div>
        </div>

    </form>

        <script>
        $("#estudante").click(function() {
            window.location.href = "estudante/Estudante.php";
                });

        $("#professor").click(function() {
            window.location.href = "professor/Professor.php";
        });

        $("#cadastrar").click(function (){
            window.location.href = "cadastro/cadastro.php";
        });
    </script>

</body>
</html>


