<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <form action="censura.php" method="POST">
            <label for="paragrafo">Paragrafo:</label>
            <br>
            <input type="text" name="paragrafo"></input>
            <br><br>
            <label for="censura">Parola da censurare:</label>
            <br>
            <input type="text" name="censura">
            <br><br>
            <input type="submit" value="Invia">
        </form>
    </header>
</body>

</html>