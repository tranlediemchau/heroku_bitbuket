<?php
class View{
	public $data;
	public function __construct(){
    }
	public function render($link,$Noinclude=""){
		//$link= index/index;
		//$$Noinclude= "";
		$c='';
		if($Noinclude=="")
		{
			//Lam do cach nay. do khong lay dc session.statery temp
			if(isset($_GET['url'])) {//chua set

				//Nieu khi url ton taii thi chay vao day: http://localhost/vmc/user/login
				$url = rtrim($_GET['url'], "/");
				$url = explode('/', $url);
				$c = $url[0];
			}
			if($c=='admin')
			{
				require_once __TEMPLATES_PATH_ADMIN."header.php";// 'templates/header.php'
				require(__VIEW_PATH_ADMIN.$link.".php");//views/index/index//////////DONG NAY CHINH LA DONG GOI VIEW HIEN THI DAY NE
				require_once __TEMPLATES_PATH_ADMIN."footer.php";// 'templates/header.php'
			}
			else
			{	require_once __TEMPLATES_PATH."header.php";// 'templates/header.php'
				require(__VIEW_PATH.$link.".php");//views/index/index//////////DONG NAY CHINH LA DONG GOI VIEW HIEN THI DAY NE
				require_once __TEMPLATES_PATH."footer.php";// 'templates/header.php'

			}
			//chay vao day
		}
		else
		{
			require_once __TEMPLATES_PATH."headerForm.php";
			require(__VIEW_PATH.$link.".php");
			require_once __TEMPLATES_PATH."footerForm.php";
		}
	}
	public function redirect($link=''){
		ob_start();

		if($link!=''){

			$link=__SITE_PATH.$link;

		}else{
			$link=__SITE_PATH;
		}
		//header để điều hướng, chuyển hướng trang
		header("Location: $link");
	}
}
?>