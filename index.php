<?php
require("./database/db.php");

$sql = "select * from todo";
$res = $conn->query($sql);

$success = $_GET["success"];
?>

<html>

<head>
	<title>Form Demo</title>
	<link rel="stylesheet" href="./style.css" />
</head>

<body>
	<div class="container">
		<?php
		if ($success) {
			echo "<p>Data inserted successfully.</p>";
		} else {
			echo "<p>Data insert failed.</p>";
		}
		?>
		
		<form action="task-add.php" method="post">
			<div class="input-wrapper">
				<input type="text" id="taskInput" class="task-input" placeholder="Write your task" name="task">
				<button id="taskButton" class="task-button">Add</button>
			</div>
		</form>
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

	<!-- <script src="./script.js"></script> -->
</body>

</html>