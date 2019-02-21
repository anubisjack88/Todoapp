<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "todo";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $id =  $_POST["id"];
    // sql to delete a record
    $sql = "DELETE FROM mytask WHERE id=$id";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Record deleted successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

?>