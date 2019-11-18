<!DOCTYPE html>
<html lang="pt-br">


<head>
    <meta charset="utf-8">
    <title>Meu Script</title>
    <link rel="stylesheet" href="css/bootstrap.css">

    <style>
        #tamanhoContainer{
            width: 500px;
        }
        .form-group{
            margin-top: 30px;
        }
        
    </style>
</head>



<body>

<div class="container" id="tamanhoContainer" style="margin-top: 40px;">
    <h4>CRIANDO UMA NOTA</h4>
    <form action="_inserir_nota.php" method="post" style="margin-top: 30px;">
        
        <div class="form-group">
            <label>NOTA</label>
            <input type="text" class="form-control" name="nota"  placeholder="Insira sua nota" required autocomplete="off">
        </div>
        
    </div>
        <div style="margin-left: 807px;">
        <button type="submit" class="btn btn-success btn-sm">Cadastrar Nota</button>
        </div>
    </form>



<script type="text/javascript" src="js/bootstrap.js"></script>

</body>

</html>