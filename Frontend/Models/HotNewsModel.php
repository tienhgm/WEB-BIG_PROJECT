<?php
    class HotNewsModel{
        public function modelListHotNews(){
            $conn= Connection::getInstance();
            $result= $conn->query("SELECT * from news where hot=1 order by id desc limit 0,6");
            return $result->fetchAll();
        }
    }
?>