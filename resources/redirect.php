<?php // jason data from file
$jsonFormData = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/data.json');

// truns json into php array
$pastFormData = json_decode($jsonFormData,TRUE); 
array_push($pastFormData, $newFormData);
$jsonData = json_encode($pastFormData);


file_get_contents($_SERVER['DOCUMENT_ROOT'].'/data.json');
header('Location: /contactMe.php'); 
?>