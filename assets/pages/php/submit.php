<?php
    date_default_timezone_set("America/New_York");
    $data_file = fopen("signatures.txt", "a") or die();

    $name = $_POST["StudentName"];
    $lastName = $_POST["StudentLastName"];
    $time = date('Y/m/d/h:i:sa').PHP_EOL;

    fwrite($data_file, $name . " " . $lastName . " Signed on " . $time);
    fclose($data_file);

    header('Location: '.'signatures.txt');
?>

