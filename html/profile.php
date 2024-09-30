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
            
            <div class="row_info">
                <h3> 
                    В настоящий момент я прохожу первый этап PT start. В прошлом был frontend разработчик
                    в не крупной компании, использовал js react. Летом успешно прошел два алгоритмических
                    собеседования на backend разработчика, на языке Python, в компанию Яндекс, 
                    но к сожалению, выбор был сделан в сторону других стажеров еще до того
                    как я смог с ними отсобеситься. Учусь на 3м курсе МТУСИ.
                </h3>
            </div>
                  
        </div>
        <div class="show-picture">
            <button class="show" onclick="toggleImage()" >Показать/Скрыть картинку</button>
            <img id="invise" src="movies/secret_photo.jpg" alt="invise" style="display: none;">
        </div>
	<form class="create-posts" method="POST" action="profile.php" enctype="multipart/form-data" name="upload">
            <h2>Создать пост</h2>
            <input type="text" placeholder="Тема поста" id="postTitle" name="title" >
            <textarea name="main" placeholder="Содержимое поста" id="postContent"></textarea>
	    <input type="file" name="file" /><br>
            <button class="show" type="submit" name="submit" >Создать!</button>
	</form>
    </body>

<?php
require_once('db.php');
$link = mysqli_connect('db', 'root', 'Ulebud10-', 'first');

if (isset($_POST['submit'])) {
	$title = $_POST['title'];
	$main = $_POST['main'];
	if (!$title || !$main) die ("Заполните все поля");
	$sql = "INSERT INTO posts (title, main_text) VALUES ('$title', '$main')";
	if (!mysqli_query($link, $sql)) die ("Не удалось добавить пост");
	if(!empty($_FILES["file"])){
        if (((@$_FILES["file"]["type"] == "image/gif") || (@$_FILES["file"]["type"] == "image/jpeg")
        || (@$_FILES["file"]["type"] == "image/jpg") || (@$_FILES["file"]["type"] == "image/pjpeg")
        || (@$_FILES["file"]["type"] == "image/x-png") || (@$_FILES["file"]["type"] == "image/png"))
        && (@$_FILES["file"]["size"] < 102400))
        {
            move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);
            echo "Load in:  " . "upload/" . $_FILES["file"]["name"];
        }
        else
        {
            echo "upload failed!";
        }
    }
}
?>
