<?php
    include "Models/RatingsModel.php";
    class RatingsController extends RatingsModel{
        public function createPost(){
            // if($_SESSION["renterEmail"] == null){
            //     echo "<script>location.href='LoginView.php';</script>";
            // }
            // else{
            //     $this->modelCreate();
            //     echo "<script>location.href='ProductsDetailView.php;</script>";
            // }
            if(isset($_SESSION["renterEmail"])){
                $this->modelCreateRating();
                echo "<script>location.href= 'index.php?controller=products&action=detail&id=".$_SESSION["prId"]." ';</script>";
                unset($_SESSION['prId']);
            }
            else{
                echo "<script>window.alert('Đăng nhập để đánh giá');location.href='index.php?controller=account&action=login';</script>";
            }
        }
    }
?>