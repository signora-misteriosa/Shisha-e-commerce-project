<?php
require('database.php');
session_start();
if (!isset($_SESSION["user"])) { //daca nu este autentificat,user-ul este redirectionat la pagina de login
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@400;600&family=Merriweather:wght@700&family=Playfair+Display:ital@1&family=Raleway:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style_dashboard.css">
</head>

<body>
    <div class="container">
    <a href="logout.php" class="btnlogout">Log Out</a>
        <div id="page-wrap">
            <header id="page">
                <div class="row">
                    <div class="col-1">
                        <nav id="sidebar" class="col sidebar">
                            <ul style="list-style-type:none;" class="nav flex-column vertical-nav">
                                <li class="nav-item"><a class="nav-link" href="users.php">Utilizatori</a></li>
                                <li class="nav-item"><a class="nav-link active" href="index.php">Produse</a></li>
                                <li class="nav-item"><a class="nav-link" href="comenzi.php">Comenzi</a></li>
                                <li class="nav-item search"><a class="nav-link" href="cautare.php"><span class="text">Cautare</span></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </header>
            <section id="main">
                <article>
                    <header>
                        <h1>Modificare detalii produs</h2>
                    </header>
                    <?php
                    if (isset($_GET['id_c'])) {
                        $id = $_GET['id_c'];

                        if (isset($_POST['submit'])) {
                            $query = "UPDATE comenzi
                                SET data ='" . $_POST['data'] . "',
                                 status='" . $_POST['status'] . "'
                                 where id_c=" . $id;

                            $result = mysqli_query($conn, $query);
                            if (!$result) {
                                echo mysqli_error($conn);
                            } else {
                                echo "<h3>Modificare efectuată cu succes!</h3>";
                                echo "<h4>Înapoi la <a href='comenzi.php' class='btnppp'>Comenzi</h4>";
                            }
                        } else {
                            $query = "select * from comenzi where comenzi.id_c=" . $id;
                            $rezultat = mysqli_query($conn, $query) or die('Eroare');
                            $row = mysqli_fetch_assoc($rezultat);

                    ?>
                            <form id="editcom" action="edit_com.php?id_c=<?= $id ?>" method="post">

                                <div>
                                    <label for="id_c">ID Comandă:</label>
                                    <p><?= $row["id_c"] ?>
                                    <p>
                                </div>
                                <div>
                                    <label for="data">Data comenzii:</label>
                                    <input type="text" name="data" id="den" value="<?= $row["data"] ?>">
                                </div>
                                <div>
                                    <label for="status">Status:</label>
                                    <input type="text" name="status" id="desc" value="<?= $row["status"] ?>">
                                </div>
                                <div id="send">
                                    <input type="submit" name="submit" value="Modifică">
                                </div>

                            </form>

                    <?php

                        }
                        mysqli_close($conn);
                    } else {
                        echo "<h2>Mergeți înapoi la <a href='comenzi.php' class='btnppp'>pagina cu comenzi</a> și selectați o comandă!</h2>";
                    }

                    ?>
                </article>
            </section>
        </div>
</body>
</html>