<?php
//define path
require_once("../config/define_path.php");
require_once("../config/define_database.php");
//end define path
//Do ben trang admin nen phai lui cap lai ../
require_once('../'.__LIB_PATH."Session.php");
require_once('../'.__LIB_PATH."Controller.php");
require_once('../'.__LIB_PATH."View.php");
require_once('../'.__LIB_PATH."Model.php");
require_once('../'.__LIB_PATH."Bootstrap.php");

Session::set('ADMIN','ADMIN');
//__LIB_PATH cho nay la noi de cau render set cho tat ca cac require include, noi xe dieu khien chuong trinh chay
$bootstrap= new Bootstrap;
?>