<?php 
include 'conn.php';


if ($_SERVER['REQUEST_METHOD'] == 'GET' && !isset($_GET['id'])) {
    $stmt = $pdo->query("SELECT * FROM subjects");
    $subjects = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($subjects);
}

//<---------------- لعرض  data (subjects(all))
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = $pdo->prepare("SELECT * FROM subjects WHERE id = ?");
    $stmt->execute([$id]);
    $subjects = $stmt->fetch(PDO::FETCH_ASSOC);
    echo json_encode($subjects ? $subjects : ["error" => "subject not found"]);
}

//<---------------لعرض ال data (subjects(id))--------------------->


if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $data = json_decode(file_get_contents("php://input"), true);
    $stmt = $pdo->prepare("INSERT INTO `subjects`(`name`, `description`) VALUES (?,?)");

    if ($stmt->execute([$data['name'], $data['description']])){
        http_response_code(201);
        echo json_encode(["message" => "subject created successfully"]);
    } else {
        http_response_code(400);
        echo json_encode(["message" => "subject creation failed"]);
    }
}

//<------------------ لاضافة data (subjects)--------------->



?>