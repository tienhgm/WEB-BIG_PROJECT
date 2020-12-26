<?php 
	include "Models/ProductsModel.php";
	class ProductsController extends ProductsModel{
		//danh muc san pham
		public function categories(){
			$category_id = isset($_GET["id"]) ? $_GET["id"] : 0;
			//quy dinh so ban ghi tren mot trang
			$recordPerPage = 9;
			//tinh so trang
			$numPage = ceil($this->modelTotalCategory($category_id)/$recordPerPage);
			//goi ham de lay du lieu
			$listRecordCategory = $this->modelReadCategory($category_id,$recordPerPage);
			//load view
			include "Views/ProductsCategoryView.php";
		}		
		//Location 
		public function Locations(){
			$location_id = isset($_GET["id"]) ? $_GET["id"] : 0;
			//quy dinh so ban ghi tren mot trang
			$recordPerPage = 6;
			//tinh so trang
			$numPage = ceil($this->modelTotalLocation($location_id)/$recordPerPage);
			//goi ham de lay du lieu
			$listRecordLocation = $this->modelReadLocation($location_id,$recordPerPage);
			//load view
			include "Views/ProductsLocationView.php";
		}		
		//chi tiet san pham
		public function detail(){
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			//goi ham trong class Model de lay 1 ban ghi
			$record = $this->modelGetProduct($id);
			$listImg = $this->modelGetProductsImg($id);
			//load view
			include "Views/ProductsDetailView.php";
		}
		public function readHomeHotProducts(){
			$hotProduct = $this->modelHotProduct(); 
			//load view 
			include "Views/HomeHotProductsView.php";
		}
			
	}
 ?>