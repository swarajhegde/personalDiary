<?php

    $link = mysqli_connect("localhost", "root", "", "diary_db");
        
        if (mysqli_connect_error()) {
            
            die ("Database Connection Error");
            
        }

?>