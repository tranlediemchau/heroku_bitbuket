<?php
class user_Controller extends Controller{
	public function __construct(){
	   parent::__construct();
	}
	public function index(){
		$data='';

		$lstAccount =$this->model->getListAccount();

		if($lstAccount !='') {
			$data['lstAccount']=$this->model->fetch();
		}
		$this->view->data=$data;
		$this->view->render("user/index");
	}
	public function create(){
		$data='';
		$lstRole =$this->model->getListRole();

		if($lstRole !='') {
			$data['lstRole']=$this->model->fetch();
		}
		$this->view->data=$data;
		$this->view->render("user/create");
	}
	public function delete($id){

		if($this->model->delete($id) == false)
		{
			//\Session::flash('flash_message','Bạn đã xóa sản phẩm  thành công');
			$this->view->redirect("admin/user/index");
			echo "<p style='color:red'>Delete tai khoan thanh cong</p>";
		}
		else
		{

		}

	}
	public function edit($id){


	}
	public function insert()
	{

		/*//Cach 1: USe $_POST[]
		$account= array();
		$name=$_POST['txtName'];
		$email= $_POST['txtEmail'];
		$password= $_POST['txtPassword'];
		$confirm=$_POST['txtConfirmPassword'];
		$role=$_POST['role'];
		$date = date('m/d/Y h:i:s a', time());

		$account= array('name'=>$name,'email'=> $email,'password'=> $password,'price2'=> $price2,'discription'=> $discription,
			'thumb1'=>$thumb1,'thumb2'=> $thumb2,'thumb3'=>$thumb3,'type'=> $type,'producer'=> $producer,'countaccess'=> $countaccess);
		//Cach 1 gui $product qua binh thuong, sau do ben product_Model values() chi can su dung {$product['name']}
		//Xem chi tiet: http://stackoverflow.com/questions/15056528/insert-php-array-into-mysql-table
		//Cach chuyen du lieu qua model_CACH 2
		// explode($delimiter, $string): chuyển một chuỗi string thành một mảng các phần tử với ký tự tách mảng là delimiter.
		//$product=implode("','",$product[1]);
		// $product="'".$product."'";
		if($this->model->insert($product) == true)
		{
			$this->view->redirect("admin");
		}
		else
		{
			echo "Xoa that bai";
			//$this->view->redirect("admin");
			// echo 'Xóa sản phẩm thành công';
			// $this->view->redirect("admin");
		}*/
	}
}
?>