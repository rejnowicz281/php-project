<?php
require_once '../connect.php';

if (isset($_POST["id"]) && isset($_POST["tytul"]) && isset($_POST["autor"])) {
    $id = $_POST["id"];
    $tytul = $_POST["tytul"];
    $autor = $_POST["autor"];

    $sql = "UPDATE `ksiazki` SET tytul='$tytul', autor='$autor' WHERE id=$id";

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