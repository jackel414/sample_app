<?php
	if ($_SERVER['REQUEST_METHOD'] === 'GET') {
		echo "<script> window.location.replace('http://mays.io') </script>";
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Flying Vines Temp Page</title>
		<link rel="stylesheet" href="styles.css">
	</head>

	<body>
		<h1>Temporary Splash Page</h1>
		<h2>The time is now <?php echo date("D M d, Y G:i a"); ?><h2>
	</body>
</html>