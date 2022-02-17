<?php
$dir = __DIR__;
$dir_path = str_replace('\\','/',$dir);
$dir_root = $_SERVER['DOCUMENT_ROOT'];
$domain_host = $_SERVER['HTTP_HOST'];
$file_path = str_replace($dir_root,$domain_host,$dir_path);

$full_path = 'http://'.$file_path;
	
?>

