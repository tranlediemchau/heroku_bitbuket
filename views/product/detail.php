<?php
//Nieu khong use array_shift thi trong echo phai echo $row[0]["name"]
//else nieu co array_shift chi can echo $row['name']
    $row=$this->data['product'];

?>
<!-- start top_bg -->
<script type="text/javascript" language="javascript">
    function show_alert()
    {
        var name= frmEdit.name.value;
        if(name== "")
        {
            confirm("Bạn phải nhập username để tiến hành bình luận?")
            return false;
        }
        else
            return true;
    }
</script>
<link href="<?php __SITE_PATH ?>/public/css/comment.css" rel="stylesheet" type="text/css" media="all" />
<!--<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">-->
<div class="top_bg">
    <div class="wrap">
        <div class="main_top">
            <h2 class="style">Giày Dép</h2>
        </div>
    </div>
</div>

<!-- start main -->
<div class="main_bg">
    <div class="wrap">
        <div class="main">
            <!-- start content -->
            <div class="single">
                <!-- start span1_of_1 -->
                <div class="left_content">
                    <div class="span1_of_1">
                        <!-- start product_slider -->
                        <div class="product-view">
                            <div class="product-essential">
                                <div class="product-img-box">
                                    <div class="more-views">
                                        <div class="more-views-container">
                                            <ul>
                                                <li>
                                                    <a class="cs-fancybox-thumbs" data-fancybox-group="thumb"  href=""  title="" alt="">
                                                        <img src="" src_main=""  title="" alt="" /></a>
                                                </li>
                                                <li>
                                                    <a class="cs-fancybox-thumbs" data-fancybox-group="thumb" href=""  title="" alt="">
                                                        <img src="" src_main=""  title="" alt="" /></a>
                                                </li>
                                                <li>
                                                    <a class="cs-fancybox-thumbs" data-fancybox-group="thumb"  href=""  title="" alt="">
                                                        <img src="" src_main=""  title="" alt="" /></a>
                                                </li>
                                                <li>
                                                    <a class="cs-fancybox-thumbs" data-fancybox-group="thumb" href=""  title="" alt="">
                                                        <img src="" src_main="" title="" alt="" /></a>
                                                </li>
                                                <li>
                                                    <a class="cs-fancybox-thumbs" data-fancybox-group="thumb"  href=""  title="" alt="">
                                                        <img src="" src_main="" title="" alt="" /></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="product-image">
                                        <a class="cs-fancybox-thumbs cloud-zoom" rel="adjustX:30,adjustY:0,position:'right',tint:'#202020',tintOpacity:0.5,smoothMove:2,showTitle:true,titleOpacity:0.5" data-fancybox-group="thumb" href="<?php __SITE_PATH ?>/public/images/details/<?php echo $row['thumb1'] ?>" title="Women Shorts" alt="Women Shorts">
                                            <img src="<?php  __SITE_PATH ?>/public/images/details/<?php echo $row['thumb1'] ?>" alt="Women Shorts" title="Women Shorts" />

                                        </a>
                                    </div>
                                    <script type="text/javascript">
                                        var prodGallery = jQblvg.parseJSON('{"prod_1":{"main":{"orig":"<?php  __SITE_PATH ?>/public/images/details/<?php  echo $row['thumb1']?>","main":"<?php  __SITE_PATH ?>/public/images/large/<?php  echo $row['thumb1']?>","thumb":"<?php  __SITE_PATH ?>/public/images/small/<?php echo $row['thumb1'] ?>","label":""},"gallery":{"item_0":{"orig":"<?php  __SITE_PATH ?>/public/images/details/<?php  echo $row['thumb1']?>","main":"<?php  __SITE_PATH ?>/public/images/large/<?php  echo $row['thumb1']?>","thumb":"<?php  __SITE_PATH ?>/public/images/small/<?php  echo $row['thumb1']?>","label":""},"item_2":{"orig":"<?php  __SITE_PATH ?>/public/images/details/<?php  echo $row['thumb2']?>","main":"<?php  __SITE_PATH ?>/public/images/large/<?php echo $row['thumb2'] ?>","thumb":"<?php  __SITE_PATH ?>/public/images/small/<?php  echo $row['thumb2']?>","label":""},"item_3":{"orig":"<?php  __SITE_PATH ?>/public/images/details/<?php  echo $row['thumb3']?>","main":"<?php  __SITE_PATH ?>/public/images/large/<?php echo $row['thumb3']?>","thumb":"<?php  __SITE_PATH ?>/public/images/small/<?php echo $row['thumb3']?>","label":""}},"type":"simple","video":false}}'),
                                            gallery_elmnt = jQblvg('.product-img-box'),
                                            galleryObj = new Object(),
                                            gallery_conf = new Object();
                                        gallery_conf.moreviewitem = '<a class="cs-fancybox-thumbs" data-fancybox-group="thumb"  href=""  title="" alt=""><img src="" src_main="" title="" alt="" /></a>';
                                        gallery_conf.animspeed = 200;
                                        jQblvg(document).ready(function() {
                                            galleryObj[1] = new prodViewGalleryForm(prodGallery, 'prod_1', gallery_elmnt, gallery_conf, '.product-image', '.more-views', 'http:');
                                            jQblvg('.product-image .cs-fancybox-thumbs').absoluteClick();
                                            jQblvg('.cs-fancybox-thumbs').fancybox({ prevEffect : 'none',
                                                nextEffect : 'none',
                                                closeBtn : true,
                                                arrows : true,
                                                nextClick : true,
                                                helpers: {
                                                    thumbs : {
                                                        position: 'bottom'
                                                    }
                                                }
                                            });
                                            jQblvg('#wrap').css('z-index', '100');
                                            jQblvg('.more-views-container').elScroll({type: 'vertical', elqty: 4, btn_pos: 'border', scroll_speed: 400 });

                                        });

                                        function initGallery(a,b,element) {
                                            galleryObj[a] = new prodViewGalleryForm(prods, b, gallery_elmnt, gallery_conf, '.product-image', '.more-views', '');
                                        };
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- end product_slider -->
                    <!-- start span1_of_1 -->

                    <script>
                        $("document").ready(function(){
                            $("#btnAddCart").click(function (e) {
                                var idCurrent= "<?php echo $row['id']?>";
                                e.preventDefault();
                                jQuery.ajax({
                                    type: "POST",
                                    url: '<?php __SITE_PATH ?>/shoppingcart/addcart/<?php echo $row['id']?>',
                                    dataType: "json",
                                    contentType: "application/json; charset=utf-8",
                                    data: JSON.stringify({ id: idCurrent }),
                                    success: function (data) {
                                        if(data.error == -1){
                                            $("#lbMessage").html(data.msg);
                                            $("#lbMessage").css("color","red");
                                        }else{
                                            alert('Thêm vào giỏ hàng thất bại');
                                        }
                                    },
                                    failure: function (errMsg) {
                                        alert(errMsg);
                                    }
                                });

                            });

                        });
                    </script>

                    <div class="span1_of_1_des">
                        <div class="desc1">

                            <h3><?php echo $row["name"] ?> </h3><label>Số lần xem:1</label>
                            <h5><?php echo $row['price1'] ?> <span><?php echo $row['price2'] ?></span>  <a href="#">Bấm để thêm</a></h5>
                            <div class="available">
                                <div class="btn_form">
                                    <form>
                                        <input  id="btnAddCart" type="submit" value="Thêm vào giỏ" title="" />
                                        <label  id="lbMessage"></label>
                                    </form>
                                </div>
                                <span><a href="#">Đăng nhập để thêm vào giỏ hàng </a></span>
                                <p class="para"><?php echo $row['discription']?> </p>
                            </div>
                            <div class="share-desc">
                                <div class="share">
                                    <h4>Chia sẻ qua:</h4>
                                    <ul class="share_nav">
                                        <li><a href="#"><img src="<?php __SITE_PATH?>/public/images/facebook.png" title="facebook"></a></li>
                                        <li><a href="#"><img src="<?php __SITE_PATH?>/public/images/twitter.png" title="Twiiter"></a></li>
                                        <li><a href="#"><img src="<?php __SITE_PATH?>/public/images/rss.png" title="Rss"></a></li>
                                        <li><a href="#"><img src="<?php __SITE_PATH?>/public/images/gpluse.png" title="Google+"></a></li>
                                    </ul>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>

                <!-- start left_sidebar -->

                <div class="left_sidebar">
                    <h4>Sản phẩm tương tự</h4>
                    <div class="left_products">
                        <?php
                        if(!isset($this->data['lstProductSimilar']))
                        {
                            echo 'không có sản phẩm nào';
                        }
                        else
                        {
                        foreach($this->data['lstProductSimilar'] as $item){ ?>
                            <div class="left_img">
                                <img src="<?php echo __SITE_PATH?>public/images/<?php echo $item['images_url'];?>" alt="<?php echo $item['name'] ;?> "/>
                            </div>
                            <div class="left_text">
                                <p><a href="<?php __SITE_PATH ?>/product/detail/<?php echo $item['id'] ?>"><?php echo $item['name']; ?></a></p>
                                <span class="line"><?php echo $item['price2'] ?></span>
                                <span><?php echo $item['price1'] ?></span>
                            </div>
                            <div class="clear"></div>
                        <?php }
                        } ?>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <!-- end content -->
        </div>
       <!-- <form name="frmEdit" method="post" action="{{ action('ProductController@store')}}">
            <table width="288">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <tr>
                    @if(Auth::check())
                    <td>Bình luận sản phẩm &nbsp;<input type="text" size="20" maxlength="30"placeholder='username' name='name'value="{!!  Auth:: user()->name   !!}"></td>
                    @else
                    <td>Bình luận sản phẩm &nbsp;<input type="text" size="20" maxlength="30"placeholder='username' name='name'value=""></td>
                    @endif
                </tr>
                <tr>
                    <td valign="top">

                        <textarea name="text" rows="3" cols="113" class="textbox"></textarea>
                        <input type="hidden" name="id" value="{{$product->id}}"></td>
                    <input type="hidden" name="date" value="{{$product->id}}"></td>
                    </td>
                </tr>
                <tr>
                    <td align="left" class="text_normal" valign="top">
                        <input type="submit" style="width=80px" name="Update" value="Submit" class="button" onclick="return show_alert()">
                        <input type="reset" name="Reset" value="Reset" class="button">

                    </td>
                </tr>
            </table>
        </form>
         -->
        <!-- Contenedor Principal -->
        <div class="comments-container">
            <h3>Danh sách bình luận</h3>
            {!! $comments->render() !!}
            <ul id="comments-list" class="comments-list">
                <li>
                    @foreach ($comments as $comment)
                    <div class="comment-main-level">
                        <!-- Avatar --><b>{{$comment->name}}</b>
                        <div class="comment-avatar">
                            <img src="/dist/img/user2-160x160.jpg" class="user-image" alt="User Image"/>
                        </div>
                        <!-- Contenedor del Comentario -->
                        <div class="comment-box">
                            <div class="comment-head">
                                <span>{{$comment->date}}</span>
                                <i class="fa fa-reply"></i>
                                <i class="fa fa-heart"></i>
                            </div>
                            <div class="comment-content">
                                {{$comment->comment}}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </li>
            </ul>
        </div>
    </div>
</div>
