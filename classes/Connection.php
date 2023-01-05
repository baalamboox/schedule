<?php
    class Connection {
        public function connection() {
            $connection = mysqli_connect('localhost', 'root', '', 'schedule');
            return $connection;
        }
    }
?>