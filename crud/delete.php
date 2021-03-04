<?php

    require_once 'consult.php';

    if (isset($_GET['id'])) {
        
        $id = $_GET['id'];
        
        $consult = new consult();
            
        $consult->delteClient($id);

    }
?>