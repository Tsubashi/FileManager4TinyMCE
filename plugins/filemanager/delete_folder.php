<?php

session_start();
if($_SESSION["verify"] != "FileManager4TinyMCE") die('forbiden');
include 'config.php';
include('utils.php');

$path=joinPaths($root,$upload_dir,$_POST['path']);
$path_thumbs=joinPaths($root,$thumbs_dir,$_POST['path']);

if (!(deleteDir($path)
    && deleteDir($path_thumbs))
    ) {
  echo "Error Deleting Folder: ".$_POST['path'];
}

?>
