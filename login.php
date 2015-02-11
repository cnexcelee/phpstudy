<html>
	<head>
		<title>login</title>
	</head>
	<body>
	<!-- <?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?> -->
		<form action="login.php" method="POST">
			Name:<input type="text" name="name">
			E-mail:<input type="text" name="email">
			Website:<input type="text" name="website">
			<input type="submit" value="login">
		</form>
	</body>
</html>