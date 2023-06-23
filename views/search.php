<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta2/css/all.css" crossorigin="anonymous" />
    <link rel="stylesheet" href="./style/search.css">
    <link rel="stylesheet" href="./style/main.css">
    <title>Recherche | myMeetic</title>
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
            <a href="recherche" id="search"><i class="fa-solid fa-search fa-xl" style="color: #DC436A;"></i> Recherche</a>
            <a href="connexion" id="cnx"><i class="fa-solid fa-right-from-bracket fa-xl" style="color: #fff;"></i> Se déconnecter</a>
            </div>
        </nav>
    </header>

        <div class="container">
            <div class="left-arrow">
                <a href="accueil" id="left-arrow"><i class="fa-regular fa-circle-left fa-2xl" style="color: #fff;"></i></a>
            </div>
            <form id="searchForm" method="POST" action="./views/search.php">
    
            <!-- Inscrire sa date de naissance-->
            <div class="form-group">
                <h1>Match avec ta future âme soeur.</h1>
                <br>
                <label for="age">Sexe:</label>
                <select name="age" id="age">
                    <option id="optAge" value="1">18/25 ans</option>
                    <option id="optAge" value="2">25/35 ans</option>
                    <option id="optAge" value="2">35/45 ans</option>
                    <option id="optAge" value="2">+ 45 ans</option>


                </select>
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
        
             <!-- Inscrire ses hobbies-->
             <div class="form-group">
                 <label for="hobbies">Loisirs: </label>
                 <input name="hobbies" type="text" placeholder="Handball, cinéma...">
            </div>
        
            <!-- Bouton envoyer (submit)-->
                <input type="submit" id="searchSubmit" name="searchQuery">
            </form> 
        </div>
</body>
</html>