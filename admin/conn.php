<?php
$conn = mysql_connect('mysql.hostinger.es', 'u786676467_mppp', 'Mar.Nac18');
mysql_select_db('u786676467_mppp', $conn);

function mnget($get, $table, $where, $value) {
	$value = mysql_real_escape_string($value);
	$query = "SELECT $get FROM $table WHERE $where = '$value';";
	$result = mysql_query($query);
	$data = mysql_fetch_array($result, MYSQL_ASSOC);
	return $data[$get];
}

function mnupdate($table, $set, $col, $where, $value) {
	$col = mysql_real_escape_string($col);
	$value = mysql_real_escape_string($value);
	$query = "UPDATE $table SET $set = '$col' WHERE $where = '$value';";
	mysql_query($query);
}
?>