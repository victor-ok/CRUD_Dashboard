<?php

include_once('server.php');

if (isset($_POST['addRecord'])){
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $emailid = $_POST['emailid'];
    $contactno = $_POST['contactno'];
    $address = $_POST['address'];

    // Query for Insertion
    $sql="INSERT INTO userstbl(FirstName,LastName,EmailId,ContactNumber,Address) VALUES(:fn,:ln,:eml,:cno,:adrss)";
    //Prepare Query for Execution
    $query = $conn->prepare($sql);
    // Bind the parameters
    $query->bindParam(':fn',$fname,PDO::PARAM_STR);
    $query->bindParam(':ln',$lname,PDO::PARAM_STR);
    $query->bindParam(':eml',$emailid,PDO::PARAM_STR);
    $query->bindParam(':cno',$contactno,PDO::PARAM_STR);
    $query->bindParam(':adrss',$address,PDO::PARAM_STR);
    // Query Execution
    $query->execute();
    header('location:userboard.php');
}

?>

</div>
<form name="addRecord" method="post">
<div class="row">
<div class="col-md-4"><b>First Name</b>
<input type="text" name="firstname" class="form-control" required>
</div>
<div class="col-md-4"><b>Last Name</b>
<input type="text" name="lastname" class="form-control" required>
</div>
</div>
<div class="row">
<div class="col-md-4"><b>Email id</b>
<input type="email" name="emailid" class="form-control" required>
</div>
<div class="col-md-4"><b>Contactno</b>
<input type="text" name="contactno" class="form-control" maxlength="10" required>
</div>
</div>
<div class="row">
<div class="col-md-8"><b>Address</b>
<textarea class="form-control" name="address" required></textarea>
</div>
</div>
<div class="row" style="margin-top:1%">
<div class="col-md-8">
<input type="submit" name="addRecord" value="ADD">
</div>
</div>
</form>
</div>
</div>
</body>
</html>
</body>