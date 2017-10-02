<?php
class shoppingcart_Model extends   Model{

    public function __construct(){
        parent::__construct();
    }

    public function getProductInCart($car)
    {
        //var_dump($car);
        $sql= "Select* from products where id in ($car) order by id desc";

        $this->query($sql);
        if($this->num_rows() ==0)
        {
            return '';
        }
        unset($this->data);
        return $this->result;
    }
    public function insert()
    {
      return 1;
    }
}
?>