<?php
    include 'DB_connect.php';
    $id = $_COOKIE["id_infractiune"];
    $id_denuntator = $_COOKIE["id_denuntator"];
    $id_locatie = $_COOKIE["id_locatie"];
    $raion = $_POST['raion'];
    if ($raion != 0){
        $sql = "update locatie set id_raion='$raion' where id_locatie='$id_locatie'";
        $conn->query($sql);
    }
     if(!empty($_POST['location'])){
         $name_location = $_POST['location'];
         $sql = "update locatie set nume_localitate='$name_location' where id_locatie='$id_locatie'";
         $conn->query($sql);
     }
    if(!empty($_POST['strada'])){
        $street = $_POST['strada'];
        $sql = "update locatie set strada='$street' where id_locatie='$id_locatie'";
        $conn->query($sql);
    }
    if(!empty($_POST['descriere'])){
        $descriere = $_POST['descriere'];
        $sql = "update infractiune set descriere='$descriere' where id_infractiune='$id'";
        $conn->query($sql);
    }
    $statut = $_POST['statut'];
    if ($statut != 0){
        $sql = "update infractiune set id_statut='$statut' where id_infractiune ='$id'";
        $conn->query($sql);
    }

    if(!empty($_POST['contact'])){
        $contact = $_POST['contact'];
        $sql = "update denuntator set contact='$contact' where id_denuntator='$id_denuntator'";
        $conn->query($sql);
    }
    if(!empty($_POST['nume'])){
        $name = $_POST['nume'];
        $sql = "update denuntator set nume='$name' where id_denuntator='$id_denuntator'";
        $conn->query($sql);
    }
    if(!empty($_POST['skey'])){
        $skey = $_POST['skey'];
        $skey .=substr(uniqid('', true), -5);
        $sql = "update denuntator set skey='$skey' where id_denuntator='$id_denuntator'";
        $conn->query($sql);
    }

header('Location: ' . $_SERVER['HTTP_REFERER']);

$conn->close();
