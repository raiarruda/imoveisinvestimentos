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
<table>
<?php
    
    
    foreach ($lojas as $loja):
        ?>
        <tr>
            <td><a href="detalhe-loja.php?id=<?=$loja['id']?>">
                <?=$loja['titulo'] ?>
                <?=$loja['id'] ?>

                </a></td>
            <td> <?=$loja['area'] ?></td>
            <td><form action= "remove-loja.php?id=<?=$loja['id'] ?>" method="POST"> 
            <!-- to passando como get e tá funcionando
        eu deveria está passando como post -->
             <button>Remover </button>    
            </form></td>
        </tr>

<?php
      
    endforeach

?>

</table>
<?php include("rodape.php"); ?>
