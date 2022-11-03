<?php 
	trait SearchModel{
		//lay ve danh sach cac ban ghi
		public function modelRead($recordPerPage){
			$key = isset($_GET["key"]) ? $_GET["key"] : "";
			//lay bien truyen tu url
			$page = isset($_GET["p"]) && $_GET["p"] && $_GET["p"] > 0 ? $_GET["p"]-1 : 0;
			//lay tu ban ghi nao
			$from = $page * $recordPerPage;
			//---
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van -> hien thi danh muc co parent_id=0
			$query = $conn->query("select * from products where name like '%$key%' order by id desc limit $from, $recordPerPage");
			//tra ve nhieu ban ghi
			return $query->fetchAll();
		}
		//tinh tong so cac ban ghi
		public function modelTotalRecord(){
			$key = isset($_GET["key"]) ? $_GET["key"] : "";
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from products where name like '%$key%'");
			//tra ve so luong ban ghi
			return $query->rowCount();
		}
		public function modelAjaxSearch(){
			$key = isset($_GET["key"]) ? $_GET["key"] : "";
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from products where name like '%$key%'");
			//tra ve so luong ban ghi
			return $query->fetchAll();
		}
		public function modelReadSearchPrice($recordPerPage){
			$fromPrice = isset($_GET["fromPrice"]) ? $_GET["fromPrice"] : "";
			$toPrice = isset($_GET["toPrice"]) ? $_GET["toPrice"] : "";
			$key = isset($_GET["toPrice"]) ? $_GET["toPrice"] : "";
			//lay bien truyen tu url
			$page = isset($_GET["p"]) && $_GET["p"] && $_GET["p"] > 0 ? $_GET["p"]-1 : 0;
			//lay tu ban ghi nao
			$from = $page * $recordPerPage;
			//---
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van -> hien thi danh muc co parent_id=0
			$query = $conn->query("select * from products where (price - (price * discount)/100) >= $fromPrice and (price - (price * discount)/100)<= $toPrice order by id desc limit $from, $recordPerPage");
			//tra ve nhieu ban ghi
			return $query->fetchAll();
		}
		//tinh tong so cac ban ghi
		public function modelTotalRecordSearchPrice(){
			$fromPrice = isset($_GET["fromPrice"]) ? $_GET["fromPrice"] : "";
			$toPrice = isset($_GET["toPrice"]) ? $_GET["toPrice"] : "";
			$key = isset($_GET["key"]) ? $_GET["key"] : "";
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van 
			$query = $conn->query("select * from products where (price - (price * discount)/100) >= $fromPrice and (price - (price * discount)/100)<= $toPrice");
			//tra ve so luong ban ghi
			return $query->rowCount();
		}
	}
 ?>