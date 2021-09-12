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
    
    <div class="container-fluid p-2">
        <div style="border:1px solid grey;border-radius:3px;padding:10px" class="mb-5">
            <div class="row mb-3">
                <div class="col-sm-7 pl-3" style="color:red">
                    <h5>LIST OF ALL EMPLOYEES</h5>
                </div>                    
                <div class="col-sm-3">
                    <input class="form-control" id="myInput" type="text" placeholder="Search..">
                </div>
                <div class="col-sm-2">
                    <a href="/project/employee_insert.php"><button type="button"
                            class="btn btn-success">Create</button></a>
                            &nbsp;
                    <button type="button" id="updateButton" class="btn btn-warning">Update</button>
                </div>
            </div>
            <table class="table table-border table-hover table-dark">
                <thead>
                    <tr>
                        <th scope="col">employee_id</th>
                        <th scope="col">first_name</th>
                        <th scope="col">last_name</th>
                        <th scope="col">email</th>
                        <th scope="col">phone_number</th>
                        <th scope="col">hire_date</th>
                        <th scope="col">job_id</th>
                        <th scope="col">salary</th>
                        <th scope="col">manager_id</th>
                        <th scope="col">department_id</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    <?php
                $sql = "SELECT * FROM employees";
                if($result = mysqli_query($link, $sql)){
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_array($result)){
                ?>
                    <tr>
                        <th scope="row"><?php echo $row['employee_id'] ?></th>
                        <td><?php echo $row['first_name'] ?></td>
                        <td><?php echo $row['last_name'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['phone_number'] ?></td>
                        <td><?php echo $row['hire_date'] ?></td>
                        <td><?php echo $row['job_id'] ?></td>
                        <td><?php echo $row['salary'] ?></td>
                        <td><?php echo $row['manager_id'] ?></td>
                        <td><?php echo $row['department_id'] ?></td>
                        <td style="color:red">
                        <i style="cursor:pointer"
                        id=<?php echo $row['employee_id'] ?>
                       class="fas fa-user-slash pdelete"></i></td>
                    </tr>
                    <?php
                        }
                    }
                }
                ?>
                </tbody>
            </table>
        </div>

        <div style="border:1px solid grey;border-radius:3px;padding:10px" class="mb-5">
            <div class="row mb-3">
                <div class="col-sm-9 pl-3" style="color:red">
                    <h5>DEPARTMENTS WISE HIGHEST SALARIES</h5>
                </div>                
                <div class="col-sm-3">
                    <input class="form-control" id="myInput1" type="text" placeholder="Search..">
                </div>
            </div>
            <table class="table table-border table-hover table-dark">
                <thead>
                    <tr>

                        <th scope="col">employee_id</th>
                        <th scope="col">first_name</th>
                        <th scope="col">department_id</th>
                        <th scope="col">department_name</th>
                        <th scope="col">Max(salary)</th>
                    </tr>
                </thead>
                <tbody id="myTable1">
                    <?php
                $sql = "SELECT e.employee_id,d.*,e.first_name,MAX(salary) as salary FROM employees e LEFT JOIN departments d on e.department_id = d.department_id group by d.department_id";
                if($result = mysqli_query($link, $sql)){
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_array($result)){
                ?>
                    <tr>
                        <th scope="row"><?php echo $row['employee_id'] ?></th>
                        <td><?php echo $row['first_name'] ?></td>
                        <th scope="row"><?php echo $row['department_id'] ?></th>
                        <th scope="row"><?php echo $row['department_name'] ?></th>
                        <td><?php echo $row['salary'] ?></td>
                    </tr>
                    <?php
                        }
                    }
                }
                ?>
                </tbody>
            </table>
        </div>


        <!-- <div style="border:1px solid grey;border-radius:3px;padding:10px" class="mb-5">
            <div class="row mb-3">
                <div class="col-sm-3">
                    <input class="form-control" id="myInput2" type="text" placeholder="Search..">
                </div>
            </div>
            <table class="table table-border table-hover table-dark">
                <thead>
                    <tr>

                        <th scope="col">job_id</th>
                        <th scope="col">job_title</th>
                        <th scope="col">min_salary</th>
                        <th scope="col">max_salary</th>
                    </tr>
                </thead>
                <tbody id="myTable2">
                    <?php
                $sql = "SELECT * FROM jobs";
                if($result = mysqli_query($link, $sql)){
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_array($result)){
                ?>
                    <tr>
                        <th scope="row"><?php echo $row['job_id'] ?></th>
                        <td><?php echo $row['job_title'] ?></td>
                        <td><?php echo $row['min_salary'] ?></td>
                        <td><?php echo $row['max_salary'] ?></td>

                    </tr>
                    <?php
                        }
                    }
                }
                ?>
                </tbody>
            </table>
        </div> -->

        <div style="border:1px solid grey;border-radius:3px;padding:10px" class="mb-5">
            <div class="row mb-3">
                <div class="col-sm-9 pl-3" style="color:red">
                    <h5>DEPARTMENTS RIGHT JOIN WITH EMPLOYEES</h5>
                </div>
                <div class="col-sm-3">
                    <input class="form-control" id="myInput2" type="text" placeholder="Search..">
                </div>
            </div>
        <table class="table table-border table-hover table-dark">
            <thead>
                <tr>

                    <th scope="col">employee_id</th>
                    <th scope="col">first_name</th>
                    <th scope="col">department_id</th>
                    <th scope="col">department_name</th>
                    <th scope="col">location</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT e.employee_id,e.first_name,d.* FROM departments d RIGHT JOIN employees e on d.department_id = e.department_id";
                if($result = mysqli_query($link, $sql)){
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_array($result)){
                ?>
                <tr>
                    <th scope="row"><?php echo $row['employee_id'] ?></th>
                    <td><?php echo $row['first_name'] ?></td>
                    <td><?php echo $row['department_id'] ?></td>
                    <td><?php echo $row['department_name'] ?></td>
                    <td><?php echo $row['location'] ?></td>
                </tr>
                <?php
                        }
                    }
                }
                ?>
            </tbody>
        </table>
            </div>
    </div>

    <button type="button" hidden=true id="updateClick" class="btn btn-primary" data-toggle="modal"
        data-target="#exampleModal">
        Launch demo modal
    </button>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Record</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <input id="oldValues" type="text" hidden=true />
                <form action="employeeUSQL.php" method="post">
                <div class="modal-body">

                        <select class="form-control mb-1" id="employeeSelect"
                        name="employee_id">
                            <option disabled=true selected>Select Employee ID</option>
                            <?php
        $query = "select employee_id from employees";
        if($result = mysqli_query($link, $sql)){
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
        ?>
                            <option><?php echo $row['employee_id']; ?></option>
                            <?php
                }}}
        ?>
                        </select>
                        <?php
                        $query = "select * from employees";
        if($result = mysqli_query($link, $query)){
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
        ?>
                        <div style="display:none" id=<?php echo "d".$row['employee_id']; ?>> 
                        <input required type="text" 
                        value = <?php echo $row['first_name'] ?>
                         class="form-control mb-2" name=<?php echo $row['employee_id']."first_name"; ?>
                            placeholder="first_name">                    
                        <input required type="text"
                        value = <?php echo $row['last_name'] ?>
                        class="form-control mb-2" name=<?php echo $row['employee_id']."last_name"; ?> placeholder="last_name">
                        <input required type="text"
                        value = <?php echo $row['email'] ?>
                        class="form-control mb-2" name=<?php echo $row['employee_id']."email"; ?> placeholder="email">
                        <input required type="text" 
                        value = <?php echo $row['phone_number'] ?>
                        class="form-control mb-2" name=<?php echo $row['employee_id']."phone_number"; ?>
                            placeholder="phone_number">
                        <input required type="text" 
                        value = <?php echo $row['hire_date'] ?>
                        class="form-control mb-2" name=<?php echo $row['employee_id']."hire_date"; ?> placeholder="hire_date">
                        <input required type="text"
                        value = <?php echo $row['job_id'] ?>
                        class="form-control mb-2" name=<?php echo $row['employee_id']."job_id"; ?> placeholder="job_id">
                        <input required type="text"
                        value = <?php echo $row['salary'] ?>
                        class="form-control mb-2" name=<?php echo $row['employee_id']."salary"; ?> placeholder="salary">
                        <input required type="text"
                        value = <?php echo $row['manager_id'] ?>
                        class="form-control mb-2" name=<?php echo $row['employee_id']."manager_id"; ?>
                            placeholder="manager_id">
                        <input required type="text" 
                        value = <?php echo $row['department_id'] ?>
                        class="form-control mb-2" name=<?php echo $row['employee_id']."department_id"; ?>
                            placeholder="department_id">
                        </div>
                            <?php
                                }}}
                            ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
