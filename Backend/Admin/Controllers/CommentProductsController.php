<?php 
	include "Models/CommentProductsModel.php";
	class CommentProductsController extends CommentProductsModel{
		public function read(){
			//quy dinh so ban ghi tren mot trang
			$recordPerPage = 10;
			//tinh so trang
			$numPage = ceil($this->modelTotal()/$recordPerPage);
			//goi ham de lay du lieu
			$listRecord = $this->modelRead($recordPerPage);
		
			//load view
			include "Views/CommentProductsView.php";
		}
		//delete ban ghi
		public function delete(){
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			//goi ham de update du lieu
			$this->modelDelete($id);
			//di chuyen den trang danh sach cac ban ghi
			echo "<script>location.href='index.php?controller=commentProducts&action=read';</script>";
		}
	} 

 ?>