<?php 
	class SlideModel{
		//lay 6 ban ghi san pham noi bat
		public function modelGetSlide(){
			$conn = Connection::getInstance();
			$query = $conn->query("SELECT * from slide order by id asc");
			return $query->fetchAll();
		}
		public function modelGetMinId(){
			$conn = Connection::getInstance();
			$query = $conn->query("SELECT id from slide order by id asc limit 1");
			return $query->fetch();
		}
	}
 ?>