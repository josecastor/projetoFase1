<?php require_once("rotas.php"); ?>

<html>

<head>

    <meta charset="utf-8">

    <title>Projeto Fase 1</title>

    <!-- define a viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- adicionar CSS Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/main.css" rel="stylesheet" media="screen">

    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">-->

</head>

<body>



    <?php require_once("menu.php"); ?>



    <br>

    <div class="container corFundoArea">
        <div class="row">
            <div class="col-md-12">
                <?php require_once($rota.".php"); ?>
            </div>
        </div>
    </div>

    <br>

    <?php require_once("footer.php"); ?>

    <script src="js/jquery.min.2.1.3.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>-->

</body>
</html>
