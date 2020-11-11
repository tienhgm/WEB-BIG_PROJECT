<?php 
	class ProductsModel{
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
			$query = $conn->query("select * from products order by id desc limit $from, $recordPerPage");
			//tra ve tat ca cac ban truy van duoc
			return $query->fetchAll();
		}
		//ham tinh tong so ban ghi
		public function modelTotal(){
			//---
			$conn = Connection::getInstance();
			$query = $conn->query("select id from products order by id desc");
			//lay tong so ban ghi
			return $query->rowCount();
			//---
		}
		//lay mot ban ghi
		public function modelGetRecord($id){
			//---
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where id = $id");
			//tra ve mot ban ghi
			return $query->fetch();
			//---
		}
		//update ban ghi
		public function modelUpdate($id){
			//---
			$name = $_POST["name"];
			$category_id = $_POST["category_id"];
			$price = $_POST["price"];			
			$address = $_POST["address"];
			$area = $_POST["area"];	
			$discount = $_POST["discount"];	
			$description = $_POST["description"];	
			$phong_tam = $_POST["phong_tam"];
			$phong_bep = $_POST["phong_bep"];		
			$chung_chu = isset($_POST["hot"]) ? 1 : 0;
			$dieu_hoa = isset($_POST["dieu_hoa"]) ? 1 : 0;
			$ban_cong = isset($_POST["ban_cong"]) ? 1 : 0;
			$gia_dien_nuoc = $_POST["gia_dien_nuoc"];
			$quantities= $_POST["quantities"];
			// $time = $_POST["time"];
			//---
			$conn = Connection::getInstance();
			$conn->query("update products set name='$name',category_id=$category_id,price=$price,address='$address',area=$area,discount=$discount,description='$description',phong_tam='$phong_tam', phong_bep='$phong_bep', chung_chu=$chung_chu, dieu_hoa=$dieu_hoa, ban_cong=$ban_cong, gia_dien_nuoc=$gia_dien_nuoc, quantities= $quantities where id=$id");
			
		}
		public function modelCreate(){
			//---
			$name = $_POST["name"];
			$category_id = $_POST["category_id"];
			$price = $_POST["price"];			
			$address = $_POST["address"];
			$area = $_POST["area"];	
			$discount = $_POST["discount"];	
			$description = $_POST["description"];	
			$phong_tam = $_POST["phong_tam"];
			$phong_bep = $_POST["phong_bep"];		
			$chung_chu = isset($_POST["hot"]) ? 1 : 0;
			$dieu_hoa = isset($_POST["dieu_hoa"]) ? 1 : 0;
			$ban_cong = isset($_POST["ban_cong"]) ? 1 : 0;
			$gia_dien_nuoc = $_POST["gia_dien_nuoc"];
			$quantities= $_POST["quantities"];
			// $time = $_POST["time"];

			//---
			$conn = Connection::getInstance();
			$conn->query("insert into products set name='$name',category_id=$category_id,price=$price,address='$address',area=$area,discount=$discount,description='$description',phong_tam='$phong_tam', phong_bep='$phong_bep', chung_chu=$chung_chu, dieu_hoa=$dieu_hoa, ban_cong=$ban_cong, gia_dien_nuoc=$gia_dien_nuoc, quantities= $quantities");
		}
		public function modelDelete($id){
			//---
			$conn = Connection::getInstance();
			//---
			$query = $conn->query("delete from products where id = $id");
		}
		public function modelGetOwnerName($id){
			$conn = Connection::getInstance();
			$query = $conn-> query("select * from owner_users where id = $id");
			$recordOwner= $query->fetch();
			return $recordOwner->name;

		}

		//lay cac danh muc 
		public function modelGetCategories(){
			//---
			$conn = Connection::getInstance();
			$query = $conn->query("select * from categories order by id desc");
			//tra ve nhieu ban ghi
			return $query->fetchAll();
			//---
		}
		//lay ten danh muc
		public function modelGetCategoryName($id){
			//---
			$conn = Connection::getInstance();
			$query = $conn->query("select * from categories where id = $id");
			//tra ve mot ban ghi
			$record = $query->fetch();
			return $record->name;
			//---
		}
	}
 ?>