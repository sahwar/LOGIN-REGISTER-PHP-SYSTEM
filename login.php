<?php include('include/header.php') ?>
<?php include('include/footer.php') ?>
<?php include('include/db.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>TOBSTERA - Влизане</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta charset="UTF-8">
</head>

	<div class="header">
		<h2>ВЛИЗАНЕ</h2>
	</div>
	
	<form method="post" action="login.php">

	<?php  if (count($errors) > 0) : ?>
	<div class="error">
		<?php foreach ($errors as $error) : ?>
			<p><?php echo $error ?></p>
		<?php endforeach ?>
	</div>
	<?php  endif ?>
	
		<div class="input-group">
			<label>Потребител</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Парола</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">ВЛИЗАНЕ</button>
		</div>
		<p>
			Нямаш акаунт? <a href="register.php">Направи си!</a>
		</p>
	</form>


</body>
</html>
