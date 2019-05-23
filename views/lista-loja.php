<?php include("cabecalho.php"); ?>
<?php include("../models/lojaDAO.php"); ?>

<h1>Lista Lojas</h1>
<?php
if(array_key_exists("removido", $_GET) && $_GET ['removido']=='true') {
    ?>
    <p>Loja removida</p>
<?php }

?>
<table>
<?php
    
    $lojas = listaLojas($conexao);
    
    foreach ($lojas as $loja):
        ?>
        <tr>
            <td> <?=$loja['titulo'] ?></td>
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
