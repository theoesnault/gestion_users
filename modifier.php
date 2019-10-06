<?php 

if (!isset($_GET['id'])) {
    header('location:index.php');
} else {

    require_once('fonctions.php');
    $id = $_GET['id'];

    if (isset($_POST['formulaire'])) {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $telephone = $_POST['telephone'];


        edit_user($id, $nom, $prenom, $email, $telephone);
    }
    
require('header.php');
?>
    <div class="container">
        <div class="row justify-content-center" style="margin-top: 5%;">
            <form action="" method="post">
                <table style="text-align: center;">
                    <tr>
                        <td colspan="2"><h3>Modification d'utilisateur</h3></td>
                    </tr>
                    <tr>
                        <td><label for="nom">Nom</label></td>
                        <td><input class="form-control" type="text" name="nom" id="nom" value="<?php echo "1"?>"></td>
                    </tr>
                    <tr>
                        <td><label for="prenom">Prénom</label></td>
                        <td><input class="form-control" type="text" name="prenom" id="prenom"></td>
                    </tr>
                    <tr>
                        <td><label for="email">Email</label></td>
                        <td><input class="form-control" type="email" name="email" id="email"></td>
                    </tr>
                    <tr>
                        <td><label for="telephone">Téléphone</label></td>
                        <td><input class="form-control" type="telephone" name="telephone" id="telephone"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><button class="btn btn-success" name="formulaire" type="submit">Appliquer les modifications</button></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>

<?php } ?>