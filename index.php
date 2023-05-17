<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset=" UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <header>
            <button id="nowa-ksiazka-button">Nowa Książka</button>
        </header>
        <main>
            <?php
            require_once("connect.php");
            $query = "SELECT * FROM ksiazki";
            $result = $connection->query($query);

            while ($row = $result->fetch_assoc()) {
                $id = $row["id"];
                $tytul = $row["tytul"];
                $autor = $row["autor"];
                echo "<div class='ksiazka'>";

                echo "<form action='usun/usun.php' method='POST'>
                    <input type='hidden' name='id' value='$id'>
                    <button type='submit' id='usun-ksiazke-button' class='zamknij-button'>⨉</button>
                    </form>";

                echo "<div class='id-box'>$id</div>";
                echo "<div class='tytul-box'>
                <span class='small'>TYTUŁ</span> $tytul
                </div>";
                echo "<div class='autor-box'>
                <span class='small'>AUTOR</span> $autor
                </div>";

                echo "<form action='edytuj/view.php' 
                    method='GET'> 
                    <input type='hidden' name='id' value='$id'> 
                    <input type='hidden' name='tytul' value='$tytul'>
                    <input type='hidden' name='autor' value='$autor'> 
                    <button class='ksiazka-button' id='edytuj-ksiazke-button'>Edytuj</button>
                    </form>";

                echo "</div>";
            }
            ?>
        </main>

        <div class="modal hidden">
            <button id="zamknij-modal-button" class="zamknij-button">⨉</button>
            <div class="modal-main">
                <form action="dodaj/dodaj.php" method="POST">
                    <div class="pole">
                        <label for="tytul">Tytuł</label>
                        <input type="text" name="tytul" id="tytul" placeholder="Wpisz tytuł książki" required>
                    </div>

                    <div class="pole">
                        <label for="autor">Autor</label>
                        <input type="text" name="autor" id="autor" placeholder="Wpisz autora książki" required>
                    </div>

                    <button type="submit" class='ksiazka-button' id="dodaj-ksiazke-button">Dodaj książkę</button>
                </form>
            </div>
        </div>

        <div class="overlay hidden"></div>
    </div>
    <script src="main.js"></script>
</body>

</html>