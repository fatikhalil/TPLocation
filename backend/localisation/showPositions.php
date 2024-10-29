<?php
// Inclure le fichier de service
include_once 'service/PositionService.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    showPositions();
}

function showPositions() {
    $positionService = new PositionService();
    header('Content-Type: application/json'); // Définir le type de contenu en JSON
    echo json_encode(array("positions" => $positionService->getAll()));
}
?>
