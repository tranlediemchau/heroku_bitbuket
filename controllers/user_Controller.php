<?php
class user_Controller extends Controller{
	public function __construct(){
	   parent::__construct();
	}
	public function login(){

		if(isset($_POST['login'])){
			if($_POST['user']=="" or $_POST['password']==""){
				$this->view->msg="Hay dien user hay pass";
				$this->view->render("user/login",'templateForm');
			}else{
				//public function login(){return} tu ben day. Ben lop user_Model
				if($this->model->login()==true){
					Session::set("login",true);
					Session::set("user",$_POST['user']);
					$this->view->redirect();
				}else{
					$this->view->redirect("user/login");
				}
			}
		}else{
		    $this->view->render("user/login",'templateForm');
		}
		
	}
	public function register(){

		if(isset($_POST['login'])){
			if($_POST['user']=="" or $_POST['password']==""){
				$this->view->msg="Hay dien user hay pass";
				$this->view->render("user/register",'templateForm');
			}else{
				//public function login(){return} tu ben day. Ben lop user_Model
				if($this->model->login()==true){
					Session::set("login",true);
					Session::set("user",$_POST['user']);
					$this->view->redirect();
				}else{
					$this->view->redirect("user/register");
				}
			}
		}else{
			$this->view->render("user/register",'templateForm');
		}

	}
	public function logout(){
		Session::set("login",false);
		Session::unset_session("user");
		$this->view->redirect();
	}
}
?>