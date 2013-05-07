<?php
if (!isset($_COOKIE['user'])) {
	require('login.php');
} elseif (isset($_GET['edit'])) {
	require('editcolors.php');
} else {
	require('editlinks.php');
}
?>