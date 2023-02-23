<?php /*1st Line on every webpage.*/ include $_SERVER['DOCUMENT_ROOT'].'/functions.php'; 
  
  //Clears the session 
  $_SESSION = array();
  
  //is button pressed?
  if(isset($_POST['BTN_search'])) {
    
    if($_POST['filterType'] == 'none' && $_POST['filterUsers'] == 'none' ) {

      // process if NO filter is selected.
      header('Location: /tasks/index.php');
      exit(); //ends the php script.
      
    } elseif ($_POST['filterType'] != 'none'&& $_POST['filterUsers'] == 'none' ) {
       
        // process if only Category is selected from filter
        $i = 0;
        $_SESSION['searchResults'] = [];
        //loop throught medgedData
        foreach($mergedTaskUserData as $key => $task) {

            //check to see if search value matched data value
            if($_POST['filterType'] == $task['categories']) {
              
              //search matches data. Build a session. 
              $_SESSION['searchResults'][$i] = $task; 
              $i++;

            } //if() inside foreach
        }//foreach
      
    } elseif ($_POST['filterUsers'] != 'none' && $_POST['filterType'] == 'none' ) {
        
      // process if only USER is selected from filter
        $i = 0;
        $_SESSION['searchResults'] = [];
        //loop throught medgedData
        foreach($mergedTaskUserData as $key => $task) {

            //check to see if search value matched data value
            if($_POST['filterUsers'] == $task['userUID']) {
              
              //search matches data. Build a session. 
              $_SESSION['searchResults'][$i] = $task; 
              $i++;

            } //if() inside foreach
          
        }//foreach

    } else {

      // process if only BOTH user and category are selected from filter
        $i = 0;
        $_SESSION['searchResults'] = [];
        //loop throught medgedData
        foreach($mergedTaskUserData as $key => $task) {
            if($_POST['filterUsers'] == $task['userUID'] && $_POST['filterType'] == $task['categories']) { // START:: if both are used
              //search matches data. Build a session. 
              $_SESSION['searchResults'][$i] = $task; 
              $i++;
                                                                                                            
            }// END::if both are used
        }// END::foreach
    }// END::else

    header('Location: /tasks/index.php?search=yes');
    exit(); //ends the php script.

  }//if() button pressed

// echo '<pre>';
// var_dump($mergedTaskUserData);
// echo '</pre>';

?>
