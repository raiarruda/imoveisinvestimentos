<?php require_once("cabecalho.php"); ?>
<?php require_once("../models/Loja.php"); ?>


<h1>Formulário de cadastro</h1>
<form action="adiciona-loja.php" method="POST">
    <div class="form-group row">
        <label class="col-sm-1 col-form-label" for="titulo">Título</label>
        <div class="col-sm-11">
            <input type="text"  class="form-control" placeholder="Digite aqui o titulo do imovel" name="titulo">
        </div>
     </div>

    <div class="form-group row">
        <label class="col-sm-1 col-form-label" for="area">Area:</label>
        <div class="col-sm-11">
            <input  type="number" step="0.05" min="0"  class="form-control" placeholder="Exemplo: 25.6 m² " name="area">
        </div>
     </div>

    <!-- Abrir Características -->
    <div class="form-group row">
      <div class="col-md-auto">Características:</div>
        <div class="col-sm-9">

          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="mezzanino">
              <label class="form-check-label" for="mezzanino">
                Mezzanino
              </label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="shopping">
              <label class="form-check-label" for="shopping">
                Shopping
              </label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="centro_comercial">
              <label class="form-check-label" for="centro_comercial">
                Centro Comercial
              </label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="frente_de_rua">
              <label class="form-check-label" for="frente_de_rua">
                Frente de Rua
              </label>
          </div>
          
        </div>
    </div>
    <!-- Fim das Características -->

    <!-- Inicio da Pavimentação --> 
    <div class="form-group row">
      <label class="col-sm-auto col-form-label" for="pavimentacao">Pavimentação:</label>
        <div class="col-lg-2">
          <select class="form-control" id="pavimentacao">
            <option>Asfalto</option>
            <option>Pedra Portuguesa </option>
            <option>Bloquete</option>
          </select>
        </div>
    </div>
    <!-- Fim da Pavimentação -->

    <div class="form-group row">
        <label class="col-md-auto col-form-label" for="localizacao">Localização:</label>
        <div class="col-sm-8">
            <input type="text"  class="form-control" placeholder="Digite o endereço" name="localizacao">
        </div>
     </div>

     <div class="form-group">
        <label class="form-label" for="descricao">Mais informações</label>
    
        <textarea  rows ="5" type="text" type="number" step="0.05" min="0"  class="form-control" placeholder="Tem mais informações sobre o imovel? escreve aqui" id="descricao" name="descricao">
        </textarea>
    
     </div>



    
    <button class="btn btn-primary" type="submit">Cadastrar</button>
  
</form>


<?php include("rodape.php"); ?>