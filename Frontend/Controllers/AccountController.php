<?php 
	include "Models/AccountModel.php";
	class AccountController extends AccountModel{
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
		//dang nhap
		public function login(){
			include "Views/LoginView.php";
		}
		//khi an nut submit dang nhap
		public function loginPost(){
			if($this->modelLogin())
				echo "<script>location.href='index.php';</script>";
			else
				echo "<script>location.href='index.php?controller=account&action=login&notify=fail';</script>";
		}
		//dang xuat
		public function logout(){	
			unset($_SESSION["renterId"]);
			unset($_SESSION["renterName"]);
			echo "<script>location.href='index.php';</script>";
		}
		public function readDetail(){
			$id= $_SESSION["renterId"];
			$renter_user = $this->modelGetrenter_user($id);
			// $info = $this->modelGetInfo($id);
			include "Views/AccountView.php";
		}
		
	}
 ?>