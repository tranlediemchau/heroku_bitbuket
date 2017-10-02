<?php
class index_Controller extends Controller{
	public function __construct(){
		parent::__construct();
	}
	public function index(){

		$lstProduct =$this->model->index();
		if($lstProduct !='') {
			$data['lstProduct']=$this->model->fetch();
		}
		$this->view->data=$data;
		$this->view->render("index/index");
	}

}
?>