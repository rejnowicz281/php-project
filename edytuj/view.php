<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="edytuj.php" method="POST">
        <?php
        $id = $_GET["id"];
        $tytul = $_GET["tytul"];
        $autor = $_GET["autor"];
        ?>
        <input type='hidden' name='id' value='<?= $id ?>'>
        <label for="tytul">Tytuł Książki</label>
        <input type="text" id="tytul" name="tytul" value='<?= $tytul ?>' required>
        <label for="autor">Autor Książki</label>
        <input type="text" id="autor" name="autor" value='<?= $autor ?>' required>
        <input type="submit">
    </form>
</body>

</html>