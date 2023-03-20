<?php
session_start();
$_SESSION['uid']=$_GET['uid'];
?>
<!doctype html>

<html lang="en">

<head>

	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">



	<meta name="apple-mobile-web-app-capable" content="yes">

	<meta name="mobile-web-app-capable" content="yes">



	<title>Flappy Bird</title>


	<script src="js/jquery.js"></script>
		<script src="js/custom.js"></script>
	<script src="js/sprite.js"></script>



<style>
      canvas {
          display: block;
		  position: absolute;
          margin: auto;
          top: 0;
		  bottom: 0;
          left: 0;
		  right: 0;
}

</style>

</head>
<body>
</body>

</html>
