<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/subForm.css">
    <link rel="stylesheet" href="./style/main.css">
    <script src="./Ajax/subscribe.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta2/css/all.css" crossorigin="anonymous" />
    <title>Inscription | myMeetic</title>
</head>
<body>
    <header>
        <nav class="mainNav">
            <div class="titleNav">
                <h1><a href="accueil" id="accueil">Meetic</a></h1>
            </div>
            <div class="navItems">
                <a href="#">Rencontrer des Femmes</a>    
                <a href="#">Rencontrer des Hommes</a>    
                <a href="#">Soirées célibataires</a>                
            </div>
            <div class="navConnexion">
                <a href="connexion" id="cnx">Se connecter</a>
            </div>
        </nav>
    </header>

    <section>
        <div class="left-arrow">
            <a href="connexion" id="left-arrow"><i class="fa-regular fa-circle-left fa-2xl" style="color: #fff;"></i></a>
        </div>
        <form id="subForm" method="POST" action="./controllers/subs.php">
    
        <!-- Inscrire son nom  -->
        <div class="form-group">
            <label for="lastname">Nom: </label>
            <input type="text" name="lastname" placeholder="Entrer un nom..">
        </div>
        <!-- Inscrire son Prénom-->
        <div class="form-group">
            <label for="firstname">Prénom: </label>
            <input name="firstname" type="text" placeholder="Entrer un Prénom..">
        </div>
    
        <!-- Inscrire sa date de naissance-->
        <div class="form-group">
            <label for="birthdate">Date de naissance: </label>
            <input name="date" type="date"> 
        </div>
    
        <!-- Inscrire son genre (Homme & Femme)-->
        <div class="form-group">
            <label for="gender">Sexe:</label>
            <select name="gender" id="sexe">
                <option value="1">Homme</option>
                <option value="2">Femme</option>
            </select>
        </div>
    
        <!-- Inscrire sa ville-->
        <div class="form-group">
            <label for="city">Ville: </label>
            <input name="city" type="text" placeholder="Lille">
        </div>
    
        <!-- Entrer son mail-->
        <div class="form-group">
            <label for="mail">Adresse mail: </label>
            <input name="email" type="e-mail" placeholder="exemple@gmail.com"> 
        </div>
    
        <!-- Entrer le mot de passe-->
        <div class="form-group">
            <label for="passw">Mot de passe: </label>
            <input name="psw" type="password" placeholder="*******">
        </div>
    
         <!-- Inscrire ses hobbies-->
         <div class="form-group">
             <label for="hobbies">Loisirs: </label>
             <input name="hobbies" type="text" placeholder="Handball, cinéma...">
        </div>
    
        <!-- Bouton envoyer (submit)-->
            <input type="submit" id="subscribe" name="submit">
        </form> 
    </section>
</body>
</html>

<?php
require 'subs.php';
?>
