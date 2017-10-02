

<?php
//Nieu khong use array_shift thi trong echo phai echo $row[0]["name"]
//else nieu co array_shift chi can echo $row['name']
$row=array_shift($this->data['product']);
$dis= $row['discription'];
?>
<section class="content-header">
    <h1>
        Thông tin sản phẩm
        <small>new</small>
    </h1>
    <!--@if( Session::has('flash_message'))
    <div class="alert alert-success {{Session::has('flash_message_importance')?'alert-important':''}}">
        @If( Session::has('flash_message_important'))
        <button type="button" class="close" data-dismiss="left" aria-hidden ="true">&times;</button>
        @endif
        {{Session::get('flash_message')}}
    </div>
    @endif
</section>
-->
    <!-- Main content -->
    <table>
        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">


                    <!-- general form elements -->
                    <div class="box box-primary">
                        <!-- form start  <form role="form">-->
                        <form action ="<?php __SITE_PATH?>/admin/product/insert" method="post">
                            <div class="box-body">
                                <div class="form-group">
                                    <label >Tên sản phẩm</label>
                                    <input value="<?php echo $row['name'] ?>" type="textbox"  name="txtTen"class="form-control" id="exampleInputEmail1"  placeholder="Nhập tên sản phẩm">
                                </div>
                                <div class="form-group">
                                    <label for="">Giá bán</label>
                                    <input value="<?php echo $row['price1'] ?>" type="textbox" name="txtGiaban" class="form-control" id="exampleInputPassword1" placeholder="Giá bán">
                                </div>
                                <div class="form-group">
                                    <label for="">Giá khuyến mãi</label>
                                    <input value="<?php  echo $row['price2']?>" type="textbox" name="txtGiaKhuyenMai" class="form-control" id="exampleInputPassword1" placeholder="Giá khuyến mãi ">
                                </div>


                                <div class="form-group">
                                    <label for="">Loại hàng hóa </label><br/>
                                    <select name="type" >
                                        <?php foreach($this->data['lstType'] as $row) {?>
                                            <option  value="<?php echo $row['id']?>"><?php  echo $row['name']?></option>
                                        <?php } ?>
                                    </select><br/>
                                </div>

                                <div class="form-group">
                                    <label for="">Nhà sản xuất</label><br/>
                                    <select name="producer" >
                                        <?php foreach($this->data['lstProducer'] as $row) {?>
                                            <option  value="<?php echo $row['id']?>"><?php  echo $row['name']?></option>
                                        <?php } ?>
                                    </select><br/>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Hình ảnh</label>
                                    <input value="<?php echo $row['images_url']?>" type="file" name="fileHinhAnh"id="exampleInputFile">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Thumb1</label>
                                    <input type="file" name="fileThumb1" id="exampleInputFile" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Thumb2</label>
                                    <input type="file" name="fileThumb2"id="exampleInputFile">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Thumb3</label>
                                    <input type="file" name="fileThumb3"id="exampleInputFile">
                                </div>

                                <div class="form-group">
                                    <label>Mô tả</label>
                                    <textarea  placeholder="Mô tả" name="txtMoTa" style="height: 100px" class="form-control" id="exampleInputFile"><?php if(isset($dis)) echo $dis; ?></textarea>

                                </div>
                            </div><!-- /.box-body -->
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Check me out
                                </label>
                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </form>
                        <!-- @include('errors.list')
                         {!! Form::open(['action'=>'AdminProductController@accountStore','files'=>true]) !!}
                         @include('admin.accountform')
                         {!! Form::close() !!}
                         -->
                    </div><!-- /.box -->
                </div><!-- /.box-body -->
            </div><!-- /.ssbox -->
            </div><!--/.col (right) -->
        </section>
    </table>
    <script>
        $(function () {
            $("#example1").DataTable();
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false
            });
        });
    </script>
    <!-- page script -->

     