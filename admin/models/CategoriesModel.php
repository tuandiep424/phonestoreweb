<?php 
	trait CategoriesModel{
		//lay ve danh sach cac ban ghi
		public function modelRead($recordPerPage){
			//lay bien truyen tu url
			$page = isset($_GET["p"]) && $_GET["p"] && $_GET["p"] > 0 ? $_GET["p"]-1 : 0;
			//lay tu ban ghi nao
			$from = $page * $recordPerPage;
			//---
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from categories where parent_id=0 order by id desc limit $from, $recordPerPage");
			//tra ve nhieu ban ghi
			return $query->fetchAll();
		}
		//tinh tong so cac ban ghi
		public function modelTotalRecord(){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from categories where parent_id=0");
			//tra ve so luong ban ghi
			return $query->rowCount();
		}
		//lay mot ban ghi tuong ung voi id truyen vao
		public function modelGetRecord($id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->prepare("select * from categories where id=:var_id");
			//thuc thi truy van, co truyen tham so vao cau lenh sql
			$query->execute(["var_id"=>$id]);
			//tra ve mot ban ghi
			return $query->fetch();
		}
		public function modelUpdate($id){
			$name = $_POST["name"];
			$parent_id = $_POST["parent_id"];
			//update name
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->prepare("update categories set name = :var_name, parent_id=:var_parent_id where id=:var_id");
			//thuc thi truy van, co truyen tham so vao cau lenh sql
			$query->execute(["var_id"=>$id,"var_name"=>$name,"var_parent_id"=>$parent_id]);
			
			
		}
		public function modelCreate(){
			$name = $_POST["name"];
			$parent_id = $_POST["parent_id"];
			
			//update name
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->prepare("insert into categories set name = :var_name,parent_id=:var_parent_id");
			//thuc thi truy van, co truyen tham so vao cau lenh sql
			$query->execute(["var_name"=>$name,"var_parent_id"=>$parent_id]);
		}
		public function modelDelete($id){
			
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->prepare("delete from categories where id=:var_id");
				//thuc hien truy van
			
			//thuc thi truy van, co truyen tham so vao cau lenh sql
			$query->execute(["var_id"=>$id]);
			}
			//liet ke cac danh muc cap 1 (cap con cua cac danh muc co parent_id = 0)
			public function modelCategoriesSub($categories_id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from categories where parent_id=$categories_id order by id desc");
			//tra ve tat ca ket qua lay duoc
			return $query->fetchAll();
			}
			public function modelCategories($categories_id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from categories where parent_id=0 and id <> $categories_id order by id desc");
			//tra ve tat ca ket qua lay duoc
			return $query->fetchAll();
			}
		}
 ?>