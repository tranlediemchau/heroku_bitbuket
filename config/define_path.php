<?php
$site_path = "https://demohostweb.herokuapp.com/";
//$site_path_admin = "http://localhost/doanthuctap/admin";
define ('__SITE_PATH', $site_path);
define ('__CONTROLLER_PATH',"controllers/");
define ('__VIEW_PATH',"views/");
define ('__MODEL_PATH',"models/");
define ('__LIB_PATH',"libs/");
define ('__TEMPLATES_PATH',"templates/");
//admin su dung ../ do file su dung libs ben user, ma thu muc libs  file Bootstrap dang o trong
//--> phai lui lai thu muc cha
//define ('__SITE_PATH_ADMIN', $site_path_admin);
//define  do model admin va user cung su dung chung model.--> ben admin goi dc model phai lui cap ../
define ('__MODEL_PATH_ADMIN',"../models/");
define ('__VIEW_PATH_ADMIN',"admin/views/");
define ('__CONTROLLER_PATH_ADMIN',"admin/controllers/");
define ('__TEMPLATES_PATH_ADMIN',"admin/templates/");

define('__IMAGE_WIDTH',275);
define('__IMAGE_HEIGHT',350);
//Khong define controller, view ben admin lai because:
//Do de define __SITE_PATH_ADMIN. nen trong project luc nay no xe hieu la 2 domain de chay
//Luc nay nieu ma ben domain ben admin thi no xe tu include theo dung ten controller, view
//Con ben user thi cung vay

//define ('__CONTROLLER_PATH_ADMIN',__SITE_PATH_ADMIN.'controllers/');??sau lai use  cach nay tay cho ../ khong dc??
//Ma lai use href lai dc
// <link rel="stylesheet" href="<?php echo __SITE_PATH_ADMIN /public/bootstrap/css/bootstrap.min.css">

?>