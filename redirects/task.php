<?php $_SERVER["DOCUMENT_ROOT"] . "/functions.php"; 


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
  "dateDeadline"
  "title"=>$_POST['title'],
  "description"=>$_POST['description'],
  "reward"=>$_POST['reward'],
  "typeTask"
  
); 

array_push(); 
$jsonData = json_encode(); 
file_put_contents(); 


?>
