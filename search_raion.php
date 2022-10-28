<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'include/header.php'; ?>
<div class="window" style="max-width: 400px">
    <form action="show_r.php" method="post">
        <label for="raion">Selecteaza raionul care il cautati</label>
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
       <div class="button">
           <input type="submit" value="Trimite" class="btn" style="margin-top: 10px">
       </div>
    </form>
</div>
</body>
</html>