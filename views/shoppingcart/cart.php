<link rel="stylesheet" type="text/css" media="all" href="<?php __SITE_PATH ?>/public/css/stylesShoppingCart.css"
      xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<script type="text/javascript">

    $("document").ready(function(){
      /*  $(".n").bind('keyup mouseup', function () {
           // alert('a');
            var current = $("#n").val();
        });**/

        $(".n").bind('keyup mouseup  ', function (e) {
          //  var id = $(this).attr('id');
           // var qty= $('input[name ^='+ id+']').val();
            //alert('sss');
            //alert(qty);

           // var id= $(this).attr("name");
           // var qty= $('input[name ^='+ id+']').html();
            //alert(qty);
            //var c= $(this).data("d");
           // var d= $(".n").val();
           // e.preventDefault();
            //alert(e);
           // alert(d);

            // var input_value = parseFloat($("#field1").val());
            //alert(d);
           // alert(a);
            //alert('a');
            //var current = $("#n").val();
        });

       $(".update_class").click(function (e) {

           var id = $(this).attr('id');
            var qty= $('input[name ^='+ id+']').val();
           var dataPass= [id,qty];
           //alert(dataPass);
           // alert(qty);
            e.preventDefault();
           jQuery.ajax({
               type: "POST",
               url: '<?php __SITE_PATH ?>/shoppingcart/update/'+ dataPass,
               dataType: "json",
               contentType: "application/json; charset=utf-8",
               //data: JSON.stringify({ id: del_id }),
               success: function (data) {
                   window.location.href=(data.redirect);
               },
               failure: function (errMsg) {
                   alert(errMsg);
               }
           });
        });

        $(".delete_class").click(function (e) {

            var del_id = $(this).attr('id');
            e.preventDefault();
            jQuery.ajax({
                type: "POST",
                url: '<?php __SITE_PATH ?>/shoppingcart/delete/'+ del_id,
                dataType: "json",
                contentType: "application/json; charset=utf-8",
                data: JSON.stringify({ id: del_id }),
                success: function (data) {
                        window.location.href=(data.redirect);
                },
                failure: function (errMsg) {
                    alert(errMsg);
                }
            });

        });
        $("#submitbtn").click(function () {

            if (confirm("Ban co that su muon dat hang?")) {
                jQuery.ajax({
                    type: "POST",
                    url: '<?php __SITE_PATH ?>/shoppingcart/payment',
                    dataType: "json",
                    contentType: "application/json; charset=utf-8",
                    //data: JSON.stringify({ id: del_id }),
                    success: function (data) {
                        alert("Thanh cong");
                        //window.location.href=(data.redirect);
                    },
                    failure: function (errMsg) {
                        alert(errMsg);
                    }
                });
            }
            else {
                return false;
            }
        });



    });

</script>

<!-- Link dowload css for table shopping cart : http://spyrestudios.com/html5-css3-shopping-cart-layout/-->
<!-- start top_bg -->
<div class="top_bg">
    <div class="wrap">
        <div class="main_top">
            <h2 class="style">Giỏ hàng</h2>
        </div>
    </div>
</div>
<body>

<!--<form method="post" action="<?php __SITE_PATH ?>/shoppingcart/delete/1">
<input type="textbox"  name="txtTen" id="exampleInputEmail1"  placeholder="Nhập tên sản phẩm">
      <button type="submit" >aa</button>
</form>
-->
<div id="results"></div>
<div id="w">
    <header id="title">
        <h1>Sản phẩm trong giỏ hàng</h1>
    </header>
    <?php $total= 0;?>
    <!-- shopping cart contents -->
    <!--$_SESSION['cart'][$row['id']] chinh = sl(Quantity) -->
    <?php

    if(empty($this->data))
    {?>
        <div style="height: 160px">
            <p>Không có sản phẩm nào</p>
            <a href="<?php __SITE_PATH ?>/">Tiếp tuc mua hàng </a>
        </div>
    <?php }
    else
    { ?>
    <div id="page">
        <table id="cart">
            <thead>
            <tr>
                <th class="first">Hình ảnh</th>
                <th class="second">Số lượng</th>
                <th class="third">Sản phẩm</th>
                <th class="fourth">Giá</th>
                <th class="fourth">Thành tiền</th>
                <th class="fifth">Xóa</th>
                <th class="fifth">Cập nhật</th>

            </tr>
            </thead>
            <tbody>
            <?php
            foreach($this->data as $row){
                $total += $_SESSION['cart'][$row['id']] * $row['price1'];
                ?>
                <tr class="productitm">
                    <!-- http://www.amazon.com/Stuff-My-Cat-The-Book/dp/0811855384 -->
                    <td><img   src="<?php  __SITE_PATH ?>/public/images/small/<?php echo $row['thumb3']?>" class="thumb"></td>
                   <!-- Co 2 cach truyen vao de delete or xoa. Nhin cach truyen vao cho <a href> co thuoc tinh class va id xe thay-->
                    <!-- <td><input type="number" id="n" name="qty[<?php echo $row['id'].']' ?> " value="<?php echo $_SESSION['cart'][$row['id']]?>" min="1" max="<?php echo $row['quantity']?>" class="qtyinput"></td> -->
                    <td><input type="number"  class="n"  name="<?php echo $row['id'] ?> " value="<?php echo $_SESSION['cart'][$row['id']]?>" min="1" max="<?php echo $row['quantity']?>" class="qtyinput"></td>
                    <td><?php echo $row['name']?></td>
                    <td><?php  echo $row['price1']?></td>
                    <td><?php  echo number_format($_SESSION['cart'][$row['id']] * $row['price1'],3). 'VND'  ?></td>
                    <td><span class="remove"><a class="delete_class" id="<?php echo $row['id']?>" ><img   src="<?php __SITE_PATH?>/public/images/trash.png" alt="X"></a></span></td>
                    <td><span class="remove"><a class="update_class" id="<?php echo $row['id']?>" ><img   src="<?php __SITE_PATH?>/public/images/trash.png" alt="X"></a></span></td>
                </tr>
            <?php }  ?>

            <!-- tax + subtotal -->
            <!--   <tr class="extracosts">
                   <td class="light">Shipping &amp; Tax</td>
                   <td colspan="2" class="light"></td>
                   <td>$35.00</td>
                   <td>&nbsp;</td>
               </tr>
            -->
            <tr class="totalprice">

                <td><input type="submit"  value="Cập nhật giỏ hàng" id="update"/></td>

            </tr>



            <tr class="totalprice">
                <td class="light">Tổng tiền:</td>
                <td colspan="2">&nbsp;</td>
                <td colspan="2"><span class="thick"><?php  echo number_format($total,3).'VND'?></span></td>
            </tr>

            <!-- checkout btn -->
            <tr class="checkoutrow">
                <td colspan="5" class="checkout"><button id="submitbtn">Đặt hàng!</button></td>
            </tr>
            </tbody>

        </table>
        <?php   }
        ?>
    </div>
</div>
</body>
