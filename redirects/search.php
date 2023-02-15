<?php include $_SERVER['DOCUMENT_ROOT'].'/functions.php'; 

if(isset($_POST['BTN_create']) > 0) { 



  $i=0;
foreach($tasksData as $task){
if($task['categories'] == $_POST['filterType'])  {
  $_SESSION[$i] = $task;
  $i++;
  
  }  //END OF IF

} //END OF FOREACH



  
echo '<pre>';
  var_dump($_SESSION); 
echo '</pre>';
} else {
// ummmm error? dont work here
  }
?>