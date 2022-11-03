<?php 
	session_start();
	//load file ket noi csdl
	include "../application/Connection.php"; 
	//load file Controller.php
	include "../application/Controller.php";
 ?>
<?php 
	//load dong mvc dua vao tham so controller truyen len url
 	$controller = isset($_GET["controller"]) ? $_GET["controller"] : "Home";
 	$action = isset($_GET["action"]) ? $_GET["action"] : "index";
 	//tao duong dan vat ly cua file controller trong MVC. VD: controllers/PhongBanController.php
 	$controllerFile = "controllers/".ucfirst($controller)."Controller.php";
 	//file_exists(duongdan) tra ve true neu file ton tai, nguoc lai tra ve false
 	if(file_exists($controllerFile)){
 		include $controllerFile;
 		$controllerClass = ucfirst($controller)."Controller";
 		//khoi tao object cua class
 		$obj = new $controllerClass();
 		//goi den action
 		$obj->$action();
 	}else die("file $controllerFile không tồn tại");
 ?>