<?php

if (isset($_POST['send'])) {

	if ($_POST['name'] == "" OR $_POST['mail'] == "" OR $_POST['pass'] == "") {
		echo('<div class="alert red">All fields must be set</div>');
	} else {
		require('admin/db/flintstone.php');
		$db = new Flintstone(array('dir' => 'admin/db/'));
	
		$exist = $db->load('users')->get($_POST['name']);
		if ($exist == "") {
			$db->load('users')->set($_POST['name'], array('mail' => $_POST['mail'], 'pass' => md5($_POST['pass'])));
			
			$db->load('links')->set($_POST['name'],
				array(
					'colors' => array('bg' => '#333', 'fg' => 'white'),
					'names' => array(
						'name1' => array('name' => '', 'link' => ''),
						'name2' => array('name' => '', 'link' => ''),
						'name3' => array('name' => '', 'link' => ''),
						'name4' => array('name' => '', 'link' => ''),
						'name5' => array('name' => '', 'link' => ''),
					),
				)
			);
			
			header('Location: http://mppp.tk/manage');
		} else {
			echo('<div class="alert red">User <a href="/'. $_POST['name'] .'/">'. $_POST['name'] .'</a> already exists</div>');
		}
	}
} 

?>

        <h2>Register</h2>
        <p>Create an acount at mppp.tk in order to use our services. It's easy, fast and good looking! Go ahead, it is also free.</p>
        <form method="post" action="" class="identify">
            <input type="text" placeholder="username" name="name" autofocus="autofocus" /><br />
            <input type="email" placeholder="email@site.com" name="mail" /><br />
            <input type="password" placeholder="password" name="pass" /><br />
            <input type="submit" name="send" value="Register" />
        </form>