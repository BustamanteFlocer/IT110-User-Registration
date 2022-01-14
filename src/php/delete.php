
<?php
require_once('conn.php');
$id  = $_POST['userID'];

// Delete selected user from the database
$sql = "DELETE FROM user WHERE id = '".$id."'";
$statement = $pdo->query($sql);

	
?>


