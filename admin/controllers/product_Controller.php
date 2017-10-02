<?php
class product_Controller extends Controller{
    public function __construct(){
        parent::__construct();
    }
    public function create(){
        $data='';
        $lstType =$this->model->getListCategory();
        if($lstType !='') {
            //Model::$data=$this->model->fetch();
            $data['lstType']=$this->model->fetch();

        }
        $lstProducer =$this->model->getListPublisher();
        if($lstProducer !='') {
            $data['lstProducer']=$this->model->fetch();
        }

        $this->view->data=$data;
        $this->view->render("product/create");

    }
    public function detail($id){
        $lstProduct =$this->model->detail($id);
        if($lstProduct !='') {
            $this->view->data=$this->model->fetch();
        }
        $this->view->render("product/detail");
    }
    public function delete($id){

        if($this->model->delete($id) == true)
        {
            $this->view->redirect("admin");
        }
        else
        {
            echo "Xoa that bai";
            //$this->view->redirect("admin");
            // echo 'Xóa sản phẩm thành công';
            // $this->view->redirect("admin");
        }
    }
    public function checkDataInput($product)
    {
        foreach($product as $item)
        {
            if(empty($item ))
            {
                return false;

            }
        }
        return true;
    }
    public function insert()
    {

        /* $_FILES hiện tại có các trường như:
         - name:  Tên file
         - type: Thông tin định dạng file(img, doc...)
         - tmp_name: Đường dẫn tạm chưa file chuẩn bị đưa lên Server
         - error: Lỗi khi upload file
         - size: Độ lớn của file(kb)*/

        //Cach 1: USe $_POST[]
        $product= array();
        $name=$_POST['txtTen'];
        $price1= $_POST['txtGiaban'];
        $price2= $_POST['txtGiaKhuyenMai'];
        $discription= $_POST['txtMoTa'];
        $category=$_POST['type'];
        $publisher=$_POST['producer'];
        $countaccess= 0;
        $quantity= $_POST['txtSoLuong'];
        $sellNumber=0;
        $status= 1;
        $product=array($name,$price1,$price2,$discription,$category,$publisher,$countaccess,$quantity,);
        $images=$_FILES['fileHinhAnh']['name'];
        $thumb1=$_FILES['fileThumb1']['name'];
        $thumb2= $_FILES['fileThumb2']['name'];
        $thumb3=$_FILES['fileThumb3']['name'];

        //get information of file upload
        $allowExts= array("jpg","jpeg","gif","png");

        $arrayFieldImages= array("fileHinhAnh","fileThumb1","fileThumb2","fileThumb3");
        /*  $checkDataInput=checkDataInput($product);

          if($checkDataInput== true)
          {

          }*/
        $count=0;
        include('E:/xamp_new/htdocs/doanthuctap/libs/SimpleImage.php');
        $simpleImage = new SimpleImage();
        foreach($arrayFieldImages as $item )
        {
            $fileName= $_FILES[$item]['name'];
            if(!get_magic_quotes_gpc())
            {
                $fileName=addslashes($fileName);
            }
            $tmpName= $_FILES[$item]['tmp_name'];
            // START: PHAN Resize images cho cung 1 kich thuong

            //list($width, $height, $type, $attr) = getimagesize( $tmpName );
            //echo 'width='. $width .'  heigh=' . $height. '  type='.$type.'  att='. $attr;

            $simpleImage->load($tmpName);
            $simpleImage->resize(__IMAGE_WIDTH,__IMAGE_HEIGHT);
            $simpleImage->save($tmpName);
            //END

            //  list($width, $height, $type, $attr) = getimagesize( $tmpName );
            //  echo 'width='. $width .'  heigh=' . $height. '  type='.$type.'  att='. $attr;
            // die();
            $fileSize= $_FILES[$item]['size'];
            $fileType= $_FILES[$item]['type'];
            $error= $_FILES[$item]['error'];
            $extension= end(explode(".",$fileName));
            if($fileSize>0 && in_array($extension, $allowExts))
            {
                if($error >0)
                {
                    echo "Loi file". $fileName;
                }
                else {
                    if (file_exists("public/images/" . $fileName)) {
                        echo "File " . $fileName . " already exists. ";
                    }
                    else
                    {
                        move_uploaded_file($tmpName,"public/images/". $fileName);
                    }
                }
            }
            else
            {
                echo "File".$fileName." khong hop le";
            }
        }
        $product= array('name'=>$name,'price1'=> $price1,'images_url'=> $images,'price2'=> $price2,'discription'=> $discription,
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
        }
    }
    public function edit($id){
        $data='';

        $product =$this->model->detail($id);
        $data['product']=$this->model->fetch();
        $lstType =$this->model->getListCategory();
        $data['lstType']=$this->model->fetch();
        $lstProducer =$this->model->getListPublisher();
        if($lstProducer !='') {
            $data['lstProducer']=$this->model->fetch();
        }
        $this->view->data=$data;
        $this->view->render("product/edit");

    }
}
?>