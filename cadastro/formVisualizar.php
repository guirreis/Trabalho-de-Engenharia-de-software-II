<?php require_once('../header.php');?>
<div class="container">
<div class="col-md-10 col-md-offset-1">
  <h1>Visualizar Curriculo</h1>
  <form class="form-horizontal" action="<?php echo $acaoForm;?>" method="POST">

    <legend class="text-primary">Dados</legend>

<!-- ........................................................................-->
<div class="form-group">
  <label class="col-md-2 control-label" for="nome">Nome: </label>
  <div class="col-md-8">
    <input type="text" class="form-control" id="nome" placeholder="Digite seu nome " name="nome" required readonly
            value=" <?php if(isset($r['nome'])) echo $r['nome']; ?> "  >
  </div>
</div>
<!-- ........................................................................-->
<div class="form-group">
  <label class="col-md-2 control-label" for="data">Nascimento: </label>
  <div class="col-md-3">
    <input type="date" class="form-control" id="data"  name="data" readonly
            value="<?php if(isset($r['data'])) echo $r['data'];?>" required>
  </div>

  <label class="col-md-2 control-label" for="sexo">Sexo: </label>
  <div class="col-md-3">
      <select name="sexo" class="form-control" required >
          <option value="1" <?php if(isset($r['sexo'])
                                  && $r['sexo']==1) echo "selected"; ?>>Masculino</option>
          <option value="0" <?php if(isset($r['sexo'])
                                  && $r['sexo']==0) echo "selected";?>>Feminino</option>
      </select>
  </div>
</div>
<!-- ........................................................................-->
    <legend class="text-primary">Contato</legend>

    <div class="form-group">
      <label class="col-md-2 control-label" for="nome">Email: </label>
      <div class="col-md-8">
        <input type="text" class="form-control" id="email" placeholder="Digite seu email " name="email" readonly
                value="<?php if(isset($r['email'])) echo $r['email']; ?>" required >
      </div>
    </div>

<div class="form-group">
  <label class="col-md-2 control-label" for="telefone">Telefone: </label>
  <div class="col-md-8">
    <input type="text" class="form-control" name="telefone" id="telefone" placeholder="XX XXXXX-XXXX" readonly
            value="<?php if(isset($r['telefone'])) echo $r['telefone'];?>" required>
  </div>
</div>
<!-- ........................................................................-->
    <legend class="text-primary">Endereço</legend>

    <div class="form-group">
  <label class="col-md-2 control-label" for="estado">Estado: </label>
  <div class="col-md-8">
    <input type="text" class="form-control" id="estado"  name="estado" placeholder="Digite seu Estado" readonly
            value="<?php if(isset($r['estado'])) echo $r['estado'];?>" required>
  </div>
</div>
<!-- ........................................................................-->
<div class="form-group">
  <label class="col-md-2 control-label" for="cidade">Cidade: </label>
  <div class="col-md-3">
    <input type="text" class="form-control" id="cidade"  name="cidade" placeholder="Digite sua Cidade" readonly
            value="<?php if(isset($r['cidade'])) echo $r['cidade'];?>" required>
  </div>

  <label class="col-md-2 control-label" for="cep">CEP: </label>
  <div class="col-md-3">
    <input type="text" class="form-control" id="cep"  name="cep" placeholder="Digite seu CEP" readonly
            value="<?php if(isset($r['cep'])) echo $r['cep'];?>" required>
  </div>
</div>

<!-- ........................................................................-->
<legend class="text-primary">Formação</legend>
 <div class="form-group">
       <label class="col-md-2 control-label" for="formacao">Em andamento: </label>
         <div class="col-md-4">
         <select class="form-control" id="formacao"  name="formacao" required >
           <option value="Nenhuma" <?php if(isset($r['formacao'])
                             && $r['formacao']=='Nenhuma') echo "selected"; ?>>Nenhuma</option>

           <option value="Ensino Fundamental"<?php if(isset($r['formacao'])
                             && $r['formacao']=='Ensino Fundamental') echo "selected"; ?>>Ensino Fundamental 1º grau</option>

           <option value="Ensino Médio"<?php if(isset($r['formacao'])
                             && $r['formacao']=='Ensino Médio') echo "selected"; ?>>Ensino Médio 2º grau</option>

           <option value="Gradução"<?php if(isset($r['formacao'])
                             && $r['formacao']=='Gradução') echo "selected"; ?>>Graduação</option>

           <option value="Mestrado"<?php if(isset($r['formacao'])
                             && $r['formacao']=='Mestrado') echo "selected"; ?>>Mestrado</option>

           <option value="Doutorado"<?php if(isset($r['formacao'])
                            && $r['formacao']=='doutorado') echo "selected"; ?>>Doutorado</option>
         </select>
         </div>

       <label class="col-md-2 control-label" for="inicio">Inicio(ano):</label>
       <div class="col-md-2">
         <input type="number" class="form-control" name="inicio" id="inicio" placeholder="Ex:2017" min="2000" max="2018" required readonly
          value="<?php if(isset($r['inicio'])) echo $r['inicio'];?>">
       </div>
   </div><!-- Apenas 1 form-group para os 2 -->
   <!-- formaçao e inicio fim -->

<!-- ........................................................................-->
   <div class="form-group">
     <label class="col-md-2 control-label" for="curso">Curso: </label>
     <div class="col-md-8">
       <input type="text" class="form-control" id="curso"  name="curso" placeholder="Digite seu Curso" readonly
               value="<?php if(isset($r['curso'])) echo $r['curso'];?>" required >
     </div>
   </div>
<!-- ........................................................................-->
<legend class="text-primary">Profissão</legend>
<div class="form-group">
    <label class="col-md-2 control-label" for="profissao">Profissão: </label>
  <div class="col-md-8">
    <input type="text" class="form-control" id="profissao" placeholder="Digite sua Profissão" name="profissao" readonly
     value="<?php if(isset($r['profissao'])) echo $r['profissao'];?>" required>
  </div>
</div>
<!-- ........................................................................-->
<div class="form-group">
    <label class="col-md-2 control-label" for="idioma">Idioma: </label>
  <div class="col-md-4">
    <input type="text" class="form-control" id="idioma" placeholder="Digite o Idioma" name="idioma" readonly
     value="<?php if(isset($r['idioma'])) echo $r['idioma'];?>" required>
  </div>
</div>
<!-- ........................................................................-->

<div class="form-group">
  <label class="col-md-5 control-label"></label>
  <div class="col-md-5">
      <a  class="btn btn-danger" href="<?= APP_PATH ?>/cadastro/controladorCadastro.php">Voltar</a>
  </div>
</div>

</form>

</div>
</div>
