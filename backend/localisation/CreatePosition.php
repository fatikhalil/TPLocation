<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once './classe/Position.php';


if($_SERVER["REQUEST_METHOD"] == "POST"){
    include_once 'service/PositionService.php';
    create();
}

function create (){
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];
    $date = $_POST['date'];
    $device_id = $_POST['device_id'];
    $ss = new PositionService();

    $ss->create(new Position(1, $latitude, $longitude, $date, $device_id));
}
?>
