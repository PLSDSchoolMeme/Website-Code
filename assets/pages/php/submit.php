<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  extract($_REQUEST);
  date_default_timezone_set("America/New_York");
  
  $time = date('Y/m/d/h:i:sa'); 
  $file = fopen("signatures.txt","a");
    
  fwrite($file, $StudentName);
  fwrite($file, " signed on ");
  fwrite($file, $time . "\r");
  fclose($file);
  header("Location: signatures.txt")
?>
