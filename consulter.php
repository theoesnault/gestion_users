<?php 

if (!isset($_GET['id'])) {
    header('location:index.php');
} else {
    require('fonctions.php');
    require('header.php');
    $id = $_GET['id'];
?>
<div class="container">
    <table class="table">
        <tr>
            <td colspan="4"><h3>Consulter</h3></td>
        </tr>
        <tr>
            <td>Nom</td>
            <td>Prénom</td>
            <td>Email</td>
            <td>Téléphone</td>
        </tr>
        <?php consulter($id); ?>
    </table>
</div>


<?php } ?>

