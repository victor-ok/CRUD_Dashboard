<?php
// include database connection file
require_once'server.php';
// Code for record deletion
if(isset($_REQUEST['del']))
{
//Get row id
$uid=intval($_GET['del']);
//Qyery for deletion
$sql = "delete from userstbl WHERE  id=:id";
// Prepare query for execution
$query = $conn->prepare($sql);
// bind the parameters
$query-> bindParam(':id',$uid, PDO::PARAM_STR);
// Query Execution
$query -> execute();
// Mesage after updation
header('location:userboard.php');
}
?>