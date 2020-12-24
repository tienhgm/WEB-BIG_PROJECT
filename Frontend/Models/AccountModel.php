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
			$conn->query("insert into renter_users set name='$name',email='$email',phonenumber='$phonenumber',password='$password'");
			//---
		}
		//login
		public function modelLogin(){
			$email = $_POST["email"];
			$password = $_POST["password"];
			//---
			$conn = Connection::getInstance();
			$query = $conn->query("select id, name, email, password from renter_users where email='$email'");
			$result = $query->fetch();
			if(isset($result->email)){
				if($result->password == md5($password)){
					//dang nhap thanh cong
					$_SESSION["renterId"] = $result->id;
					$_SESSION["renterName"] = $result->name;
					return true;
				}
			}
			return false;
			//---
		}

        //lay mot ban ghi trong table renter_users
        public function modelGetrenter_user($id){
			//---
			$conn = Connection::getInstance();
			$query = $conn->query("select * from renter_users where id = $id");
			//tra ve mot ban ghi
			return $query->fetch();
			//---
        }
        /*public function modelGetInfo($id){
        	//------
        	$conn = Connection::getInstance();
        	$query= $conn->query("Select p.name, o.date, od.quantity, od.price, o.status FROM orders o join orderdetails od ON o.id=od.order_id JOIN products p ON p.id=od.product_id where o.customer_id =$id");
        	//tra ve mot ban ghi
        	return $query->fetchAll();
        	//-------
        }	*/
	}
 ?>