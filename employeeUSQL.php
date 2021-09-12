<!DOCTYPE html>
<html>
<?php
require_once 'setup.php';
?>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/2e4c9e68b5.js" crossorigin="anonymous"></script>
    <title>Page Title</title>
</head>
<?php

$firstname = $_POST[$_POST['employee_id'].'first_name'];
$lastname = $_POST[$_POST['employee_id'].'last_name'];
$email = $_POST[$_POST['employee_id'].'email'];
$phone_number = $_POST[$_POST['employee_id'].'phone_number'];
$hire_date = $_POST[$_POST['employee_id'].'hire_date'];
$salary = (int) $_POST[$_POST['employee_id'].'salary'];
$job_id = (int) $_POST[$_POST['employee_id'].'job_id'];
$manager_id = (int) $_POST[$_POST['employee_id'].'manager_id'];
$department_id = (int) $_POST[$_POST['employee_id'].'department_id'];




 $sql = "UPDATE employees set first_name='$firstname', last_name='$lastname', email='$email',
  phone_number='$phone_number', hire_date='$hire_date', job_id='$job_id', salary='$salary', manager_id='$manager_id', department_id='$department_id' where employee_id = '$_POST[employee_id]'";
 if($stmt = mysqli_prepare($link, $sql)){
    if(mysqli_stmt_execute($stmt)){
?>
<body>
<div class="container mt-5" style="text-align:center">
        <h1 style="color:#008000" class="mb-2"><i class="fas fa-folder-plus"></i></h1>
        Updated Successfully!!!!<br>
        <h2>
           Auto Redirecting to Home page......
        </h2>
        <h6 style="color:red">
            If you are not redirected, Please click the below button
        </h6>
        <a href="/project">Home Page </a>
    </div>
</body>
<?php
    } else{
        echo "Oops! Something went wrong. Please try again later.";
    }
 }else {
     echo "error";
 }

?>
</html>
