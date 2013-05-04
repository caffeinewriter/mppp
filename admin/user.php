<?php
$user = $_GET['user'];
require('db/flintstone.php');
$db = new Flintstone(array('dir' => 'db/'));
$data = $db->load('links')->get($user);

$bg = $data['colors']['bg'];
$fg = $data['colors']['fg'];
?>
<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<title>mario</title>
		<link rel="stylesheet" href="/usersstyle.css" type="text/css" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
            <style>
body { background: <?php echo $bg ?>; color: <?php echo $fg ?>; }
a { color: <?php echo $fg ?>; }
#advert { background: <?php echo $fg ?>; color: <?php echo $bg ?>; }
            </style>
	</head>
	<body>

		<div id="main">
			<span class="title"><?php echo $user ?></span>
<?php

foreach ($data['names'] as $link) {
    echo('<a href="'. $link['link'] .'">'. $link['name'] .'</a>');
}

?>
		</div> <!-- main -->
		<a href="/" id="advert">Created with: mppp</a>

	</body>
</html>