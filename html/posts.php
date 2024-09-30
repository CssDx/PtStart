<?php
$link = mysqli_connect('db', 'root', 'Ulebud10-', 'first');
$id = $_GET['id'];
$sql = "SELECT * FROM posts WHERE id=$id";
$res = mysqli_query($link, $sql);

$rows = mysqli_fetch_array($res);
$title = $rows['title'];
$main_text = $rows['main_text'];


?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width = device-width, initial-scale = 1.0">
        <link rel="stylesheet" href="css/style.css">
        <script type="text/javascript" src="js/js_file.js"></script>
        <link rel="SHORTCUT ICON" href="movies/805_original.ico" type="image/x-icon">
        <title>
            Тебелев Данил Николаевич
        </title>
        <header>
            <h1>Добро пожаловать, <?php echo $_COOKIE['User']; ?></h1>
            <p>
                <h2 class="money"> "За деньги - да!" </h2>
            </p>
        </header>
    </head>

    <body class="main">
        <div class="registration">
		<?php
			echo "<h1> $title </h1>";
			echo "<p>$main_text</p>";
		?>
	 </div>
    </body>
