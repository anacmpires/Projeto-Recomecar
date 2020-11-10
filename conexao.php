<?php
    //conexao. com db
    $servername = "sql207.epizy.com";
    $username = "epiz_27163409";
    $password = "ZGZ88q2HrzRGd7R";
    $database = "epiz_27163409_recomecar";

    $conn = mysqli_connect($servername,$username,$password,$database);

    if(!$conn){
        die("A conexão ao BD falhou" .mysqli_connect_error());
    }
?>        