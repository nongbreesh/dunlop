﻿<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=521560131285660&version=v2.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<div class="col-lg-3 col-md-3 col-sm-3 rightmenu">
    <div class="fb-like-box" data-href="https://www.facebook.com/pages/Rochu-beauty-%E0%B8%84%E0%B8%A3%E0%B8%B5%E0%B8%A1%E0%B8%9E%E0%B8%B4%E0%B8%A9%E0%B8%87%E0%B8%B9/1398840677064214" data-colorscheme="light" data-show-faces="false" data-header="false" data-stream="false" data-show-border="false"></div>

    <div class="layer-2">
        <div class="topic"><h1>ตระกร้าสินค้า</h1></div>
        <div class="basket" >
            <?php if (!isset($_SESSION['SHOPPING_CART'])): ?>
                <img src="<?php echo  base_url('public') ?>/img/cart.png" width="16" height="16"> &nbsp;<strong><a href="<?php echo  base_url('cart') ?>">ชนิดสินค้า [0]</a></strong> <br/><b>ยอดรวม</b> : 0 <b> บาท</b>
            <?php else: ?>
                <?php
                $_SESSION['total'] = 0;
                $sumweight = 0;
                foreach ($_SESSION['SHOPPING_CART'] as $itemNumber => $item) {

                    $sumweight += $item['weight'] * $item['qty'];
                    $_SESSION['total'] += $item['qty'] * $item['price'];
                }


                $_SESSION['total'] = number_format($_SESSION['total'] + $this->_cost->costshipping($sumweight) + $this->_cost->costbox($sumweight), 2, '.', ',');
                ?>
                <img src="<?php echo  base_url('public') ?>/img/cart.png" width="16" height="16"> &nbsp;<strong><a href="<?php echo  base_url('cart') ?>">ชนิดสินค้า [<?php echo  count($_SESSION['SHOPPING_CART']) ?>]</a></strong> <br/><b>ยอดรวม</b> : <?php echo  $_SESSION['total'] ?> <b> บาท</b>
            <?php endif; ?>

            <div style="clear:both;"></div>
        </div>

        <div style="clear:both;"></div>
        <div class="topic" style="background: #47B624;">
            <h1>ช่องทางเพิ่มเติม</h1></div>   
        <center> <img src="<?php echo  base_url('public') ?>/images/S__1163282.jpg" /></center>
        <center><b>ID : peijangkyo</b></center>
        <br/>
        <div style="clear:both;"></div>


 <div class="topic" style="background: #4D3BD3;">
            <h1>พิษงู (SYN-AKE) ดีจริงหรือ?</h1></div>   

     <center> <a href="<?php echo  base_url('public') ?>/images/S__2392227.jpg" target="_blank"><img src="<?php echo  base_url('public') ?>/images/S__2392227.jpg" /></a></center>

 <br/>
        <div style="clear:both;"></div>



 <div class="topic" style="background: #F7197A;">
            <h1>รีวิวจากลูกค้า</h1></div>   

     <center> <a href="<?php echo  base_url('public') ?>/images/S__2351110.jpg" target="_blank"><img src="<?php echo  base_url('public') ?>/images/S__2351110.jpg" /></a></center>

 <br/>
        <div style="clear:both;"></div>


        <div class="topic">
            <h1>ผลิตภัณท์</h1></div>   

        <ul class="prod">
            <?php foreach ($Cate_list as $items) : ?>
                <li><i class="icon-star"></i><a href="<?php echo  base_url() ?>item/categories/<?php echo  $items->categories_id ?>"><?php echo  $items->categories_name ?></a></li>
            <?php endforeach; ?>

        </ul>

        <div class="topic">
            <h1>ผลิตภัณท์แนะนำ</h1></div> 

        <ul class="prod-offer">

            <?php foreach ($ProductOffer_list as $items) : ?>
                <li><a href="<?php echo  base_url('item') ?>/detail/<?php echo  $items->id ?>"><div class="offerimg"><center><img title="<?php echo  $items->title ?>" alt="<?php echo  $items->title ?>" src="<?php echo  base_url('public/uploads') ?>/<?php echo  $items->pic ?>" style="width:50px;height: auto; " /></center></div></a> <a href="<?php echo  base_url('item') ?>/detail/<?php echo  $items->id ?>" class="prod"><?php echo  $items->title ?></a><a href="#" class="prod"></a></li>
            <?php endforeach; ?>
        </ul>  
        <div style="clear:both;"></div>
        <div class="topic">
            <h1>การันตรีคุณภาพ</h1></div> 

        <span style="float: right;margin: 5px;width: 100%;"> <iframe width="100%" src="//www.youtube.com/embed/IGLBliqz4K4?rel=0" frameborder="0" allowfullscreen></iframe>   </span> 
<video style="float: right;margin: 5px;width: 100%;" id="sampleMovie" src="<?php echo  base_url('public') ?>/uploads/trim.56F40B29-6D33-450C-B07D-5C66AC336012.MOV" controls></video>
    </div>








</div>

