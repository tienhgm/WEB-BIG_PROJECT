<?php
    include "Models/HotNewsModel.php";
    class HotNewsController extends HotNewsModel{
        public function readHomeHotNews(){
            $hotNews= $this->modelListHotNews();
            include "Views/HomeHotNewsView.php";
        }
    }
?>