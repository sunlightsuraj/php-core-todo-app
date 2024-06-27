const taskInput = document.getElementById("taskInput");
const taskButton = document.getElementById("taskButton");
const taskListUL = document.getElementById("taskListUL");
const editButton = document.querySelector(".editBtn");
var id = 0;

function addEditActions () {
	document.querySelector(".editBtn").removeEventListener("click", function() { });
	document.querySelector(".editBtn").addEventListener("click", function () {
		console.log("Edit action");
	});
}

function addDeleteActions() {
	document.querySelector(".delBtn").removeEventListener("click", function() { });
	document.querySelector(".delBtn").addEventListener("click", function () {
		console.log("Del action");
	});
}

taskButton.addEventListener("click", function () {
	const task = taskInput.value;
	if (task == "")
		return false;

	id++;

	const li = document.createElement("li");
	li.setAttribute("class", "task-list-item");

	li.innerHTML = `<div>
	<span>${task}</span>
	<div class="task-actions">
		<button data-id="${id}" class="delBtn">Remove</button>
		<button data-id="${id}" class="editBtn">Edit</button>
	</div>
</div>`

	taskListUL.prepend(li);

	taskInput.value = "";
	taskInput.focus();

	addEditActions();
	addDeleteActions();
});

addEditActions();
addDeleteActions();