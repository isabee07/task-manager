<?php session_start();
$jsonFormData = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/data/users.json');

echo "<pre>";
var_dump($jsonFormData);
echo "</pre>";

?>