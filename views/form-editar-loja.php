<?php require_once("cabecalho.php"); ?>
<?php require_once("../models/Loja.php");

  $id = $_GET['id'];
  $loja = new Loja($id);
  
?>


<h1>Formulário de cadastro</h1>
<form action="edita-loja.php" method="POST">
    <div class="form-group row">
        <label class="col-sm-1 col-form-label" for="titulo">Título</label>
        <div class="col-sm-11">
            <input type="text" value="<?=$loja->titulo?>" class="form-control" placeholder="Digite aqui o titulo do imovel" name="titulo">
        </div>
     </div>

    <div class="form-group row">
        <label class="col-sm-1 col-form-label" for="area">Area</label>
        <div class="col-sm-11">
            <input  type="number" step="0.05" min="0"  class="form-control" placeholder="Exemplo: 25.6 m² " name="area">
        </div>
     </div>

    <div class="form-group row">
        <div class="col-sm-2">Caracteristicas</div>
            <div class="col-sm-12">
                <div class="form-check">
                <input class="form-check-input"  name="tem_mezzanino"  value="true" type="checkbox" id="mezzanino">
                <label class="form-check-label" for="mezzanino">Tem mezzanino</label>
            </div>
        </div>
    </div>
    Shopping
    <input class="form-control" type="number" name="shopping" />

    Centro Comercial
    <input class="form-control" type="number" name="centro_comercial" />
    
    Frente de rua<input class="form-control" type="number" name="frente_rua" />

    <!-- TODO selected -->
    Pavimentacao<input class="form-control" type="number" name="tipo_de_rua" />


    <div class="form-group row">
        <label class="col-sm-1 col-form-label" for="localizacao">Localização</label>
        <div class="col-sm-11">
            <input type="text"  class="form-control" placeholder="Digite o endereço" name="localizacao">
        </div>
     </div>

     <div class="form-group">
        <label class="form-label" for="descricao">Mais informações</label>
    
        <textarea  rows ="5" type="text" type="number" step="0.05" min="0"  class="form-control" placeholder="Tem mais informações sobre o imovel? escreve aqui" id="descricao" name="descricao">
        </textarea>
    
     </div>


     <label for="story">Tell us your story:</label>

    
    <button class="btn btn-primary" type="submit">Cadastrar</button>
  
</form>


<?php include("rodape.php"); ?>
<form>
  
  <div class="form-group">
    <label for="exampleFormControlSelect1">Example select</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect2">Example multiple select</label>
    <select multiple class="form-control" id="exampleFormControlSelect2">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
</form>