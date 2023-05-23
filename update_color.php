<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $color = $_POST['color'];

    // Save the selected color in session
    $_SESSION['color'] = $color;
}
?>
