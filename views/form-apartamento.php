<?php require_once("cabecalho.php"); ?>
<?php require_once("../models/loja.php"); ?>

<body>
<h1>Formulário de cadastro de apartamento</h1>
<form action="adiciona-loja.php" method="POST">
<!-- Título -->
    <div class="form-group row">
            <label class="col-md-1 col-form-label" for="titulo">Título:</label>
                <div class="col-md-11">
                    <input type="text"  class="form-control" placeholder="Digite aqui o titulo do imovel" name="titulo">
                </div>
     </div>

<!-- Área -->
    <div class="form-group row">
        <label class="col-auto col-form-label" for="area_privativa">Area Privativa:</label>
            <div class="col-lg-3">
                <input  type="number" onkeypress="return onlynumber();" step="0.05" min="0"  class="form-control" placeholder="Exemplo: 25.6 m² " name="area_privativa">
            </div>
    </div>
<!-- Comodos -->
<div class="container">
    <div class="row">

        <div class="col-md-4 col-sm-12">
            <div class="form-group row">
                <label class="col-form-label" for="quartos">Quarto(s):</label>
                    <div class="col">
                        <input  type="number" onkeypress="return onlynumber();" step="1" min="0"  class="form-control" placeholder="Exemplo: 1, 2, 3, ..." name="quartos">
                    </div>
            </div>
        </div>

        <div class="col-md-4 col-sm-12">
            <div class="form-group row">
                <label class="col-form-label" for="suites">Suite(s):</label>
                    <div class="col">
                        <input  type="number" onkeypress="return onlynumber();" step="1" min="0"  class="form-control" placeholder="Exemplo 1, 2, 3, ..." name="suites">
                    </div>
            </div>
        </div>

        <div class="col-md-4 col-sm-12">
            <div class="form-group row">
                <label class="col-form-label" for="banheiro">Banheiro:(s)</label>
                    <div class="col">
                        <input  type="number" onkeypress="return onlynumber();" step="1" min="0"  class="form-control" placeholder="Exemplo 1, 2, 3, ..." name="banheiro">
                    </div>
            </div>
        </div>       

    </div>
</div>
<!-- Fim dos Comodos -->

<!-- Areas Comuns -->





    
</form>
</body>
<?php include("rodape.php"); ?>