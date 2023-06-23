<?php
//Variable où je stock les infos des users
//Récupérer via le formulaire d'inscription
$con = mysqli_connect('localhost', 'root','new_root', 'Meetic');

$token;
//Condition pour vérifier si l'utilisateur a rempli les champs du formulaire avec $_POST:
if(!empty($_POST)){
    $lastname = $_POST['lastname'];
    $firstname = $_POST ['firstname'];
    $birthdate = $_POST['date'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    $email = $_POST['email'];
    $psw = $_POST['psw'];
    $hobbies = $_POST['hobbies'];

    //Converti le format de l'age
    // $datediff = "SELECT CONCAT(DATE_FORMAT(NOW(), Date_de_naissance) / 365) AS age FROM user" ;
    // Password Hash:
    $hash = password_hash($psw, PASSWORD_DEFAULT);
    // Création de la requête SQL afin d'ajouter les utilisateurs:
    $query = "INSERT INTO user (Prenom, Nom, Date_de_naissance, Sexe, Ville, Email, Mot_de_passe, hobbie) VALUES ('$firstname', '$lastname', '$birthdate', '$gender', '$city', '$email', '$hash', '$hobbies')";

    // try and catch afin d'éxecuter la raquête SQL -> echo "connexion réussie" si la requête est valide,
    // sinon indique une erreur:
    try {
        $result = $con->query($query);
        $token = 1;

    } catch (mysqli_sql_exception $e){
        $token = 0;
        echo $e->getMessage();
    }
}
echo $token;