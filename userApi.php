<?php

$config = require 'Database/Config.php';
require 'Database/Connection.php';
require 'Services/UserService.php';

$pdo = Connection::getConnection($config['database']);
$userService = new UserService($pdo);


$userService->getUsersRepo();
