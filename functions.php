<?php session_start();
  // jason data from file
$jsonFormData = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/data/users.json');

echo "<pre>";
var_dump($jsonFormData);
echo "</pre>";

// truns json into php array
// $pastFormData = json_decode($jsonFormData,TRUE); 
// array_push($pastFormData, $newFormData);
// $jsonData = json_encode($pastFormData);


// file_get_contents($_SERVER['DOCUMENT_ROOT'].'/data.json');
// header('Location: /contactMe.php'); 

?>