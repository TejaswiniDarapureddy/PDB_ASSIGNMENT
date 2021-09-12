<?php
require_once 'setup.php';
//echo $_POST['person_id'];
$sql1 = "DELETE FROM employees WHERE employee_id = $_POST[employee_id]";
$stmt1 = mysqli_prepare($link, $sql1);
if($stmt1){
    if(mysqli_stmt_execute($stmt1)){
        echo "deleted";
    } else{
        echo "err2";
    }
}else{
 echo "err1";
}
?>