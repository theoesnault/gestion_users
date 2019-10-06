<?php 

require_once('fonctions.php');

if (isset($_POST['formulaire']) && $_POST['nom'] != "" && $_POST['prenom'] != "" && $_POST['email'] != "" && $_POST['telephone'] != "") {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];

    new_user($nom, $prenom, $email, $telephone);
}

require('header.php');
?>
    <div class="container">
        <div class="row justify-content-center" style="margin-top: 5%;">
            <form action="" method="post">
                <table style="text-align: center;">
                    <tr>
                        <td colspan="2"><h3>Création d'utilisateur</h3></td>
                    </tr>
                    <tr>
                        <td><label for="nom">Nom</label></td>
                        <td><input class="form-control" type="text" name="nom" id="nom"></td>
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
                        <td colspan="2"><button class="btn btn-success" name="formulaire" type="submit">Créer l'utilisateur</button></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>