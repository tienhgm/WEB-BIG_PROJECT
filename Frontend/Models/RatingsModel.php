<?php
    class RatingsModel{
        //hàm lấy ds các bản ghi
        public function modelRead(){
            $conn = Connection::getInstance();
			$query = $conn->query("select * from ratings order by id desc");
			//tra ve tat ca cac ban truy van duoc
			return $query->fetchAll();
        }
        //hàm thêm 1 bản ghi
        public function modelCreateRating(){
            $star = $_POST["star"];
            $comment = $_POST["comment"];
            //--
            $conn = Connection::getInstance();
            $conn->exec("insert into ratings set star='$star',product_id='{$_SESSION['prId']}',comment='$comment',renter_users_id='{$_SESSION['renterId']}'");
        }
    }
?>