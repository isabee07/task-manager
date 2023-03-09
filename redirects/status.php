<?php include $_SERVER['DOCUMENT_ROOT'] . '/functions.php';  

  if (isset($_GET['uid'])) {
    // build session
    foreach($mergedData as $task){ // START: Foreach
  
      if($task['uid'] == $_GET['uid']){ // START: if
        $_SESSION['updateStat'] = $task;
      } //END: if 
    } // END: Foreach
  
    header('Location: /tasks/status.php');

  } elseif (isset($_POST['BTN-Update'])) {

    if($_POST['statusUpdate'] == "0"){
       header('Location: /tasks/index.php');
    } else {


      $in = 0;
      foreach($tasksData as $task){ // START: Foreach

        
        if($task['uid'] == $_SESSION['updateStat']['uid']){ // START: if
          
          $tasksData[$in]["status"] = $_POST['statusUpdate'];

          // turn php array back into JSON data
          $jsonData = json_encode($tasksData, JSON_PRETTY_PRINT);
          // put into json
          file_put_contents($taskDataFile, $jsonData);
          header('Location: /tasks/index.php');

                                                             
        } //END: if 

        $in++;
                                  
      } // END: Foreach
      
    } // END: Else
    
  } else {
  // you do not belong here
    echo "in the wrong place";
  }




  
  // echo '<pre>'; 
  // var_dump($tasksData); 
  // echo '</pre>';
  
?>