<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'include/header.php'; ?>
<div class="window" style="max-width: 400px">
    <form action="show_skey.php" method="post">
        <label for="skey">Introdu cuvatul cheie care cautati</label>
        <input class="small" type="text" id="skey" name="skey">
        <div class="button">
            <input type="submit" value="Trimite" class="btn" style="margin-top: 10px">
        </div>
    </form>
</div>
</body>
</html>