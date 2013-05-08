<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>manage mppp</title>
        <link rel="stylesheet" href="/style.css" />
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    </head>
    <body onload="changeColor()">

<?php

require('conn.php');
$user = mysql_real_escape_string($_COOKIE['user']);

if (isset($_POST['send'])) {
	mnupdate('users', 'colors', $_POST['colorfondo'].','.$_POST['colortexto'], 'user', $_COOKIE['user']);
	echo('<div class="alert green">Colors saved, <a href="/'. $_COOKIE['user'] .'">go to your page</a>.</div>');
}

$color = explode(',', mnget('colors', 'users', 'user', $_COOKIE['user']));

?>
<h1>mppp</h1>

<ul class="navbar">
  <li>
    <a href="/manage/">Edit links</a>
  </li>
  <li>
    <a href="/manage/colors" class="active">Edit colors</a>
  </li>
  <li>
    <a href="/logout/">Logout</a>
  </li>
</ul>

<form method="post">
            Background<input type="text" id="colorfondo" name="colorfondo" onkeyup="changeColor()" placeholder="#77CC33" value="<?php echo $color[0] ?>" />
            Text<input type="text" id="colortexto" name="colortexto" onkeyup="changeColor()" placeholder="#CFCFCF" value="<?php echo $color[1] ?>" />
            <div id="prevcolor">How it will look :)</div>
            <input action="" type="submit" name="send" value="Save" />
</form>

<script type="text/javascript">

function changeColor() {

    var colorfondo = document.getElementById('colorfondo').value;
    var colortexto = document.getElementById('colortexto').value;
    var prevcolor = document.getElementById('prevcolor');
    prevcolor.style.background = colorfondo;
    prevcolor.style.color = colortexto;

}

</script>
    </body>
</html>