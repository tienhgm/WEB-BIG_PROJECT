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
		public function modelCreate(){
			//---
			$name = $_POST["name"];
			$category_id = $_POST["category_id"];
			$location_id = $_POST["location_id"];
			$price = $_POST["price"];			
			$address = $_POST["address"];
			$area = $_POST["area"];	
			$title = $_POST["title"];
			$description = $_POST["description"];	
			$phong_tam = $_POST["phong_tam"];
			$phong_bep = $_POST["phong_bep"];		
			$chung_chu = isset($_POST["chung_chu"]) ? 1 : 0;
			$dieu_hoa = isset($_POST["dieu_hoa"]) ? 1 : 0;
			$ban_cong = isset($_POST["ban_cong"]) ? 1 : 0;
			$hot = isset($_POST["hot"]) ? 1 : 0;
			$gia_dien_nuoc = $_POST["gia_dien_nuoc"];
			$quantities= $_POST["quantities"];
			$photo="";
			
			if($_FILES["photo"]["name"]!= ""){
				$photo = time().$_FILES["photo"]["name"];
				//thuc hien upload file(filename)
				move_uploaded_file($_FILES["photo"]["tmp_name"], "../../Assets/Upload/TitleImg/".$photo);
			}

			if(isset($_FILES['images'])){
				$files = $_FILES['images'];
				$file_names = $files['name'];
				foreach ($file_names as $key=>$value) {
					# code...
					move_uploaded_file($files['tmp_name'][$key],'../../Assets/Upload/Products/'.$value);
				}
			}

			//---
			$conn = Connection::getInstance();
			$conn->exec("insert into products set name='$name',owner_id=1, category_id=$category_id,location_id= $location_id, price=$price,address='$address',area=$area, title='$title',description='$description', phong_tam='$phong_tam', phong_bep='$phong_bep', chung_chu=$chung_chu,dieu_hoa=$dieu_hoa,ban_cong=$ban_cong,hot=$hot,gia_dien_nuoc='$gia_dien_nuoc',quantities=$quantities,photo ='$photo',date=now(),active=1");

			$id_product= $conn->lastInsertId();

			foreach ($file_names as $key => $value) {
				$conn->query("INSERT INTO img_products(id_product,image) VALUES('$id_product','$value')");
			}
		}
				//update ban ghi
		public function modelUpdate($id){
			//---
			$name = $_POST["name"];
			$category_id = $_POST["category_id"];
			$location_id = $_POST["location_id"];
			$price = $_POST["price"];			
			$address = $_POST["address"];
			$area = $_POST["area"];	
			$title = $_POST["title"];	
			$description = $_POST["description"];	
			$phong_tam = $_POST["phong_tam"];	
			$phong_bep = $_POST["phong_bep"];		
			$chung_chu = isset($_POST["chung_chu"]) ? 1 : 0;
			$dieu_hoa = isset($_POST["dieu_hoa"]) ? 1 : 0;
			$ban_cong = isset($_POST["ban_cong"]) ? 1 : 0;
			$hot = isset($_POST["hot"]) ? 1 : 0;
			$gia_dien_nuoc = $_POST["gia_dien_nuoc"];
			$quantities= $_POST["quantities"];
			
			//---
			$conn = Connection::getInstance();
			$conn->query("update products set name='$name', category_id=$category_id,location_id= $location_id, price=$price,address='$address',area=$area, title='$title', description='$description', phong_tam='$phong_tam', phong_bep='$phong_bep', chung_chu=$chung_chu,dieu_hoa=$dieu_hoa,ban_cong=$ban_cong,hot =$hot,gia_dien_nuoc='$gia_dien_nuoc',quantities=$quantities where id = $id");
			//neu user chon anh thi thuc hien upload anh
			if($_FILES["photo"]["name"]!= ""){
				//---
				//xoa anh cu truoc khi upload anh moi
				$oldImage = $conn->query("select photo from products where id=$id");
				if($oldImage->rowCount() > 0){
					//lay mot ban ghi
					$oldPhoto = $oldImage->fetch();
					//xoa anh cu bang ham unlink
					if(file_exists('../../Assets/Upload/TitleImg/'.$oldPhoto->photo))
						unlink('../../Assets/Upload/TitleImg/'.$oldPhoto->photo);
				}
				//---
				$photo = time().$_FILES["photo"]["name"];
				//thuc hien upload file
				move_uploaded_file($_FILES["photo"]["tmp_name"], "../../Assets/Upload/TitleImg/".$photo);
				//update truong photo
				$conn->query("update products set photo='$photo' where id=$id");
			}
			if(isset($_FILES['images'])){
				//xoa anh cu truoc khi upload anh moi
				$oldImage = $conn->query("select image from img_products where id_product=$id");
				if($oldImage->rowCount() > 0){
					//lay ban ghi
					$oldPhoto = $oldImage->fetchAll();
					//xoa anh cu bang ham unlink
					foreach ($oldPhoto as $rows) {
						# code...
						unlink('../../Assets/Upload/Products/'.$rows->image);
						$conn->query("delete from img_products where id_product = $id");
					}
				}

				$files = $_FILES['images'];
				$file_names = $files['name'];
				foreach ($file_names as $key=>$value) {
					# code...
					move_uploaded_file($files['tmp_name'][$key],'../../Assets/Upload/Products/'.$value);
				} 
			}
			foreach ($file_names as $key => $value) {
					$conn->query("INSERT INTO img_products(id_product,image) VALUES('$id','$value')");
			}
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
		//lay cac location
		public function modelGetLocation(){
			//---
			$conn = Connection::getInstance();
			$query = $conn->query("select * from location order by id desc");
			//tra ve nhieu ban ghi
			return $query->fetchAll();
			//---
		}
		//lay ten location
		public function modelGetLocationName($id){
			//---
			$conn = Connection::getInstance();
			$query = $conn->query("select * from location where id = $id");
			//tra ve mot ban ghi
			$record = $query->fetch();
			return $record->name;
			//---
		}
		//lay danh sach cac cot con lai trong table products
        public function modelListProductsDetail($id){
			//---
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where id = $id");
			//tra ve mot ban ghi
			return $query->fetchAll();
			//---
        }	
        public function modelSetActive($id){
            //---
			$conn = Connection::getInstance();
			$query = $conn->query("update products set active =1 where id = $id");
			//tra ve mot ban ghi
			return $query->fetch();
			//---
        }
	}
 ?>