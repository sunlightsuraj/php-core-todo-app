<?php
require_once("../database/db.php");
$mysqli = $conn;

function getTodos() {
	$sql = "select * from todo";
	$res = $mysqli->query($sql);
	if ($res && $res->num_rows) {
		echo $res->num_rows;
	}

}

getTodos();
?>