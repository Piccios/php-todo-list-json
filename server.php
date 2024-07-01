
<?php
header("content-type: application/json");


$method = $_SERVER['REQUEST_METHOD'];
$todoFile = './todo.json';

if ($method == 'GET'){
    $rawData = file_get_contents($todoFile);
    $data = json_decode($rawData, true);
    if (is_null($data)) {
    $data = [];
    }
    echo json_encode($data);
}elseif ($method == 'POST') {
    $rawData = file_get_contents($todoFile);
    $data = json_decode($rawData, true);
    if (is_null($data)){
        $data = [];
    }

    $newTask = json_decode(file_get_contents('php://input'), true);
    $newTask['id'] = uniqid();
    $data[] = $newTask;

    file_put_contents($todoFile, json_encode($data));

    echo json_encode($data);
}
?>