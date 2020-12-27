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
		//update tai khoan
		public function modelUpdate(){
			//---
			$name = $_POST["name"];
			$password = $_POST["password"];
			$phonenumber = $_POST["phonenumber"];	
			$cmnd = $_POST["cmnd"];
			$address= $_POST["address"];				
			//---
			$conn = Connection::getInstance();
			//update mail,name
			$conn->query("update owner_users set name='$name', phonenumber='$phonenumber', cmnd='$cmnd', address='$address' where id='{$_SESSION["ownerId"]}'");
			//neu password khong rong thi update password
			if($password != ""){
				//ma hoa password
				$password = md5($password);
				$conn->query("update owner_users set password='$password' where id='{$_SESSION["ownerId"]}'");
			}
			
		}
		public function modelGetOwnerUser(){
			//---
			$conn = Connection::getInstance();
			$query = $conn->query("select * from owner_users where id = '{$_SESSION["ownerId"]}'");
			//tra ve mot ban ghi
			return $query->fetch();
			//---
		}
		public function getSession(){
			$conn = Connection::getInstance();
			$query = $conn->query("select id from owner_users where id = '{$_SESSION["ownerId"]}' ");
		}
	}
 ?>