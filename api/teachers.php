<?php 
include 'conn.php';


if ($_SERVER['REQUEST_METHOD'] == 'GET' && !isset($_GET['id'])) {
    $stmt = $pdo->query("SELECT * FROM teachers");
    $teachers = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($teachers);
}

//<------------ لعرض الdata teachers(all))--------------------->

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $pdo->prepare("SELECT * FROM teachers WHERE id = ?");
    $stmt->execute([$id]);
    $teacher = $stmt->fetch(PDO::FETCH_ASSOC);
    echo json_encode($teacher ? $teacher : ["error" => "teacher not found"]);
}

//<---------------لعرض ال data (teachers)(id))--------------------->


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = json_decode(file_get_contents("php://input"), true);
    $stmt = $pdo->prepare("INSERT INTO `teachers`( `name`, `subject_id`, `contact_info`) VALUES (?,?,?)");
    if ($stmt->execute([$data['name'], $data['subject_id'], $data['contact_info']])){
        http_response_code(201);
        echo json_encode(["message" => "teacher created successfully"]);
    } else {
        http_response_code(400);
        echo json_encode(["message" => "teacher creation failed"]);
    }
}

//<------------------ لاضافة data (teachers)--------------->


?>