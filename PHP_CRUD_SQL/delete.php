<?php
include('conn.php'); 

if (isset($_GET['id'])) {
    $id = $_GET['id']; 

    if (!empty($id)) {
        $query = "DELETE FROM `employees` WHERE id = '$id'";

        $result = mysqli_query($conn, $query);

        if ($result) {
            header('Location: index.php?delete_msg=Record successfully deleted');
            exit();
        } else {
            die("Query Failed: " . mysqli_error($conn)); 
        }
    }
} else {
    echo "Invalid ID!";
}
?>
