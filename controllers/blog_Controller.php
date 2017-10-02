<?php
class blog_Controller extends Controller{
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        //Chay vao action nay
        $this->view->render("blog/index");
    }

}
?>