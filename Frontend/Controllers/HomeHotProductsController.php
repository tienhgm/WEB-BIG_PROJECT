<?php 
	include "Models/HomeHotProductsModel.php";
	class HomeHotProductsController extends HomeHotProductsModel{
		public function read(){
			$hotProduct = $this->modelHotProduct(); 
			//load view 
			include "Views/HomeHotProductsView.php";
		}
	}

 ?>