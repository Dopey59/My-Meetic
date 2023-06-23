<?php
//database cnx
$con = mysqli_connect('localhost', 'root','new_root', 'Meetic');
if (!$con){
    die(my_sqli_error("Error"+$con));
}
?> 