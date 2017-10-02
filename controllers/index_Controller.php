<?php
class index_Controller extends Controller{
	public function __construct(){
		parent::__construct();
	}
	public function index(){

		$data='';
		$listSellersMonth =$this->model->getSellersMonth();
		if($listSellersMonth !='') {
			//Model::$data=$this->model->fetch();
			$data['listSellersMonth']=$this->model->fetch();
			/*$data = array(
				'lstProductSell' =>$this->model->fetch(),
				'heading' => $this->model->getNewProductsEnter(),
				'message' => 'My Message'
			);*/
		}
		$listNewProductsEnter =$this->model->getNewProductsEnter();
		if($listNewProductsEnter !='') {
			$data['listNewProductsEnter']=$this->model->fetch();
		}
		$this->view->data=$data;

		$this->view->render("index/index");
		/*if($this->model->result !=0) {
			//echo "Thanh c ong 1";
		}
			//$this->model->test();
			//DO hoi trc do ben kia da goij loadmodel
			//THi tuong ung voi modle do xe co thuoc tinh data, conn, gio thi truy cap thui
			if($this->model->data==0){
				//echo "khong wco gi";
			}
			else{
				//echo "Thanh c ong 2";
				foreach($this->model->data as $row){
					//echo $row["name"];
				}
			}
		$data['title']=$this->model->data;
		$comments=$this->model->data;
		Session::set("login",$comments);
		$d['text'] = "ahoy!";
		$this->view->render("index/index");
		//$this->view->render("index/index",$this->model->data);*/
	}

}
?>