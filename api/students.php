<?php 
include 'conn.php';


if ($_SERVER['REQUEST_METHOD'] == 'GET' && !isset($_GET['id'])) {
    $stmt = $pdo->query("SELECT * FROM students");
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($users);
}

//<------------ لعرض الdata student(all))--------------------->


if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $pdo->prepare("SELECT * FROM students WHERE id = ?");
    $stmt->execute([$id]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    echo json_encode($user ? $user : ["error" => "User not found"]);
}

//<---------------لعرض ال data (Students(id))--------------------->


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = json_decode(file_get_contents("php://input"), true);
    $stmt = $pdo->prepare("INSERT INTO `students`(`name`, `class`, `date_of_birth`, `address`, `contact_info`) VALUES (?,?,?,?,?)");
    if ($stmt->execute([$data['name'], $data['class'], $data['date_of_birth'], $data['address'], $data['contact_info'] ])) {
        http_response_code(201);
        echo json_encode(["message" => "User created successfully"]);
    } else {
        http_response_code(400);
        echo json_encode(["message" => "User creation failed"]);
    }
}

//<------------------ لاضافة data (Students)--------------->

if ($_SERVER['REQUEST_METHOD'] == 'PUT' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $data = json_decode(file_get_contents("php://input"), true);
    $stmt = $pdo->prepare("UPDATE `students` SET`name`= ?,`class`=?,`date_of_birth`=?,`address`=?,`contact_info`=? WHERE id =? ");
    if ($stmt->execute([$data['name'], $data['class'], $data['date_of_birth'], $data['address'], $data['contact_info'], $id  ])) {
        http_response_code(201);
        echo json_encode(["message" => "User updated successfully"]);
    } else {
        http_response_code(400);
        echo json_encode(["message" => "User updated failed"]);
    }
}

// <--------------------- لتحديث data (Students)-------------------> 

if($_SERVER['REQUEST_METHOD']=='DELETE'  && isset($_GET['id'])){
    $id = $_GET['id'];
    $stmt = $pdo->prepare("DELETE FROM students WHERE id = ?");
    $stmt->execute([$id]);
echo json_encode($id ? ["message" => "User deleted successfully"] : ["error" => "ID not found"]);}

// <----------------- حذف data (Students)------------------>

?>