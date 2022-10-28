<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "report_inf";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$raion = $_POST['raion'];
echo $raion;
$name_location = $_POST['location'];
$street = $_POST['strada'];
$sql = "INSERT INTO locatie (id_raion,nume_localitate, strada)
        VALUES ('$raion','$name_location','$street')";
$conn->query($sql);

$contact = $_POST['contact'];
$name = $_POST['nume'];
$skey = $_POST['skey'];
$skey .=substr(uniqid('', true), -5);
$sql = "INSERT INTO denuntator (contact,nume, skey) VALUES ('$contact','$name','$skey')";
$conn->query($sql);

$id_locatie = $conn->query("SELECT * FROM locatie ORDER BY id_locatie DESC LIMIT 1");
$result = mysqli_fetch_array($id_locatie);
$id_locatie = $result['id_locatie'];

$id_denuntator = $conn->query("SELECT * FROM denuntator ORDER BY id_denuntator DESC LIMIT 1");
$result = mysqli_fetch_array($id_denuntator);
$id_denuntator = $result['id_denuntator'];

$date = date('Y-m-d H:i:s');
$descriere = $_POST['descriere'];

$sql1 = "INSERT INTO infractiune (descriere,id_locatie,id_denuntator,id_statut,data) VALUES ('$descriere','$id_locatie','$id_denuntator',2,'$date')";
if ($conn->query($sql1) === TRUE) {
//    dd('1');
    header('Location: ../succes.php');
} else {
    echo "Error: " . $sql1 . "<br>" . $conn->error;
}


$conn->close();
