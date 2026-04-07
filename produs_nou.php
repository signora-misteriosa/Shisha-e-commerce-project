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
                        <h1>Adăugare produs nou</h2>
                    </header>
                    <?php
                    if (isset($_POST['submit'])) {
                        $id_p = $_POST['id_p'];
                        $denumire = $_POST['denumire'];
                        $descriere = $_POST['descriere'];
                        $pret = $_POST['pret'];
                        $query = "INSERT INTO produs (id_p, denumire_prod, descriere, pret) 
                            VALUES ('$id_p', '$denumire', '$descriere', '$pret')";

                        $result = mysqli_query($conn, $query);

                        if (!$result) {
                            echo mysqli_error($conn);
                            echo "<h4>Completarea formularului a eșuat! Reveniți la pagina <a href='index.php' class='btnppp'>Produse</h4>";
                        } else {
                            echo "<h3>Produsul a fost adăugat!</h3>";
                            echo "<h4>Înapoi la <a href='index.php' class='btnppp'>Produse</h4>";
                        }
                    } else {
                        //afisam formularul daca nu s-a efectuat trimiterea
                    ?>
                        <form id="editClient" action="produs_nou.php" method="post">

                            <div>
                                <label for="id_p">ID produs</label>
                                <input type="text" name="id_p" id="id_p" value="">
                            </div>
                            <div>
                                <label for="denumire">Denumire:</label>
                                <input type="text" name="denumire" id="denumire" value="">
                            </div>
                            <div>
                                <label for="descriere">Descriere:</label>
                                <input type="text" name="descriere" id="descriere" value="">
                            </div>
                            <div>
                                <label for="pret">Preț:</label>
                                <input type="text" name="pret" id="pret" value="">
                            </div>
                            <div id="send">
                                <input type="submit" name="submit" value="Adaugă">
                            </div>
                        </form>

                    <?php
                    }
                    mysqli_close($conn);
                    ?>
                </article>
            </section>
        </div>
</body>
</html>