<!DOCTYPE html>
<html lang="ru" class="main">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width = device-width, initial-scale = 1.0">
        <link rel="stylesheet" href="css/style.css">
        <script type="text/javascript" src="js/js_file.js"></script>
        <link rel="SHORTCUT ICON" href="movies/805_original.ico" type="image/x-icon">
        <title>
            Тебелев Данил Николаевич
        </title>
    </head>

    <body >
        <div>
	<form class="container" method="POST" action="registration.php">
                	<input class="form" type="email" name="email" placeholder="Email">
                	<input class="form" type="text" name="login" placeholder="Login"> 
                	<input class="form" type="password" name="password" placeholder="Password"> 
                	<button class="registr" name="submit" type="submit">Submit</button>
		</form>
        </div>
    </body>
</html>
<?php

require_once('db.php');
$link = mysqli_connect('db', 'root', 'Ulebud10-', 'first');

if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $username = $_POST['login'];
  $pass = $_POST['password'];


if (!$email || !$username || !$pass) die ('Пожалуйста введите все значения!');

$sql = "INSERT INTO users (email, username, pass) VALUES ('$email','$username', '$pass')";

if(!mysqli_query($link, $sql)) {
  echo "Не удалось добавить пользователя";
}
}
?>
