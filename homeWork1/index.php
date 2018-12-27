<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="./css/style.css">
	<title>PHP</title>
</head>
<body>
	
	<header>
		<h1>
			<?php 
			$a = 3;
			$b = 4;
			echo $a + $b;
			?>
		</h1>
	</header>
	<main>
		<section class="container">
			<?php 
			echo "<h2>Increment</h2>";
			echo "Increment " . $a++ . "<br />";
			echo $a;
			$foo = 5; 
			$foo *= 5;
			echo '<br />';
			echo $foo; 
			?>
		</section>
	</main>


</body>
</html>