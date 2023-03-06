<?php include($_SERVER['DOCUMENT_ROOT'].'/functions.php'); 

foreach($tasksData as $task){
    if ($task['uid'] == $_GET['uid']){
      $_SESSION['updateStat'] = $task;
  
    } // end if
} // end foreach bc i'm stupid


header("Location: /tasks/status.php");
  ?>