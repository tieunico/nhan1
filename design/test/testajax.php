<?php
    if(isset($_POST["data_to_send"])) {
        $data_received =  $_POST["data_to_send"];
        echo $data_received;
        exit();
    }
    
?>
