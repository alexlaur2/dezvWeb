<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'include/header.php'; ?>
<div class="info-div window">
    <h1>Raporteaza, nu fi indiferent</h1>
</div>
<form action="script/send_post.php" method="post">
    <div class="location window">
        <h1>Locatia infractiunii:</h1>
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
        <input type="text" id="location" name="location">
        <label for="strada">Strada:</label>
        <input type="text" id="strada" name="strada">
    </div>


    <div class="descriere window">
        <h1>Descrierea infractiunii</h1>
        <label for="descriere">Descrierea:</label><br>
        <textarea type="text" id="descriere" name="descriere"></textarea><br>
    </div>
    <div class="denuntator window">
        <h1>Denuntator:</h1>
        <h2>Daca doriti sa contribuiti pe viitor cu organele legii lasati un e-mail/nr_contact:</h2>
        <label for="contact">e-mail/nr telefon:</label>
        <input class="small" type="text" id="contact" name="contact">
        <label for="contact">Nume</label>
        <input class="small" type="text" id="nume" name="nume">
        <label for="contact">Cuvantul cheie:</label>
        <input type="text" class="small" id="skey" name="skey"><br>
        <h2 style="color: red">*Puteti sa nu lasati date de contact</h2>
        <h2 style="color: red">*Numele poate fi fictiv</h2>
        <h2 style="color: red">*Cuvantul cheie va fi modificat la final pentru a garanta securitatea</h2>
    </div>

    <div class="button window">
        <input type="submit" value="Trimite" class="btn">
    </div>

    <script>

    </script>
</form>
</body>
</html>