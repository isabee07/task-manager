<?php include $_SERVER['DOCUMENT_ROOT'].'/functions.php'; 

if(isset($_POST['BTN_create']) > 0) { 


 if($_POST['filterType'] == 'none' && $_POST['filterUser'] == 'none'){ // if both used
    header('Location:/tasks/index.php');
} 
 
 elseif ($_POST['filterType'] != 'none' && $_POST['filterUser'] == 'none') {  // if cat used
  $i=0;
  $_SESSION['searchResults'] = [];
  foreach($mergedData as $key => $task){
    if($task['categories'] == $_POST['filterType'])  {
     $_SESSION['searchResults'][$i] = $task;
     $i++;   
    }  
  } 
}
    elseif ($_POST['filterUser'] != 'none' && $_POST['filterType'] == 'none')  { // if user used
    $i=0;
  $_SESSION['searchResults'] = [];
  foreach($mergedData as $key => $task){
    if($task['userUID'] == $_POST['filterUser'])  {
     $_SESSION['searchResults'][$i] = $task;
     $i++; 
    } 
  }                                                                             
    }

  
    else {
       $i=0;
  $_SESSION['searchResults'] = [];
      foreach($mergedData as $key => $task){
      if($task['userUID'] == $_POST['filterUser'] && $task['categories'] == $_POST['filterType']) {
        // if both match
          $_SESSION['searchResults'][$i] = $task;
             $i++;    
      }   // end of if
  
    } // end of foreach
 } // end of else
 
} // end of isset 
?>