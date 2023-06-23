<?php
session_start();
if(isset($_GET['url'])){                 // Switch permettant de rediriger mes pages
    switch($_GET['url']){
        case "inscription":
            require './views/inscription.php';
            break;
            
        case "connexion":
            require './views/connexion.php';
            break;
        case "accueil":
            require './accueil.php';
            break;
        
        case "recherche":
            require './views/search.php';
            break;

        case "compte":
            require './views/account.php';
            break;
    }
}
else{
    require './views/connexion.php';
}
?>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="./Ajax/subscribe.js"></script>
<script src="./Ajax/connexion.js"></script>

