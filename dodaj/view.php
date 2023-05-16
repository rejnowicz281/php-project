<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="dodaj.php" method="POST">
        <label for="tytul">Tytuł Książki</label>
        <input type="text" id="tytul" name="tytul" required>
        <label for="autor">Autor Książki</label>
        <input type="text" id="autor" name="autor" required>
        <input type="submit">
    </form>
</body>

</html>