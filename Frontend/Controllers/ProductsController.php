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
			$listRecordRating= $this->modelReadRating($id);
			$totalRating = $this->modelTotalRating($id);
			$avgMark = $this->modelAvgRating($id);
			//load view
			include "Views/ProductsDetailView.php";
			$_SESSION["prId"]= $id;
		}
		//xem cac san pham hot
		public function readHomeHotProducts(){
			$hotProduct = $this->modelHotProduct(); 
			//load view 
			include "Views/HomeHotProductsView.php";
		}
		//tim kiem theo muc gia
		public function searchPrice(){
			$fromPrice = isset($_GET["fromPrice"]) ? $_GET["fromPrice"] :0;
			$toPrice = isset($_GET["toPrice"]) ? $_GET["toPrice"] :0;
			//--
			//quy dinh so ban ghi tren mot trang
			$recordPerPage = 20;
			//tinh so trang
			$numPage = ceil($this->modelTotalSearchPrice($fromPrice,$toPrice/$recordPerPage));
			//goi ham de lay du lieu
			$listRecordPrice = $this->modelReadSearchPrice($fromPrice,$toPrice,$recordPerPage);
			//load view
			include "Views/ProductsSearchPriceView.php";
		}

		public function createPostRating(){
            if(isset($_SESSION["renterEmail"])){
                $this->modelCreateRating();
                echo "<script>location.href= 'index.php?controller=products&action=detail&id=".$_SESSION["prId"]." ';</script>";
                unset($_SESSION['prId']);
            }
            else{
                echo "<script>window.alert('Đăng nhập để đánh giá');location.href='index.php?controller=account&action=login';</script>";
            }
        }
       
	}
 ?>