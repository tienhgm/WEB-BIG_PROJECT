<?php 
	class OwnerUsersModel{
		//ham liet ke danh sach cac ban ghi, co phan trang
		public function modelRead($recordPerPage){
			//lay tong to so ban ghi
			$total = $this->modelTotal();
			//tinh so trang
			$numPage = ceil($total/$recordPerPage);
			//lay so trang hien tai truyen tu url
			$page = isset($_GET["p"]) && $_GET["p"] > 0 ? $_GET["p"]-1 : 0;
			//lay tu ban ghi nao
			$from = $page * $recordPerPage;
			//thuc hien truy van
			$conn = Connection::getInstance();
			$query = $conn->query("select * from owner_users order by id asc limit $from, $recordPerPage");
			//tra ve tat ca cac ban truy van duoc
			return $query->fetchAll();
		}
		//ham tinh tong so ban ghi
		public function modelTotal(){
			//---
			$conn = Connection::getInstance();
			$query = $conn->query("select id from owner_users order by id desc");
			//lay tong so ban ghi
			return $query->rowCount();
			//---
		}
		//lay mot ban ghi
		public function modelGetRecord($id){
			//---
			$conn = Connection::getInstance();
			$query = $conn->query("select * from owner_users where id = $id");
			//tra ve mot ban ghi
			return $query->fetch();
			//---
		}

		public function modelCreate(){
			//---
			$name = $_POST["name"];
			$email = $_POST["email"];
			$password = $_POST["password"];	
			$phonenumber = $_POST["phonenumber"];	
			$cmnd = $_POST["cmnd"];
			$address= $_POST["address"];		
			//ma hoa password
			
			//---
			$conn = Connection::getInstance();
			$conn->query("insert into owner_users set name='$name',email='$email', password='$password', phonenumber='$phonenumber', cmnd='$cmnd', address='$address'");
		}

		//update ban ghi
		public function modelUpdate($id){
			//---
			$name = $_POST["name"];
			$email = $_POST["email"];
			$password = $_POST["password"];
			$phonenumber = $_POST["phonenumber"];	
			$cmnd = $_POST["cmnd"];
			$address= $_POST["address"];				
			//---
			$conn = Connection::getInstance();
			//kiem tra neu email khong ton tai thi moi update
			$check = $conn->query("select id from owner_users where email='$email' and id <> $id");
			$numCheck = $check->rowCount();
			if($numCheck == 0){
				//update mail,name
				$conn->query("update owner_users set name='$name',email='$email', phonenumber='$phonenumber', cmnd='$cmnd', address='$address' where id=$id");
				//neu password khong rong thi update password
				if($password != ""){
					//ma hoa password
					$password = md5($password);
					$conn->query("update owner_users set password='$password' where id=$id");
				}
			}
		}
		public function modelDelete($id){
			//---
			$conn = Connection::getInstance();
			$query = $conn->query("delete from owner_users where id = $id");
		}
	}
 ?>