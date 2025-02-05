<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT");
header("Access-Control-Allow-Headers: Content-Type");

$host = 'localhost';
$dbname = 'smanagment';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die(json_encode(['error' => 'Database connection failed']));
}

$requestUri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

// Task 4 APIs
// 1. Get Student's Subjects
if (preg_match('/\/api\/students\/(\d+)\/subjects$/', $requestUri, $matches) && $method == 'GET') {
    $studentId = $matches[1];
    
    $stmt = $pdo->prepare("SELECT s.* FROM subjects s
        INNER JOIN student_subjects ss ON s.subject_id = ss.subject_id
        WHERE ss.student_id = ?");
    $stmt->execute([$studentId]);
    $subjects = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    echo json_encode($subjects);
    exit();
}

// 2. Get Subject's Students
elseif (preg_match('/\/api\/subjects\/(\d+)\/students$/', $requestUri, $matches) && $method == 'GET') {
    $subjectId = $matches[1];
    
    $stmt = $pdo->prepare("SELECT s.* FROM students s
        INNER JOIN student_subjects ss ON s.student_id = ss.student_id WHERE ss.subject_id = ?");
    $stmt->execute([$subjectId]);
    $students = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    echo json_encode($students);
    exit();
}

// 3. Register Student in Subjects (POST)
elseif ($requestUri == '/api/students/subjects/register' && $method == 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    
    if (!isset($data['studentId']) || !isset($data['subjectIds'])) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing required fields']);
        exit();
    }
    
    $pdo->beginTransaction();
    try {
        foreach ($data['subjectIds'] as $subjectId) {
            $stmt = $pdo->prepare("INSERT INTO student_subjects (student_id, subject_id) VALUES (?, ?)");
            $stmt->execute([$data['studentId'], $subjectId]);
        }
        $pdo->commit();
        echo json_encode(['message' => 'Registration successful']);
    } catch (Exception $e) {
        $pdo->rollBack();
        http_response_code(500);
        echo json_encode(['error' => 'Registration failed']);
    }
    exit();
}

// 4. Get Student's Exams
elseif (preg_match('/\/api\/students\/(\d+)\/exams$/', $requestUri, $matches) && $method == 'GET') {
    $studentId = $matches[1];
    
    $stmt = $pdo->prepare("SELECT e.* FROM exams e
            INNER JOIN subjects s ON e.subject_id = s.subject_id
            INNER JOIN student_subjects ss ON s.subject_id = ss.subject_id
            WHERE ss.student_id = ?");
    $stmt->execute([$studentId]);
    $exams = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    echo json_encode($exams);
    exit();
}

// 5. Get Subject's Exams
elseif (preg_match('/\/api\/subjects\/(\d+)\/exams$/', $requestUri, $matches) && $method == 'GET') {
    $subjectId = $matches[1];
    
    $stmt = $pdo->prepare("SELECT * FROM exams WHERE subject_id = ?");
    $stmt->execute([$subjectId]);
    $exams = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    echo json_encode($exams);
    exit();
}

// 6. Update Exam (PUT)
elseif (preg_match('/\/api\/exams\/(\d+)$/', $requestUri, $matches) && $method == 'PUT') {
    $examId = $matches[1];
    $data = json_decode(file_get_contents('php://input'), true);
    
    $allowedFields = ['subject_id', 'date', 'max_score'];
    $updateParts = [];
    $params = [];
    
    foreach ($allowedFields as $field) {
        if (isset($data[$field])) {
            $updateParts[] = "$field = ?";
            $params[] = $data[$field];
        }
    }
    
    if (empty($updateParts)) {
        http_response_code(400);
        echo json_encode(['error' => 'No valid fields provided']);
        exit();
    }
    
    $params[] = $examId;
    $sql = "UPDATE exams SET " . implode(', ', $updateParts) . " WHERE exam_id = ?";
    
    $stmt = $pdo->prepare($sql);
    if ($stmt->execute($params)) {
        $stmt = $pdo->prepare("SELECT * FROM exams WHERE exam_id = ?");
        $stmt->execute([$examId]);
        $exam = $stmt->fetch(PDO::FETCH_ASSOC);
        echo json_encode($exam);
    } else {
        http_response_code(500);
        echo json_encode(['error' => 'Update failed']);
    }
    exit();
}

// Handle unknown endpoints
http_response_code(404);
echo json_encode(['error' => 'Endpoint not found']);