<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/style.css">
</head>

<body>
	
	<!-- Formulier -->
	 <!-- inloggen via GET is geen goed idee -> heel onveilig -->
     
	<form action="" method="get">
	<label for="username">Gebruikersnaam:</label>
	<input type="text" name="username" id="username">
	<label for="password">Password:</label>
	<input type="password" name="password" id="password">

	<input type="submit" value="Login">
	<!-- <button>Login</button> -->
	</form>

	<?php 
		//========== GET superglobal
        
	
	if(isset($_GET["username"]) && isset($_GET["password"])){
		echo $_GET["username"] , " " , $_GET["password"];
	}
        
	?>
    
    <a href="05TASK-if-else-and-operators.php" class='previousTopic' disabled>Ga naar vorig topic</a>
    <a href="06-post.php" class='nextTopic'>Ga naar volgend topic</a>
    <script src="../app.js"></script>
</body>

</html>