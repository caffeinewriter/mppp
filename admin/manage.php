<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Edit your links</title>
        <link rel="stylesheet" href="style.css" />
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    </head>
    <body>
<?php
if (isset($_COOKIE['user'])) {
	require('edit.php');
} else {
	require('login.php');
}
?>

    </body>
</html>