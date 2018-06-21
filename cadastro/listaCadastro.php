<?php require_once('../header.php'); ?>
<div class="container">
<div class="col-md-10 col-md-offset-1">
  <h1>Lista de Cadastros</h1>
  <a class="btn btn-primary active btn-md" href="controladorCadastro.php?acao=novo">
  <i class="glyphicon glyphicon-plus"></i>Cadastrar</a>
  <table class="table table-bordered table-condensed">
    <th>#         </th>
    <th>Nome      </th>
    <th>Nascimento</th>
    <th>Sexo      </th>
    <th style="color:#00FF7F">Visualizar  </th>
    <th style="color:#00BFFF;">Editar  </th>
    <th style="color:#FF6347;">Excluir </th>
    <?php foreach($dados as $c){ ?>
             <tr>
                <td><?= $c['id'];       ?></td>
                <td><?= $c['nome'];     ?></td>
                <td><?= $c['data'];     ?></td>
                <td><?php echo ($c['sexo']==1)? "Masculino" : "Feminino"; ?></td>
                <td>
                  <a class="btn btn-success" href="controladorCadastro.php?acao=visualizar&id=<?= $c['id']; ?>">
                    <i class="glyphicon glyphicon-list-alt">Visualizar</i>
                  </a>
                </td>
                <td>
                  <a  class="btn btn-info" href="controladorCadastro.php?acao=buscar&id=<?= $c['id']; ?>">
                    <i class="glyphicon glyphicon-pencil">Editar</i>
                  </a>
                </td>
                <td>
                  <a  class="btn btn-danger" href="controladorCadastro.php?acao=excluir&id=<?= $c['id']; ?>">
                    <i class="glyphicon glyphicon-remove">Excluir</i>
                  </a>
                </td>
             </tr>
    <?php } ?>
  </table>
</div>
</div>
