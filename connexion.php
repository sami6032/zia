<?php   
$host ='localhost';
$user ='root';
$password = '';
$database = 'crud';
$conn = mysqli_connect($host, $user, $password, $database );
if (!$conn){
    die("Echec de la connexion à la base de données:" .mysqli_connect_error());
}

?>