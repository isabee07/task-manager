<?php include $_SERVER['DOCUMENT_ROOT'].'/functions.php'; 
if(isset($_POST['BTN_create']) > 0) { 


 if($_POST['filterType'] == 'none' && $_POST['filterUser'] == 'none'){
   echo "neither value";
 } elseif ($_POST['filterType'] != 'none' && $_POST['filterUser'] == 'none') {
   echo "use only cat value";  
 } elseif ($_POST['filterUser'] != 'none' && $_POST['filterType'] == 'none') {
  
 $i=0;
  $_SESSION['searchResults'] = [];
  foreach($mergedData as $key => $task){
    if($task['userUID'] == $_POST['filterUser'])  {
     $_SESSION['searchResults'][$i] = $task;
     $i++;

    } 
  }







   
 } else {
   echo "use both values";
 }
  
  
  $i=0;
  $_SESSION['searchResults'] = [];
  foreach($mergedData as $key => $task){
    if($task['categories'] == $_POST['filterType'])  {
     $_SESSION['searchResults'][$i] = $task;
     $i++;

// if







      
  
  }  //END OF IF

} //END OF FOREACH

// header('Location:/tasks/index.php?search=Yes');

  
echo '<pre>';
var_dump($_SESSION); 
echo '</pre>';



} else {

  }
?>