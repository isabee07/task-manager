<?php $_SERVER["DOCUMENT_ROOT"] . "/functions.php"; 
if(isset($_POST['BTN_create']) && $_POST['user'] > 0) { 

$largest_uid = 0; 
foreach($tasksData as $item) {
  if ($item['uid'] > $largest_uid) {
    $largest_uid = $item['uid']; 
    $newUID = $largest_uid+1;
  }
}

$newFormData = array(
  "uid"=>$newUID,
  "userUID"=>$_POST['user'],
  "dateCreate"=>date(Y/m/d),
  "dateComplete"=>NULL,
  "dateDeadline"=>$_POST['inputDuedate']
  "title"=>$_POST['inputtitle'],
  "description"=>$_POST['description'],
  "reward"=>$_POST['inputreward'],
  "typeTask"=>$_POST['inputtype'], 
  "address"=>$_POST['inputAddress']  
); 

  
array_push($pastFormData, $newFormData); 
$jsonData = json_encode($pastFormData, JSON_PRETTY_PRINT); 
file_put_contents($pastFormData, $jsonData); 

  echo '<pre>';
  var_dump($jsonData); 
  echo '</pre>';
  
header('Location: /index.php'); 
?>
