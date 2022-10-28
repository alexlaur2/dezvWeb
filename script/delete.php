<?php
if(isset($_GET["data"]) && !empty(trim($_GET["data"]))){
    $id = $_GET["data"];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "report_inf";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $id_d = $conn->query("DELETE FROM infractiune WHERE id_infractiune = '$id';");
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
