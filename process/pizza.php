<?php
include_once("conn.php")

$methd = $_SERVER["REQUEST_METHOD"];

if($method === "GET") {

    $bordasQuery = $conn-> query("SELECT * FROM borda;");
    $bordas = $bordasQuery->fetchAll();

    $massaQuery = $conn->query("SELECT * FROM massa;");
    $massas = $massaQuery->fetchAll();

    $saboresQuery = $conn-> query("SELECT * FROM sabor;");
    $sabores =$saboresQuery->fetchAll();
} else if($method === "POST") {
}




?>