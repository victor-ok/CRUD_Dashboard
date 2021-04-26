<?php
 if(!isset($_SESSION)) 
 { 
    session_start(); 
 }

include_once('server.php');

if(isset($_POST['register'])) {

    if (empty($_REQUEST['name']) || empty($_REQUEST['email']) || empty($_REQUEST['password'])) {
        echo "You are required to fill all input fields";
        echo "<a href='index.php'>Go Back</a>";
        return;
    } else {
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $pass = md5($_REQUEST['password']);
        
        $stmt = $conn->prepare("INSERT INTO user (name, email, password) VALUES (?, ?, ?)");
        $stmt->bindParam(1, $name);
        $stmt->bindParam(2, $email);
        $stmt->bindParam(3, $pass);
    
        $stmt->execute();
        $_SESSION['user'] = $name;
        header("Location: userboard.php");            
        return;
    }
}

if(isset($_POST['login'])) {

    if (empty($_REQUEST['name']) || empty($_REQUEST['password'])) {
        echo "You are required to fill all input fields";
        echo "<a href='login.php'>Go Back</a>";
        return;
    } else {
        $name = $_REQUEST['name'];
        $pass = md5($_REQUEST['password']);

        $query = "SELECT * FROM user WHERE name = ? AND password = ?";  
        $stmt = $conn->prepare($query);
        $stmt->bindParam(1, $name);
        $stmt->bindParam(2, $pass);
        // $stmt->execute(array($name, $pass));
        $row = $stmt->fetch(PDO::FETCH_ASSOC);


        // 
        // $stmt->execute();

        // $count = $stmt->rowCount();

        if($row== 1) {
            $_SESSION["user"] = $name;  
            header("location:userboard.php");
        } else {
            // echo "You do not seem to be a registered user, Please check you entered your details correctly<br> Or a better option, <a href='resetPass.php'>RESET PASSWORD</a><br>";
            // echo "<a href='login.php'>Go Back</a>";
            echo "not working";
            return;
        }

    }
}