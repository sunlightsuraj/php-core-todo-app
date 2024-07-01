<?php
require('./database/db.php');

$anju = $_POST['task'];

$sql = "insert into todo(task) value('$anju')";

$res = $conn->query($sql);

if ($res) {
	echo "Data Inserted";
} else {
	echo "Data insert failed.";
}

header("Location: index.php?success=$res");