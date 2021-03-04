<?php

    class DB{

        private $host     = 'localhost'; //host remote.
        private $db       = 'crud'; //data base.
        private $user     = ''; //add user of the mysql.
        private $password = ""; //add password of the user.

        public function connect(){
                
            $con = mysqli_connect($this->host, $this->user, $this->password, $this->db);

            if(!$con) {
                die("Connection failed: " . mysqli_connect_error());
            }

            return $con;
        }
    }

?>