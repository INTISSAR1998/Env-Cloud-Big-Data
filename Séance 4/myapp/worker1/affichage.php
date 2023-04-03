<?php
$file1='/var/www/html/worker1.txt';
$file2='/var/www/html/worker2.txt';
$Data1="";
$Data2="";

if(file_exists($file1)){
  $fh = fopen($file1,'r');
  while ($line = fgets($fh)){
    $worker1 = $line;
  }
  fclose($fh);
}

if(file_exists($file2)){
  $fh = fopen($file2,'r');
  while ($line = fgets($fh)){
    $worker2 = $line;
  }
  fclose($fh);
}

$File = "/var/www/html/index.html";
$Handle = fopen($File, 'w');
$Data1 = "worker1 vaut".$worker1."\n";
fwrite($Handle, $Data1);
$Data2 = "worker2 vaut".$worker2."\n";
fwrite($Handle, $Data2);
fclose($Handle);
