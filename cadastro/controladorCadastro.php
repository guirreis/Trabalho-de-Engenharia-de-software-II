<?php

    require_once '../classeConexao.php';

    $acao = NULL;

    if( !isset($_GET['acao']) ) $acao='listar';
    else $acao = $_GET['acao'];

    $con = new Conexao();
    // var_dump($con); exit;
// ------------------------------LISTAR-----------------------------------------
    if($acao=='listar'){
        $consulta="SELECT * FROM cadastro";
        $dados = $con->getLista($consulta);
        require_once ('listaCadastro.php');
    }
// ------------------------------Excluir-----------------------------------------
    else if($acao=='excluir'){
        $id  = $_GET['id'];
        $sql = "DELETE FROM cadastro WHERE id = :id";
        $dados  = array('id'=>$id);
        $result = $con->executaQuery($sql, $dados);
        if($result==true) header('location: controladorCadastro.php');
        else echo "Deu ruim";
    }
// ------------------------------Cadastrar--------------------------------------
    else if($acao=='novo'){
        $acaoForm = "controladorCadastro.php?acao=cadastrar";
        require_once('formCadastro.php');
    }
    else if($acao=='cadastrar'){
        $dados  = $_POST;
        $sql    =  "INSERT INTO cadastro(nome, data, sexo, email, telefone, estado, cidade, cep,
          formacao, inicio, curso, profissao, idioma) "
               . " VALUES(:nome, :data, :sexo, :email, :telefone, :estado, :cidade, :cep,
               :formacao, :inicio, :curso, :profissao, :idioma)";
        $result = $con->executaQuery($sql, $dados);
        if($result==true) header('location: controladorCadastro.php');
        else echo "Deu ruim :(";
    }
// ------------------------------Atualizar------------------------------------
    else if($acao=='buscar'){
        $id     = $_GET['id'];
        $sql    = "SELECT * FROM cadastro WHERE id = :id";
        $chave  = array('id'=>$id);
        $registro = $con->getRegistro($sql, $chave);
        $acaoForm = "controladorCadastro.php?acao=atualizar&id=".$id;
        require_once('formEditar.php');
    }

    else if($acao=='atualizar'){
        $registro = $_POST;
        $sql = "UPDATE cadastro SET nome= :nome, data=:data, sexo=:sexo, email=:email, telefone=:telefone, "
               ." estado=:estado, cidade=:cidade, cep=:cep, formacao=:formacao, inicio=:inicio, curso=:curso,"
               . "profissao=:profissao, idioma =:idioma"
               . " WHERE id = :id";
        $result = $con->executaQuery($sql, $registro);
        if($result==true) header('location: controladorCadastro.php');
        else echo "Deu ruim :(";
    }
// ------------------------------VISUALIZAR------------------------------------
  else if($acao=='visualizar'){
      $id     = $_GET['id'];
      $sql    = "SELECT * FROM cadastro WHERE id = :id";
      $chave  = array('id'=>$id);
      $r = $con->getRegistro($sql, $chave);
      require_once('formVisualizar.php');
    }
?>
