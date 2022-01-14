<?php
require_once('conn.php');
$id  = $_POST['userID'];
$idNumber  = $_POST['userIDnumber'];
$firstName  = $_POST['userFirstname'];
$lastName  = $_POST['userLastname'];
$gender  = $_POST['userGender'];
$bday  = $_POST['userBday'];
$program  = $_POST['userProgram'];
$yearlevel  = $_POST['userYearlevel'];

// Update the data of the selected user from the database

$sql = "UPDATE user SET idnumber='$idNumber', firstname='$firstName', lastname='$lastName', gender='$gender', 
bday='$bday', program='$program', yearlevel='$yearlevel' WHERE id = '".$id."'";
$statement = $pdo->query($sql);
$users = $statement->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($users);
	
?>
