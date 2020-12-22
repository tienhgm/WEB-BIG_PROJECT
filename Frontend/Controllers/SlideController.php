<?php 
	include "Models/SlideModel.php";
	class SlideController extends SlideModel{
		public function read(){
			$slides = $this->modelGetSlide(); 
			//load view 
			include "Views/SlideView.php";
		}
	}

 ?>