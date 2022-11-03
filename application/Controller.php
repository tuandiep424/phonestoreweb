<?php 
	class Controller{
		public $fileName = NULL;
		public $fileLayout = NULL;
		public $view = NULL;
		//ham hien thi view
		public function loadView($fileName, $data = NULL){
			if($data != NULL)
				extract($data);
			//kiem tra xem duong dan file co ton tai khong
			if(file_exists("views/$fileName")){
				//doc noi dung ben trong duong dan $fileName de gan vao mot bien
				ob_start();
					include "views/$fileName";
					$this->view = ob_get_contents();
				ob_get_clean();
				//kiem rta neu bien $this->fileLayout khong NULL thi include no
				if($this->fileLayout != NULL)
					include "views/$this->fileLayout";
				else
					echo $this->view;
			}else die("Đường dẫn views/$fileName không tồn tại");
		}
		//ham kiem tra dang nhap (su dung cho trang admin)
		public function authentication(){
			if(isset($_SESSION['email']) == false)
				header("location:index.php?controller=login");
		}
	}
 ?>