<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" href="css/bootstrap.css">
        <meta charset="utf-8">
    </head>

    <body>
    <center>
        <div class="container" style= "width: 300px;">

        </div> 
            <h4>
                Nota adicionada com sucesso!
            </h4>
            <br>
            <br> 
            <br>
            <a href="index.php" role="button" class="btn btn-sm btn-primary">CADASTRE NOVAMENTE</a>
    </center>
    </body>
</html>
<?php
include 'conexao.php';

$nota = $_POST['nota'];


$sql = "INSERT INTO notas (`nota`) VALUES ('$nota')";

$inserir = mysqli_query($conexao,$sql);

?>