<?php
session_start();

$response = array(
    'updateAvailable' => false,
    'color' => null
);

if (isset($_SESSION['color'])) {
    $response['updateAvailable'] = true;
    $response['color'] = $_SESSION['color'];

    // Clear the color once the update is sent
    unset($_SESSION['color']);
}

header('Content-Type: application/json');
echo json_encode($response);
?>
