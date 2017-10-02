<?php
class Controller {
	public $view;
	public $model;
	public function __construct(){
		Session::__init();
		$this->view=new View;
		/*$this->view->js=array("default","jquery");
		$this->view->css=array("default");*/
    }
	public function LoadModel($name){

		//Nieu $path exist nghia la dang ben trang user
		//Else if $pathaadmin exist nghia la dang ben trang admin
		$path=__MODEL_PATH.$name."_Model.php";
		$pathAdmin= __MODEL_PATH_ADMIN.$name."_Model.php";

		if(file_exists($pathAdmin ))
		{

			require_once($pathAdmin);
			$name=$name."_Model";
			$this->model=new $name;
		}
		else if(file_exists($path))
		{

			require_once($path);
			$name=$name."_Model";
			$this->model=new $name;
		}


	}
}
?>