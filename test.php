<?php include($_SERVER['DOCUMENT_ROOT'].'/functions.php'); 

foreach ($tasksData as $task) {
  echo $task['reward']."<br>";
}

function sortByReward($x, $y){
  if ($x['reward'] == $y['reward']){
    return 0; 
  } // end if 
  return ($x['reward'] < $y['reward']) ? 1:-1;
} // end function 

usort($tasksData, 'sortByReward');

$i = 0; 
while ($i <= 3){
  echo $tasksData[$i]['reward']; 
  $i++."<br>"; 
} // end while 


// echo '<pre>'; 
// var_dump($tasksData);
// echo '</pre>'; 
?>