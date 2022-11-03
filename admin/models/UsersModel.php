<?php 
	trait UsersModel{
		//lay ve danh sach cac ban ghi
		public function modelRead($recordPerPage){
			//lay bien truyen tu url
			$page = isset($_GET["p"]) && $_GET["p"] && $_GET["p"] > 0 ? $_GET["p"]-1 : 0;
			//lay tu ban ghi nao
			$from = $page * $recordPerPage;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from users order by id desc limit $from, $recordPerPage");
			//tra ve nhieu ban ghi
			
			return $query->fetchAll();
			
		}
		//tinh tong so cac ban ghi
		public function modelTotalRecord(){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from users");
			//tra ve so luong ban ghi
			
			return $query->rowCount();
			
		}
		//lay mot ban ghi tuong ung voi id truyen vao
		public function modelGetRecord($id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->prepare("select * from users where id=:var_id");
			//thuc thi truy van, co truyen tham so vao cau lenh sql
			$query->execute(["var_id"=>$id]);
			//tra ve mot ban ghi
			return $query->fetch();
		}
		public function modelUpdate($id){
			$name = $_POST["name"];
			$password = $_POST["password"];
			//update name
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->prepare("update users set name = :var_name where id=:var_id");
			//thuc thi truy van, co truyen tham so vao cau lenh sql
			$query->execute(["var_id"=>$id,"var_name"=>$name]);
			//neu password khong rong thi update password
			if($password != ""){
				//ma hoa password
				$password = md5($password);
				//thuc hien truy van
				$query = $conn->prepare("update users set password = :var_password where id=:var_id");
				//thuc thi truy van, co truyen tham so vao cau lenh sql
				$query->execute(["var_id"=>$id,"var_password"=>$password]);
			}
		}
		public function modelCreate(){
			$name = $_POST["name"];
			$password = $_POST["password"];
			$email = $_POST["email"];
			//ma hoa password
			$password = md5($password);
			//update name
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->prepare("insert into users set name = :var_name,email = :var_email,password = :var_password");
			//thuc thi truy van, co truyen tham so vao cau lenh sql
			$query->execute(["var_name"=>$name,"var_email"=>$email,"var_password"=>$password]);
		}
		public function modelDelete($id){
			
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->prepare("delete from users where id=:var_id");
				//thuc hien truy van
	
			//thuc thi truy van, co truyen tham so vao cau lenh sql
			$query->execute(["var_id"=>$id]);
			}
		}
 ?>