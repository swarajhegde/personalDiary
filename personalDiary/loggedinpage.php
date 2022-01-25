<?php

    session_start();
    //$diaryContent="";

    

    if (array_key_exists("id", $_SESSION)) {
              
      include("connection.php");
      
      $query = "SELECT diary FROM `users` WHERE id = ".mysqli_real_escape_string($link, $_SESSION['id'])." LIMIT 1";
      $row = mysqli_fetch_array(mysqli_query($link, $query));
 
      $diaryContent = $row['diary'];
      
    } else {
        
        header("Location: index.php");
        
    }

	include("header.php");

?>
<style>
    #btn1 {
        margin-left: 40%;
        margin-top: 100px;
    }

</style>

<nav class="navbar navbar-light bg-faded navbar-fixed-top">
  

  <a class="navbar-brand" href="#">Secret Diary</a>

    <div class="pull-xs-right">
      <a href ='index.php?logout=1'>
        <button class="btn btn-success-outline" type="submit">Logout</button></a>
    </div>

</nav>



    <div class="container-fluid" id="containerLoggedInPage">

        <textarea id="diary" class="form-control"><?php echo $diaryContent; ?></textarea>
    </div>
    <a href ='delete.php?del=1'>
    <button id="btn1" class="btn btn-Danger">Delete Your Account</button></a>
<?php
    
    include("footer.php");
?>