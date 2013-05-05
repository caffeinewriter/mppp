<?php

require('conn.php');
$user = mysql_real_escape_string($_COOKIE['user']);

if (isset($_POST['send'])) {
	mnupdate('users', 'colors', $_POST['colorfondo'].','.$_POST['colortexto'], 'user', $_COOKIE['user']);
	echo('<div class="alert green">Colors saved, <a href="/'. $_COOKIE['user'] .'/">go to your page</a>.</div>');
}

$color = explode(',', mnget('colors', 'users', 'user', $_COOKIE['user']));

?>
<h1>Edit your mppp <a href="/logout" class="alert red">Logout</a></h1>
<a href="/manage">Edit Links</a>
<form method="post">
            Background<input type="text" name="colorfondo" placeholder="#77CC33" value="<?php echo $color[0] ?>" />
            Text<input type="text" name="colortexto" placeholder="#CFCFCF" value="<?php echo $color[1] ?>" />
            <input action="" type="submit" name="send" value="Guardar" />
</form>