<?php
    //Criacação de uma instância de objeto,
    //passando como par a string de conexão, o usuário e a senha
        //string de conexao: driver(mysql), host (servidor)
        //dbname (qual o banco)
        //usuário e senha
        try{
          $con = new PDO("mysql:host=localhost;dbname=curriculo",
          'root', '');
        }catch(PDOExcepetion $e){
          echo 'Falha na Conexão: ' . $e->getMessage();
        }
  ?>

<?php
$usuario = $_POST;
  $sql = "INSERT INTO usuario(nome, nascimento, sexo, cpf, rg) "
        ." VALUES(:nome, :data, :sexo, :cpf, :rg)";
  $query = $con->prepare($sql);

  if($query->execute($usuario)){

    //echo "Cadastrado com Sucesso";
    header('location: principal.php');
  }
  else echo "Erro ao cadastrar";
?>
