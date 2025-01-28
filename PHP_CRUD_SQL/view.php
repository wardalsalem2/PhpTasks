<?php
include('conn.php'); 

if (isset($_GET['id'])) {
    $id = $_GET['id']; 

    if (!empty($id)) {
        $query = "SELECT * FROM `employees` WHERE id = '$id'";

        $result = mysqli_query($conn, $query);

        if ($result){
            $row = mysqli_fetch_assoc($result); ?>
    <div class="container  w-100 ml-4" style="text-align: center; padding-top : 140px ; font-size : 2rem">
    <div class="text-center">
        <h1 class="fs-2" style="color: chocolate;">View Page</h1>
    </div>

    <div class="text-center " >
        <p><strong>Name:</strong> <?php echo $row['Name']; ?></p>
        <p><strong>Address:</strong> <?php echo $row['Address']; ?></p>
        <p><strong>Salary:</strong> <?php echo $row['Salary']; ?></p>
    </div>
</div>
</div>
        <?php
        } else {
            echo "No record found for the given ID.";
        }
    } else {
        echo "Invalid ID!";
    }
} else {
    echo "No ID provided.";
}
?>
