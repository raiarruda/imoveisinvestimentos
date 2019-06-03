<?php require_once("views/cabecalho.php"); ?>
    <a href="views/lista-loja.php">Lista loja </a> <br>
    <a href="views/form-loja.php">ADD loja </a> <br>
    <a href="views/teste-upload-imagens.php">ADD uma img </a> <br>
    <a href="views/form-apartamento">ADD apartamento </a> <br>


    <!-- TODO colcar uma caixa de pesquisa -->
<div class="container-fluid">
    <div class="form-group form-">
            <!-- Barra de Pesquisa -->
            <label for="exemploPesquisa">Enconte o seu imóvel ideal</label>
        <div class="row">
            <div class="col-lg-6">
                <input type="text" class="form-control" id="exemploPesquisa1" aria-describedby="ajudaPesquisa" placeholder="Pesquise aqui (Ex: Cidade, Bairro, Rua)">
            </div>
            <!-- Status do Imóvel -->
            <div class="col-sm-2">
                <select class="form-control" aria-placeholder="Status">
                    <option>Venda</option>
                    <option>Aluguel</option>
                </select>
            </div>
                <!-- Classe do Imóvel -->
            <div class="col-sm-2">
                <select class="form-control">
                    <option>Casa</option>
                    <option>Apartamento</option>
                    <option>Loja</option>
                    <option>Sala</option>
                    <option>Terreno</option>
                </select>
            </div>
                <button class="btn btn my-2 my-sm-0" type="submit">Pesquisar</button>
        </div>
    </div>
</div>

    <!-- TODO colocar 3 imoveis em destaque -->

    <!-- Junção dos Cards --> 
    <div class="container">
        <div class="row">
    <!-- Card 1 -->
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src=".../100px180/?text=Image cap" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Título do card</h5>
                            <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                        </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src=".../100px180/?text=Image cap" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Título do card</h5>
                            <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                        </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src=".../100px180/?text=Image cap" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Título do card</h5>
                            <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                        </div>
                </div>
            </div>

    <!-- Fechamento dos Cards -->
        </div>
    </div>
    
<?php require_once("views/rodape.php"); ?>
