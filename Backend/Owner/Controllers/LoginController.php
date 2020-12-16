<?php 
	//load file model
	include "Models/LoginModel.php";
	class LoginController extends LoginModel{
		public function index(){
			include "Views/LoginView.php";
		}
		public function login(){
			//goi ham modelLogin (thuoc class loginModel)
			$this->modelLogin();			
			//quay tro lai trang index
			header("location:index.php");
		}
		public function logout(){
			//huy session
			unset($_SESSION["email_owner"]);
			unset($_SESSION["ownerId"]);
			unset($_SESSION["ownerName"]);
			//quay tro lai trang index
			echo "<script>location.href='index.php';</script>";
		}
	}
 ?>