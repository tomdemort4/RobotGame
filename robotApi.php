<?php
header("Access-Control-Allow-Headers: Access-Control-Allow-Origin,Content-type");
header("Access-Control-Allow-Origin:*");
header("Content-Type:application/json");

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

if($_SERVER['REQUEST_METHOD'] == "POST"){
	$postdata = file_get_contents("php://input");
	$request = json_decode($postdata);

	$params = [
		'Name' => $request->name,
		'Life' => $request->life,
		'Attack' => $request->attack,
		'Defense' => $request->defense,
		'BattleColor' => $request->color,
		'Image' => $request->image
	];

	$robotService->createRobot('robots',$params);
}



