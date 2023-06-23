<?php
class User {
    //Vérifie le mail utilisateur
    public function verifCnx($mail, $pass)
    {
        $mysqli = new mysqli("localhost", "root", "new_root", "Meetic");
        $req = $mysqli->query("SELECT * FROM user");
        $res = $req->fetch_all(MYSQLI_ASSOC);
        //J'instancie ma bdd pour l'appeler
        foreach($res as $key=>$value){
            if($value['Email'] == $mail){
                $token = 1;
                $id = $value['id'];
                setcookie("id", $id);
            }
        }
        echo $token;
    }

    
    public function age_verif($user){
        $age = $mysqli->query();
        if($user <= $age)
        {
            $token = 0;
        }
        else{
            $token = 1;
            echo"non";
        }
        echo $token;
    }
}


$user = new User;
$user->verifCnx($_POST['email'], $POST['psw']);
$user->age_verif($_POST['birthdate']);
?> 