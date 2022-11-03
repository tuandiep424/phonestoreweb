<?php 
	trait ProductsModel{
		//lay ve danh sach cac ban ghi
		public function modelRead($recordPerPage){
			//lay bien truyen tu url
			$page = isset($_GET["p"]) && $_GET["p"] && $_GET["p"] > 0 ? $_GET["p"]-1 : 0;
			//lay tu ban ghi nao
			$from = $page * $recordPerPage;
			//---
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van -> hien thi danh muc co parent_id=0
			$query = $conn->query("select * from products order by id desc limit $from, $recordPerPage");
			//tra ve nhieu ban ghi
			return $query->fetchAll();
		}
		//tinh tong so cac ban ghi
		public function modelTotalRecord(){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from products ");
			//tra ve so luong ban ghi
			return $query->rowCount();
		}
		//lay mot ban ghi tuong ung voi id truyen vao
		public function modelGetRecord($id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->prepare("select * from products where id=:var_id");
			//thuc thi truy van, co truyen tham so vao cau lenh sql
			$query->execute(["var_id"=>$id]);
			//tra ve mot ban ghi
			return $query->fetch();
		}
		public function modelUpdate($id){
			$name = $_POST["name"];
			$category_id = $_POST["category_id"];
			$description = $_POST["description"];
			$content = $_POST["content"];
			$hot = isset($_POST["hot"]) ? 1 : 0;
			$price = $_POST["price"];
			$discount = $_POST["discount"];
			$monitor = $_POST["monitor"];
			$operating_system = $_POST["operating_system"];
			$battery = $_POST["battery"];
			$weight = $_POST["weight"];
			$screen_technology = $_POST["screen_technology"];
			$rear_camera = $_POST["rear_camera"];
			$front_camera = $_POST["front_camera"];
			$chipset = $_POST["chipset"];
			$ram = $_POST["ram"];
			$rom = $_POST["rom"];
			$sim = $_POST["sim"];			
			//update name
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->prepare("update products set 
			name =:var_name,
			category_id=:var_category_id,
			description=:var_description,
			content=:var_content,
			hot=:var_hot,
			price=:var_price,
			discount=:var_discount,
			monitor=:var_monitor,
			operating_system=:var_operating_system,
			battery=:var_battery,
			weight=:var_weight,
			screen_technology=:var_screen_technology,
			rear_camera=:var_rear_camera,
			front_camera=:var_front_camera,
			chipset=:var_chipset,
			ram=:var_ram,
			rom=:var_rom,
			sim=:var_sim where id=:var_id");
			//thuc thi truy van, co truyen tham so vao cau lenh sql
			$query->execute(["var_id"=>$id,
			"var_name"=>$name,
			"var_category_id"=>$category_id,
			"var_description"=>$description,
			"var_content"=>$content,
			"var_hot"=>$hot,
			"var_price"=>$price,
			"var_discount"=>$discount,
			"var_monitor"=>$monitor,			
			"var_operating_system"=>$operating_system,
			"var_battery"=>$battery,
			"var_weight"=>$weight,
			"var_screen_technology"=>$screen_technology,
			"var_rear_camera"=>$rear_camera,
			"var_front_camera"=>$front_camera,
			"var_chipset"=>$chipset,
			"var_ram"=>$ram,
			"var_rom"=>$rom,
			"var_sim"=>$sim,
		]);	
			//---
			//neu user upload anh thi thuc hien upload
			$photo = "";
			if($_FILES['photo']['name'] != ""){
				//---
				//lay anh cu de xoa
				$oldPhoto = $conn->query("select photo from products where id=$id");
				if($oldPhoto->rowCount() > 0){
					$record = $oldPhoto->fetch();
					//xoa anh
					if($record->photo != "" && file_exists("../assets/upload/products/".$record->photo))
						unlink("../assets/upload/products/".$record->photo);
				}
				//---
				$photo = time()."_".$_FILES['photo']['name'];
				//upload file vao thu muc assets/upload/products
				move_uploaded_file($_FILES['photo']['tmp_name'], "../assets/upload/products/$photo");
				$query = $conn->prepare("update products set photo=:var_photo where id=:var_id");
				$query->execute(["var_photo"=>$photo,"var_id"=>$id]);
			}
			//---		
		}
		public function modelCreate(){
			$name = $_POST["name"];
			$category_id = $_POST["category_id"];
			$description = $_POST["description"];
			$content = $_POST["content"];
			$hot = isset($_POST["hot"]) ? 1 : 0;
			$price = $_POST["price"];
			$discount = $_POST["discount"];
			
			$monitor = $_POST["monitor"];
			$operating_system = $_POST["operating_system"];
			$battery = $_POST["battery"];
			$weight = $_POST["weight"];
			$screen_technology = $_POST["screen_technology"];
			$rear_camera = $_POST["rear_camera"];
			$front_camera = $_POST["front_camera"];
			$chipset = $_POST["chipset"];
			$ram = $_POST["ram"];
			$rom = $_POST["rom"];
			$sim = $_POST["sim"];
			//update name
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//---
			//neu user upload anh thi thuc hien upload
			$photo = "";
			if($_FILES['photo']['name'] != ""){
				$photo = time()."_".$_FILES['photo']['name'];
				//upload file vao thu muc assets/upload/products
				move_uploaded_file($_FILES['photo']['tmp_name'], "../assets/upload/products/$photo");
			}
			//---
			//thuc hien truy van
			$query = $conn->prepare("insert into products set 
			name =:var_name,
			category_id=:var_category_id,
			description=:var_description,
			content=:var_content,
			hot=:var_hot,
			price=:var_price,
			discount=:var_discount,
			monitor=:var_monitor,
			operating_system=:var_operating_system,
			battery=:var_battery,
			weight=:var_weight,
			screen_technology=:var_screen_technology,
			rear_camera=:var_rear_camera,
			front_camera=:var_front_camera,
			chipset=:var_chipset,
			ram=:var_ram,
			rom=:var_rom,
			sim=:var_sim"
				
		);
			
			//thuc thi truy van, co truyen tham so vao cau lenh sql
			$query->execute([
			"var_name"=>$name,
			"var_category_id"=>$category_id,
			"var_description"=>$description,
			"var_content"=>$content,
			"var_hot"=>$hot,
			"var_price"=>$price,
			"var_discount"=>$discount,
			"var_monitor"=>$monitor,			
			"var_operating_system"=>$operating_system,
			"var_battery"=>$battery,
			"var_weight"=>$weight,
			"var_screen_technology"=>$screen_technology,
			"var_rear_camera"=>$rear_camera,
			"var_front_camera"=>$front_camera,
			"var_chipset"=>$chipset,
			"var_ram"=>$ram,
			"var_rom"=>$rom,
			"var_sim"=>$sim,	
			
		]);	
		}
		public function modelDelete($id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//---
			//lay anh cu de xoa
			$oldPhoto = $conn->query("select photo from products where id=$id");
			if($oldPhoto->rowCount() > 0){
				$record = $oldPhoto->fetch();
				//xoa anh
				if($record->photo != "" && file_exists("../assets/upload/products/".$record->photo))
					unlink("../assets/upload/products/".$record->photo);
			}
			//---
			//thuc hien truy van
			$query = $conn->prepare("delete from products where id=:var_id");
			//thuc thi truy van, co truyen tham so vao cau lenh sql
			$query->execute(["var_id"=>$id]);
		}		
		//liet ke cac danh muc cap 0
		public function modelCategories(){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from categories where parent_id=0 order by id desc");
			//tra ve tat ca cac ket qua lay duoc
			return $query->fetchAll();
		}
		//liet ke cac danh muc cap 1
		public function modelCategoriesSub($category_id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from categories where parent_id=$category_id order by id desc");
			//tra ve tat ca cac ket qua lay duoc
			return $query->fetchAll();
		}
	}
 ?>	