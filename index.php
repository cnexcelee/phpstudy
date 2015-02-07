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
			$func("string bar<br>");

			//test function strpos

			echo strpos("hello world!!!", "hello");

			define("TESTSTR", "hello php!!!!<BR>");
			//大小写敏感
			echo TESTSTR;
			// echo teststr; // error
			

			//test switch
			function testswitch($strswitch){
				switch ($strswitch) {
					case 'one':
						# code...
						echo "one<br>";
						break;
					
					default:
						# code...
						echo "defaulta <br>";
						break;
				}
			}
			testswitch("one");

			//test foreach
			$colors = array("red","green","bule","white","black");
			foreach ($colors as $key => $value) {
				echo "key : $key  ----  value : $value <br>";
				#test git diff
			}
		 ?>

	</body>
</html>