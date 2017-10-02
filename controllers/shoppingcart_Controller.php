<?php
class shoppingcart_Controller extends Controller
{
    public function addcart($id)
    {
        if(isset($_SESSION['cart'][$id]))
        {
            $quantity= $_SESSION['cart'][$id] +1;
            $msg="Thay đổi số lượng thành công";
        }
        else
        {
            $quantity=1;
            $msg="Thêm vào giỏ hàng thành công";
        }
        $_SESSION['cart'][$id]=$quantity;
        //hoac use echo cung dc
        echo(json_encode(array('error' => -1, 'msg'=>$msg)));
        //die(json_encode(array('error' => 1, 'msg'=>'Thêm vào giỏ hàng thành công','data'=>'')));
    }
    public function delete($id)
    {
        unset($_SESSION['cart'][$id]);
        //or have use $this->view->redirect hinh nhu cung dc .
        //Cach duoi day use tra ve ket qua json ben view de redirect
        echo(json_encode(array('redirect'=> 'shoppingcart')));
    }
    public function update($dataPass)
    {
        $data= array();
        $data= explode(",",$dataPass);
        $id= $data[0];
        $qty= $data[1];
        $_SESSION['cart'][$id]= $qty;
        echo(json_encode(array('redirect'=> 'shoppingcart')));
        //var_dump($_POST['search']);die();
        // $_SESSION['cart'][$id]=1;
    }
    /*public function update()
    {
        echo 'chau_';
        //print("<pre>");print_r($_POST);die();
        $a= $_POST['qty'];
        print_r($a);
        //print_r($a);
    }*/
           /* $product= array('name'=>$name,'price1'=> $price1,'images_url'=> $images,'price2'=> $price2,'discription'=> $discription,
            'thumb1'=>$thumb1,'thumb2'=> $thumb2,'thumb3'=>$thumb3,'category'=> $category,'publisher'=> $publisher,'countaccess'=> $countaccess,
            'quantity'=> $quantity,'sellNumber' => $sellNumber,'status'=> $status );

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
    public function payment()
    {
        $userId=1;
        $this->model= new shoppingcart_Model();
        $a= $this->model->insert();
        $now = new DateTime();
        $now= $now->format('Y-m-d H:i:s');    // MySQL datetime format
        //echo $now->getTimestamp();
        $statusId=1;
        $lstCart= $this.$this->getListCart();
        print_r($lstCart);

        //$lstProduct =$this->model->getProductInCart($str);
     // echo(json_encode("ass"));
    }
    public  function  getListCart()
    {
        $data='';
        if(isset($_SESSION['cart']))
        {
            $count= count($_SESSION['cart']);
            if($count >0)
            {
                foreach($_SESSION['cart'] as $key => $value)
                {
                    $item[]= $key;
                }
                //chuyển chúng sang dạng chuỗi      bằng hàm implode()
                $str= implode(",",$item);
                $lstProduct =$this->model->getProductInCart($str);
                if($lstProduct !='') {

                    $data=$this->model->fetch();
                }
            }
        }
        return $data;
    }
    public function index()
    {
        $this->view->data= $this->getListCart();
        $this->view->render("shoppingcart/cart");
    }
}
?>

