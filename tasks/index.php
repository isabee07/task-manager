<?php include($_SERVER['DOCUMENT_ROOT'].'/functions.php'); 

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

?>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Heroic Features - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)--> 
  <?php echo $cssFiles; ?>
    </head>
    <body>
        <!-- Responsive navbar-->
  <?php echo $navFiles; ?>
        <!-- Header-->
        <header class="py-5">
            <div class="container px-lg-5">
                <div class="p-4 p-lg-5 bg-light rounded-3 text-center">
                    <div class="m-4 m-lg-5">
                        <h1 class="display-5 fw-bold">Task Filter</h1>
                        <p class="fs-4">Form here</p>
                     <form method="post">
                      <select class="form-select" aria-label="Default select example" value="none" name='filterType' >
                        <option value="none">Choose the type of task</option>
                            <?php
                        foreach ($uniqueTypes as $type) {
                          echo '<option value="'.$type.'">'.$type.'</option>';
                        }
                      ?>
                       
                     </select>
                      <br>
                     <select class="form-select" aria-label="Default select example" value="none" name='filterUser' >
                        <option selected>Choose the User</option>
                            <?php
                        foreach ($usersData as $user) {
                          echo '<option value="'.$user['uid'].'">'.$user['fName'].'</option>';
                        }
                      ?>
                       
                     </select>







                       
                       <input class="btn btn-primary btn-lg" type="submit" value="Search"
                         name="BTN_create">
                     </form>
                    </div>
                </div>
            </div>
        </header>
        <header class="py-5">
            <div class="container px-lg-5">
                <div class="p-4 p-lg-5 bg-light rounded-3 text-center">
                    <div class="m-4 m-lg-5">
                        <h1 class="display-5 fw-bold">A warm welcome!</h1>
                        <p class="fs-4">Bootstrap utility classes are used to create this jumbotron since the old component has been removed from the framework. Why create custom CSS when you can use utilities?</p>
<!--       Table Start -->
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">Due Date</th>
      <th scope="col">Name</th>
      <th scope="col">Title</th>
      <th scope="col">Task-type</th>
      <th scope="col">Reward</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
<?php 
  foreach($mergedData as $key => $task){
    echo'
        <tr>
          <th scope="row">'.$task['dateDeadline'].'</th>
          <td>'.$task['fName'].' '.$task['lName'].'</td>
          <td>'.$task['title'].'</td>
          <td>'.$task['categories'].'</td>
          <td>'.$task['reward'].'</td>
          <td><a href="/redirects/status.php?uid='.$task['uid'].'">'.$task['status'].'</a></td>
        </tr>
       ';
  }
?>
 
  
  </tbody>
</table>
<!--          Table end                -->
                    </div>
                </div>
            </div>
        </header>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
        </footer> <?php echo $jsFiles; ?>
    </body>
</html>