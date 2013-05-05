<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Manage your MPPP</title>
        <link rel="stylesheet" href="/style.css" />
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    </head>
    <body>
<?php
if (isset($_COOKIE['user'])) {
	if ($_GET['edit'] == 'colors') {
		require('editcolors.php');
	} else {
		require('editlinks.php');
	}
} else {
	require('login.php');
}
?>

    </body>
</html>