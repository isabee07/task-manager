<?php include($_SERVER['DOCUMENT_ROOT'].'/functions.php'); 

if(isset($_POST['BTN_create']) > 0) { 

$largest_uid = 0;
$largest_user = 0; 
foreach ($tasksData as $item) {
    if ($item['uid'] > $largest_uid) {
        $largest_uid = $item['uid'];
        $newUID = $largest_uid+1;
    }
}

foreach ($usersData as $user) {
    if ($user['userUID'] > $largest_user) {
        $largest_user = $user['userUID'];
        $newUserUID = $largest_user+1;
    }
}

$newFormData = array(
  "uid"=>$newUID,
  "userUID"=>$newUserUID,
  "user"=>$_POST['inputUser'],
  "dateCreate"=>$_POST['inputStartdate'],
  "dateDeadline"=>$_POST['dateDeadline'],
  "dateComplete"=>null,
  "title"=>$_POST['inputTitle'],
  "description"=>$_POST['description'],
  "status"=>"created",
  "reward"=>$_POST['inputReward'],
  "timeNeeded"=>$_POST['timeNeeded'],
  "categories"=>$_POST['inputtype']
  
); 
  

array_push($newFormData, $tasksData);
$jsonData = json_encode($newFormData, JSON_PRETTY_PRINT);
file_put_contents($taskDataFile, $jsonData);


  
}
  header("Location: /index.php");
?>