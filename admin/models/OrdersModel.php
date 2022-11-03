<?php 
	trait OrdersModel{
		//lay ve danh sach cac ban ghi
		public function modelRead($recordPerPage){
			//lay bien page truyen tu url
			$page = isset($_GET["p"]) && $_GET["p"] > 0 ? $_GET["p"]-1 : 0;
			//lay tu ban ghi nao
			$from = $page * $recordPerPage;
			//---
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from orders order by id desc limit $from, $recordPerPage");
			//tra ve nhieu ban ghi
			return $query->fetchAll();
		}
		//tinh tong so ban ghi
		public function modelTotalRecord(){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from orders");
			//tra ve so luong ban ghi
			return $query->rowCount();
		}
		//lay mot ban ghi tuong ung voi id truyen vao
		public function modelGetCustomer($customer_id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->prepare("select * from customers where id = :var_customer_id");
			//thuc thi truy van, co truyen tham so vao cau lenh sql
			$query->execute(["var_customer_id"=>$customer_id]);
			//tra ve mot ban ghi
			return $query->fetch();
		}	
		public function modelOrdersDetail($order_id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->prepare("select * from orderdetails where order_id = :var_order_id");
			//thuc thi truy van, co truyen tham so vao cau lenh sql
			$query->execute(["var_order_id"=>$order_id]);
			//tra ve mot ban ghi
			return $query->fetchAll();
		}	
		public function modelGetProduct($product_id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->prepare("select * from products where id = :var_product_id");
			//thuc thi truy van, co truyen tham so vao cau lenh sql
			$query->execute(["var_product_id"=>$product_id]);
			//tra ve mot ban ghi
			return $query->fetch();
		}
		public function modelDelivery($id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("update orders set status = 1 where id = $id");
		}
	}
 ?>