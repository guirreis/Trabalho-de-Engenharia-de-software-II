<?php define('APP_PATH', 'http://localhost/Curriculo'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/docs/3.3/favicon.ico">
    <title>Trabalho PHP</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="<?= APP_PATH ?>/footer-navbar.css" rel="stylesheet">
        <style media="screen">
            h11{ color:red; }
            body{background: #1C1C1C;}
            body{color: #ffffff;}
            th{text-align: center;}
            table{text-align: center;}
            h1{color:#4A708B;}
        </style>
</head>

<body>
  <div class="col-md-10 col-md-offset-1">
  <nav class="navbar navbar-inverse ">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="<?= APP_PATH ?>/cadastro/controladorCadastro.php">Trabalho Final</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?= APP_PATH ?>/cadastro/controladorCadastro.php">Home</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
        <li class="info"><a href="<?= APP_PATH ?>/UsarSite.pdf"  target="_blank">Como usar o site</a></li>
    </ul>
    </div>
  </nav>
</div>
</body>
