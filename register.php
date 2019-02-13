<?php include('include/header.php') ?>
<?php include('include/footer.php') ?>
<?php include('include/db.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>TOBSTERA - Регистрация</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta charset="UTF-8">
</head>
<body>
	<div class="header">
		<h2>РЕГИСТРАЦИЯ</h2>
	</div>
	
	<form method="post" action="register.php">

	<?php  if (count($errors) > 0) : ?>
	<div class="error">
		<?php foreach ($errors as $error) : ?>
			<p><?php echo $error ?></p>
		<?php endforeach ?>
	</div>
    <?php  endif ?>

		<div class="input-group">
			<label>Потребител</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Е-майл</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Парола</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<label>Потвърди парола</label>
			<input type="password" name="password_confirm">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">РЕГИСТРАЦИЯ</button>
		</div>
		<p>Вече си регистриран? <a href="login.php">Влизане!</a></p>
	</form>
</body>
</html>
