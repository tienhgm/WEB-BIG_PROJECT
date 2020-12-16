<?php 
	class LoginModel{
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