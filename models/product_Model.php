<?php
class product_Model extends   Model{
    public $table="products";
    public function __construct(){
        parent::__construct();
    }
    public function index()
    {
        $this->select($this->table);
        if($this->num_rows()==0)
        {
            return '';
        }
        return $this->result;
    }
    public function getSellersMonth(){
        $sql ="SELECT * FROM products ORDER  by id DESC limit 8 ";
        $this->query($sql);
       // $this->select($this->table,'');
        if($this->num_rows()==0){

            return '';
        }else{

            unset($this->data); //Do $this->data la 1 mang nen khi gan $this->data vao 1 ket qua
            //thi luc do no xe add ket qua moi vao mang $this->data nay==> Muon
            //reset phai unset($this->data) de reset tro ve gia tri ban dau
            return $this->result;
        }
    }
    public function getNewProductsEnter(){
        $sql1 ="SELECT * FROM products ORDER  by id DESC limit 8;";
        $this->query($sql1);
        // $this->select($this->table,'');
        if($this->num_rows()==0){

            return '';
        }else{
            unset($this->data);
            return $this->result;
        }
    }
    public function getListProductByCategory($idCategory){
        $sql= "select* from products where category='".$idCategory."' limit 3";

        $this->query($sql);
        if($this->num_rows()==0){

            return '';
        }else{

            unset($this->data);
            return $this->result;
        }
    }
    public function detail($id){

        $where=array('id'=>$id);
        $this->select($this->table,$where);
        if($this->num_rows()==0){

            return '';
        }else{

            unset($this->data);

            return $this->result;
        }
    }
    public function  delete($id)
    {

       $sql= "Delete from products where id=$id";
        $this->query($sql);
        if(mysql_affected_rows() <=0)
        {
            return false;
        }
        return true;
    }
    public function  insert($product)
    {

        $sql= "insert into products(name,price1,images_url,price2, discription, thumb1, thumb2, thumb3, category,publisher, countaccess,quantity,sellNumber,status)
                                values('{$product['name']}',{$product['price1']},'{$product['images_url']}',{$product['price2']},
                               '{$product['discription']}',  '{$product['thumb1']}','{$product['thumb2']}','{$product['thumb3']}','{$product['category']}',
                                '{$product['publisher']}',{$product['countaccess']}, {$product['quantity']},{$product['sellNumber']},{$product['status']})";

        $this->query($sql);
        if(mysql_affected_rows() <=0)
        {
            return false;
        }
        return true;
    }
    public function getListCategory(){

        $this->select('categories');
        if($this->num_rows()==0)
        {
            return '';
        }
        unset($this->data);
        return $this->result;
    }
    public function getListPublisher(){

        $this->select('publishers');
        if($this->num_rows()==0)
        {
            return '';
        }
        unset($this->data);
        return $this->result;
    }
}
?>