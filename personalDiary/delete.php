<?php

    session_start();
    //$diaryContent="";

    
     $link=mysqli_connect("localhost","root","","diary_db");
    if(mysqli_connect_error()) {

    die("error");
       }

    if (array_key_exists("del", $_GET)) {
      $del=$_SESSION['id'];
      
      $query = "DELETE FROM `users` WHERE id = $del ";
      if(mysqli_query($link, $query)){
      header("Location:index.php?logout=1");      
    } else {
        
        echo "unable to delete";
        
    }
}

	

?>