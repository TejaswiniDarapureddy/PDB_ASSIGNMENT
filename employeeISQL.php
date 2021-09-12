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
 $sql = "INSERT INTO employees (first_name,last_name,email,phone_number,hire_date,job_id,salary,manager_id,department_id) VALUES ('$_POST[first_name]','$_POST[last_name]','$_POST[email]','$_POST[phone_number]','$_POST[hire_date]','$_POST[job_id]','$_POST[salary]','$_POST[manager_id]','$_POST[department_id]')";
 if($stmt = mysqli_prepare($link, $sql)){
    if(mysqli_stmt_execute($stmt)){
?>
<body>
<div class="container mt-5" style="text-align:center">
        <h1 style="color:#008000" class="mb-2"><i class="fas fa-folder-plus"></i></h1>
        Successfully inserted!!!!<br>
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