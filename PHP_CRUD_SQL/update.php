<?php include('conn.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Update Employee</title>
</head>
<body>

<?php
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $query = "SELECT * FROM `employees` WHERE `id` = $id";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    } else {
        $row = mysqli_fetch_assoc($result);
    }
}

if (isset($_POST['update_user'])) {
    if (isset($_GET['id_new'])) {
        $id_new = intval($_GET['id_new']);
    }
    $name =$_POST['name'];
    $Address =  $_POST['Address'];
    $Salary = $_POST['Salary'];

    $query = "UPDATE `employees` SET `Name`='$name', `Address`='$Address', `Salary`='$Salary' WHERE `id` = $id_new";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    } else {
        header('Location: index.php?update_msg=you have successfully updated the data');
        exit();
    }
}
?>
<div class="container mt-5 w-100 ml-4" >
<div class="text-center"> <h1>update page</h1></div>
<form action="update.php?id_new=<?php echo $id; ?>" method="post" class="w-100">
    <div class="form-group col-sm-12">
        <label for="name">NAME</label>
        <input type="text" class="form-control" name="name" value="<?php echo isset($row['Name']) ? $row['Name'] : ''; ?>" required>
    </div>
    <br>
    <div class="form-group col-sm-12">
        <label for="Address">Address</label>
        <input type="text" class="form-control" name="Address" value="<?php echo isset($row['Address']) ? $row['Address'] : ''; ?>" required>
    </div>
    <br>
    <div class="form-group col-sm-12">
        <label for="Salary">Salary</label>
        <input type="text" class="form-control" name="Salary" value="<?php echo isset($row['Salary']) ? $row['Salary'] : ''; ?>" required>
    </div>
    <br><div class="text-center">
    <input type="submit" class="btn btn-success center" name="update_user" value="Update"></div>
</form>
</div>
</body>
</html>
