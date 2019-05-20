<?php include("cabecalho.php"); ?>
<?php include("../models/salaDAO.php"); ?>

<h1>Formulário de cadastro</h1>
<form action="adiciona-sala.php">
    <table>
        <tr>
            <td>Area</td>
            <td><input class="form-control" type="number" name="area" /></td>
        </tr>
        <tr>
            <td>Mezzanino</td>
            <td><input class="form-control" type="number" name="mezzanino" /></td>
        </tr>
        <tr>
            <td>Shopping</td>
            <td><input class="form-control" type="number" name="shopping" /></td>
        </tr>
        <tr>
            <td>Centro Comercial</td>
            <td><input class="form-control" type="number" name="centrocomercial" /></td>
        </tr>
        <tr>
            <td>Pavimentacao</td>
            <td><input class="form-control" type="number" name="pavimentacao" /></td>
        </tr>
        <tr>
            <td><button class="btn btn-primary" type="submit">Cadastrar</button></td>
        </tr>
    </table>
</form>


<?php include("rodape.php"); ?>
