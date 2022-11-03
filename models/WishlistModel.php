<?php 
 	trait WishlistModel{
 		//lay 1 ban ghi tuong ung voi id truyen vao
 		public function modelGetRecord($id){
 			$conn = Connection::getInstance();
			//thuc hien truy van -> hien thi danh muc co parent_id=0
			$query = $conn->query("select * from products where id = $id");
			return $query->fetch();
 		}
 	}
 ?>