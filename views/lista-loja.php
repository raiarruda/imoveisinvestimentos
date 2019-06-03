<?php require_once("cabecalho.php"); ?>
<?php require_once("../models/Loja.php");
    $loja = new Loja();
    $lojas=$loja->listar();
?>

<h1>Lista Lojas</h1>
<?php
if(array_key_exists("removido", $_GET) && $_GET ['removido']=='true') {
    ?>
    <p>Loja removida</p>
<?php }

?>
<div class="row">
<?php
    
    foreach ($lojas as $loja):
        ?>
        <!-- Card 2 -->
        <div class="col">
                <div class="card" style="width-max: 18rem">
                <!--Carousel Wrapper-->
                    <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
                    <!--Indicators-->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                        <li data-target="#carousel-example-1z" data-slide-to="2"></li>
                    </ol>
                    <!--/.Indicators-->
                    <!--Slides-->
                    <div class="carousel-inner" role="listbox">
                        <!--First slide-->
                        <div class="carousel-item active">
                        <img class="d-block w-100" src="https://dummyimage.com/300/1c0b75/f2f2f2.png&text=1"
                            alt="First slide">
                        </div>
                        <!--/First slide-->
                        <!--Second slide-->
                        <div class="carousel-item">
                        <img class="d-block w-100" src="https://dummyimage.com/300/eb1152/f2f2f2.png&text=2"
                            alt="Second slide">
                        </div>
                        <!--/Second slide-->
                        <!--Third slide-->
                        <div class="carousel-item">
                        <img class="d-block w-100" src="https://dummyimage.com/300/215e0b/f2f2f2.png&text=3"
                            alt="Third slide">
                        </div>
                        <!--/Third slide-->
                    </div>
                    <!--/.Slides-->
                    <!--Controls-->
                    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    <!--/.Controls-->
                    </div>
                    <!--/.Carousel Wrapper-->
                    <!-- <img class="card-img-top" src="https://place-hold.it/300" alt="Imagem de capa do card"> -->
                        <div class="card-body">
                            <h5 class="card-title">   <a href="detalhe-loja.php?id=<?=$loja['id']?>"> <?=$loja['titulo'] ?>  </a></h5>
                            <p class="card-text">Area: <?=$loja['area'] ?> m²</p>
                        </div>

                </div>
                <div class="card-footer">
                    <div class="text-right">
                        <a class="btn btn-info" href="/categorias-editar.php?id=<?=$loja['id'] ?>">Editar</a>
                        <a class="btn btn-danger" href="/remove-loja.php?id=<?=$loja['id'] ?>"> Deletar </a>
                    </div>
                </div>
            </div>


        <?php
            
            endforeach
        ?>
</div>
<?php include("rodape.php"); ?>
