<?php

use LDAP\Result;

include 'condb.php';

echo '<pre>';
print_r($_POST);
echo '</pre>';

    $student_id = $_POST['student_id'];
    $student_fname = $_POST['student_fname'];
    $student_lname = $_POST['student_lname'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];

    $sql = "INSERT INTO tbl_member
    (student_id, student_fname, student_lname, gender, age)
    VALUES
    ('$student_id', '$student_fname', '$student_lname', '$gender', '$age')
    ";

    $result = mysqli_query($condb, $sql) or die ("error : $sql ". mysqli_error($sql));

    mysqli_close($condb);

    echo $sql;

    echo "<hr>";

    if($result){
        echo "success";
    }else{
        echo "error";
    }


?>
