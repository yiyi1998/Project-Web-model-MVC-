<?php
require ('../../app/controller/config.php');
require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
    <div class="container">
        <?php
        include $root . '/app/view/fragment/fragmentCaveMenu.html';
        include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
        ?>

        <div class="panel panel-danger">
            <div class="panel-heading">
                <h3 class="panel-title">Problème</h3>
            </div>
            <div class="panel-body">
                <h4>Constant DEBUG already defined.</h4>
                <br>
                <img src="../image/problem.jpg" alt=""/>
            </div>
        </div>
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">Solution</h3>
            </div>
            <div class="panel-body">
                <h4>Dans le fichier config.php :<br>
                1.Supprimer "CONST DEBUG = false"<br>
                2.Ajouter les codes suivants <br></h4>
                <br>
                <img src="../image/solution.jpg" alt=""/>
            </div>

        </div>
    </div>
    <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>