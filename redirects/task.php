<?php $_SERVER["DOCUMENT_ROOT"] . "/functions.php"; 
if(isset($_POST['BTN_create']) && $_POST['user'] > 0) { 

$date = date_create($_POST['dateDeadline']);
$reformatDeadline = date_format($date, "Y/m/d"); 


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
  "typeTask"=>
  
); 

array_push($pastFormData, $newFormData); 
$jsonData = json_encode($pastFormData); 
file_put_contents($_SERVER['DOCUMENT_ROOT'].'/data/users.json'); 

header('Location: /index.php'); 
?>
