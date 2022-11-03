<?php 
	include "models/ProductsModel.php";
	class ProductsController extends Controller{
		//ke thua
		use ProductsModel;
		//cac san pham thuoc danh muc
		public function category(){
			$category_id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
			//quy dinh so ban ghi tren mot trang
			$recordPerPage = 20;
			//tinh so trang
			$numPage = ceil($this->modelTotalRecord()/$recordPerPage);
			//lay du lieu tu model
			$data = $this->modelRead($recordPerPage);
			//goi view, truyen du lieu ra view
			$this->loadView("CategoryProductsView.php",["data"=>$data,"numPage"=>$numPage, "category_id"=>$category_id]);
		}
		//chi tiet san pham
		public function detail(){
			$id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
			$record = $this->modelGetRecord($id);
			//goi view, truyen du lieu ra view
			$this->loadView("DetailProductsView.php",["record"=>$record,"id"=>$id]);
		}
		//danh gia so sao (rating)
		public function rating(){
			$id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
			$this->modelRating();
			//di chuyen den trang chi tiet san pham
			header("location:index.php?controller=products&action=detail&id=$id");
		}
	}
 ?>