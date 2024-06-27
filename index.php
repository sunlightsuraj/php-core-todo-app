<?php
require("./database/db.php");

$sql = "select * from todo";
$res = $conn->query($sql);
?>

<html>

<head>
	<title>Form Demo</title>
	<link rel="stylesheet" href="./style.css" />
</head>

<body>
	<div class="container">
		<div class="input-wrapper">
			<input type="text" id="taskInput" class="task-input" placeholder="Write your task">
			<button id="taskButton" class="task-button">Add</button>
		</div>
		<div>
			<ul id="taskListUL">
				<?php
				if ($res && $res->num_rows) {
					while ($data = $res->fetch_array()) {
				?>
					<li class="task-list-item">
						<div>
							<span><?=$data['task'] ?></span>
							<div class="task-actions">
								<button data-id="<?=$data['id']?>" class="delBtn">Remove</button>
								<button data-id="<?=$data['id']?>" class="editBtn">Edit</button>
							</div>
						</div>
					</li>

				<?php
					}
				}
				?>
			</ul>
		</div>
	</div>

	<script src="./script.js"></script>
</body>

</html>