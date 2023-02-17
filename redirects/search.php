<?php include $_SERVER['DOCUMENT_ROOT'].'/functions.php'; 

if(isset($_POST['BTN_create']) > 0) { 




  $i=0;
  foreach($mergedData as $key => $task){
    if($task['categories'] == $_POST['filterType'])  {
     $_SESSION['searchResults'][$i] = [$task];
     $i++;

  
  }  //END OF IF

} //END OF FOREACH



  
// echo '<pre>';
//   var_dump($_SESSION['searchResults']); 
// echo '</pre>';

echo "the button was pressed. <br>";

} else {
echo "The button was not pressed. <br>";
  }
?>