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