<?php 
	//load file model
	include "Models/AccountModel.php";
	class AccountController extends AccountModel{
		public function index(){
			include "Views/LoginView.php";
		}
		public function login(){
			//goi ham modelLogin (thuoc class loginModel)
			$this->modelLogin();			
			//quay tro lai trang index
			header("location:home");
		}
		public function register(){
			include "Views/RegisterView.php";
		}
		//khi an nut submit
		public function registerPost(){
			$this->modelRegister();
			//quay lai trang dang ky
			//header("location:index.php?controller=account&action=register&notify=success");
			echo "<script>location.href='index.php?controller=account&action=login&notify=success';</script>";
		}
		public function update(){
			$record = $this->modelGetOwnerUser();
			include "Views/AccountUpdateView.php";
		}
		//edit khi an nut submit
		public function updatePost(){
			//goi ham de update du lieu
			$this->modelUpdate();
			//di chuyen den trang danh sach cac ban ghi
			echo "<script>location.href='update';</script>";
		}

		public function logout(){
			//huy session
			unset($_SESSION["email_owner"]);
			unset($_SESSION["ownerId"]);
			unset($_SESSION["ownerName"]);
			//quay tro lai trang index
			echo "<script>location.href='home';</script>";
		}
	}
 ?>