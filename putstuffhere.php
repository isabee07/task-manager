// if(isset($_POST['BTN_create']) > 0) { 
//     if(isset($_POST['BTN_create']) > 0) { 
//   $date = date_create()
//     $deadlineReformatted = 
// $largest_uid = 0; 
// foreach($tasksData as $item) {
//   if ($item['uid'] > $largest_uid) {
//     $largest_uid = $item['uid']; 
//     $newUID = $largest_uid+1;
//   }
// }

// $newFormData = array(
//   "uid"=>$newUID,
//   "user"=>NULL,
//   "dateCreate"=>date(Y/m/d),
//   "dateComplete"=>NULL,
//   "dateDeadline"=>$_POST['inputDuedate']
//   "title"=>$_POST['inputtitle'],
//   "description"=>$_POST['description'],
//   "reward"=>$_POST['inputreward'],
//   "typeTask"=>$_POST['inputtype'], 
//   "address"=>$_POST['inputAddress']  
// ); 

  
// array_push($pastFormData, $newFormData); 
// $jsonData = json_encode($newFormData, JSON_PRETTY_PRINT); 
// file_put_contents($pastFormData, $jsonData); 
  
// header('Location: /index.php'); 

TO DO 
1. throw every new data into json 
2. redirect index => redirect and then BACK to index 


$taskDataFile = $_SERVER['DOCUMENT_ROOT']."/data/tasks.json";
$usersDataFile = $_SERVER['DOCUMENT_ROOT']."/data/users.json";


<!-- <div class="col-md-4">
    <label for="inputtype" class="form-label">Type of task</label>
    <select id="inputtype" class="form-select">
      <option selected>Types of Tasks</option>
      <option>Chore</option>
      <option>Homework</option>
      <option>Event</option>
      <option>Project</option>
       <option>Trip</option>
       <option>Appointment</option>
    </select> -->