<?php 

function db_connect($db_servername, $db_name, $username, $password)
{
    try
    {
        //echo "Connexion réussie !";
        return $db = new PDO(
            'mysql:host='. $db_servername .';dbname='. $db_name .';charset=utf8', $username, $password,
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
            );
            // set the PDO error mode to exception
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;  
    }
    catch(PDOException $e)
    {
        echo "Echec de la connexion : " . $e->getMessage();
    }
}

function new_user($nom, $prenom, $email, $telephone)
{
    //Appel de la fonction de connexion à la base de données
    $db = db_connect('localhost', 'php', 'root', '');

        $newUserQuery = "INSERT INTO `users` (`id`, `nom`, `prenom`, `email`, `telephone`) VALUES (?, ?, ?, ?, ?);";
        $stmt= $db->prepare($newUserQuery);
        $stmt->execute(array(null, $nom, $prenom, $email, $telephone));
        header('location: index.php');
}

function delete_user($id)
{
    //Appel de la fonction de connexion à la base de données
    $db = db_connect('localhost', 'php', 'root', '');

    if(isset($id))
    {
        $deleteUserQuery = "DELETE FROM `users` WHERE id=$id";
        $stmt= $db->prepare($deleteUserQuery);
        $stmt->execute(array());
        header('location: index.php');
    }
    else
    {
        echo "Utilisateur non supprimé !";
    }
}

function edit_user($id, $nom, $prenom, $email, $telephone)
{
    //Appel de la fonction de connexion à la base de données
    $db = db_connect('localhost', 'php', 'root', '');

    $editUserQuery = "UPDATE `users` SET `nom` = '". $nom ."', `prenom` = '". $prenom ."', `email` = '". $email ."',`telephone` = '". $telephone ."' WHERE `id` = '". $id ."';";
    $stmt= $db->prepare($editUserQuery);
    $stmt->execute(array());
    header('location: index.php');
}

function consulter($id)
{
    //connexion à la base de données F2ML
    $db = db_connect('localhost', 'php', 'root', '');
    //Création et exécution de la requête de récupération des marques de véhicule
    $listeUsersQuery = "SELECT * FROM `users` WHERE id=".$id.";";
    $stmt = $db->prepare($listeUsersQuery);
    $stmt->execute();
    $users = $stmt->fetchAll();

        foreach ($users as $user) {
            echo '
            <tr>
                <td>'. $user['nom'] .'</td>
                <td>'. $user['prenom'] .'</td>
                <td>'. $user['email'] .'</td>
                <td>'. $user['telephone'] .'</td>
                <td>
                    <p>Bonjour</p>
                </td>
            </tr>';
        }
    //Fin d'affichage
}

function liste_users()
{
    //connexion à la base de données F2ML
    $db = db_connect('localhost', 'php', 'root', '');
    //Création et exécution de la requête de récupération des marques de véhicule
    $listeUsersQuery = "SELECT * FROM `users`";
    $stmt = $db->prepare($listeUsersQuery);
    $stmt->execute();
    $users = $stmt->fetchAll();

        foreach ($users as $user) {
            echo '
            <tr>
                <td>'. $user['nom'] .'</td>
                <td>'. $user['prenom'] .'</td>
                <td>'. $user['email'] .'</td>
                <td>'. $user['telephone'] .'</td>
                <td>
                    <a class="btn btn-primary" href="consulter.php?id='. $user['id'] .'">Consulter</a>
                    <a class="btn btn-warning" href="modifier.php?id='. $user['id'] .'">Modifier</a>
                    <a class="btn btn-danger" href="supprimer.php?id='. $user['id'] .'">Supprimer</a>
                </td>
            </tr>';
        }
    //Fin d'affichage
}