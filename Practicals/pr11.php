<?php
if(isset($_POST['submit']) && $_POST['formkey'] == '1234')
{
  echo "<h3>Your Selected Choices:</h3>"; 
  echo "<br>Department: ".$_POST['dept'];
  echo "<br>Subjects : ";
  foreach($_POST['subjects'] as $sub){
    echo $sub."  ";
  } 
} else {
    echo "Invalid Navigation to page!";
}
?>