<?php include $_SERVER['DOCUMENT_ROOT'].'/functions.php'; 

if(isset($_POST['BTN_create']) > 0) { 



  $i=0;
  $_SESSION['searchResults'] = [];
  foreach($mergedData as $key => $task){
    if($task['categories'] == $_POST['filterType'])  {
     $_SESSION['searchResults'][$i] = $task;
     $i++;

// if







      
  
  }  //END OF IF

} //END OF FOREACH

header('Location:/tasks/index.php?search=Yes');

  
// echo '<pre>';
//   var_dump($_SESSION['searchResults']); 
// echo '</pre>';



} else {

  }
?>