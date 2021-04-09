<?php
    if (file_exists("signatures.txt")){
        $file = "signatures.txt";
    } else {
        $myfile = fopen("signatures.txt", "a");
        header("Refresh:0");
    }

    date_default_timezone_set("America/New_York");


    $name = $_POST["StudentName"];
    $time = date('Y/m/d/h:i:sa');

    file_put_contents($file, $name, " signed on ", $time);
    fclose($data_file);

    header('Location: '.'/assets/pages/php/signatures.txt');
?>

