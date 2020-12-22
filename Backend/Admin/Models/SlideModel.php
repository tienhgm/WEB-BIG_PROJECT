<?php 
	class SlideModel{
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
			$query = $conn->query("select * from slide order by id asc limit $from, $recordPerPage");
			//tra ve tat ca cac ban truy van duoc
			return $query->fetchAll();
		}
		//ham tinh tong so ban ghi
		public function modelTotal(){
			//---
			$conn = Connection::getInstance();
			$query = $conn->query("select id from slide order by id desc");
			//lay tong so ban ghi
			return $query->rowCount();
			//---
		}
		//lay mot ban ghi
		public function modelGetRecord($id){
			//---
			$conn = Connection::getInstance();
			$query = $conn->query("select * from slide where id = $id");
			//tra ve mot ban ghi
			return $query->fetch();
			//---
		}
		//update ban ghi
		public function modelUpdate($id){
			//---
			$title = $_POST["title"];	
			$description = $_POST["description"];	
			
			//---
			$conn = Connection::getInstance();
			$conn->query("update slide set title='$title', description='$description', photo='$photo' where id = $id");

			if($_FILES["photo"]["name"]!= ""){
				//---
				//xoa anh cu truoc khi upload anh moi
				$oldImage = $conn->query("select photo from slide where id=$id");
				if($oldImage->rowCount() > 0){
					//lay mot ban ghi
					$oldPhoto = $oldImage->fetch();
					//xoa anh cu bang ham unlink
					if(file_exists('../../Assets/Upload/Slides/'.$oldPhoto->photo))
						unlink('../../Assets/Upload/Slides/'.$oldPhoto->photo);
				}
				//---
				$photo = time().$_FILES["photo"]["name"];
				//thuc hien upload file
				move_uploaded_file($_FILES["photo"]["tmp_name"], "../../Assets/Upload/Slides/".$photo);
				//update truong photo
				$conn->query("update slide set photo='$photo' where id=$id");
			}
		}
		public function modelCreate(){
			//---
			$title = $_POST["title"];	
			$description = $_POST["description"];	
			$photo = "";
			if($_FILES["photo"]["name"]!= ""){
				$photo = time().$_FILES["photo"]["name"];
				//thuc hien upload file
				move_uploaded_file($_FILES["photo"]["tmp_name"], "../../Assets/Upload/Slides/".$photo);
			}

			//---
			$conn = Connection::getInstance();
			$conn->query("insert into slide set title='$title', description='$description', photo='$photo'");
		}
		public function modelDelete($id){
			//---
			$conn = Connection::getInstance();
			//---
			$query = $conn->query("delete from slide where id = $id");
		}
		
	}
 ?>