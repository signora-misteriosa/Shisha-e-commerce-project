<?php
require('database.php');
session_start();
if (isset($_SESSION["user"])) {
   header("Location: index.php");
   exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style_registration.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@400;600&family=Merriweather:wght@700&family=Playfair+Display:ital@1&family=Raleway:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <?php
        if (isset($_POST["login"])) {
            $email = $_POST["email"];
            $password = $_POST["password"];

            $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
            $stmt->bind_param("s", $email); //leaga variabila $email in parametrul de stmt
            $stmt->execute();
            $result = $stmt->get_result();//get_result returneaza un obiect tip mysqli_result care va fi folosit pentru a accesa randurile returnate de query
            $user = $result->fetch_assoc();//fetch_assoc extrage primul rand din query sub forma de array asocitaiv, 
            //adica coloanele din tabel vor putea fi accesate prin $user['id'], $user['email']....
            
            
            if ($user) {
                if (password_verify($password, $user["password"])) {
                    $_SESSION["user"] = $user["email"];
                    header("Location: index.php");
                    die();
                }else{
                    echo "<div class='alert alert-danger'>Parola nu coincide!</div>";
                }
            }else{
                echo "<div class='alert alert-danger'>Email-ul nu exista!</div>";
            }
            $stmt->close();
        }
        ?>
      <form action="login.php" method="post">
        <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Introdu adresa de e-mail:">
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Introdu parola:">
        </div>
        <div class="form-btn">
            <input type="submit" value="Conectează-te" name="login" class="btn btn-primary">
        </div>
      </form>
      <div>
        <p>Nu ai cont? <a href="registration.php">Înregistrează-ți contul aici</a></p>
    </div>
    </div>
</body>
</html>