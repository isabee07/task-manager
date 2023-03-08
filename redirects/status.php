<?php include($_SERVER['DOCUMENT_ROOT'].'/functions.php'); 

if (isset($_GET['uid'])) {
  foreach($mergedData as $task){
    if ($task['uid'] == $_GET['uid']){
      $_SESSION['updateStat'] = $task;
    } // end if
} // end foreach bc i'm stupid
header("Location: /tasks/status.php");
} elseif (isset($_POST['BTN-Update'])) {

if ($_POST['statusUpdate'] == "0"){
header("Location: /tasks/index.php");
} //end of IF
} else{
  
$IN = 0;
foreach($tasksData as $task) {
  
  if ($task['uid'] == $_SESSION['updateStat']['uid']) {
    
  $tasksData[$IN]['status'] = $_POST['statusUpdate'];

$jsonData = json_encode($newFormData, JSON_PRETTY_PRINT);
file_put_contents($taskDataFile, $jsonData);

header("Location: /tasks/status.php");
    

    } // END OF IF 
  $IN++;
  } //end of foreach
} //end of else 

// echo '<pre>';
// var_dump($_SESSION['updateStat']); 
// echo '</pre>';
  ?>