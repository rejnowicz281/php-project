<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css" type="text/css">
    <title>Document</title>
</head>

<body>
    <a href="../index.php" id="link-powrotu">←</a>
    <div class="edytuj-ksiazke-container">
        <form action="edytuj.php" method="POST">
            <?php
            $id = $_GET["id"];
            $tytul = $_GET["tytul"];
            $autor = $_GET["autor"];
            ?>
            <input type='hidden' name='id' value='<?= $id ?>'>
            <div>
                <label for="tytul">Tytuł Książki</label>
                <input type="text" id="tytul" name="tytul" value='<?= $tytul ?>' required>
            </div>
            <div>
                <label for="autor">Autor Książki</label>
                <input type="text" id="autor" name="autor" value='<?= $autor ?>' required>
            </div>
            <button type="submit" id="aktualizuj-ksiazke-button">Aktualizuj książkę</button>
        </form>
    </div>
</body>

</html>