<?php 
	//include file model vao day
	include "models/UsersModel.php";
	class UsersController extends Controller{
		//ke thua class UsersModel
		use UsersModel;
		public function index(){
			//quy dinh so ban ghi tren mot trang
			$recordPerPage = 4;
			//tinh so trang
			$numPage = ceil($this->modelTotalRecord()/$recordPerPage);
			//lay du lieu tu model
			$data = $this->modelRead($recordPerPage);
			//goi view, truyen du lieu ra view
			$this->loadView("UsersView.php",["data"=>$data,"numPage"=>$numPage]);
		}
		//sua ban ghi
		public function update(){
			//lay id truyen tu url
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			//tao bien $action de dua vao thuoc tinh $action cua the form
			$action = "index.php?controller=users&action=updatePost&id=$id";
			//lay mot ban ghi
			$record = $this->modelGetRecord($id);
			//goi view, truyen du lieu ra view
			$this->loadView("UsersFormView.php",["action"=>$action,"record"=>$record]);
		}
		//khi an nut submit (update ban ghi)
		public function updatePost(){
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			//goi ham modelUpdate de update ban ghi
			$this->modelUpdate($id);
			//quay tro lai trang users
			header("location:index.php?controller=users");
		}
		//create ban ghi
		public function create(){
			//tao bien $action de dua vao thuoc tinh $action cua the form
			$action = "index.php?controller=users&action=createPost";
			//goi view, truyen du lieu ra view
			$this->loadView("UsersFormView.php",["action"=>$action]);
		}
		//khi an nut submit (create ban ghi)
		public function createPost(){

			//goi ham modelCreate de update ban ghi
			$this->modelCreate($id);
			//quay tro lai trang users
			header("location:index.php?controller=users");
		}
		//xoa ban ghi
		public function Delete(){
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			//goi ham modelDelete
			$this->modelDelete($id);
			//quay tro lai trang users
			header("location:index.php?controller=users");
		}
	}
 ?>