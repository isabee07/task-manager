<?php session_start();

  $taskDataFile = ($_SERVER['DOCUMENT_ROOT']."/data/tasks.json"); 
  $usersDataFile = ($_SERVER['DOCUMENT_ROOT']."/data/users.json");
  // Get data from json file.
  $jsonTasks = file_get_contents($taskDataFile); 
  $jsonUsers = file_get_contents($usersDataFile); 
  // Convert json data to PHP array.
  $tasksData =  json_decode($jsonTasks, TRUE);   
  $usersData =  json_decode($jsonUsers, TRUE);   

// sort by amt function 
function sortByReward($x, $y){
  if ($x['reward'] == $y['reward']){
    return 0; 
  } // end if 
  return ($x['reward'] < $y['reward']) ? 1:-1;
} // end function 

$mergedData = array();
foreach ($tasksData as $task){
  foreach ($usersData as $user){
     if($task["userUID"] == $user["uid"]) {
      unset($user["uid"]);
      $mergedData[] = array_merge($task,$user);
   } 
  }
}

if($_GET['search'] == 'Yes'){
  $allowedTaskData = $_SESSION['searchResults'];
} else{
  $allowedTaskData = $mergedData;
}



$typeTask = array();
foreach ($mergedData as $type) {
    $typeTask[] = $type['categories'];
}
$uniqueTypes = array_unique($typeTask);



// echo '<pre>';
// var_dump($uniqueTypes); 
// echo '</pre>';


$cssFiles = '<link href="/resources/templateFiles/css/styles.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />';

$jsFiles = '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="/resources/templateFiles/js/scripts.js"></script>';

$navFiles = ' <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-lg-5">
                <a class="navbar-brand" href="#!">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="/index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="/tasks/index.php">Tasks</a></li>
                        <li class="nav-item"><a class="nav-link" href="/tasks/status.php">Edit Tasks</a></li>
                    </ul>
                </div>
            </div>
        </nav> ';
?>