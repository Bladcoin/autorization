<?php 
// Start session обязательный
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>регистрация</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

	
    <!-- Forn autorization -->
	<form action="inc/signup.php" method="POST" enctype="multipart/form-data">

		<label for="">Ф.И.О</label>
		<input type="" name="full_name" placeholder="Введите свой логин">
		<label for="">Login</label>
		<input type="" name="login" placeholder="Введите login">
		<label for="">Email</label>
		<input type="" name="email" placeholder="Введите email">
		<label for="">Images profile</label>
		<input type="file" name="avatar">
		<label for="">Password</label>
		<input type="" name="password" placeholder="Введите email">
        <label for="">Password accept</label>
		<input type="password" name="password_confirm" placeholder="Подтвердите пароль">



        <button>Send</button>
        <p>
        	У вас уже есть аккаунт? - <a href="index.php">Автроризируйтесь</a>
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