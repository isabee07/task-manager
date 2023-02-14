<?php include($_SERVER['DOCUMENT_ROOT'].'/functions.php'); 

if(isset($_POST['BTN_create']) > 0) { 


$newFormData = array(
  "uid"=>null,
  "user"=>$_POST['inputUser'],
  "dateCreate"=>null,
  "dateStart"=> $_POST['inputStartdate'],
  "title"=>$_POST['inputTitle'],
  "description"=>$_POST['description'],
  "typeTask"=>$_POST['inputtype']
); 
  
$jsonTasks = file_get_contents($taskDataFile);
$tasksData = json_decode($jsonTasks, TRUE);
array_push($newFormData, $tasksData);
$jsonData = json_encode($newFormData);
file_put_contents($_SERVER['DOCUMENT_ROOT'].'/data/tasks.json', $jsonData);

header("Location: /index.php");
}
?>