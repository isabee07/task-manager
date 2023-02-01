<?php session_start();

$taskDataFile = $_SERVER['DOCUMENT_ROOT']."/data/tasks.json";
$usersDataFile =$_SERVER['DOCUMENT_ROOT']."/data/users.json";
  // Get data from json file.
  $jsonTasks = file_get_contents($taskDataFile); 
  $jsonUsers = file_get_contents($usersDataFile); 
  // Convert json data to PHP array.
  $tasksData =  json_decode($jsonTasks, TRUE);   
  $usersData =  json_decode($jsonUsers, TRUE);   

  echo '<pre>';
  var_dump($tasksData); 
  echo '</pre>';
?>