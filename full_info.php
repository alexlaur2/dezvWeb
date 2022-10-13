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
    $id_d = $conn->query("select locatie.nume_localitate, denuntator.nume,statut.nume_statut,data,descriere from infractiune join locatie on locatie.id_locatie = infractiune.id_locatie join denuntator on denuntator.id_denuntator = infractiune.id_denuntator join statut on statut.id_statut = infractiune.id_statut where
 id_infractiune = '$id'");
    $result = mysqli_fetch_array($id_d);
    $id_locatie = $conn->query("select id_locatie from infractiune where id_infractiune='$id'");
    $result2 = mysqli_fetch_array($id_locatie);
    $id_locatie = $result2['id_locatie'];
    $nume_raion = $conn->query("select raion.nume_raion,strada from locatie join raion on locatie.id_raion = raion.id_raion where id_locatie='$id_locatie';");
    $result3 = mysqli_fetch_array($nume_raion);
    $id_denuntator = $conn->query("select id_denuntator from infractiune where id_infractiune='$id'");
    $result4 = mysqli_fetch_array($id_denuntator);
    $id_denuntator = $result4['id_denuntator'];
    $date = $conn->query("select contact, skey from denuntator where id_denuntator='$id_denuntator'");
    $result5 = mysqli_fetch_array($date);

    setcookie("id_infractiune", $id, time()+3600);
    setcookie("id_denuntator", $id_denuntator, time()+3600);
    setcookie("id_locatie", $id_locatie, time()+3600);
}
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
<div class="window" style="max-width: 70%">
    <table>
        <tr>
            <th>Raion</th>
            <th>Localitate</th>
            <th>Strada</th>
            <th>Nume</th>
            <th>Statut</th>
            <th>Data</th>
            <th>Descriere</th>
        </tr>
        <tr>
            <td><?php echo $result3['nume_raion'];?></td>
            <td><?php echo $result["nume_localitate"]?></td>
            <td><?php echo $result3['strada'];?></td>
            <td><?php echo $result["nume"]?></td>
            <td><?php echo $result["nume_statut"]?></td>
            <td><?php echo $result["data"]?></td>
            <td><?php echo $result["descriere"]?></td>
        </tr>
    </table>
</div>
<div class="window" style="max-width: 25%">
    <table>
        <tr>
            <th>Contact</th>
            <th>SKEY</th>
        </tr>
        <tr>
            <td><?php echo $result5["contact"]?></td>
            <td><?php echo $result5["skey"]?></td>
        </tr>
    </table>
</div>
<div class="info-div window" style="max-width: 59%">
        <form action="edit.php" method="post">
        <h1>Editare:</h1>
        <label for="raion">Raion:</label>
            <select name="raion" id="raion">
                <option value="">Raionul</option>
                <option value="1">Chisinau</option>
                <option value="2">Cahul</option>
                <option value="3">Cimislia</option>
                <option value="4">Anenii noi</option>
                <option value="5">Basarabeasca</option>
                <option value="6">Briceni</option>
                <option value="7">Donduseni</option>
                <option value="8">Cantemir</option>
                <option value="9">Calaraasi</option>
                <option value="10">Causeni</option>
                <option value="11">Cruleni</option>
                <option value="12">Drochia</option>
                <option value="13">Dubasari</option>
                <option value="14">Edinet</option>
                <option value="15">Falesti</option>
                <option value="16">Floresti</option>
                <option value="17">Glodeni</option>
                <option value="18">Hincesti</option>
                <option value="19">Ialoveni</option>
                <option value="20">Leova</option>
                <option value="21">Nisporeni</option>
                <option value="22">Ocnita</option>
                <option value="23">Orhei</option>
                <option value="24">Rezina</option>
                <option value="25">Riscani</option>
                <option value="26">Singerei</option>
                <option value="27">Soroca</option>
                <option value="28">Straseni</option>
                <option value="29">Soldanesti</option>
                <option value="30">Stefan Voda</option>
                <option value="31">Taraclia</option>
                <option value="32">Telenesti</option>
                <option value="33">Ungheni</option>
            </select>
        <label for="location">Localitate:</label>
        <input type="text" id="location" name="location" style="width: 200px">
        <label for="strada" style="">Strada:</label>
        <input type="text" id="strada" name="strada" style="width: 200px"><br>
        <label for="descriere">Descrierea:</label><br>
        <textarea type="text" id="descriere" name="descriere" style="width: 850px"></textarea><br><br>
            <label for="statut">Staut</label>
            <select name="statut" id="statut">
                <option value="0">Statut</option>
                <option value="1">Receptionat</option>
                <option value="2">Asteptare</option>
            </select>
        <label for="contact">e-mail/nr telefon:</label>
        <input class="small" type="text" id="contact" name="contact">
        <label for="contact">Nume</label>
        <input class="small" type="text" id="nume" name="nume">
        <label for="contact">Cuvantul cheie:</label>
        <input type="text" class="small" id="skey" name="skey"><br>
        <h2 style="color: red">*Cuvantul cheie va fi modificat la final pentru a garanta securitatea</h2>
        <div class="button">
            <input type="submit" value="Editeaza" class="btn">
        </div>
    </form>
</div>
</body>
</html>