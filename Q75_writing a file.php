<?php

    $filename = "welcome.txt";
    $myfile = fopen($filename, "w") or die("Unable to open file!");
    $txt = "2220100307\n";
    fwrite($myfile, $txt);
    $txt = "Shyam Solanki\n";
    fwrite($myfile, $txt);
    fclose($myfile);
    
    if(file_exists($filename))
    {
       $filesize = filesize($filename);
       $msg = "File  created with name $filename<br>";
       $msg .= "containing $filesize bytes<br>";
       echo $msg;
    }
    else
    {
       echo "File $filename does not exit";
    }
    echo"<br> This code is executed by Shyam Solanki!";
?>