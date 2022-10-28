<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "report_inf";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$name = $_POST['nume'];
$skey = $_POST['skey'];
$id_denuntator = $conn->query("select locatie.nume_localitate, denuntator.nume,statut.nume_statut,data,descriere from infractiune join locatie on locatie.id_locatie = infractiune.id_locatie join denuntator on denuntator.id_denuntator = infractiune.id_denuntator join statut on statut.id_statut = infractiune.id_statut where
 denuntator.nume = '$name' AND denuntator.skey = '$skey'");
$result = mysqli_fetch_array($id_denuntator);

?>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'include/header.php'; ?>
<div class="window">
    <?php if($result)
        echo
        "<table>
            <tr>
                <th>Localitate</th>
                <th>Nume</th>
                <th>Statut</th>
                <th>Data</th>
                <th>Descriere</th>
            </tr>
            <tr>
                <td>".$result['nume_localitate']."</td>
                <td>".$result['nume']."</td>
                <td>".$result['nume_statut']."</td>
                <td>".$result['data']."</td>
                <td>".$result['descriere']."</td>
            </tr>
        </table>";
    else
        echo "<h3 style='color: red; text-align: center'>Nu exista nici o înregistrare cu acest nume și cuvânt cheie</h3>";
    ?>
</div>
</body>
</html>
