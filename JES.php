
<?php 
    // initialize errors variable
	$errors = "";
	// connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "todo";
try {
    $conn = new PDO("mysql:host=$servername;dbname=todo", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Gemar Connected to the SQL server.";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
	// insert a quote if submit button is clicked
	if (isset($_POST['submit'])) {
		if (empty($_POST['task'])) {
			$errors = "You must fill in the task";
		}else{
			$task = $_POST['task'];
			$sql = "INSERT INTO tasks (task) VALUES ('$task')";
			mysqli_query($db, $sql);
			header('location: index.php');
		}
	}	
  try {
    $conn = new PDO("mysql:host=$servername;dbname=Todo", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
try { 
    if(!empty($_POST ['task'])&& isset($_POST['task'])){
        $task = $_POST['task'];
        $sql = "INSERT INTO mytask (status)
        VALUE ('$task')";
    
        $conn->exec($sql);
        echo "New record created successfully";
    }
 elseif(!empty($_POST['done'])&& isset($_POST['done'])){
     $done = $_POST['done'];
     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTOPN);
     $sql = "INSERT INTO mytask (done)
     VALUES ('$done')";
     $conn->exec($sql);
     echo "New record updated successfully";
 } else{
     echo "Nope";
 }
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
$conn = null;
	?>

<!DOCTYPE html>
<html>
<head>
<img src= https://i.kym-cdn.com/photos/images/newsfeed/000/875/060/8f2.jpg>
<meta name="viewport" content="width=device-width, initial-scale=1">



</head>
<body>
  
</ul>

<script>
// Create a "close" button and append it to each list item
let myNodelist = document.getElementsByTagName("LI");
let i;
for (i = 0; i < myNodelist.length; i++) {
  var span = document.createElement("SPAN");
  var txt = document.createTextNode("\u00D7");
  span.className = "close";
  span.appendChild(txt);
  myNodelist[i].appendChild(span);
}
// Click on a close button to hide the current list item
let close = document.getElementsByClassName("close");
let i;
for (i = 0; i < close.length; i++) {
  close[i].onclick = function() {
    var div = this.parentElement;
    div.style.display = "none";
  }
}
// Add a "checked" symbol when clicking on a list item
let list = document.querySelector('ul');
list.addEventListener('click', function(ev) {
  if (ev.target.tagName === 'LI') {
    ev.target.classList.toggle('checked');
  }
}, false);
// Create a new list item when clicking on the "Add" button
function newElement() {
  let li = document.createElement("li");
  let inputValue = document.getElementById("myInput").value;
  let t = document.createTextNode(inputValue);
  li.appendChild(t);
  if (inputValue === '') {
    alert("You must write something!");
  } else {
    document.getElementById("myUL").appendChild(li);
  }
  document.getElementById("myInput").value = "";
  let span = document.createElement("SPAN");
  let txt = document.createTextNode("\u00D7");
  span.className = "close";
  span.appendChild(txt);
  li.appendChild(span);
  for (i = 0; i < close.length; i++) {
    close[i].onclick = function() {
      let div = this.parentElement;
      div.style.display = "none";
    }
  }
}
</script>
<body>

	<div class="heading">
		<h2 style="font-style: 'Helvetica';">ToDo List Application PHP and MySQL database</h2>
	</div>
	<form method="post" action="index.php" class="input_form">
		<input type="text" name="task" class="task_input">
		<input type="submit" id="add_btn" class="add_btn" value="Submit to the Database">

	</form>
  <form method="post" action="deletedata.php" class="input_form">
  <input type="text" name="task" class="task_input">
  <input type="submit" id="add_btn" class="add_btn" value="Remove data from the Database">
  </form>

    <?php if (isset($errors)) { ?>
	<p><?php echo $errors; ?></p>
<?php } ?>
    <link rel="stylesheet" type="text/css" href="styles.css">
</body>

</html>
