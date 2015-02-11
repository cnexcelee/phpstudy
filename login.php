<html>
	<head>
		<title>login</title>
	</head>
	<body>
	<?php 
			$name = $email = $website = "";
			if($_SERVER["REQUEST_METHOD"] == "POST"){
				//注意 ：要判断$_POST["name"]是否为空，否则第一次进入此界面会报错，UNdefined index:name
				$name = test_input(isset($_POST["name"]) ? $_POST["name"] : "");
				$email = test_input(isset($_POST["email"]) ? $_POST["email"] : "");
				$website = test_input(isset($_POST["website"]) ? $_POST["website"] :"");

			}


			function test_input($data){
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}
		?>
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
			Name:<input type="text" name="name">
			E-mail:<input type="text" name="email">
			Website:<input type="text" name="website">
			<input type="submit" value="login">

		
		</form>

		
	</body>
</html>