<?php
        date_default_timezone_set("America/New_York");
        extract($_REQUEST);
        $time = date('Y/m/d/h:i:sa').PHP_EOL;
    
    
        $file = fopen("signatures.txt","a");
    
        fwrite($file, $StudentName);
        fwrite($file, " signed on ");
        fwrite($file, $time . "\r");
        fclose($file);
        header('Location: '.'signatures.txt');
?>

