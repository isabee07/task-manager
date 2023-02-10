<?php include($_SERVER['DOCUMENT_ROOT'].'/functions.php'); 

if(isset($_POST['BTN_create']) > 0) { 
  
$date=date_create();
$dateRedone = date_format($date,"Y/m/d");

$largest_uid = 0; 
foreach($tasksData as $item) {
  if ($item['uid'] > $largest_uid) {
    $largest_uid = $item['uid']; 
    $newUID = $largest_uid+1;
  }
}


$newFormData = array(
  "uid"=>$newUID,
  "user"=>$_POST['inputUser'],
  "dateCreate"=>$dateRedone,
  "dateStart"=> $_POST['inputStartdate'],
  "title"=>$_POST['inputTitle'],
  "description"=>$_POST['description'],
  "typeTask"=>$_POST['inputtype']
); 

  echo "<pre>";
var_dump($newFormData);
echo "</pre>";


array_push($tasksData, $newFormData); 
file_put_contents($); 
$jsonData = json_encode($newFormData, JSON_PRETTY_PRINT); 

header('Location: /index.php');
}
?>