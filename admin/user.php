<?php
$user = $_GET['user'];
require('conn.php');
$color = explode(',', mnget('colors', 'users', 'user', $user));
$link = explode(',', mnget('links', 'users', 'user', $user));
?>
<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<title><?php echo $user ?></title>
		<link rel="stylesheet" href="/usersstyle.css" type="text/css" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
            <style>
body { background: <?php echo $color[0] ?>; color: <?php echo $color[1] ?>; }
a { color: <?php echo $color[1] ?>; }
#advert { background: <?php echo $color[1] ?>; color: <?php echo $color[0] ?>; }
::selection { background: <?php echo $color[1] ?>; color: <?php echo $color[0] ?>; }
::-moz-selection { background: <?php echo $color[1] ?>; color: <?php echo $color[0] ?>; }
::-webkit-selection { background: <?php echo $color[1] ?>; color: <?php echo $color[0] ?>; }
            </style>
	</head>
	<body>

		<div id="main">
			<span class="title"><?php echo $user ?></span>
<?php

for ($i=1; $i <= count($link) ; $i++ ) {
	echo('
            <a href="'. $link[$i] .'">'. $link[$i-1] .'</a>');
	$i++;
}

?>
		</div> <!-- main -->
		<a href="/" id="advert">Created with: mppp</a>

	</body>
</html>