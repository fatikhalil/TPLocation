<?php 

class Position {
    private $id;
    private $latitude;
    private $longitude;
    private $date;
    private $device_id;

    function __construct($id, $latitude, $longitude, $date, $device_id) {
        $this->id = $id;
        $this->latitude = $latitude;
        $this->longitude = $longitude;
        $this->date = $date;
        $this->device_id = $device_id;
    }

    // Getters
    function getId() { return $this->id; }
    function getLatitude() { return $this->latitude; }
    function getLongitude() { return $this->longitude; }
    function getDate() { return $this->date; }
    function getDevice() { return $this->device_id; }

    // Setters
    function setId($id) { $this->id = $id; }
    function setLatitude($latitude) { $this->latitude = $latitude; }
    function setLongitude($longitude) { $this->longitude = $longitude; }
    function setDate($date) { $this->date = $date; }
    function setDevice($device_id) { $this->device_id = $device_id; }
}
?>
