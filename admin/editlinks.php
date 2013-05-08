<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>manage mppp</title>
        <link rel="stylesheet" href="/style.css" />
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    </head>
    <body>

<?php
$user = $_COOKIE['user'];
require('conn.php');
$link = explode(',', mnget('links', 'users', 'user', $user));

if (isset($_POST['send'])) {

	$linkstosave = '';
	for ($i=1; $i <= count($link) ; $i++ ) {
		if ($_POST['name'.$i] != '' OR $_POST['link'.$i] != '') {
			$linkstosave = $linkstosave . $_POST['name'.$i] .','. $_POST['link'.$i] .',';
			$i++;
		}
	}
	mnupdate('users', 'links', $linkstosave , 'user', $_COOKIE['user']);

echo('<div class="alert green">All saved, <a href="/'. $_COOKIE['user'] .'">go to your page</a>.</div>');
}

?>
<h1>mppp</h1>

<ul class="navbar">
  <li>
    <a href="/manage/" class="active">Edit links</a>
  </li>
  <li>
    <a href="/manage/colors/">Edit colors</a>
  </li>
  <li>
    <a href="/logout/">Logout</a>
  </li>
</ul>

<form method="post" class="linkeitor">
                <?php
		$link = explode(',', mnget('links', 'users', 'user', $user));
                for ($i=1; $i <= count($link) ; $i++) {
                    echo('
            <input type="text" name="name'. $i .'" value="'. $link[$i-1] .'" />');
	            echo('<input type="text" name="link'. $i .'" value="'. $link[$i] .'" />');
			$i++;
                }    
                ?>
            <input action="" type="submit" name="send" value="Save" />
</form>


    </body>
</html>