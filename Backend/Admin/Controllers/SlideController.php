<?php 
	include "Models/SlideModel.php";
	class SlideController extends SlideModel{
		public function read(){
			//quy dinh so ban ghi tren mot trang
			$recordPerPage = 3;
			//tinh so trang
			$numPage = ceil($this->modelTotal()/$recordPerPage);
			//goi ham de lay du lieu
			$listRecordSlide = $this->modelRead($recordPerPage);
		
			//load view
			include "Views/SlideView.php";
		}
		//edit ban ghi
		public function update(){
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			//goi ham de lay du lieu truyen ra view
			$record = $this->modelGetRecord($id);
			$action = "index.php?controller=slide&action=updatePost&id=$id";
			//goi view
			include "Views/SlideCreateUpdateView.php";
		}
		//edit khi an nut submit
		public function updatePost(){
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			//goi ham de update du lieu
			$this->modelUpdate($id);
			//di chuyen den trang danh sach cac ban ghi
			echo "<script>location.href='index.php?controller=slide&action=read';</script>";
		}
		//create ban ghi
		public function create(){
			$action = "index.php?controller=slide&action=createPost";
			//goi view
			include "Views/SlideCreateUpdateView.php";
		}
		//create ghi an nut submit
		public function createPost(){
			//goi ham de insert ban ghi
			$this->modelCreate();
			//di chuyen den trang danh sach cac ban ghi
			echo "<script>location.href='index.php?controller=slide&action=read';</script>";
		}
		//delete ban ghi
		public function delete(){
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			//goi ham de update du lieu
			$this->modelDelete($id);
			//di chuyen den trang danh sach cac ban ghi
			echo "<script>location.href='index.php?controller=slide&action=read';</script>";
		}
		
	}
 ?>