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
			echo "<script>location.href='login/register-success';</script>";
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
				echo "<script>location.href='login/register-fail';</script>";
		}
		//dang xuat
		public function logout(){	
			unset($_SESSION["renterId"]);
			unset($_SESSION["renterName"]);
			echo "<script>location.href='home';</script>";
		}
		//sua thong tin nguoi dung
		public function update(){
			$record = $this->modelGetrenter_user();
			include "Views/AccountUpdateView.php";
		}
		//edit khi an nut submit
		public function updatePost(){
			//goi ham de update du lieu
			$this->modelUpdate();
			//di chuyen den trang read
			echo "<script>location.href='index.php?controller=account&action=readDetail';</script>";
		}
		public function readDetail(){
			$renter_user = $this->modelGetrenter_user();
			// $info = $this->modelGetInfo($id);
			include "Views/AccountView.php";
		}
		
	}
 ?>