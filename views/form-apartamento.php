<?php require_once("cabecalho.php"); ?>
<?php require_once("../models/loja.php"); ?>


<h1>Formulário de cadastro de apartamento</h1>
<form action="adiciona-loja.php" method="POST">
<!-- Título -->
    <div class="form-group row">
            <label class="col-md-1 col-form-label" for="titulo">Título</label>
                <div class="col-sm-11">
                    <input type="text"  class="form-control" placeholder="Digite aqui o titulo do imovel" name="titulo">
                </div>
     </div>

<!-- Área -->
    <div class="form-group row">
        <label class="col-auto col-form-label" for="area_comuns">Area Comum:</label>
            <div class="col-lg-3">
                <input  type="number" step="0.05" min="0"  class="form-control" placeholder="Exemplo: 25.6 m² " name="area_comuns">
            </div>
    </div>
<!-- Comodos -->
<div class="container">
    <div class="row">
        <div class="form-group row">
            <label class="col-md-auto col-form-label" for="quartos">Quarto(s):</label>
                <div class="col-sm-auto">
                    <input  type="number" step="1" min="0"  class="form-control" placeholder="Exemplo: 1, 2, 3 " name="quartos">
                </div>
        </div>

        <div class="form-group row">
            <label class="col-md-auto col-form-label" for="suite">Suite(s):</label>
                <div class="col-sm">
                    <input  type="number" step="1" min="0"  class="form-control" placeholder="Exemplo: 1, 2, 3 " name="suite">
                </div>
        </div>

        <div class="form-group row">
            <label class="col-md-auto col-form-label" for="banheiro">Banheiro(s):</label>
                <div class="col-sm">
                    <input  type="number" step="1" min="0"  class="form-control" placeholder="Exemplo: 1, 2, 3 " name="banheiro">
                </div>
        </div>
    </div>
</div>
