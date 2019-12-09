<?php

$action = $_REQUEST['action'];

include_once ("../controllers/TeamController.php");
$teamController = new TeamController("Team");
$teamController->setRequest($_REQUEST);

echo json_encode($teamController->$action());


?>