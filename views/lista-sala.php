<?php include("cabecalho.php"); ?>
<?php include("../models/salaDAO.php"); ?>

<h1>Lista Salas</h1>
<?php
if(array_key_exists("removido", $_GET) && $_GET ['removido']=='true') {
    ?>
    <p>sala removida</p>
<?php }

?>
<table>
<?php
    
    $salas = listaSalas($conexao);
    
    foreach($salas as $sala):
        ?>
        <tr>
            <td> <?=$sala['titulo'] ?></td>
            <td> <?=$sala['area'] ?></td>
            <td><form action= "remove-sala.php?id=<?=$sala['id'] ?>" method="POST">
             <button>Remover </button>    
            </form></td>
        </tr>

<?php
      
    endforeach

?>

</table>
<?php include("rodape.php"); ?>
