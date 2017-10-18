<?php

$config = require 'Database/Config.php';
require 'Database/Connection.php';
require 'Services/RobotService.php';

$pdo = Connection::getConnection($config['database']);
$robotService = new RobotService($pdo);


$robotService->checkNotEmpty();