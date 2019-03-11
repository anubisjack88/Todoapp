<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "todo";

try {
    $conn = new PDO("mysql:host=localhost;dbname=todo", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "You have connected successfully to the JES Database. Please enter the required information below.";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    
    $stmt = $conn->prepare("INSERT INTO servers (OEM , Modle , Deployment_Type , UPC)
    VALUES (:OEM, :Modle, :Deployment_Type , :UPC)");
    $stmt->bindParam(':OEM', $OEM);
    $stmt->bindParam(':Modle', $Mod);
    $stmt->bindParam(':Deployment_Type', $Deploy);
    $stmt->bindParam(':UPC' , $upc);
    $newstr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
    // insert a row
    $OEM = "Cisco";
    $Mod = "MX84";
    $Deploy = "Small to Large Enviorments";
    $upc = "";
    $stmt->execute();
    echo "New records created successfully";
}
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
$conn = null;
?> 

<!DOCTYPE HTML>
<HTML>
<head>
<!-- Change this code block if you would like to add more style to the app when the time comes. -->
<link rel="stylesheet" href="Formval.css">
</head>
<body>
<!-- <img src="https://78.media.tumblr.com/1d9b937b4f84ab19ff2a79cc6cc209ad/tumblr_obskx97ns11rk08f0o1_500.gif"; -->
<h2><font color="red"> JESappv2.0</font> </h2>
<form method="post" action="
<?php
?>">
OEM: <input type="text" name="Name">
<br><br>
Modle: <input type="text" name="OEM">
<br><br>
Deployment Type: <input type="text" name="Deploy">
<br><br>
: <textarea name="comment" rows="2" cols="40"></textarea> 
<br><br>
OEM:
<input type="radio" name="Server" value="Cisco">Cisco
<input type="radio" name="Server" value="Dell">Dell
<input type= "radio" name="Server" value="HP">HP.
<input type= "radio" name="Server" value="Oracle">Oracle
<br><br>
<input type="submit" name="submit" value="Submit">
<input type="text" name="task" class="task_input">
  <input type="submit" id="delete_btn" class="delete_btn" value="Remove OEM from Database">
  
	
	<form method="POST" action="add.php" class="input_form">
		<input type="text" name="task" class="task_input">
		<input type="submit" id="add_btn" class="add_btn" value="Submit server Modle">

		<form method="POST" action="delete.php" class="input_form">
  <input type="text" name="task" class="task_input">
<input type="submit" id="delete_btn" class="delete_btn" value="Remove OEM from Database">


</form>
</html>
