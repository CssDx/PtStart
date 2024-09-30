
<!DOCTYPE html>
<html lang="ru" class='main'>
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
	<?php
            if(!isset($_COOKIE['User'])){
        ?>
            <h1>Авторизуйтесь</h1>
        <?php
		}else{
	?>
	   <h1> Страница постов </h1>
	<?php
		}
	?>
	<p>
            <h2 class="money"> "За деньги - да!" </h2>
        </p>

        </header>
    </head>

    <body>
	<div>
			<div class="underrow">
				<div class="about-new-user">
					<?php
						if(!isset($_COOKIE['User'])){
					?>
						<form action="/registration.php">
                                                        <button class="registr">
                                                                Зарегистрируйтесь
                                                        </button>
                                                </form> 
                                                 или    
                                                <form action="/login.php">
                                                        <button class="registr">
                                                                войдите
                                                        </button>
                                                </from> , чтобы просматривать контент!

					<?php
						}else{
							$servername = "db";
							$username = "root";
							$password = "Ulebud10-";
							$dbName = "first";

							$link = mysqli_connect($servername, $username, $password, $dbName);
							$sql = "SELECT * FROM posts";
							$res = mysqli_query($link, $sql);
							if (mysqli_num_rows($res) > 0) {
								while ($post = mysqli_fetch_array($res)){
									echo "<a href='/posts.php?id=" . $post["id"] . "'>" . $post['title'] . "</a><br>";
								}
							} else {
								echo "Записей пока нет";
							}
						}
                                	?>
					


       				</div>
			</div>
	</div>
    </body>
</html>
