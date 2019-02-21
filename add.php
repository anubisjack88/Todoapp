<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "todo";

// try { 
//     if(!empty($_POST ['task'])&& isset($_POST['task'])){
//         $task = $_POST['task'];
//         $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  
//         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//         $sql = "INSERT INTO mytask (task)
//         VALUES ('$task')";
    
//         $conn->exec($sql);
//         echo "New record created successfully";
//     }
//  elseif(!empty($_POST['done'])&& isset($_POST['done'])){
//      $done = $_POST['done'];
//      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

//      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTOPN);
//      $sql = "INSERT INTO mytask (done)
//      VALUES ('$done')";
//      $conn->exec($sql);
//      echo "New record updated successfully";
//  } else{
//      echo "Done! No go!";
//  }
//     }
// catch(PDOException $e)
//     {
//     echo $sql . "<br>" . $e->getMessage();
//     }

// $conn = null;

?>
