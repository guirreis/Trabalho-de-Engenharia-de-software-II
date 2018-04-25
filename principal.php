<?php
    //string de conexao: driver(mysql), host (servidor)
    //dbname (qual o banco)
    //usuário e senha
    try{
      $con = new PDO("mysql:host=localhost;dbname=curriculo",
      'root', '');
    }catch(PDOExcepetion $e){
      echo 'Falha na Conexão: ' . $e->getMessage();
    }

$sql = "SELECT * FROM usuario";
$query = $con->query($sql);
$usuarios = $query->fetchAll();
?>

<!DOCTYPE html>
<html lang="br">
<head>
  <title>Currículo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style media="screen">
          body{background: linear-gradient(to right, #232526, #414345);}
          h2{color: #ffffff;}
          table{color: #ffffff; background:#2B2A2A; text-align: center;}
          .btn-custom { padding: 1px 10px 3px 2px; border-radius: 20px; }
          th{background-color: #201F1F; text-align: center;}

.btn-icon {padding: 6px; background: #ffffff;}
  </style>
</head>

<body>
  <div class="container">
    <div class="col-md-10 col-md-offset-1">
      <!-- MENU-->
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="principal.php">Currículo</a>
          </div>
          <ul class="nav navbar-nav">
            <li class="active"><a href="principal.php">Home</a></li>
            <li><a href="form_curriculo.php">Cadastrar</a></li>
          </ul>
        </div>
      </nav>

      <h2> Lista de Usuarios </h2>
        <a class="btn btn-primary btn-custom" href="form_curriculo.php">
          <i class="glyphicon glyphicon-ok img-circle text-primary btn-icon "></i> Add</a>
        <div class="table-responsive">
        <table class="table table-bordered">
          <th>#</th>
          <th>Nome</th>
          <th>Nascimento</th>
          <th>Sexo</th>
          <th>CPF</th>
          <th>RG</th>
          <th style="color:#00BFFF;">Editar</th>
          <th style="color:#FF6347;">Excluir</th>

          <?php foreach($usuarios as $u){ ?>
                    <tr>
                      <td><?= $u['id']; ?></td>
                      <td><?= $u['nome']; ?></td>
                      <td><?= $u['nascimento']; ?></td>
                      <td><?= $u['sexo']; ?></td>
                      <td><?= $u['cpf']; ?></td>
                      <td><?= $u['rg']; ?></td>
                      <td>
                        <a class="btn btn-info">
                          <i class="glyphicon glyphicon-pencil"></i>
                        </a>
                      </td>
                      <td>
                        <a class="btn btn-danger">
                          <i class="glyphicon glyphicon-remove"></i>
                        </a>
                      </td>
                    </tr>
          <?php } ?>
        </table>
      </div>
    </div><!-- div offset -->
    </div><!-- div conteiner -->
  </body>
  </html>
