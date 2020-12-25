<?php 
	class AccountModel{
		//dang ky thanh vien
		public function modelRegister(){
			$name = $_POST["name"];
			$email = $_POST["email"];
			$phonenumber = $_POST["phonenumber"];
			$password = $_POST["password"];
			$address = $_POST["address"];
			$cmnd = $_POST["cmnd"];
			//ma hoa password
			$password = md5($password);
			//---
			$conn = Connection::getInstance();
			$conn->query("insert into owner_users set name='$name',email='$email',phonenumber='$phonenumber',address='$address',cmnd='$cmnd',password='$password', active=0 ");
			//---
		}
		public function modelLogin(){
			$email_owner = $_POST["email_owner"];
			$password = $_POST["password"];
			//ma hoa password
			$password = md5($password);
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select * from owner_users where email='$email_owner'");
			$record = $query->fetch();
			if(isset($record) && $record->password == $password){
				//dang nhap thanh cong
				$_SESSION["email_owner"] = $email_owner;
				$_SESSION["ownerId"] = $record->id;
				$_SESSION["ownerName"] = $record->name;
			}
		}

		public function getSession(){
			$conn = Connection::getInstance();
			$query = $conn->query("select id from owner_users where id = '{$_SESSION["ownerId"]}' ");
		}
	}
 ?>