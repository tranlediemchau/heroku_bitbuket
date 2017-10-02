<?php
class Bootstrap{
	//debug chay lan dau tien test dc la:
	public function __construct(){
		//bien statis use do cho session, do ko lay dc session va chua lam login
		//Do define filepath Admin la http://doanthuctap.com/admin/ ui nen khi ro url http://doanthuctap.com/admin/
		//Thi no xe set tro ve ban dau giong nhu filepath ben user
		//Va luc nay http://doanthuctap.com/admin/ xe tuong ung khi get $_GET['url']= null
		$temp='';
		if(isset($_GET['url'])){//chua set
		  //Nieu khi url ton taii thi chay vao day: http://localhost/vmc/user/login
		  $url=rtrim($_GET['url'],"/");
		  $url=explode('/',$url);
		  $c=$url[0];//user
		  //Nieu la admin thi url[0]= 'admin' lluc nay xe gan $tem= 'admin' de xet goi controler view cua admin
		  //Khi la admin thi dung array_splice de cat bo phan tu [0] de xac dinh  dung ten controller va view ben admin hien thi
		  	$temp= $c;

			if($c== 'admin')
			{
				array_splice($url,0,1);
				$c=$url[0];
				//unset($url[0]);
			}
		//	print_r($url);
	  }else{

		  //kq: index;
		  $c="index";

	  }
		/*if(Session::get('ADMIN'))
		{

			$file_controller=__CONTROLLER_PATH_ADMIN.$c."_Controller.php";//kq:controllers/index_Controller.php
		}
		else
		{
			$file_controller=__CONTROLLER_PATH.$c."_Controller.php";//kq:controllers/index_Controller.php

		}*/
		//$file_controller= __CONTROLLER_PATH.$c."_Controller.php";//kq:controllers/index_Controller.php
	  //echo $file_controller;
		//die();
		if($temp== 'admin')
		{
			$file_controller= __CONTROLLER_PATH_ADMIN.$c."_Controller.php";
		}
		else
		{
			$file_controller= __CONTROLLER_PATH.$c."_Controller.php";
		}
	    if(file_exists($file_controller)){// co ton tai

		  require_once($file_controller);
		  //NOW da require_once  1 controller la: controllers/index_Controller.php
	    }else{
		  require_once(__CONTROLLER_PATH."error_Controller.php");
		  $controller=new error();
		  $controller->index();
		  return false;
	    }
		$name_controller=$c."_Controller";//index_Controller

		$controller=new $name_controller;//Khoi tao 1 controller
		if($c== 'index')
		{

			$controller->LoadModel('product');//autolosad model
		}
		else
		{
			$controller->LoadModel($c);//autoload model
		}
		  if(isset($url[2])){

			  $controller->{$url[1]}($url[2]);
		  }else{
			  if(isset($url[1])){
			  $controller->{$url[1]}();
			  }else{
				  //Chinh la noi goi phuong thuc index trong controller nay
			  $controller->index();

			  }
		  }
	}
}
?>