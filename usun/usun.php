<?php
require_once '../connect.php';

if (isset($_POST["id"])) {
    $id = $_POST["id"];
    $sql = "DELETE FROM `ksiazki` WHERE id='$id'";

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