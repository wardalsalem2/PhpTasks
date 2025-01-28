
<?php include('conn.php') ; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        .box1 h2{
            float: left;
            color: orangered;
        }
        .box1 a{
            float: right ;
        }
        .container{
            margin-top: 50px ;
        }
        .container th{
            color: orangered;
        }
        .tr td{
            color: orangered;
        }
        #btnadd{
            color: white;
            background-color: chocolate;
            border: 0;
            width: 200px;
            font-size: 1rem;
        }
    </style>
</head> 
<body>
    <div class="container">
    <div class="box1">
        <h2>Imployees </h2>
        <a class="btn btn-primary" id="btnadd" href="add.php"> + Add User </a>
    </div>
    <table class="table table-hover table-bordered table-striped"> 
        <thead>
                <tr> 
                    <th> ID </th>
                    <th> Name </th>
                    <th> Address </th>
                    <th> Salary </th>
                    <th> Update </th>
                    <th> Delete</th>
                    <th> View </th>
                </tr> 
        </thead>
        <tbody>
        
        <?php 
        
        $query = "SELECT * FROM `employees`";

        $result = mysqli_query($conn, $query);

        if(!$result){
            die("Query failed: " . mysqli_error($conn)); 
        }
        else{
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr class="tr"> 
                    <td> <?php echo $row['id'];?> </td>
                    <td> <?php echo $row['Name'];?></td>
                    <td> <?php echo $row['Address'];?></td>
                    <td> <?php echo $row['Salary'];?></td>
                    <td> <a href="update.php?id=<?php echo $row['id'];?>" class="btn btn-success">Update</a></td>
                    <td><a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirmDelete()">Delete</a>
                    </td>
                    <td> <a href="view.php?id=<?php echo $row['id'];?>" class="btn btn-info">view</a></td>
                </tr>
                <?php
        }
    }
?>
    <script>
    function confirmDelete() {
        var result = confirm("Are you sure you want to delete this record?");
                return result;
    }
    </script>       
    </tbody>
    </table>
</div>
</body>
</html>