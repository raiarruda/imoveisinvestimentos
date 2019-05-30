<?php require_once("cabecalho.php"); ?>
<?php increquire_oncelude("../models/lojaDAO.php"); ?>

<h1>Formulário de cadastro</h1>
<form action="adiciona-loja.php" method="POST">
    <table>
        <tr>  
            <td>Titulo</td>
            <td><input class="form-control" type="text" name="titulo" /></td>
        </tr>
        <tr>
            <!-- TODO:  numeros reais -->
            <td>Area</td>
            <td><input class="form-control" type="number" name="area" /></td>
        </tr>
        <!-- TODO: check box  -->
        <tr>
            <td>Mezzanino</td>
            <td><input class="form-control" type="number" name="tem_mezzanino" /></td>
        </tr>
        <tr>
            <td>Shopping</td>
            <td><input class="form-control" type="number" name="shopping" /></td>
        </tr>
        <tr>
            <td>Centro Comercial</td>
            <td><input class="form-control" type="number" name="centro_comercial" /></td>
        </tr>
        <!-- s´p avimentacao selector: opções  1 2 e 3 -->
        <tr>
            <td>Pavimentacao</td>
            <td><input class="form-control" type="number" name="tipo_de_rua" /></td>
        </tr>
        <tr>
            <td>Frente de rua</td>
            <td><input class="form-control" type="number" name="frente_rua" /></td>
        </tr>
     
        <tr>
            <td><button class="btn btn-primary" type="submit">Cadastrar</button></td>
        </tr>
    </table>
</form>


<?php include("rodape.php"); ?>
