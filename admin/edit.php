<?php

require('db/flintstone.php');
$db = new Flintstone(array('dir' => 'db/'));

if (isset($_POST['send'])) {

	$db->load('links')->set($_COOKIE['user'],
		array(
			'colors' => array('bg' => $_POST['colorfondo'], 'fg' => $_POST['colortexto']),
			'names' => array(
				'name1' => array('name' => $_POST['name1'], 'link' => $_POST['link1']),
				'name2' => array('name' => $_POST['name2'], 'link' => $_POST['link2']),
				'name3' => array('name' => $_POST['name3'], 'link' => $_POST['link3']),
				'name4' => array('name' => $_POST['name4'], 'link' => $_POST['link4']),
				'name5' => array('name' => $_POST['name5'], 'link' => $_POST['link5']),
			),
		)
	);
echo('<div class="alert green">All saved, <a href="/'. $_COOKIE['user'] .'/">go to your page</a>.</div>');
}

$data = $db->load('links')->get($_COOKIE['user']);

$bg = $data['colors']['bg'];
$fg = $data['colors']['fg'];



?>
<h1>Edit your mppp <a href="/logout" class="alert red">Logout</a></h1>
<form method="post">
            <h2>Colors</h2>
            Background<input type="text" name="colorfondo" placeholder="#77CC33" value="<?php echo $bg ?>" />
            Text<input type="text" name="colortexto" placeholder="#CFCFCF" value="<?php echo $fg ?>" />

            <h2>Links</h2>
            Name and link (with "http://", please)
            <div class="linkeitor">
                <?php
                $vuelta = 1;
                foreach ($data['names'] as &$name) {
                    echo('<input type="text" name="name'. $vuelta .'" value="'. $name['name'] .'" /><input type="text" name="link'. $vuelta .'" value="'. $name['link'] .'" />');
                    $vuelta++;
                }    
                ?>
            </div><!-- linkeitor -->
            <input action="" type="submit" name="send" value="Guardar" />
</form>