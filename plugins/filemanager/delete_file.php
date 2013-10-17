<?php

session_start();
if($_SESSION["verify"] != "FileManager4TinyMCE") die('forbiden');
include 'config.php';
include('utils.php');

$path=joinPaths($root,$upload_dir,$_POST['path']);
$path_thumbs=joinPaths($root,$thumbs_dir,$_POST['path']);

unlink($path);
unlink($path_thumbs);

?>
