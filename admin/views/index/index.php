<b id="Test"></b>
<script src="<?php  __SITE_PATH?>/admin/public/dist/js/jquery-3.0.0.js" />
<script type="text/javascript">

    function show_alert()
    {
        // $("#Test").text("Normal");
        if(confirm("Bạn có thật sự muốn xóa sản phẩm này không?"))
            return true;
        else
            return false;
    }
</script>
<div id="message" class="alert alert-sucscess">

</div>
<script>
    $("document").ready(function(){
        $("#delete-button").click(function(){
            if(confirm("Bạn có thật sự muốn xóa sản phẩm này?")){
              // alert("Xóa sản phẩm thành công");
                return true;
            }
           return false;
        });
    });
</script>
<form action ="" method="post">
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Danh Sách Sản Phẩm</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th >id</th>
                                <th>name</th>
                                <th>price1</th>
                                <th>price2</th>
                                <th>images_url</th>
                                <!-- <th>discription</th> -->
                                <th>thumb1</th>
                                <th>thumb2</th>
                                <th>thumb3</th>
                                <th>Sữa/Xóa</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            //isset: Kiem tra co dc thiet lap chua
                            if(!isset($this->data['lstProduct']))
                            {
                                echo 'không có sản phẩm nào';
                            }
                            else
                            {
                                foreach($this->data['lstProduct'] as $row){ ?>
                                    <tr>
                                        <a href="">
                                            <td><?php echo $row['id']?></td>
                                            <td><?php echo $row['name']?></td>
                                            <td><?php echo $row['price1'] ?></td>
                                            <td><?php echo $row['price2']?></td>
                                            <td><?php  echo $row['images_url']?></td>
                                            <!-- <td>{{ $product->discription }}</td> -->
                                            <td><?php  echo $row['thumb1']?></td>
                                            <td><?php  echo $row['thumb2']?></td>
                                            <td><?php  echo $row['thumb3']?></td>
                                            <td>
                                                <a href="<?php  __SITE_PATH ?>/admin/product/edit/<?php echo $row['id'];?>">Edit</a>
                                                <a href="<?php echo  __SITE_PATH ?>admin/product/delete/<?php echo $row['id'];?>" id="delete-button">Delete</a>
                                            </td>
                                        </a>
                                    </tr>
                                <?php }
                            } ?>
                            </tbody>
                        </table>
                    </div><!-- /.box-body -->
                    <!-- <div  class="input-group input-group-lg">
                         <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">Chức năng <span class="fa fa-caret-down"></span></button>
                         <ul class="dropdown-menu" >
                             <li><a href="{{ action('AdminProductController@create') }}">Thêm</li>
                             <li><a href="{{ action('AdminProductController@create') }}">Xóa tất cả</li>
                         </ul>
                     </div><!-- /input-group -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </section><!-- /.content -->
</form>
<br><br><br>
<!-- /.content -->
<!-- jQuery 2.1.4  cua ben trang data co them phan search-->
<script src="<?php echo __SITE_PATH_ADMIN ?>/public/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="<?php echo __SITE_PATH_ADMIN ?>/public/bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?php echo __SITE_PATH_ADMIN ?>/public/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo __SITE_PATH_ADMIN ?>/public/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo __SITE_PATH_ADMIN ?>/public/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo __SITE_PATH_ADMIN ?>/public/plugins/fastclick/fastclick.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo __SITE_PATH_ADMIN ?>/public/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo __SITE_PATH_ADMIN ?>/public/dist/js/demo.js"></script>
<!-- page script -->
