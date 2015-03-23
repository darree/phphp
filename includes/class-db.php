<?php

if (!class_exists('DB')){
    class DB {
        public function __construct(){
            $mysqli = new mysqli('localhost', 'root', '', 'cman');

            if ($mysqli->errno){
                printf("Connection failed %s\n", $mysqli->error);
                exit();
            }
            $this->connection = $mysqli;
        }

        public function insert($query){
            $mysqli=$this->connection;

            $result= $mysqli->query($query);
            return $result;
        }

        public function select($query){
            $mysqli=$this->connection;

            $result = $mysqli->query($query);
            while($obj = $result->fetch_object()){
                $results[]=$obj;

            }
            return $results;
        }
    }
}
$db= new DB;