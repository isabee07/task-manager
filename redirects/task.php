<?php include($_SERVER['DOCUMENT_ROOT'].'/functions.php'); 

if(isset($_POST['BTN_create']) > 0) { 
  
  $date = date_create(); 
  
$largest_uid = 0; 
foreach($tasksData as $item) {
  if ($item['uid'] > $largest_uid) {
    $largest_uid = $item['uid']; 
    $newUID = $largest_uid+1;
  }
}

$_SESSION["form"]["inputUser"] = $_POST['inputUser'];
 $_SESSION["form"]["inputDuedate"] = $_POST['inputDuedate'];
 $_SESSION["form"]["inputTitle"] = $_POST['inputTitle'];
 $_SESSION["form"]["description"] = $_POST['description'];
 $_SESSION["form"]["inputreward"] = $_POST['inputreward'];
 $_SESSION["form"]["inputtype"] = $_POST['inputtype'];  
  $_SESSION["form"]["inputAddress"]= $_POST['inputAddress']; 


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

array_push($tasksData, $newFormData); 
file_put_contents($tasksData, $jsonData); 
$jsonData = json_encode($newFormData, JSON_PRETTY_PRINT); 

header('Location: /index.php');
}
?>