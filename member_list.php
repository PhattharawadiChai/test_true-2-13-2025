<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member list</title>
</head>

<body>
    <?php
    include 'condb.php';
    $query = "SELECT * FROM tbl_member";
    $result = mysqli_query($condb, $query) or die("error : $query" . mysqli_error($query));
    ?>
    <h1>student</h1>
    <table>
        <thead>
            <tr>
                <th>student_id</th>
                <th>student_fname</th>
                <th>student_lname</th>
                <th>gender</th>
                <th>age</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($result as $row) { ?>
                <tr>
                    <td><?php echo $row['student_id']; ?></td>
                    <td><?php echo $row['student_fname']; ?></td>
                    <td><?php echo $row['student_lname']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                    <td><?php echo $row['age']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php mysqli_close($condb); ?>
</body>

</html>
