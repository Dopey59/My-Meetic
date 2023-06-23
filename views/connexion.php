<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/form.css">
    <link rel="stylesheet" href="./style/main.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="./Ajax/connexion.js"></script>
    <title>Connexion | Meetic</title>
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
                <a href="inscription" id="cnx2">S'inscrire</a>
                <a href="connexion" id="cnx">Se connecter</a>
            </div>
        </nav>
    </header>
    <section>
        <div class="form-container">
            <form method="POST" action="accueil" id="connectForm">
                <h1>Connectez-vous : <h1>
                <div class="itemForm">
                    <label for="email">Adresse mail:</label>
                    <input type="email" name="email" placeholder="exemple@gmail.com">
                </div>
        
                <div class="itemForm">
                    <label for="password">Mot de passe:</label>
                    <input type="password" name="psw" placeholder="*******">
                </div>
                <div class="submit">
                    <input type="submit" name="submitCnx" id="submitCnx">
                </div>
            </form>
        </div>    
    </section>
</body>
</html>