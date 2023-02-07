<?php include $_SERVER['DOCUMENT_ROOT'].'/functions.php'; 

$result = array();
foreach ($tasksData as $task){
  foreach ($usersData as $user){
     if($item1["userUID"] == $item2["uid"]) {
      unset($user["uid"]);
      $result[] = array_merge($task,$user);
   } 
  }
}
  // echo '<pre>';
  // var_dump($result); 
  // echo '</pre>';

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
                        <a class="btn btn-primary btn-lg" href="#!">Filter</a>
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
    </tr>
  </thead>
  <tbody>
<?php 
  foreach($result as $key => $task){
    echo'
        <tr>
          <th scope="row">1</th>
          <td>'.$task['fName'].' '.$task['lName'].'</td>
          <td>'.$task['title'].'</td>
          <td>'.$task['categories'].'</td>
          <td>'.$task['reward'].'</td>
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