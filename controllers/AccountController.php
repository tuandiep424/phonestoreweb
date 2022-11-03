<?php 
	include "models/AccountModel.php";
	class AccountController extends Controller{
		use AccountModel;
		//hien thi form dang ky
		public function register(){
			$this->loadView("RegisterView.php");
		}
		//khi an nut submit cua form dang ky
		public function registerPost(){
			$this->modelRegister();
		}
		//hien thi form login
		public function login(){
			$this->loadView("LoginView.php");
		}
		//khi an nut submit cua form login
		public function loginPost(){
			$this->modelLogin();
		}
		//dang xuat tai khoan
		public function logout(){
			$this->modelLogout();
		}
	}
 ?>