<?php 
	class AccountModel{
		//dang ky thanh vien
		public function modelRegister(){
			$name = $_POST["name"];
			$email = $_POST["email"];
			$phonenumber = $_POST["phonenumber"];
			$password = $_POST["password"];
			//ma hoa password
			$password = md5($password);
			//---
			$conn = Connection::getInstance();
			$conn->query("INSERT INTO renter_users set name='$name',email='$email',phonenumber='$phonenumber',password='$password'");
			//---
		}
		//login
		public function modelLogin(){
			$email = $_POST["email"];
			$password = $_POST["password"];
			//---
			$conn = Connection::getInstance();
			$query = $conn->query("SELECT id, name, email, password from renter_users where email='$email'");
			$result = $query->fetch();
			if(isset($result->email)){
				if($result->password == md5($password)){
					//dang nhap thanh cong
					$_SESSION["renterId"] = $result->id;
					$_SESSION["renterName"] = $result->name;
					$_SESSION["renterEmail"] = $result->email;
					return true;
				}
			}
			return false;
			//---
		}
		//update nguoi dung
		public function modelUpdate(){
			//---
			$name = $_POST["name"];
			$password = $_POST["password"];
			$phonenumber = $_POST["phonenumber"];				
			//---
			$conn = Connection::getInstance();
			//update mail,name
			$conn->query("update renter_users set name='$name', phonenumber='$phonenumber' where id='{$_SESSION["renterId"]}'");
			//neu password khong rong thi update password
			if($password != ""){
				//ma hoa password
				$password = md5($password);
				$conn->query("update renter_users set password='$password' where id='{$_SESSION["renterId"]}'");
			}
			unset($_SESSION["renterName"]);
			$_SESSION["renterName"]=$name;
			
		}
        //lay mot ban ghi trong table renter_users
        public function modelGetrenter_user(){
			//---
			$conn = Connection::getInstance();
			$query = $conn->query("SELECT * from renter_users where id = '{$_SESSION["renterId"]}'");
			//tra ve mot ban ghi
			return $query->fetch();
			//---
        }
	}
 ?>