<?php $_SERVER["DOCUMENT_ROOT"] . "/functions.php"; 

$jsonFormData = file_get_contents($_SERVER[DOCUMENT_ROOT] . '/data/tasks.json'); 
$pastFormData = $json_decode($jsonFormData, TRUE); 

?>