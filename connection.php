<?php
    
    $link = mysqli_connect("HostRemoved", 'UserNameRemoved', 'PasswordRemoved','DatabaseRemoved');
        
        if (mysqli_connect_error()) {
            
            die ("Database Connection Error");
            
        }

?>