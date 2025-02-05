<?php 
include 'conn.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET' && !isset($_GET['id'])) {
    $stmt = $pdo->query("SELECT * FROM exams");
    $exams = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($exams);
}

//<---------------- لعرض  data (exams(all))

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = $pdo->prepare("SELECT * FROM exams WHERE id = ?");
    $stmt->execute([$id]);
    $exams = $stmt->fetch(PDO::FETCH_ASSOC);
    echo json_encode($exams ? $exams : ["error" => "exam not found"]);
}

//<---------------لعرض ال data (exams(id))--------------------->


if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $data = json_decode(file_get_contents("php://input"), true);
    $stmt = $pdo->prepare("INSERT INTO `exams`(`subject_id`, `exam_date`, `max_score`) VALUES (?,?,?)");

    if ($stmt->execute([$data['subject_id'], $data['exam_date'],$data['max_score'] ])){
        http_response_code(201);
        echo json_encode(["message" => "exam created successfully"]);
    } else {
        http_response_code(400);
        echo json_encode(["message" => "exam creation failed"]);
    }
}

//<------------------ لاضافة data (exams)--------------->

?>