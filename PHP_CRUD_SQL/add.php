<?php include('conn.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>add</title>
    <style>
        #btn{
            margin-top: 20px;
            justify-items: auto;
        }
        .form-row{
            justify-items: center;
        }
    </style>
</head>
<body>
<div class="container mt-5 w-100 ml-4" >
<div class="text-center"> <h1>create page</h1></div>
<form  method="post">
    <div class="form-row">
    <div class="form-group col-sm-12">
        <label for="name">NAME</label>
        <input type="text" class="form-control" name="name">
    </div>
    
    <div class="form-group col-sm-12">
        <label for="Address">Address</label>
        <input type="text" class="form-control" name="Address" >
    </div>

    
    <div class="form-group col-sm-12">
        <label for="Salary">Salary</label>
        <input type="text" class="form-control" name="Salary">
    </div>
    </div>
    <div class="text-center"> 
    <button type="submit" class="btn btn-success"  id="btn" name="Add_user" >ADD</button>
    </div>
    <?php

    if (isset($_POST['Add_user'])) {
    $name = $_POST['name'];
    $Address = $_POST['Address'];
    $Salary = $_POST['Salary'];

    if ($name == "" || empty($name)) {
        header('Location: add.php?message=Please provide a valid name');
        exit();
    } else {
        include 'conn.php';
        $query = "INSERT INTO `employees` (`Name`, `Address`, `Salary`) VALUES ('$name', '$Address', '$Salary')";
        $result = mysqli_query($conn, $query);

        if (!$result) {
            die("Query Failed: " . mysqli_error($conn));
        } else {
            header('Location: index.php?insert_msg=Record successfully added');
            exit();
        }
    }
}
?>

</form>
</div>
</body>
</html>