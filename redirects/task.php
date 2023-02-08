<?php include $_SERVER['DOCUMENT_ROOT'].'/functions.php'; 

if(isset($_POST['BTN_create']) > 0) { 
  
  $date = date_create();
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
  "dateCreate"=>date(Y/m/d),
  "dateComplete"=>NULL,
  "dateDeadline"=>$_POST['inputDuedate'],
  "title"=>$_POST['inputTitle'],
  "description"=>$_POST['description'],
  "reward"=>$_POST['inputreward'],
  "typeTask"=>$_POST['inputtype'], 
  "address"=>$_POST['inputAddress']  
); 

$jsonFormData = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/data/.json');
$pastFormData = json_decode($jsonFormData, TRUE);
array_push($pastFormData, $newFormData);
$jsonData = json_encode($pastFormData);

file_put_contents($_SERVER['DOCUMENT_ROOT'].'/data/tasks.json', $jsonData);
  
header('Location: /index.php'); 
  
}
?>