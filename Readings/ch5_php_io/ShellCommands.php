<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>html5_template</title>
		<meta name="description" content="" />
		<meta name="author" content="Pedro" />
	</head>
	<body>

		<?php
			$systemSuccess = system('dir');
			
			
			exec('dir', $execOutput, $execSuccess);
			
			print_r($execOutput);
		?>
	
	</body>
</html>
