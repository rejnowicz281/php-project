<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Biblioteka</h1>
    <a href="dodaj/view.php">Dodaj książke</a>
    <div>
        <?php
        require_once("connect.php");
        $query = "SELECT * FROM ksiazki";
        $result = $connection->query($query);

        while ($row = $result->fetch_assoc()) {
            $id = $row["id"];
            $tytul = $row["tytul"];
            $autor = $row["autor"];
            echo "<p>ID:" . $id . "</p>";
            echo "<p>Tytul:" . $tytul . "</p>";
            echo "<p>Autor:" . $autor . "</p>";
            echo "<form action='usun/usun.php' 
            method='POST'> <input type='hidden' name='id' value='$id'> 
            <input type='submit' value='Usun'> 
            </form>";

            echo "<form action='edytuj/view.php' 
            method='GET'> 
            <input type='hidden' name='id' value='$id'> 
            <input type='hidden' name='tytul' value='$tytul'>
            <input type='hidden' name='autor' value='$autor'> 
            <input type='submit' value='Edytuj'> 
            </form>";
        }
        ?>
    </div>
</body>

</html>