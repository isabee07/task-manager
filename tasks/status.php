<?php include($_SERVER['DOCUMENT_ROOT'].'/functions.php'); 
// echo '<pre>';
// var_dump($_SESSION); 
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
        <!-- Bootstrap icons--> <?php echo $cssFiles; ?>
        <!-- Core theme CSS (includes Bootstrap)-->
    </head>
    <body>
        <!-- Responsive navbar-->
  <?php echo $navFiles; ?>
        <!-- Header-->
        <header class="py-5">
            <div class="container px-lg-5">
                <div class="p-4 p-lg-5 bg-light rounded-3 text-center">
                    <div class="m-4 m-lg-5">
        
                     
                      <h1 class="display-5 fw-bold">Update Status</h1>
                      <table class="table table-striped table-hover"> <!-- START of table -->
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


                        
                    <tr>
                      <td><?php echo$_SESSION['updateStat']['dateDeadline'] ;?></td>
                       <td><?php echo$_SESSION['updateStat']['fName'].' '.$_SESSION['updateStat']['lName'];?></td>
                       <td><?php echo$_SESSION['updateStat']['title'] ;?></td>
                       <td><?php echo$_SESSION['updateStat']['categories'] ;?></td>
                       <td><?php echo$_SESSION['updateStat']['reward'] ;?></td>
                    </tr>
                     
                      
                      </tbody>
                    </table> <!-- end of table -->

                          <form action="/redirects/status.php" method="post"> <!-- START of form -->
                            <lable>Update The Status of a Task.</lable>
                            <br><br>
                          <select name="statusUpdate">
                            <option value="0">Choose Status</option>
                             <option value="completed">Completed</option>
                             <option value="canceled">Canceled</option>
                          </select><br><br>
                           <input type="submit" class="btn btn-primary btn-lg" value="Update" name="BTN-Update"></input>
                          </form> <!-- end of form-->





                      
                        
                    </div>
                </div>
            </div>
        </header>
        <!-- Page Content-->
 
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Dallas, Texas, November 22nd, 1963, N. Houston St., in a 1961 Lincoln Continental Presidential Limousine from the Sixth floor Texas School Book Depository, by Lee Harvey Oswald</p></div>
        </footer> <?php echo $jsFiles; ?>
    </body>
</html>