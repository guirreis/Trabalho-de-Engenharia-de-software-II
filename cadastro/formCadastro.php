<?php require_once('../header.php');?>
<div class="container">
<div class="col-md-10 col-md-offset-1">
  <h1>Cadastro de Curriculo</h1>
  <form class="form-horizontal" action="<?php echo $acaoForm;?>" method="POST">

    <legend class="text-primary">Dados</legend>

<!-- ........................................................................-->
<div class="form-group">
  <label class="col-md-2 control-label" for="nome">Nome: <h11>*</h11></label>
  <div class="col-md-8">
    <input type="text" class="form-control" id="nome" placeholder="Digite seu nome " name="nome" required  >
  </div>
</div>
<!-- ........................................................................-->
<div class="form-group">
  <label class="col-md-2 control-label" for="data">Nascimento: <h11>*</h11></label>
  <div class="col-md-3">
    <input type="date" class="form-control" id="data"  name="data" required>
  </div>

  <label class="col-md-2 control-label" for="sexo">Sexo: </label>
  <div class="col-md-3">
      <select name="sexo" class="form-control" required>
          <option value="1" <?php if(isset($registro['sexo'])
                                  && $registro['sexo']==1) echo "selected"; ?>>Masculino</option>
          <option value="0" <?php if(isset($registro['sexo'])
                                  && $registro['sexo']==0) echo "selected"; ?>>Feminino</option>
      </select>
  </div>
</div>
<!-- ........................................................................-->
    <legend class="text-primary">Contato</legend>

    <div class="form-group">
      <label class="col-md-2 control-label" for="nome">Email: <h11>*</h11></label>
      <div class="col-md-8">
        <input type="text" class="form-control" id="email" placeholder="Digite seu email " name="email" required >
      </div>
    </div>

<div class="form-group">
  <label class="col-md-2 control-label" for="telefone">Telefone: <h11>*</h11></label>
  <div class="col-md-8">
    <input type="text" class="form-control" name="telefone" id="telefone" placeholder="XX XXXXX-XXXX" required>
  </div>
</div>
<!-- ........................................................................-->
    <legend class="text-primary">Endereço</legend>

    <div class="form-group">
  <label class="col-md-2 control-label" for="estado">Estado: <h11>*</h11></label>
  <div class="col-md-8">
    <input type="text" class="form-control" id="estado"  name="estado" placeholder="Digite seu Estado" required>
  </div>
</div>
<!-- ........................................................................-->
<div class="form-group">
  <label class="col-md-2 control-label" for="cidade">Cidade: <h11>*</h11></label>
  <div class="col-md-3">
    <input type="text" class="form-control" id="cidade"  name="cidade" placeholder="Digite sua Cidade" required>
  </div>

  <label class="col-md-2 control-label" for="cep">CEP: <h11>*</h11></label>
  <div class="col-md-3">
    <input type="text" class="form-control" id="cep"  name="cep" placeholder="Digite seu CEP" required>
  </div>
</div>

<!-- ........................................................................-->
<legend class="text-primary">Formação</legend>
 <div class="form-group">
       <label class="col-md-2 control-label" for="formacao">Em andamento: </label>
         <div class="col-md-4">
         <select class="form-control" id="formacao"  name="formacao" required >
           <option value="Nenhuma" <?php if(isset($registro['formacao'])
                             && $registro['formacao']=='Nenhuma') echo "selected"; ?>>Nenhuma</option>

           <option value="Ensino Fundamental"<?php if(isset($registro['formacao'])
                             && $registro['formacao']=='Ensino Fundamental') echo "selected"; ?>>Ensino Fundamental 1º grau</option>

           <option value="Ensino Médio"<?php if(isset($registro['formacao'])
                             && $registro['formacao']=='Ensino Médio') echo "selected"; ?>>Ensino Médio 2º grau</option>

           <option value="Gradução"<?php if(isset($registro['formacao'])
                             && $registro['formacao']=='Gradução') echo "selected"; ?>>Graduação</option>

           <option value="Mestrado"<?php if(isset($registro['formacao'])
                             && $registro['formacao']=='Mestrado') echo "selected"; ?>>Mestrado</option>

           <option value="Doutorado"<?php if(isset($registro['formacao'])
                            && $registro['formacao']=='doutorado') echo "selected"; ?>>Doutorado</option>
         </select>
         </div>

       <label class="col-md-2 control-label" for="inicio">Inicio(ano):<h11>*</h11></label>
       <div class="col-md-2">
         <input type="number" class="form-control" name="inicio" id="inicio" placeholder="Ex:2017" min="2000" max="2018" required>
       </div>
   </div><!-- Apenas 1 form-group para os 2 -->
   <!-- formaçao e inicio fim -->

<!-- ........................................................................-->
   <div class="form-group">
     <label class="col-md-2 control-label" for="curso">Curso: <h11>*</h11></label>
     <div class="col-md-8">
       <input type="text" class="form-control" id="curso"  name="curso" placeholder="Digite seu Curso" required>
     </div>
   </div>
<!-- ........................................................................-->
<legend class="text-primary">Profissão</legend>
<div class="form-group">
    <label class="col-md-2 control-label" for="profissao">Profissão: <h11>*</h11></label>
  <div class="col-md-8">
    <input type="text" class="form-control" id="profissao" placeholder="Digite sua Profissão" name="profissao" required>
  </div>
</div>
<!-- ........................................................................-->
<div class="form-group">
    <label class="col-md-2 control-label" for="idioma">Idioma: <h11>*</h11></label>
  <div class="col-md-4">
    <input type="text" class="form-control" id="idioma" placeholder="Digite o Idioma" name="idioma" required>
  </div>
</div>
<!-- ........................................................................-->
<div class="form-group">
  <label class="col-md-5 control-label"></label>
  <div class="col-md-5">
    <button  class="btn btn-primary active btn-md" type="submit">Cadastrar</button>
    <button   class="btn btn-danger" type="Reset">Cancelar</button>
  </div>
</div>
</form>

</div>
</div>
