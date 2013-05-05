<?php

if (isset($_POST['send'])) {

	if (strlen($_POST['user']) > 30 OR strlen($_POST['user']) < 4) {
		echo('<div class="alert red">Username must have from 4 to 30 characters.</div>');

	} elseif ( $_POST['pass1'] !=  $_POST['pass2'] OR $_POST['pass1'] == '' ) {
		echo('<div class="alert red">Passwords must match</div>');

	} else {
		require('conn.php');

		$user = $_POST['user'];
		$pass = md5($_POST['pass1']);
		$colors = '#333,#FFF';
		$links = '';
		$query = "INSERT INTO users ( user, pass, colors, links ) VALUES ( '$user', '$pass', '$colors', '$links' );";
		mysql_query($query);
		mysql_close();
		
		/*setcookie('user', $user, time() + (10 * 365 * 24 * 60 * 60));*/
		header('Location: /manage');
	}
} 

?>

        <h2>Register</h2>
        <p>Create an acount at mppp.tk in order to use our services. It's easy, fast and good looking! Go ahead, it is also free.</p>
        <form method="post" action="" class="identify">
            <input type="text" placeholder="username (4 - 30)" name="user" autofocus="autofocus" />
            <input type="password" placeholder="password" name="pass1" />
            <input type="password" placeholder="password" name="pass2" />
            <input type="submit" name="send" value="Register" />
        </form>