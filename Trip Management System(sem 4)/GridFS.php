<?php

$bucket=new mongoDB\Client->test->selectGridFSBucket();

$stream=$bucket->openUploadStream('find_home.php');

$contents=file_get_contents('find_home.php');

fwrite($stream,$contents);

fclose($stream);

?>