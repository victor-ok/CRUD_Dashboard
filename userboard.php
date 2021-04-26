<?php

session_start();

include_once('server.php');
include_once('auth.php');
//include_once('logout.php');

?>

<body>
    <div>
        <?php 
            if(isset($_SESSION['user'])){
                echo "<span>Welcome ".$_SESSION['user']."</span>" ;
                echo "||"; 
                echo "<a href='logout.php'>Logout</a>";
            }else{
                // echo("no session in place");
                header('location:index.php');
            };
        ?>
    </div>
</body>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PHP CURD Operation </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-12">
<h3>Insert Record | PHP CRUD Operations</h3>
<hr/>
<ul>
    <!-- <li><a href="">Dashboard</a></li> -->
    <!-- <li><a href="addRecord.php">Add Record</a></li> -->
    <!-- <li><a href="">Add Product</a></li>
    <li><a href="">List Products</a></li> -->
    <!-- <li><a href="logout.php">Logout</a></li> -->
</ul>
<?php require('readRecord.php'); ?>
<?php require('delRecord.php'); ?>