<?php   
    require('fonctions.php');
    require('header.php');
?>

    <div class="container">
        <div class="row justify-content-center">
            <h2>Gestion des utilisateurs</h2>
        </div>
        <div class="row justify-content-center">
            <table class="table" style="text-align: center;">
                <thead>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Email</th>
                    <th scope="col">Options</th>
                </thead>
                <tbody>
                    <?php liste_users(); ?>
                </tbody>
            </table>
        </div>
        <div class="row justify-content-center">
            <a class="btn btn-success" href="creer.php">Création d'utilisateur</a>
        </div>
    </div>
</body>
</html>