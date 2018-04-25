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
          h11{ color:red; }
          body{background: linear-gradient(to right, #232526, #414345);}
          form{color: #ffffff;}
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
      <!-- FORMULARIO -->
    <form class="form-horizontal" action="cadUsuario.php" method="POST">
      <legend class="text-primary">Informação Pessoal</legend>

      <div class="form-group">
          <label class="col-md-2 control-label" for="nome">Nome: <h11>*</h11></label>
        <div class="col-md-8">
          <input type="text" class="form-control" id="nome" placeholder="Digite seu nome completo" name="nome" required>
        </div>
      </div>
      <!-- Fim nome -->
      <div class="form-group">
          <label class="col-md-2 control-label" for="data">Nascimento: <h11>*</h11></label>
        <div class="col-md-3">
          <input type="date" class="form-control" id="data"  name="data" required>
        </div>

          <label class="col-md-2 control-label" for="sexo">Sexo: <h11>*</h11></label>
        <div class="col-md-3">
          <label class="radio-inline">
            <input type="radio" id="sexo" name="sexo" value="Masculino"required>Masculino
          </label>
          <label class="radio-inline">
            <input type="radio" id="sexo" name="sexo" value="Feminino">Feminino
          </label>
        </div>
      </div> <!-- Apenas 1 form-group para os 2(sexo e data) -->
      <!-- Fim Sexo e data -->
      <div class="form-group">
        <label class="col-md-2 control-label" for="cpf">CPF: <h11>*</h11></label>
        <div class="col-md-3">
          <input type="text" class="form-control" id="cpf" placeholder="Digite seu CPF" name="cpf" maxlength="11" required>
        </div>

        <label class="col-md-2 control-label" for="rg">RG: <h11>*</h11></label>
        <div class="col-md-3">
          <input type="text" class="form-control" id="rg" placeholder="Digite seu RG" name="rg" maxlength="10" required>
        </div>
      </div><!-- Apenas 1 form-group para os 2(cpf e rg) -->
      <!-- Fim cpf e rg -->
      <legend class="text-primary">Endereço e Contato</legend>

      <div class="form-group">
        <label class="col-md-2 control-label" for="email">Email: <h11>*</h11></label>
        <div class="col-md-3"><!--name="email"-->
          <input type="text" class="form-control" id="email" placeholder="email@email.com"  required>
        </div>

        <label class="col-md-2 control-label" for="celular">Telefone: <h11>*</h11></label>
        <div class="col-md-3"><!--name="celular"-->
          <input type="text" class="form-control" id="celular" placeholder="XX XXXXX-XXXX"  required>
        </div>
      </div><!-- Apenas 1 form-group para os 2(email,telefone) -->
      <!-- telefone e email fim -->

    <div class="form-group">
        <label class="col-md-2 control-label" for="estado">Estado: <h11>*</h11></label>
        <div class="col-md-3"><!--name="estado"-->
          <input type="text" class="form-control" id="estado" placeholder="Digite seu estado"  required>
        </div>

        <label class="col-md-2 control-label" for="uf">UF: <h11>*</h11></label>
        <div class="col-md-3"> <!--name="uf"-->
          <select class="form-control" id="uf"  required>
            <option value="AC">AC</option>
            <option value="AL">AL</option>
            <option value="AP">AP</option>
            <option value="AM">AM</option>
            <option value="BA">BA</option>
            <option value="CE">CE</option>
            <option value="DF">DF</option>
            <option value="ES">ES</option>
            <option value="GO">GO</option>
            <option value="MA">MA</option>
            <option value="MT">MT</option>
            <option value="MS">MS</option>
            <option value="MG">MG</option>
            <option value="PA">PA</option>
            <option value="PB">PB</option>
            <option value="PR">PR</option>
            <option value="PE">PE</option>
            <option value="PI">PI</option>
            <option value="RJ">RJ</option>
            <option value="RN">RN</option>
            <option value="RS">RS</option>
            <option value="RO">RO</option>
            <option value="RR">RR</option>
            <option value="SC">SC</option>
            <option value="SP">SP</option>
            <option value="SE">SE</option>
            <option value="TO">TO</option>
          </select>
        </div>
      </div><!-- Apenas 1 form-group para os 2(estado e uf) -->
      <!-- estado e uf fim -->

      <div class="form-group">
        <label class="col-md-2 control-label" for="cep">CEP: <h11>*</h11></label>
        <div class="col-md-3"> <!--name="cep"-->
          <input type="text" class="form-control" id="cep" placeholder="Digite seu CEP"  maxlength="15" required>
        </div>

        <label class="col-md-2 control-label" for="cidade">Cidade: <h11>*</h11></label>
        <div class="col-md-3"><!--name="cidade" -->
          <input type="text" class="form-control" id="cidade" placeholder="Digite sua cidade" required>
        </div>
      </div><!-- Apenas 1 form-group para os 2(cep cidade) -->
      <!-- cep e cidade fim -->

     <div class="form-group">
        <label class="col-md-2 control-label" for="bairro">Bairro: <h11>*</h11></label>
        <div class="col-md-2"><!--name="bairro"-->
          <input type="text" class="form-control" id="bairro" placeholder="Digite seu bairro"  required>
        </div>

        <label class="col-md-1 control-label" for="rua">Rua: <h11>*</h11></label>
        <div class="col-md-2"> <!--name="rua"-->
          <input type="text" class="form-control" id="rua" placeholder="Digite sua rua"  required>
        </div>

        <label class="col-md-1 control-label" for="n">Nº: <h11>*</h11></label>
        <div class="col-md-1"> <!--name="n"-->
          <input type="text" class="form-control" id="n" placeholder="Nº"  required>
        </div>
      </div><!-- Apenas 1 form-group para os 3(bairro,rua,numero) -->
      <!-- bairro rua numero fim -->

     <legend class="text-primary">Formação Acadêmica</legend>
      <div class="form-group">
        <label class="col-md-2 control-label" for="formacaoC">Concluída: <h11>*</h11></label>
        <div class="col-md-3"> <!--name="formacaoC"-->
          <select class="form-control" id="formacaoC"  required>
            <option value="nenhuma">Nenhuma</option>
            <option value="ef">Ensino Fundamental 1º grau</option>
            <option value="em">Ensino Médio 2º grau</option>
            <option value="graduado">Graduação</option>
            <option value="mestre">Mestrado</option>
            <option value="doutor">Doutorado</option>
          </select>
        </div>

        <label class="col-md-2 control-label" for="conclusao">Conclusão(ano):</label>
        <div class="col-md-2"> <!--name="conclusao"-->
          <input type="number" class="form-control" id="conclusao" placeholder="Ex:2017"  min="1930" max="2018">
        </div>
      </div><!-- Apenas 1 form-group para os 2 -->
      <!-- formaçao e conclusao fim -->

      <div class="form-group">
        <label class="col-md-2 control-label" for="curso1">Curso:</label>
        <div class="col-md-8"> <!--name="curso1"-->
          <input type="text" class="form-control" id="curso1" placeholder="Digite seu curso (OPCIONAL)" >
        </div>
      </div>
      <!-- fim curso -->

      <div class="form-group">
        <label class="col-md-2 control-label" for="formacaoA">Em andamento: <h11>*</h11></label>
          <div class="col-md-3"> <!--name="formacaoA"-->
          <select class="form-control" id="formacaoA"  required>
            <option value="nenhuma2">Nenhuma</option>
            <option value="ef2">Ensino Fundamental 1º grau</option>
            <option value="em2">Ensino Médio 2º grau</option>
            <option value="graduado2">Graduação</option>
            <option value="mestre2">Mestrado</option>
            <option value="doutor2">Doutorado</option>
          </select>
          </div>

        <label class="col-md-2 control-label" for="inicio">Inicio(ano):</label>
        <div class="col-md-2"> <!--name="inicio"-->
          <input type="number" class="form-control" id="inicio" placeholder="Ex:2017"  min="2000" max="2018">
        </div>
    </div><!-- Apenas 1 form-group para os 2 -->
    <!-- formaçao e inicio fim -->

      <div class="form-group">
        <label class="col-md-2 control-label" for="curso2">Curso:</label>
        <div class="col-md-8"> <!--name="texto"-->
          <input type="text" class="form-control" id="curso2" placeholder="Digite seu curso (OPCIONAL)" >
        </div>
      </div>
      <!-- fim curso -->

    <legend class="text-primary">Atuação profissional e Idioma</legend>

      <div class="form-group">
        <label class="col-md-2 control-label" for="texto">Experiencia profissional:<h11>*</h11></label>
        <div class="col-md-8"> <!--name="texto"-->
          <textarea  class="form-control" id="texto" rows="5" placeholder="Fale sobre sua Experiencia profissional " required></textarea>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label" for="idioma1">Idioma: <h11>*</h11></label>
        <div class="col-md-2">
          <select class="form-control" id="idioma1"  required> <!--name="idioma1"-->
            <option value="nenhum">Nenhum</option>
            <option value="ingles">inglês</option>
            <option value="espanhol">Espanhol</option>
            <option value="frances">Francês</option>
            <option value="japones">Japonês</option>
            <option value="alemão">Alemão</option>
            <option value="italiano">Italiano</option>
            <option value="russo">Russo</option>
          </select>
        </div>

        <label class="col-md-0,5 control-label" for="idioma1"></label>
        <div class="col-md-2">
          <select class="form-control" id="idioma1"  required><!--name="idioma1"-->
            <option value="nenhum2">Nenhum</option>
            <option value="ingles2">inglês</option>
            <option value="espanhol2">Espanhol</option>
            <option value="frances2">Francês</option>
            <option value="japones2">Japonês</option>
            <option value="alemão2">Alemão</option>
            <option value="italiano2">Italiano</option>
            <option value="russo2">Russo</option>
          </select>
        </div>

        <label class="col-md-0,5 control-label" for="idioma1"></label>
        <div class="col-md-2">
          <select class="form-control" id="idioma1"  required> <!--name="idioma1"-->
            <option value="nenhum3">Nenhum</option>
            <option value="ingles3">inglês</option>
            <option value="espanhol3">Espanhol</option>
            <option value="frances3">Francês</option>
            <option value="japones3">Japonês</option>
            <option value="alemão3">Alemão</option>
            <option value="italiano3">Italiano</option>
            <option value="russo3">Russo</option>
          </select>
        </div>
    </div>

      <div class="form-group">
        <label class="col-md-4 control-label" for="Cadastrar"></label>
        <div class="col-md-6">
          <button id="Cadastrar" class="btn btn-success" type="Submit">Cadastrar</button>
          <button id="Cancelar"  class="btn btn-danger" type="Reset">Cancelar</button>
        </div>
      </div>
    </form>
  </div><!-- div offset -->
  </div><!-- div conteiner -->
</body>
</html>
