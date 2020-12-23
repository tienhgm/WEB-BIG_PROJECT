<?php 
	class SlideModel{
		//lay 6 ban ghi san pham noi bat
		public function modelGetSlide(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from slide order by id asc");
			return $query->fetchAll();
		}
		public function modelGetMinId(){
			$conn = Connection::getInstance();
			$query = $conn->query("select id from slide order by id asc limit 1");
			return $query->fetch();
		}
	}
 ?>