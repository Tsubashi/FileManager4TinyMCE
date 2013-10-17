<?php

session_start();
if($_SESSION["verify"] != "FileManager4TinyMCE") die('forbidden');
include 'config.php';
include 'utils.php';

$path=joinPaths($root,$upload_dir,$_POST['path']);
$name=$_POST['name'];

header('Pragma: private');
header('Cache-control: private, must-revalidate');
header("Content-Type: application/octet-stream");
header("Content-Length: " .(string)(filesize($path)) );
header('Content-Disposition: attachment; filename="'.($name).'"');
readfile($path);
exit;
?>