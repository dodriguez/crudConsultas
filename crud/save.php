<?php

    require_once 'consult.php';

    if (isset($_POST['save'])) {
        
        $identificacion = $_POST['identificacion'];
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];

        $consult = new consult();
        
        $consult->addClient($identificacion,$nombre,$telefono);

    }

?>