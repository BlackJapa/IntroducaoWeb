<!DOCTYPE html>
<html lang="en">

<head>
    <title>Site para Prog. WEB - Flavio Ramos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <?php
        include_once "nav.php";
    ?>
        <div class="container-fluid text-center">
            <div class="row content">
                <div class="col-sm-6 text-left">
                    <p>
                        <hr>
                        <form action="cadastrar.php" method="POST" role="form">

                            <div class="form-group">
                                <legend> Efetue seu cadastro</legend>
                            <label>Nome:</label> 
                            <input type="text"name="nomex" id="nomex" class="form-control" required="required" placeholder="filano de tal">                             
                            <label for="">Email:</label>                          
                            <input type="email" name="emailx" id="emailx" class="form-control" value="" required="required" title="" placeholder="user@user.com">
                            <label for="">Senha:</label>                        
                            <input type="password" name="senhax" id="senhax" class="form-control" required="required" title="" placeholder="Sua senha">
                        
                         
                            
                                
                            </div>
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </form>
                </div>
            </div>
        </div>

        <footer class="container-fluid text-center">
            <?php
                include_once "footer.php";
            ?>
        </footer>

</body>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/sweetalert2.all.min.js"></script>
<script src="js/core.js"></script>
<script src="js/java.js"></script>

</html>