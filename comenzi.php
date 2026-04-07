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
        <?php
        $lista = true;
        $action = "view";
        if (isset($_GET['id_c'])) {
            $lista = false;
            $id = $_GET['id_c'];
            if (isset($_GET['action'])) {
                $action = $_GET['action'];
            }
        }
        if ($lista) {
            $query = "select * from comenzi order by id_c asc";
        } else {
            $query = "select *from comenzi where comenzi.id_c=" . $id;
        }
        $rezultat = mysqli_query($conn, $query) or die('Eroare');

        ?>
        <div id="page-wrap">

            <header id="page">
                <div class="row">
                    <!-- Sidebar -->
                    <div class="col-1">
                        <nav id="sidebar" class="col sidebar">
                            <ul style="list-style-type:none;" class="nav flex-column vertical-nav">
                                <li class="nav-item"><a class="nav-link" href="users.php">Utilizatori</a></li>
                                <li class="nav-item"><a class="nav-link" href="index.php">Produse</a></li>
                                <li class="nav-item"><a class="nav-link active " href="comenzi.php">Comenzi</a></li>
                                <li class="nav-item search"><a class="nav-link" href="cautare.php"><span class="text">Căutare</span></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </header>
            <section id="main">
                <article>
                    <?php
                    if ($action == "view") {
                        if (!$lista) {
                            echo "<h2 class='btnppp'>Ați selectat comanda cu ID = " . $id . "</h2>";
                        } else {
                            echo "<h2 class='btnppp'>Lista comenzilor</h2>";
                        }
                    ?>
                        <table>
                            <tr>
                                <th>ID Comandă</th>
                                <th>Data comenzii</th>
                                <th>ID Utilizator</th>
                                <th>Status</th>
                                <th>Editează</th>
                                <th>Șterge</th>
                            </tr>
                            <?php
                            if (mysqli_num_rows($rezultat) > 0) {
                                while ($row = mysqli_fetch_assoc($rezultat)) {
                                    echo "<tr >";
                                    echo "<td><a href='comenzi.php?id_c=" . $row['id_c'] . "&action=view'>" . $row["id_c"] . "</a></td>";
                                    echo "<td>" . $row["data"] . "</td>";
                                    echo "<td>" . $row["id_user"] . "</td>";
                                    echo "<td>" . $row["status"] . "</td>";
                                    echo "<td><a href='edit_com.php?id_c=" . $row['id_c'] . " '><img src='edit.png' alt='edit icon' width='32px'></a></td>";
                                    echo "<td><a href='comenzi.php?id_c=" . $row['id_c'] . "&action=delete'><img src='delete.png' alt='delete icon' width='32px'></a></td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='8'>Nu există comenzi în baza de date!</td></tr>";
                            }
                            ?>
                        </table>

                        <?php
                        if (!$lista) {
                            echo "<h2 class='btnppp'>Lista produselor asociate comenzii selectate: </h2> ";
                            $query = "select denumire_prod from comenzi_produse where id_c=" . $id;
                            $rezultat = mysqli_query($conn, $query) or die('Eroare');
                        ?>
                            <table>
                                <tr>
                                    <th>Denumire produs</th>
                                </tr>
                                <?php
                                if (mysqli_num_rows($rezultat) > 0) {
                                    while ($row = mysqli_fetch_assoc($rezultat)) {
                                        echo "<tr>";
                                        echo "<td>" . $row["denumire_prod"] . "</td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='5'>Nu sunt înregistrate produse în această comandă !</td></tr>";
                                }
                                ?>
                            </table>
                        <?php
                        }
                        ?>

                    <?php
                    } else {
                        if ($action == "delete") {
                            //delete record
                            $query = "DELETE from comenzi where id_c=" . $id;
                            $result = mysqli_query($conn, $query);

                            if (!$result) {
                                echo mysqli_error($conn);
                            } else {
                                echo "<h2>Ștergere efectuată!</h2>";
                                echo "<meta http-equiv=\"refresh\" content=\"2; URL='index.php'\" >";
                            }
                        }
                    }
                    mysqli_close($conn);
                    ?>
                </article>
            </section>
        </div>
    </div>
</body>

</html>