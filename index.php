<?php 
// Start session обязательный
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>autorization and регистрация</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

	
    <!-- Forn autorization -->
	<form action="" method="">

		<label for="">Email</label>
		<input type="" name="" placeholder="Введите свой логин">
		<label for="">Password</label>
		<input type="" name="" placeholder="Введите пароль">
        <button>Send</button>
        <p>
        	У вас нет аккаунта? - <a href="register.php">Зарегестрируйтесь</a>
        </p>
         <?php
        	if( isset( $_SESSION['message'] ) ) {
        		echo '<p class="msg">' . $_SESSION['message'] .'</p>';
        		unset($_SESSION['message']);
        	} 
            
        ?>
	</form>
	
</body>
</html>