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
		//chi tiet tin tuc
		public function detail(){
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			$record = $this->modelGetRecord($id);
			$this->loadView("NewsDetailView.php",["record"=>$record, "id"=>$id]);
		}		
	}
 ?>