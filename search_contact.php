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
    <form action="show_contact.php" method="post">
        <label for="date">Numar telefon/email care-l cautati</label>
        <input class="small" type="text" id="contact" name="contact">
        <div class="button">
            <input type="submit" value="Trimite" class="btn" style="margin-top: 10px">
        </div>
    </form>
</div>
</body>
</html>