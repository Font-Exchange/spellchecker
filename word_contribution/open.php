<?php
if ($file = fopen("data.txt", "r")) {
    while(!feof($file)) {
        $textperline = fgets($file);
         echo $textperline;
     }
    fclose($file);
 }
?>
