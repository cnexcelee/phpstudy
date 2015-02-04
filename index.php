<html>
	<body>


		<?php echo "Hello World!!!<br>"; ?>
		<?php 
			$a = 50;
			var_dump($a);
			echo "<br>";
			$b = "50";
			var_dump($b);
			echo ("<br>");
			echo "i have $a \\ \n RMB<br>";

			//Test NULL
			$t = 5;
			echo "$t<br>";
			unset($t);
			// echo "$t";
			$t = print "hello World<br>";
			print $t;





			//test value translate and reference translate
			echo "<br>";
			$str = "i'm a string";
			function testStr1($str){
				$str = "value translate";
			}
			testStr1($str);
			echo "$str<br>";
			function testStr2(&$str){
				$str = "reference translate";
			}
			testStr2($str);
			echo "$str<br>";

			//test variable func
			function foo(){
				echo "in foo <br>";
			}
			function bar($vstr = "arg"){
				echo "it's in $vstr <br>";
			}
			$func = "foo";
			$func();
			$func = "bar";
			$func();
			$func("string bar");

		 ?>

	</body>
</html>