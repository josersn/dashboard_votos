<?php
require_once("includes/header.php");?>
<div class="row">
    <div class="col s12 m6 push-m3 ">
        <h3 class="light">Clientes</h3>
        <table class="striped">
        <thead>
            <tr>
                <th>Nome:</th>
                <th>Sobrenome:</th>
                <th>Email:</th>
                <th>Idade:</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>José</td>
                <td>Ramos</td>
                <td>nettorammos@hotmail.com</td>
                <td>19</td>
                <td><a href="#" class="btn-floating"><i class="material-icons">edit</i></a></td>
                <td><a href="#" class="btn-floating red"><i class="material-icons">delete</i></a></td>
            </tr>
        </tbody>
        </table>
        <br>
        <a href="adicionar.php" class="btn">Adicionar Cliente</a>
    </div>
</div>
<?php
require_once("includes/footer.php");?>