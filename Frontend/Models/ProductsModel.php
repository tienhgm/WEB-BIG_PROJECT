<?php 
	/**
	 *  
	 */
	class ProductsModel 
	{
		//ham liet ke danh sach cac ban ghi, co phan trang
		public function modelReadCategory($category_id,$recordPerPage){
			//lay tong to so ban ghi
			$total = $this->modelTotalCategory($category_id);
			//tinh so trang
			$numPage = ceil($total/$recordPerPage);
			//lay so trang hien tai truyen tu url
			$page = isset($_GET["p"]) && $_GET["p"] > 0 ? $_GET["p"]-1 : 0;
			//lay tu ban ghi nao
			$from = $page * $recordPerPage;
			//thuc hien truy van
			$conn = Connection::getInstance();
			//---
			$sqlOrderBy=" order by id desc ";
			$sort= isset($_GET["sort"]) ? $_GET["sort"] : "";
			switch($sort){
				case "priceAsc":
					$sqlOrderBy= " order by price asc ";
				break;
				case "priceDesc":
					$sqlOrderBy= " order by price desc ";
				break;
				case "nameAsc":
					$sqlOrderBy= " order by name asc ";
				break;
				case "nameDesc":
					$sqlOrderBy= " order by name desc ";
				break;
			}
			//---
			$query = $conn->query("SELECT p.* , lo.name as locationname from products p JOIN location lo ON p.location_id =lo.id where category_id=$category_id $sqlOrderBy limit $from, $recordPerPage");
			//tra ve tat ca cac ban truy van duoc
			return $query->fetchAll();
		}
		//ham tinh tong so ban ghi
		public function modelTotalCategory($category_id){
			//---
			$conn = Connection::getInstance();
			$query = $conn->query("SELECT id from products where category_id=$category_id order by id desc");
			//lay tong so ban ghi
			return $query->rowCount();
			//---
		}
		//ham liet ke danh sach cac ban ghi, co phan trang
		public function modelReadLocation($location_id,$recordPerPage){
			//lay tong to so ban ghi
			$total = $this->modelTotalLocation($location_id);
			//tinh so trang
			$numPage = ceil($total/$recordPerPage);
			//lay so trang hien tai truyen tu url
			$page = isset($_GET["p"]) && $_GET["p"] > 0 ? $_GET["p"]-1 : 0;
			//lay tu ban ghi nao
			$from = $page * $recordPerPage;
			//thuc hien truy van
			$conn = Connection::getInstance();
			//---
			$sqlOrderBy=" order by id desc ";
			$sort= isset($_GET["sort"]) ? $_GET["sort"] : "";
			switch($sort){
				case "priceAsc":
					$sqlOrderBy= " order by price asc ";
				break;
				case "priceDesc":
					$sqlOrderBy= " order by price desc ";
				break;
				case "nameAsc":
					$sqlOrderBy= " order by name asc ";
				break;
				case "nameDesc":
					$sqlOrderBy= " order by name desc ";
				break;
			}
			//---
			$query = $conn->query("SELECT p.*,lo.name as locationname from products p JOIN location lo ON p.location_id =lo.id where location_id=$location_id $sqlOrderBy limit $from, $recordPerPage");
			//tra ve tat ca cac ban truy van duoc
			return $query->fetchAll();
		}
		//ham tinh tong so ban ghi
		public function modelTotalLocation($location_id){
			//---
			$conn = Connection::getInstance();
			$query = $conn->query("SELECT id from products where location_id=$location_id order by id desc");
			//lay tong so ban ghi
			return $query->rowCount();
			//---
		}
		//lay mot ban ghi
		public function modelGetProduct($id){
			//---
			$conn = Connection::getInstance();
			$query = $conn->query("SELECT * from products where id = $id");
			//tra ve mot ban ghi
			return $query->fetch();
			//---
		}
		//lay category 
		public function modelGetCategory($category_id){
			//---
			$conn = Connection::getInstance();
			$query = $conn->query("SELECT name from categories where id = $category_id");
			//tra ve mot ban ghi
			$result = $query->fetch();
			return $result->name;
			//---
		}
		//lay location
		public function modelGetLocation($location_id){
			//---
			$conn = Connection::getInstance();
			$query = $conn->query("SELECT name from location where id = $location_id");
			//tra ve mot ban ghi
			$result = $query->fetch();
			return $result->name;
			//---
		}
		public function modelGetProductsImg($id){
			//---
			$conn = Connection::getInstance();
			$query = $conn->query("SELECT * from img_products where id_product = $id");
			//tra ve mot ban ghi
			return $result = $query->fetchAll();
			
			//---
		}
		//lay ten chu nha tro
		public function modelGetNameOwner($owner_id){
			//---
			$conn = Connection::getInstance();
			$query = $conn->query("SELECT name from owner_users where id = $owner_id");
			//tra ve mot ban ghi
			$result = $query->fetch();
			return $result->name;
			//---
		}
		//lay PhoneNumber chu nha tro
		public function modelGetPhoneOwner($owner_id){
			//---
			$conn = Connection::getInstance();
			$query = $conn->query("SELECT phonenumber from owner_users where id = $owner_id");
			//tra ve mot ban ghi
			$result = $query->fetch();
			return $result->phonenumber;
			//---
		}

		//lay tca ban ghi
		public function modelGetAllProduct(){
			$conn = Connection::getInstance();
			$query = $conn->query("SELECT * from products");
			$result = $query->fetchAll();
			return $result;
		}

		//lay 6 ban ghi san pham noi bat
		public function modelHotProduct(){
			$conn = Connection::getInstance();
			$query = $conn->query("SELECT * from products where hot=1 order by id desc limit 0,6");
			return $query->fetchAll();
		}
		//lay ten products
		public function modelGetNameProducts($id){
			//---
			$conn = Connection::getInstance();
			$query = $conn->query("SELECT name from products where id = $id");
			//tra ve mot ban ghi
			$result = $query->fetch();
			return $result->name;
			//---
		}

	}
	
 ?>