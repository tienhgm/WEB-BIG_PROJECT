<?php 
	class SlideModel{
		//lay 6 ban ghi san pham noi bat
		public function modelGetSlide(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from slide order by id asc");
			return $query->fetchAll();
		}
	}
 ?>