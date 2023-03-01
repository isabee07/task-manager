<?php include($_SERVER['DOCUMENT_ROOT'].'/functions.php'); 
$i = 0; 
$catCount = 0; 
$taskPastDue = 0;
$taskFutureDue = 0; 
$rewardSum = 0;
$timeSum = 0;
$projectSum = 0;
$hwCount = 0; 
$socialCount = 0; 
$choreCount = 0; 
$projectCount = 0; 
$compCount = 0; 
$nonComp = 0; 

foreach($tasksData as $task){

$rewardSum = $rewardSum + $task['reward'];
$timeSum = $timeSum + $task['timeNeeded'];
  if($task['categories'] == "project"){
   $projectSum = $projectSum + $task['reward'];
    $catCount++;
  } // end if 
$i++; 
} // end foreach

$userCount = 0; 
foreach ($usersData as $user){
  $userCount++; 
}

if( strtotime($task['dateDeadline']) < strtotime(date('h:i:sa'))) {
$taskPastDue++;
}

  if(strtotime($task['dateDeadline']) > strtotime(date('604800'))){
    $taskFutureDue++; 
  }

if($task['categories'] == "project"){
    $projectCount++;
  } // end if 

  if($task['categories'] == "chores"){
    $choreCount++;
  } // end if 

    if($task['categories'] == "home work"){
    $hwCount++;
  } // end if 

if($task['categories'] == "social"){
    $socialCount++;
  } // end if 

  if($task['status'] != "completed"){
    $nonComp++;
  } elseif ($task['status'] == "completed") {
    $compCount++; 
  }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Heroic Features - Start Bootstrap Template</title>
         <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons--> 
        <!-- Core theme CSS (includes Bootstrap)-->
    <?php
echo $cssFiles;
?>
    </head>
    <body>
        <!-- Responsive navbar-->
       <?php echo $navFiles; ?>
        <!-- Header-->
        <header class="py-5">
            <div class="container px-lg-5">
                <div class="p-4 p-lg-5 bg-light rounded-3 ">
                    <div class="m-4 m-lg-5">
                        <h1 class="display-5 fw-bold">Input Task</h1>
                       <form class="row g-3" action="/redirects/task.php" method="post">
  <div class="col-md-6">
    <label for="inputUser" class="form-label">User</label>
    <input type="text" class="form-control" id="inputUser" placeholder="User" name="inputUser">
  </div>
  <div class="col-md-6">
    <label for="inputTitle" class="form-label">Title</label>
    <input type="text" class="form-control" id="inputTitle" placeholder="Title" name="inputTitle">
  </div>
  <div class="col-12">
    <label for="description" class="form-label">Description</label>
    <input type="text" class="form-control" id="description" placeholder="Description" name="description">
  </div>
  <div class="col-md-5">
    <label for="inputStartdate" class="form-label">Start Date</label>
    <input type="text" class="form-control" id="inputStartdate" placeholder="Start Date" name="inputStartdate">
  </div>
  <div class="col-md-5">
    <label for="inputtype" class="form-label">Type of task</label>
    <select id="inputtype" class="form-select" name="inputtype">
      <option selected>Types of Tasks</option>
      <option>Chore</option>
      <option>Homework</option>
      <option>Event</option>
      <option>Project</option>
       <option>Trip</option>
       <option>Appointment</option>
    </select>
  </div>
    <div class="col-md-2">
    <label for="inputReward" class="form-label">Reward</label>
    <input type="text" class="form-control" id="inputReward" name="inputReward" placeholder="Reward">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary" name="BTN_create">Submit</button>
  </div>
</form>
                        
                    </div>
                </div>
            </div>
        </header>
        <!-- Page Content-->
        <section class="pt-4">
            <div class="container px-lg-5">
                <!-- Page Features-->
                <div class="row gx-lg-5">
                    <div class="col-lg-6 col-xxl-4 mb-5">
<!--                       first card -->
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-collection"></i></div>
                                <h2 class="fs-4 fw-bold">Count Tasks</h2>
                                <p class="mb-0">Total tasks: <?php echo $i; ?></p>
                            </div>
                        </div>
<!--                       end first card -->
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
<!--                       start second card -->
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-cloud-download"></i></div>
                                <h2 class="fs-4 fw-bold">Project Tasks Rewards</h2>
                                <p class="mb-0">Sum of the Project Task Rewards <?php echo $projectSum; ?></p>
                            </div>
                        </div>
<!--                       end second card -->
                    </div>
                  <div class="col-lg-6 col-xxl-4 mb-5">
<!--                       start seventh card -->
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-cloud-download"></i></div>
                                <h2 class="fs-4 fw-bold">Task type</h2>
                                <p class="mb-0">Homework: <?php echo $hwCount; ?></p>
                              <p class="mb-0">Chores: <?php echo $choreCount; ?></p>
                              <p class="mb-0">Social: <?php echo $socialCount; ?></p>
                              <p class="mb-0">Project: <?php echo $projectCount; ?></p>
                            </div>
                        </div>
<!--                       end seventh card -->
                    </div>
                  <div class="col-lg-6 col-xxl-4 mb-5">
<!--                       start seventh card -->
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-cloud-download"></i></div>
                                <h2 class="fs-4 fw-bold">Task Status</h2>
                                <p class="mb-0">Task Created: <?php echo $nonComp; ?></p>
                                <p class="mb-0">Task Completed: <?php echo $compCount; ?></p>
                            </div>
                        </div>
<!--                       end seventh card -->
                    </div>
                  <div class="col-lg-6 col-xxl-4 mb-5">
<!--                       start 8th card -->
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-cloud-download"></i></div>
                                <h2 class="fs-4 fw-bold">Count Users</h2>
                                <p class="mb-0">Total Users: <?php echo $userCount; ?></p>
                            </div>
                        </div>
<!--                       end 8th card -->
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
<!--                       start third card -->
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-card-heading"></i></div>
                                <h2 class="fs-4 fw-bold">How many projects?</h2>
                                <p class="mb-0">Project count: <?php echo $catCount; ?></p>
                            </div>
                        </div>
<!--                        end third card -->
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
<!--                       start 9th card -->
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-bootstrap"></i></div>
                                <h2 class="fs-4 fw-bold">Past Due Tasks</h2>
                                <p class="mb-0">Past Due Tasks: <?php echo $taskPastDue;  ?></p>
                              
                            </div>
                        </div>
<!--                       end 9th card -->
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
<!--                       start fifth card -->
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-code"></i></div>
                                <h2 class="fs-4 fw-bold">Tasks Due in 7 Days:</h2>
                                <p class="mb-0">Tasks due in the next week: <?php echo $taskFutureDue;  ?> </p>
                            </div>
                        </div>
<!--                       end fifth card -->
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-patch-check"></i></div>
                                <h2 class="fs-4 fw-bold">Time and Reward</h2>
                                <p class="mb-0">Total Rewards: <?php echo $rewardSum; ?></p>
                               <p class="mb-0">Total Time: <?php echo $timeSum; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
          
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
   <?php echo $jsFiles;

?>
    </body>
</html>