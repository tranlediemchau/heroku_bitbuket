<?php
class product_Controller extends Controller{
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $data='';
        $lstProduct =$this->model->index();
        if($lstProduct !='') {
            $data['lstProduct']=$this->model->fetch();
        }
        $this->view->data=$data;
        $this->view->render("product/index");
    }
    public function detail($id){
        $data='';
        $product =$this->model->detail($id);
        if($product !='') {
            $product=array_shift($this->model->fetch());
            $data['product']=$product;
            $lstProductSimilar=$this->model->getListProductByCategory($product['category']);
            if($lstProductSimilar != '')
            {
                $data['lstProductSimilar']= $this->model->fetch();
            }
        }
        $this->view->data=$data;
        $this->view->render("product/detail");
    }
    public function create(){
        $data='';
        $lstProduct =$this->model->index();
        if($lstProduct !='') {
            $data['lstProduct']=$this->model->fetch();
        }
        $this->view->data=$data;
        $this->view->render("product/create");
    }
}
?>