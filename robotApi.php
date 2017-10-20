<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

require 'Services/RobotService.php';

$robotService = new RobotService();


if($_SERVER['REQUEST_METHOD'] == "GET") {

    if (isset($_GET['id'])) {
        $id = intval($_GET["id"]);
        $result = $robotService->getRobotById($id);
        echo json_encode($result);
    } else {
        $result = $robotService->GetRobots();
        echo json_encode($result);    
    }
}

