<?php 
	/**
	 *  
	 */
	class ProductsModel 
	{
		//ham liet ke danh sach cac ban ghi, co phan trang
		public function modelRead($category_id,$recordPerPage){
			//lay tong to so ban ghi
			$total = $this->modelTotal($category_id);
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
			$query = $conn->query("select * from products where category_id=$category_id $sqlOrderBy limit $from, $recordPerPage");
			//tra ve tat ca cac ban truy van duoc
			return $query->fetchAll();
		}

	}
	
 ?>