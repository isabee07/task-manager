<?php include($_SERVER['DOCUMENT_ROOT'].'/functions.php'); 

if (isset($_GET['uid'])) {
  foreach($mergedData as $task){
    if ($task['uid'] == $_GET['uid']){
      $_SESSION['updateStat'] = $task;
    } // end if
} // end foreach bc i'm stupid
header("Location: /tasks/status.php");
} elseif (isset($_POST['BTN-Update'])) {
  echo "Changed your mom";
} else{
echo "That is not your mom";  
} 





// foreach($mergedData as $task){
//     if ($task['uid'] == $_GET['uid']){
//       $_SESSION['updateStat'] = $task;
//     } // end if
// } // end foreach bc i'm stupid
// header("Location: /tasks/status.php");
  ?>