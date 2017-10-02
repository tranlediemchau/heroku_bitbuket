<section class="content-header">
    <h1>
        Thông tin tài khoản
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
                    <form action ="<?php  __SITE_PATH?>/admin/user/insert" method="post">
                        <div class="box-body">
                            <div class="form-group">
                                <label >Tên tài khoản</label>
                                <input type="textbox"  name="txtName"class="form-control" id="exampleInputEmail1"  placeholder="Nhập tên tài khoản">
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="textbox" name="txtEmail" class="form-control" id="exampleInputPassword1" placeholder="Nhập email">
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="textbox" name="txtPassword" class="form-control" id="exampleInputPassword1" placeholder="Nhâp Password ">
                            </div>
                            <div class="form-group">
                                <label for="">ConfirmPassword </label>
                                <input type="textbox" name="txtConfirmPassword" class="form-control" id="exampleInputPassword1" placeholder="Nhập ConfirmPassword ">
                            </div>
                            <div class="form-group">
                                <label for="">Vai trò </label><br/>
                                <select name="role" >
                                  <?php foreach($this->data['lstRole'] as $row) {?>
                                    <option  value="<?php echo $row['id']?>"><?php  echo $row['name']?></option>
                                   <?php } ?>
                                </select>
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

     