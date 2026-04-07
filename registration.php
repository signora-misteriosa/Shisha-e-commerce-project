<?php
require('database.php');
session_start();//initiem o noua sesiune. sesiunea este utilizata pentru a retine informatiile despre utilizator dupa ce se autentifica
//verificam daca variabila $_SESSION['user'] este setata. daca este setata, adica utilizatorul este autentificat, este redirectionat la pagina de index
if (isset($_SESSION["user"])) {
   header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
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
        if (isset($_POST["submit"])) {
           $fullName = $_POST["fullname"];
           $email = $_POST["email"];
           $password = $_POST["password"];
           $passwordRepeat = $_POST["repeat_password"];
           $passwordHash = password_hash($password, PASSWORD_DEFAULT);//incriptarea parolei

           $errors = array();
           
           if (empty($fullName) OR empty($email) OR empty($password) OR empty($passwordRepeat)) {
            array_push($errors,"Toate câmpurile sunt obligatorii!");
           }
           if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "E-mailul nu este valid!");
           }
           if (strlen($password)<8) {
            array_push($errors,"Parola trebuie să aibă cel puțin 8 caractere!");
           }
           if ($password!==$passwordRepeat) {
            array_push($errors,"Parolele nu se potrivesc!");
           }
           $sql = "SELECT * FROM users WHERE email = '$email'";
           $result = mysqli_query($conn, $sql);
           $rowCount = mysqli_num_rows($result);
           if ($rowCount>0) {
            array_push($errors,"E-mailul există deja!");
           }
           if (count($errors)>0) {
            foreach ($errors as  $error) {
                echo "<div class='alert alert-danger'>$error</div>";
            }
           }else{
            
            //prevenim sql injection prin separarea logicii sql de datele introduse de useri
            $stmt = $conn->prepare("INSERT INTO users (full_name, email, password) VALUES ( ?, ?, ? )");
            if ($stmt) {
                $stmt->bind_param("sss",$fullName, $email, $passwordHash);//
                $stmt->execute();
                echo "<div class='alert alert-success'>You are registered successfully!</div>";
            }else{
                die("Something went wrong");
            }
           }
          

        }
        ?>
        <form action="registration.php" method="post">
            <div class="form-group">
                <input type="text" class ="form-control" name="fullname" placeholder="Nume și prenume:">
            </div>
            <div class="form-group">
                <input type="email" class ="form-control" name="email" placeholder="Adresa de email:">
            </div>
            <div class="form-group">
                <input type="password" class ="form-control" name="password" placeholder="Parola:">
            </div>
            <div class="form-group">
                <input type="password" class ="form-control" name="repeat_password" placeholder="Repetă parola:">
            </div>
            <div class="form-btn">
                <input type="submit" class ="btn btn-primary" value="Înregistrează-te" name="submit">
            </div>
        </form>
        <div>
            <p>Ai deja cont? <a href="login.php">Conectează-te</a></p>
        </div>
                
    </div>
</body>
</html>