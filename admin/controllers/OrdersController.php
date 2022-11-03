<?php 
	//include file model vao day
	include "models/OrdersModel.php";
	class OrdersController extends Controller{
		//ke thua class OrdersModel
		use OrdersModel;
		public function index(){
			//quy dinh so ban ghi tren mot trang
			$recordPerPage = 4;
			//tinh so trang
			$numPage = ceil($this->modelTotalRecord()/$recordPerPage);
			//lay du lieu tu model
			$data = $this->modelRead($recordPerPage);
			//goi view, truyen du lieu ra view
			$this->loadView("OrdersView.php",["data"=>$data,"numPage"=>$numPage]);
		}
		public function detail(){
			$id = isset($_GET['id']) ? $_GET['id'] : 0;
			$data = $this->modelOrdersDetail($id);
			//goi view, truyen du lieu ra view
			$this->loadView("OrdersDetailView.php",["data"=>$data,"id"=>$id]);
		}
		//xac nhan da giao hang
		public function delivery(){
			$id = isset($_GET['id']) ? $_GET['id'] : 0;
			$this->modelDelivery($id);
			header("location:index.php?controller=orders");
		}
	}
 ?>