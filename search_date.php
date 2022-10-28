<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'include/header.php'; ?>
<div class="window" style="max-width: 400px">
    <form action="show_date.php" method="post">
        <label for="date">Introdu data care o cautati</label>
        <input class="small" type="text" id="date" name="date">
        <h2 style="color: red">*Data in formatul 2022/01/09</h2>
        <div class="button">
            <input type="submit" value="Trimite" class="btn" style="margin-top: 10px">
        </div>
    </form>
</div>
</body>
</html>