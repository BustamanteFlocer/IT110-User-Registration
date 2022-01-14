
<?php
require_once('conn.php');
$id  = $_POST['userID'];

// Delete selected user from the database
$sql = "DELETE FROM user WHERE id = '".$id."'";
$statement = $pdo->query($sql);
$users = $statement->fetchAll(PDO::FETCH_ASSOC);
		echo json_encode($users);
	
?>


