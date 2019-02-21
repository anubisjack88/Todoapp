<html>
<head>
 <title>My Todo list</title>
</head>
<body>

<h1>Todo List</h1>
<form method=”post” action=”create.php”>
 <p>Todo title: </p>
 <input name=”todoTitle” type=”text”>
 <p>Todo description: </p>
 <input name=”todoDescription” type=”text”>
 <br>
 <input type=”submit” name=”submit” value=”submit”>
</form>
</body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=Todo", $username, $password);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
     if(isset($_POST[‘submit’])) {
$title = $_POST[‘TodoTitle’];
$description = $_POST[‘TodoDescription’];
// echo “you filled title “ . $title . “<br> and description “ . $description;
}


// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "Todo";

// try {
//     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//     // set the PDO error mode to exception
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     $sql = "INSERT INTO task to_complete (Task, Status, Completed)
//     VALUES ('done', 'done', 'done')";
//     // use exec() because no results are returned
//     $conn->exec($sql);
//     echo "New record created successfully";
//     }
// catch(PDOException $e)
//     {
//     echo $sql . "<br>" . $e->getMessage();
//     }

// $conn = null;
 




?>