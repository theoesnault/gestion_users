<?php

if (isset($_POST['confirmation']))
{
    if (isset($_GET['id']))
    {
        require_once('fonctions.php');
        $id = $_GET['id'];
        delete_user($id);
    } else {
        header('location:index.php');
    }
}else { 
    
require('header.php'); 
?>

<div class="container">
    <div class="row justify-content-center">
        <form action="" method="post">
            <table style="text-align:center;">
                <tr>
                    <td colspan="2">
                        <h3>Suppression d'utilisateur</h3>
                    </td>
                </tr>
                <tr>
                    <td><p>Veuillez confirmer la suppression </p></td>
                </tr>
                <tr>
                    <td><button class="btn btn-danger" type="submit" name="confirmation">Confirmer la suppression</button></td>
                </tr>
            </table>
        </form>
    </div>
</div>

<?php } ?>