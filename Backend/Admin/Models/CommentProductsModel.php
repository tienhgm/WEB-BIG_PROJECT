<?php 
	class CommentProductsModel{
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
			$query = $conn->query("select * from ratings order by id desc limit $from, $recordPerPage");
			//tra ve tat ca cac ban truy van duoc
			return $query->fetchAll();
		}
		//ham tinh tong so ban ghi
		public function modelTotal(){
			//---
			$conn = Connection::getInstance();
			$query = $conn->query("select id from ratings order by id desc");
			//lay tong so ban ghi
			return $query->rowCount();
			//---
		}
		//ham xóa cmt
		public function modelDelete($id){
			//---
			$conn = Connection::getInstance();
			//---
			$query = $conn->query("delete from ratings where id = $id");
		}
		//ham lay ten nguoi dung
		public function modelGetNameRenter($renter_users_id){
			//---
			$conn = Connection::getInstance();
			$query = $conn->query("select name from renter_users where id = $renter_users_id");
			//lay 1 ban ghi
			$result = $query->fetch();
			//---
			return $result->name;
		}
		//ham lay ten san pham
		public function modelGetNameProduct($product_id){
			//---
			$conn = Connection::getInstance();
			$query = $conn->query("select name from products where id =$product_id");
			//lay 1 ban ghi
			$result = $query->fetch();
			//---
			return $result->name;
		}
	}


 ?>