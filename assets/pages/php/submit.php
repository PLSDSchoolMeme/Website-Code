<?php
    date_default_timezone_set("America/New_York");
    $data_file = fopen("signatures.txt", "a") or die();

    $name = $_POST["StudentName"];
    $lastName = $_POST["StudentLastName"];
    $time = date('Y/m/d/h:i:sa');

    fwrite($data_file, $name . " " . $lastName . " Signed on " . $time, FILE_APPEND);
    fclose($data_file);

    header('Location: '.'/assets/pages/php/signatures.txt');
?>

