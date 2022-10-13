<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "report_inf";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id_raion = $_POST['raion']

?>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="top_menu">
    <a href="/">Home</a>
    <a href="/check.php">Verificare</a>
    <a href="/admin.php">Operator</a>
</div>
<div class="search window" style="max-width: 24%">
    <h2 style="font-size: 20px; text-align: center">Cauta dupa</h2>
    <a href="search_raion.php">raion</a>
    <a href="search_localitate.php">localitate</a>
    <a href="search_skey.php">cuvant cheie</a>
    <a href="search_date.php">data</a>
    <a href="search_contact.php">contact</a>

</div>
<div class="window" style="overflow-x: auto; max-width: 70%">
    <?php
    $sql = "select id_infractiune,locatie.nume_localitate, denuntator.nume,statut.nume_statut,data,descriere from infractiune join locatie on locatie.id_locatie = infractiune.id_locatie join denuntator on denuntator.id_denuntator = infractiune.id_denuntator join statut on statut.id_statut = infractiune.id_statut where id_raion = '$id_raion'";
    if($result = mysqli_query($conn, $sql)){
        if(mysqli_num_rows($result) > 0){
            echo '<table  class="table table-bordered table-striped">';
            echo "<thead>";
            echo "<tr>";
            echo "<th>Localitate</th>";
            echo "<th>Nume</th>";
            echo "<th>Statut</th>";
            echo "<th>Data</th>";
            echo "<th width='250px'>Descriere</th>";
            echo "<th>Actiuni</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            while($row = mysqli_fetch_array($result)){

                echo "<tr>";
                $data = $row['id_infractiune'];
                echo "<td>" . $row['nume_localitate'] . "</td>";
                echo "<td>" . $row['nume'] . "</td>";
                echo "<td>" . $row['nume_statut'] . "</td>";
                echo "<td>" . $row['data'] . "</td>";
                echo "<td>" . $row['descriere'] . "</td>";
                echo "<td" . $row['descriere'] . "</td>";
                echo "<td><a href='full_info.php?data=$data'>Full/Edit</a><br><a href='google.com'>Delete</a></td>";
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
            mysqli_free_result($result);
        } else{
            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
        }
    } else{
        echo "Oops! Something went wrong. Please try again later.";
    }

    // Close connection
    mysqli_close($conn);
    ?>
</div>
</body>
</html>