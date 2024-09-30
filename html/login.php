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
        <div class='registration'>
            <form class="container" method='POST' action='login.php'>
                <input class="form" type="text" name="login" placeholder="Login"> 
                <input class="form" type="password" name="password" placeholder="Password"> 
                <button class="registr" name="submit" type="submit">
		<?php
		if (isset($_POST['submit'])){
			$username = $_POST['login'];
			$link = mysqli_connect('db', 'root', 'Ulebud10-', 'first');
			$res = "SELECT id WHERE username='$username'";
			echo "<a href='/profile.php?id=" . $post['id'] . "'>" . "Submit" . "</a>";
		} 
		?>
		</button>
            </form>
        </div>
    </body>
</html>


<?php

require_once('db.php');
$link = mysqli_connect('db', 'root', 'Ulebud10-', 'first');


if (isset($_POST['submit'])) {
  	$username = $_POST['login'];
  	$pass = $_POST['password'];
	if (!$username || !$pass) die ("Пожалуйста введите все значения!");

	$sql = "SELECT * FROM users WHERE username='$username' AND pass='$pass'";
	if (mysqli_num_rows(mysqli_query($link, $sql)) == 1) {
		setcookie("User", $username, time()+600);
  		header('Location: profile.php');
	
	} else {
  		echo "не правильное имя или пароль";
	}
}

if (isset($_COOKIE['User'])) {
    header("Location: profile.php");
}

?>
