<?php
if (isset($_POST['send'])) {
	if ($_POST['name'] == "" OR $_POST['mail'] == "" OR $_POST['pass'] == "") {

		require('db/flintstone.php');
		$db = new Flintstone(array('dir' => 'db/'));
		$user = $db->load('users')->get($_POST['name']);
	
		if ($user['pass'] == md5($_POST['pass'])) {
			setcookie("user", $_POST['name']);
			header('Location: http://mppp.tk/manage');
		} else {
			echo('<div class="alert red">Bad login</div>');
		}
	}
}
?>

        <h2>Login</h2>
        <p>To edit your links you have to be logged in.</p>
        <form method="post" action="" class="identify">
            <input type="text" placeholder="Your User" name="name" autofocus="autofocus" /><br />
            <input type="password" placeholder="Your Password" name="pass" /><br />
            <input type="submit" name="send" value="Login" />
        </form>