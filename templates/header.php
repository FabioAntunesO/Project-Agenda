<?php

include_once("../config/url.php");
include_once("../config/process.php");

//Limpa a mensagem
if(isset($_SESSION['msg'])){
    $printMsg = $_SESSION['msg'];
    $_SESSION['msg'] = '';
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de Contatos</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Css -->
     <link rel="stylesheet" href="http://localhost/project-notebook/css/styles.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary" >
            <a class="navbar-brand" href="../templates/index.php">
                <img src="../img/169538979_d757e0d3-51de-4583-b563-62e3567eb897.svg" alt="LogoAgenda">
            </a>
            <div>
                <div class="navbar-nav">
                    <a class="nav-link active" id="home-link" href="../templates/index.php">Agenda</a>
                    <a class="nav-link active" id="home-link" href="../templates/create.php">Adicionar Contato</a>
                </div>
            </div>
        </nav>
    </header>