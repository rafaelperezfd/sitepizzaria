<?php

session_start():

$user="root";
$pass = "";
$db="pizzaria";
$host="localhost";

try{

$conn = new PDO("myslql.host={$host};dbname={$db", $super,$pass);

    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXception);
    $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

}catch (PDOException $e){
    print "Error: " . $e->getMessage . "<br/>";
    die();
}

?>