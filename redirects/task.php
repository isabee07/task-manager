
<?php $_SERVER["DOCUMENT_ROOT"] . "/functions.php"; 

$jsonFormData = file_get_contents($_SERVER[DOCUMENT_ROOT] . '/data/tasks.json'); 
$pastFormData = $json_decode($jsonFormData, TRUE); 

 $_SESSION["form"]["fName"] = $_POST['fName'];
 $_SESSION["form"]["lName"] = $_POST['lName'];
 $_SESSION["form"]["email"] = $_POST['email'];
 $_SESSION["form"]["age"] = $_POST['age'];
 $_SESSION["form"]["gender"] = $_POST['gender'];
 $_SESSION["form"]["relationship"] = $_POST['relationship'];
?>
