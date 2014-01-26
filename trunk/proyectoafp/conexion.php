<?php
function dbConnect (){
    $conn = null;
    $host = 'localhost';
    $db =   'capitalizados';
    $user = 'root';
    $pwd =  '';
    try {
        //$conn = new PDO('mysql:host='.$host.';dbname='.$db, $user, $pwd);
        $conn=mysqli_connect($host,$user,$pwd,$db);
        //echo 'Connected succesfully.<br>';
    }
    catch (PDOException $e) {
        echo '<p>Cannot connect to database !!</p>';
        exit;
    }
    return $conn;
 }
 
 ?>