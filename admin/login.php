<?php
if (isset($_POST['send'])) {
	if ($_POST['user'] != "" AND $_POST['pass'] != "") {

		require('conn.php');
		$pass = mnget( 'pass', 'users', 'user', $_POST['user'] );

		if (md5($_POST['pass']) == $pass) {
			setcookie('user', $_POST['user'], time() + (10 * 365 * 24 * 60 * 60));
			header('Location: /manage');
		}
	} else {
		echo('<div class="alert red">All fields must be set</div>');
	}
}
?>

        <h2>Login</h2>
        <form method="post" action="" class="identify">
            <input type="text" placeholder="Your User" name="user" autofocus="autofocus" /><br />
            <input type="password" placeholder="Your Password" name="pass" /><br />
            <input type="submit" name="send" value="Login" />
        </form>