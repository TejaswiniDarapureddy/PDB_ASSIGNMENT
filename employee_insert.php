<!DOCTYPE html>
<html>
<?php
require_once 'setup.php';
$var = null;
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
    <script src="script.js"></script>
    <title>Page Title</title>
</head>


<body>
    <div class="container p-5">
    <form action="employeeISQL.php" method="post">
        <input required type="text" class="form-control mb-3" name="first_name" placeholder="first_name">
        <input required type="text" class="form-control mb-3" name="last_name" placeholder="last_name">
        <input required type="text" class="form-control mb-3" name="email" placeholder="email">
        <input required type="text" class="form-control mb-3" name="phone_number" placeholder="phone_number">
        <input required type="text" class="form-control mb-3" name="hire_date" placeholder="hire_date">
        <input required type="text" class="form-control mb-3" name="job_id" placeholder="job_id">
        <input required type="text" class="form-control mb-3" name="salary" placeholder="salary">
        <input required type="text" class="form-control mb-3" name="manager_id" placeholder="manager_id">
        <input required type="text" class="form-control mb-3" name="department_id" placeholder="department_id">
        <button type="submit" class="btn btn-success">Submit</button>
        <a href="/project"><button type="button" class="btn btn-danger">Cancel</button></a>
    </form>
    </div>
</body>
</html>