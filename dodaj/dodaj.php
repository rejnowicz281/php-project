<?php
require_once '../connect.php';

if (isset($_POST["tytul"]) && isset($_POST["autor"])) {
    $tytul = $_POST["tytul"];
    $autor = $_POST["autor"];
    $sql = "INSERT INTO `ksiazki` (`tytul`, `autor`) VALUES ('$tytul', '$autor')";

    $result = $connection->query($sql);
    if ($result) {
        header("Location: ./../index.php");
        exit();
    } else {
        echo "Nie udało się nawiązać połączenia";
    }

    $connection->close();
}
?>