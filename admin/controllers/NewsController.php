<?php 
	//include file model vao day
	include "models/NewsModel.php";
	class NewsController extends Controller{
		//ke thua class NewsModel
		use NewsModel;
		public function index(){
			//quy dinh so ban ghi tren mot trang
			$recordPerPage = 20;
			//tinh so trang
			$numPage = ceil($this->modelTotalRecord()/$recordPerPage);
			//lay du lieu tu model
			$data = $this->modelRead($recordPerPage);
			//goi view, truyen du lieu ra view
			$this->loadView("NewsView.php",["data"=>$data,"numPage"=>$numPage]);
		}
		//sua ban ghi
		public function update(){
			//lay id truyen tu url
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			//tao bien $action de dua vao thuoc tinh $action cua the form
			$action = "index.php?controller=news&action=updatePost&id=$id";
			//lay mot ban ghi
			$record = $this->modelGetRecord($id);
			//goi view, truyen du lieu ra view
			$this->loadView("NewsFormView.php",["action"=>$action,"record"=>$record]);
		}
		//khi an nut submit (update ban ghi)
		public function updatePost(){
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			//goi ham modelUpdate de update ban ghi
			$this->modelUpdate($id);
			//quay tro lai trang News
			header("location:index.php?controller=News");
		}
		//create ban ghi
		public function create(){
			//tao bien $action de dua vao thuoc tinh $action cua the form
			$action = "index.php?controller=news&action=createPost";
			//goi view, truyen du lieu ra view
			$this->loadView("NewsFormView.php",["action"=>$action]);
		}
		//khi an nut submit (create ban ghi)
		public function createPost(){

			//goi ham modelCreate de update ban ghi
			$this->modelCreate($id);
			//quay tro lai trang News
			header("location:index.php?controller=news");
		}
		//xoa ban ghi
		public function delete(){
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			//goi ham modelDelete
			$this->modelDelete($id);
			//quay tro lai trang News
			header("location:index.php?controller=news");
		}
	}
 ?>x