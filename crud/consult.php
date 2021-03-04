<?php

    require_once 'db.php';

    class consult extends DB {

        function getClient(){
            $sql = "SELECT * FROM clientes";
            $conn = $this->connect();
            $getCliente = mysqli_query($conn,$sql);

            return $getCliente;
        }


        function addClient($identificacion,$nombre,$telefono){
            $sql = "INSERT INTO clientes(identificacion,nombre,telefono)
                    VALUES ('$identificacion', '$nombre', '$telefono')";
            $conn = $this->connect();
            $addCliente = mysqli_query($conn,$sql);
            if (!$addCliente) {
                die("query fail");
            }

            $red = header("location: index.php");

            return $red;
        }

        function delteClient($id){
            $sql = "DELETE FROM clientes WHERE id_cliente = $id";
            $conn = $this->connect();
            $delCliente = mysqli_query($conn,$sql);
            if (!$delCliente) {
                die("query fail");
            }

            $red = header("location: index.php");

            return $red;

        }

        function editClient($id) {
            $sql = "SELECT * FROM clientes WHERE id_cliente = $id";
            $conn = $this->connect();
            $editCliente = mysqli_query($conn,$sql);
            $editCliente = mysqli_fetch_array($editCliente);

            // if(mysqli_num_rows($editCliente) == 1){
            //     echo "fino";
            // }

            return $editCliente;
        }

        function updateClient($id, $identificacion, $nombre, $telefono){
            $sql = "UPDATE clientes SET identificacion = '$identificacion', 
                    nombre = '$nombre', telefono = '$telefono' WHERE id_cliente = '$id'";
            print_r($sql);
            $conn = $this->connect();
            $update = mysqli_query($conn,$sql);

            $red = header("location: index.php");

            return $red;

        }

    }
?>

