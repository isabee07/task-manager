<?php include($_SERVER['DOCUMENT_ROOT'].'/functions.php'); 
$result = array();
foreach ($tasksData as $task){
  foreach ($usersData as $user){
     if($task["userUID"] == $user["uid"]) {
      unset($user["uid"]);
      $result[] = array_merge($task,$user);
   } 
  }
}
  echo '<pre>';
  var_dump($result); 
  echo '</pre>'; ?>