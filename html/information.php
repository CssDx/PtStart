<?php 
$link = mysqli_connect('db', 'root', 'Ulebud10-');
if (!$link){
	die('Error:' . mysqli_error());
}
echo 'Good!';
mysqli_close($link);
?>
