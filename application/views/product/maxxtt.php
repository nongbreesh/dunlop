<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <!-- jQuery library (served from Google) -->
        <script src="<?= base_url('public') ?>/js/1.8.2/jquery.min.js"></script>
        <!-- bxSlider Javascript file -->
        <script src="<?= base_url('public') ?>/js/jquery.bxslider.min.js"></script>
        <!-- bxSlider CSS file -->
        <link href="<?= base_url('public') ?>/css/jquery.bxslider.css" rel="stylesheet" />
        <link href="<?= base_url('public') ?>/css/custom_style.css" rel="stylesheet"
              type="text/css" />
        <link href="<?= base_url('public') ?>/css/animate.css" rel="stylesheet"
              type="text/css" />
        <link rel="stylesheet" type="text/css" href="<?= base_url('public') ?>/css/custom.css" />
        <link rel="stylesheet" type="text/css" href="<?= base_url('public') ?>/css/style.css" />
        <script type="text/javascript" src="<?= base_url('public') ?>/js/modernizr.custom.79639.js"></script>
        <noscript>
            <link rel="stylesheet" type="text/css" href="<?= base_url('public') ?>/css/styleNoJS.css" />
        </noscript>
        <title>Welcome to Dunlop Tire (Thailand) Company Limited</title>
        <script>
            $(document).ready(function() {
                $('.bxslider').bxSlider({
                    auto: true
                });
            });
        </script>
    </head>
    <body background="<?= base_url() ?>public/images/home/bg_2.jpg" style="margin:auto">

        <!-- start table 3x3-->
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr height="78" >
                <td background="<?= base_url() ?>public/images/home/logo_1.jpg">&nbsp;</td>
                <td width="942"  style="position: relative;"><table border="0" cellspacing="0" cellpadding="0" width="100%">
                        <tr>
                            <td><a href="<?= base_url() ?>"><img src="<?= base_url() ?>public/images/home/logo_2.jpg" /></a></td>
                            <td background="<?= base_url() ?>public/images/home/logo_3.jpg"  width="100%">

                            </td>

                        </tr>
                    </table>
                    <div class="menu">
                        <table id="Table_01" width="696" height="42" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td>
                                    <a href="<?= base_url() ?>home"><img src="<?= base_url() ?>public/images/menu/product/menu_01.png" width="95" height="42" alt=""/></a></td>
                                <td>
                                    <a href="<?= base_url() ?>product"> <img src="<?= base_url() ?>public/images/menu/product/menu_02.png" width="101" height="42" alt=""/></a></td>
                                <td>
                                    <a href="<?= base_url() ?>knowledge"><img src="<?= base_url() ?>public/images/menu/product/menu_03.png" width="134" height="42" alt=""/></a></td>
                                <td>
                                    <a href="<?= base_url() ?>about">  <img src="<?= base_url() ?>public/images/menu/product/menu_04.png" width="119" height="42" alt=""/></a></td>
                                <td>
                                    <a href="<?= base_url() ?>address"><img src="<?= base_url() ?>public/images/menu/product/menu_05.png" width="132" height="42" alt=""/></a></td>
                                <td>
                                    <a href="<?= base_url() ?>contact"><img src="<?= base_url() ?>public/images/menu/product/menu_06.png" width="112" height="42" alt=""/></a></td>
                            </tr>
                        </table>
                    </div>
                </td>
                <td background="<?= base_url() ?>public/images/home/logo_3.jpg">&nbsp;</td>
            </tr>
            <tr height="730">
                <td >&nbsp;</td>
                <td ><table   border="0" cellspacing="0" cellpadding="0" >
                        <tr>
                            <td height="15"></td>
                        </tr>
                        <tr>
                            <td><table  border="0" cellspacing="0" cellpadding="0" >
                                    <tr>
                                        <td>
                                            <div class="container demo-1">


                                                <div id="slider" class="sl-slider-wrapper">

                                                    <div class="sl-slider">

                                                        <?php
                                                        $i = 1;
                                                        foreach ($slide_list as $each):
                                                            ?>
                                                            <?php if ($each->SLIDE_Animation_Type == 1): ?>
                                                                <div class="sl-slide bg-1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                                                                    <div class="sl-slide-inner" style="background: url('<?= base_url() ?>administrator/public/uploads/slide/<?= $each->SLIDE_bg ?>');">
                                                                        <div class="deco roll"><img src="<?= base_url() ?>administrator/public/uploads/slide/<?= $each->SLIDE_Object_img ?>" /></div>
                                                                        <h2 class="moveDown"><?= $each->SLIDE_Headline ?></h2>
                                                                        <blockquote><?= $each->SLIDE_Desc ?></blockquote>
                                                                    </div>
                                                                </div>
                                                            <?php elseif ($each->SLIDE_Animation_Type == 2): ?>
                                                                <div class="sl-slide bg-1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                                                                    <div class="sl-slide-inner" style="background: url('<?= base_url() ?>administrator/public/uploads/slide/<?= $each->SLIDE_bg ?>');">
                                                                        <div class="deco fromleft"><img src="<?= base_url() ?>administrator/public/uploads/slide/<?= $each->SLIDE_Object_img ?>" /></div>
                                                                        <h2 class="moveDown"><?= $each->SLIDE_Headline ?></h2>
                                                                        <blockquote class="bqmoveUp"><?= $each->SLIDE_Desc ?></blockquote>
                                                                    </div>
                                                                </div>
                                                            <?php elseif ($each->SLIDE_Animation_Type == 3): ?>
                                                                <div class="sl-slide bg-1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                                                                    <div class="sl-slide-inner" style="background: url('<?= base_url() ?>administrator/public/uploads/slide/<?= $each->SLIDE_bg ?>');">
                                                                        <div class="deco spin"><img src="<?= base_url() ?>administrator/public/uploads/slide/<?= $each->SLIDE_Object_img ?>" /></div>
                                                                        <h2 class="spin"><?= $each->SLIDE_Headline ?></h2>
                                                                        <blockquote class="spin"><?= $each->SLIDE_Desc ?></blockquote>
                                                                    </div>
                                                                </div>
                                                            <?php endif; ?>
                                                            <?php $i++; ?>
                                                        <?php endforeach; ?>

                                                    </div><!-- /sl-slider -->

                                                    <nav id="nav-arrows" class="nav-arrows">
                                                        <span class="nav-arrow-prev">Previous</span>
                                                        <span class="nav-arrow-next">Next</span>
                                                    </nav>

                                                    <nav id="nav-dots" class="nav-dots">

                                                        <?php
                                                        $x = 1;
                                                        foreach ($slide_list as $each):
                                                            ?>
                                                            <?php if ($x == 1): ?>
                                                                <span class="nav-dot-current"></span>
                                                            <?php else: ?>
                                                                <span></span>
                                                            <?php endif; ?>
                                                            <?php
                                                            $x++;
                                                        endforeach;
                                                        ?>
                                                    </nav>

                                                </div><!-- /slider-wrapper -->

                                            </div>
                                        </td>
                                    </tr>
                                </table></td>
                        </tr>
                        <tr>
                            <td height="15"></td>
                        </tr>
                        <tr>
                            <td> 

                                <div class="wrapper">
                                    <div class="sidebar-l" ><div class="product_title"></div>

                                        <ul class="sidemenu">
                                            <li><a href="<?= base_url() ?>product/index"><img style="" src="<?= base_url() ?>public/images/product/Product_menu_1_OV.png" /></a></li>
                                            <li><a href="<?= base_url() ?>product/maxxtt"><img style="" src="<?= base_url() ?>public/images/product/Product_sub_1_OV.png"/></a></li>
                                            <li><a href="<?= base_url() ?>product/ve302"><img style="" src="<?= base_url() ?>public/images/product/Product_sub_2.png" onmouseover="this.src = '<?= base_url() ?>public/images/product/Product_sub_2_OV.png'" onmouseout="this.src = '<?= base_url() ?>public/images/product/Product_sub_2.png'"/></a></li>
                                            <li><a href="<?= base_url() ?>product/ec503"><img style="" src="<?= base_url() ?>public/images/product/Product_sub_3.png" onmouseover="this.src = '<?= base_url() ?>public/images/product/Product_sub_3_OV.png'" onmouseout="this.src = '<?= base_url() ?>public/images/product/Product_sub_3.png'"/></a></li>
                                            <li><a href="<?= base_url() ?>product/lm704"><img style="" src="<?= base_url() ?>public/images/product/Product_sub_4.png" onmouseover="this.src = '<?= base_url() ?>public/images/product/Product_sub_4_OV.png'" onmouseout="this.src = '<?= base_url() ?>public/images/product/Product_sub_4.png'"/></a></li>
                                            <li><a href="<?= base_url() ?>product/dz102"><img style="" src="<?= base_url() ?>public/images/product/Product_sub_5.png" onmouseover="this.src = '<?= base_url() ?>public/images/product/Product_sub_5_OV.png'" onmouseout="this.src = '<?= base_url() ?>public/images/product/Product_sub_5.png'"/></a></li>
                                            <li><a href="<?= base_url() ?>product/dzII_star"><img style="" src="<?= base_url() ?>public/images/product/Product_sub_6.png" onmouseover="this.src = '<?= base_url() ?>public/images/product/Product_sub_6_OV.png'" onmouseout="this.src = '<?= base_url() ?>public/images/product/Product_sub_6.png'"/></a></li>
                                            <li><a href="<?= base_url() ?>product/sp_touring_t1"><img style="" src="<?= base_url() ?>public/images/product/Product_sub_7.png" onmouseover="this.src = '<?= base_url() ?>public/images/product/Product_sub_7_OV.png'" onmouseout="this.src = '<?= base_url() ?>public/images/product/Product_sub_7.png'"/></a></li>

                                              <li><a href="<?= base_url() ?>product/product_4x4"><img style="" src="<?= base_url() ?>public/images/product/Product_menu_3.png"  onmouseover="this.src = '<?= base_url() ?>public/images/product/Product_menu_3_OV.png'" onmouseout="this.src = '<?= base_url() ?>public/images/product/Product_menu_3.png'"/></a></li> 
                                            <li><a href="<?= base_url() ?>product/product_pickup"><img style="" src="<?= base_url() ?>public/images/product/Product_menu_2.png" onmouseover="this.src = '<?= base_url() ?>public/images/product/Product_menu_2_OV.png'" onmouseout="this.src = '<?= base_url() ?>public/images/product/Product_menu_2.png'"/></a></li>
                                            <li><a href="<?= base_url() ?>product/product_oem"><img style="" src="<?= base_url() ?>public/images/product/Product_menu_4.png" onmouseover="this.src = '<?= base_url() ?>public/images/product/Product_menu_4_OV.png'" onmouseout="this.src = '<?= base_url() ?>public/images/product/Product_menu_4.png'"/></a></li>
                                            <li><a href="<?= base_url() ?>product/warranty"><img style="" src="<?= base_url() ?>public/images/product/Product_menu_5.png" onmouseover="this.src = '<?= base_url() ?>public/images/product/Product_menu_5_OV.png'" onmouseout="this.src = '<?= base_url() ?>public/images/product/Product_menu_5.png'"/></a></li>
                                      </ul>
                                    </div>
                                    <div class="contact-r " >
                                        <div class="title_trans-r"><h1 style="top: -20px;"><img src="<?= base_url() ?>public/images/product/pass_head.png"/></h1></div>
                                        <div class="passenger_car">
                                            <a class="btn_prodinfo active" href="javascript:;"></a>
                                            <a class="btn_tech" href="javascript:;"></a>

                                            <div class="passenger_car_header"></div>
                                            <div id="prodinfo">
                                                <p>
                                                    <img src="<?= base_url() ?>public/images/product/detail_img_1.png"  hspace="5" vspace="5" align="left"/>
                                                    ที่สุดของยางสปอร์ตความเร็วสูง  ตอบสนองเต็มสปีดในทุกสนามแข่ง<br>
                                                        -         เพิ่มประสิทธิภาพในการยึดเกาะถนนได้ดียิ่งขึ้นตั้งแต่เริ่มออกสตาร์ท<br>
                                                            -         ประสิทธิภาพในการควบคุมอุณหภูมิยาง รักษาระดับความเร็วสูงได้ในทุกรอบการแข่งขัน<br>
                                                                -         คุณสมบัติลดการสึกหรอของยาง ช่วยยืดอายุการใช้งานได้ยาวนานขึ้น<br>
                                                                    <br>
                                                                        </p>
                                                                        <div style="clear: both"></div>
                                                                        </div>
                                                                        <div id="tech">
                                                                            <p>&nbsp;</p>

                                                                            <table border="0" cellpadding="3" cellspacing="0" style="width:100%">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>TOUCH TECHNOLOGY<br />
                                                                                            Multi radius tread technology (MRT)<br />
                                                                                            <img src="http://www.dunloptire.co.th/img/hr.jpg" style="height:2px; width:729px" /></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <p>โครงสร้างยางถูกออกแบบในรูปแบบของ MRT หรือ Multi radius tread technology ซึ่งโครงสร้างยางส่วนมากจะถูกออกแบบบนพื้นฐานที่ให้เกิด<br />
                                                                                                ความแตกต่างของผิวหน้ายาง 3 ระดับ แต่เทคโนโลยี MRT จะออกแบบให้มีความแตกต่างของผิวหน้ายางถึง 10 ระดับ ช่วยเพิ่มความแม่นยำในการขับขี่<br />
                                                                                                มากยิ่งขึ้น จากการออกแบบดังกล่าวทำแรงกดทางด้านตรงข้ามยางได้ถูกจัดการให้มีประสิทธิภาพมากยิ่งขึ้นในขณะเข้าโค้งทำให้ผิวสัมผัสของหน้ายาง<br />
                                                                                                สามารถยึดเกาะถนนได้มากกว่ายางปกติทั่วไป จึงทำให้เกิดการบังคับเลี้ยวที่มีประสิทธิภาพ</p>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <table border="0" cellpadding="0" cellspacing="0" style="width:97%">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td><img src="http://www.dunloptire.co.th/img/lt.gif" style="height:12px; width:9px" /></td>
                                                                                                        <td colspan="2">&nbsp;</td>
                                                                                                        <td><img src="http://www.dunloptire.co.th/img/rt.gif" style="height:12px; width:10px" /></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td rowspan="4">&nbsp;</td>
                                                                                                        <td><img src="http://www.dunloptire.co.th/img/feat.jpg" style="height:16px; width:73px" /></td>
                                                                                                        <td rowspan="4"><img src="http://www.dunloptire.co.th/img/touch.jpg" style="height:182px; width:379px" /></td>
                                                                                                        <td rowspan="4">&nbsp;</td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td>
                                                                                                            <p>- Multi radius tread technology (MRT)</p>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td><img src="http://www.dunloptire.co.th/img/benefit.jpg" style="height:16px; width:86px" /></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td>- เพิ่มแรงกดพื้นผิวสัมผัสหน้ายางกับพื้นผิวถนน ช่วยเพิ่มความสามารถในการขับขี่ จากทางตรงเข้าสู่การเข้าโค้งได้อย่าง ราบรื่นและนิ่มนวล<br />
                                                                                                            - สามารถควบคมทิศทางในการขับขี่บนถนนแห้งและเปียกได้ อย่างมีประสิทธิภาพ<br />
                                                                                                            - มีการตอบสนองต่อพื้นผิวถนนได้อย่างดีเยี่ยม</td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td><img src="http://www.dunloptire.co.th/img/lb.gif" style="height:8px; width:9px" /></td>
                                                                                                        <td colspan="2">&nbsp;</td>
                                                                                                        <td><img src="http://www.dunloptire.co.th/img/rb.gif" style="height:8px; width:10px" /></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <p><br />
                                                                                                <br />
                                                                                                <strong>Flatter tread profile</strong><br />
                                                                                                <strong><img src="http://www.dunloptire.co.th/img/hr.jpg" style="height:2px; width:729px" /></strong><br />
                                                                                                การออกแบบโครงสร้างยางแบบ Flatter tread profile ทำให้พื้นที่ผิวสัมผัสหน้ายางกับพื้นผิวถนนเพิ่มมากขึ้น 4 - 8% ช่วยเพิ่มประสิทธิภาพในการยึดเกาะถนนและการทรงตัวของรถยนต์ขณะใช้ความเร็วสูง</p>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <table border="0" cellpadding="0" cellspacing="0" style="width:97%">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td><img src="http://www.dunloptire.co.th/img/lt.gif" style="height:12px; width:9px" /></td>
                                                                                                        <td colspan="2">&nbsp;</td>
                                                                                                        <td><img src="http://www.dunloptire.co.th/img/rt.gif" style="height:12px; width:10px" /></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td rowspan="4">&nbsp;</td>
                                                                                                        <td><img src="http://www.dunloptire.co.th/img/feat.jpg" style="height:16px; width:73px" /></td>
                                                                                                        <td rowspan="4"><img src="http://www.dunloptire.co.th/img/maxx03.jpg" style="height:177px; width:375px" /></td>
                                                                                                        <td rowspan="4">&nbsp;</td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td>
                                                                                                            <p>- Flatter tread profile</p>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td><img src="http://www.dunloptire.co.th/img/benefit.jpg" style="height:16px; width:86px" /></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td>
                                                                                                            <p>- พื้นที่ผิวสัมผัสหน้ายางกับพื้นผิวถนนเพิ่มมากขึ้น 4-8%&nbsp;<br />
                                                                                                                *ช่วยเพิ่มประสิทธิภาพในการยึดเกาะถนนและการทรงตัว<br />
                                                                                                                ของรถยนต์</p>

                                                                                                            <p>* ขึ้นอยู่กับขนาดและชนิดของยาง</p>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td><img src="http://www.dunloptire.co.th/img/lb.gif" style="height:8px; width:9px" /></td>
                                                                                                        <td colspan="2">&nbsp;</td>
                                                                                                        <td><img src="http://www.dunloptire.co.th/img/rb.gif" style="height:8px; width:10px" /></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <p>&nbsp;</p>

                                                                                            <p><strong>Asymmetric tread design</strong><br />
                                                                                                <strong><img src="http://www.dunloptire.co.th/img/hr.jpg" style="height:2px; width:729px" /></strong><br />
                                                                                                การออกแบบหน้ายางแบบ Asymmetric และการความแปรผันของ land-sea ratio เพื่อปรับปรุงประสิทธิในการต้านทานการเหินน้ำ โดยมีดอกยาง ตรงกลางช่วยเพิ่มการขับขี่ได้อย่างมั่นคงและแม่นยำ ร่องดอกยางแบบ asymmetric ช่วยเพิ่มการยึดเกาะทั้งบนถนนแห้งและเปียก รวมถึงดอกยาง ที่ไหล่ยางด้านนอกเพิ่มการยึดเกาะขณะเข้าโค้ง จากคุณสมบัติทั้งหมดดังกล่าวช่วยเพิ่มความเพลิดเพลินและความรู้สึกผ่อนคลายในทุกการขับขี่ ไม่ว่าจะเป็นเส้นทางตรงหรือขณะเข้าโค้ง</p>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <table border="0" cellpadding="0" cellspacing="0" style="width:97%">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td><img src="http://www.dunloptire.co.th/img/lt.gif" style="height:12px; width:9px" /></td>
                                                                                                        <td colspan="2">&nbsp;</td>
                                                                                                        <td><img src="http://www.dunloptire.co.th/img/rt.gif" style="height:12px; width:10px" /></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td rowspan="4">&nbsp;</td>
                                                                                                        <td><img src="http://www.dunloptire.co.th/img/feat.jpg" style="height:16px; width:73px" /></td>
                                                                                                        <td rowspan="4"><img src="http://www.dunloptire.co.th/img/maxx04.jpg" style="height:177px; width:337px" /></td>
                                                                                                        <td rowspan="4">&nbsp;</td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td>
                                                                                                            <p>- การออกแบบหน้ายางแบบ Asymmetrical</p>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td><img src="http://www.dunloptire.co.th/img/benefit.jpg" style="height:16px; width:86px" /></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td>
                                                                                                            <p>- เพิ่มประสิทธิภาพขณะเข้าโค้ง<br />
                                                                                                                - การต้านทานการเหินน้ำระดับสูง<br />
                                                                                                                - สามารถตอบสนองต่อพื้นผิวถนนหรือบังคับทิศทางในการขับขี่<br />
                                                                                                                ได้อย่างแม่นยำขณะเข้าโค้ง</p>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td><img src="http://www.dunloptire.co.th/img/lb.gif" style="height:8px; width:9px" /></td>
                                                                                                        <td colspan="2">&nbsp;</td>
                                                                                                        <td><img src="http://www.dunloptire.co.th/img/rb.gif" style="height:8px; width:10px" /></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <p>&nbsp;</p>

                                                                                            <p><strong>Specific bead seat system</strong><br />
                                                                                                <strong><img src="http://www.dunloptire.co.th/img/hr.jpg" style="height:2px; width:729px" /></strong><br />
                                                                                                มีการนำระบบ Specific bead seat system เข้ามาใช้ในการผลิตเพื่อให้ขอบยางสามารถยึดติดกับล้อแม็กซ์ได้อย่างแนบสนิทและช่วยเพิ่มประสิทธภาพในการขับขี่ได้อย่างแม่นยำ จึงทำให้เกิดการตอบสนองในการขับขี่ระหว่างพื้นผิวถนนอย่างดีเยี่ยม</p>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <table border="0" cellpadding="0" cellspacing="0" style="width:97%">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td><img src="http://www.dunloptire.co.th/img/lt.gif" style="height:12px; width:9px" /></td>
                                                                                                        <td colspan="2">&nbsp;</td>
                                                                                                        <td><img src="http://www.dunloptire.co.th/img/rt.gif" style="height:12px; width:10px" /></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td rowspan="4">&nbsp;</td>
                                                                                                        <td><img src="http://www.dunloptire.co.th/img/feat.jpg" style="height:16px; width:73px" /></td>
                                                                                                        <td rowspan="4"><img src="http://www.dunloptire.co.th/img/maxx05.jpg" style="height:188px; width:443px" /></td>
                                                                                                        <td rowspan="4">&nbsp;</td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td>
                                                                                                            <p>- Specific bead seat system</p>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td><img src="http://www.dunloptire.co.th/img/benefit.jpg" style="height:16px; width:86px" /></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td>
                                                                                                            <p>- เพิ่มประสิทธิภาพในการทรงตัวที่มั่นคงและแม่นยำ<br />
                                                                                                                - เพิ่มประสิทธิภาพในการตอบสนองบนพื้นผิวถนน</p>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td><img src="http://www.dunloptire.co.th/img/lb.gif" style="height:8px; width:9px" /></td>
                                                                                                        <td colspan="2">&nbsp;</td>
                                                                                                        <td><img src="http://www.dunloptire.co.th/img/rb.gif" style="height:8px; width:10px" /></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <p>&nbsp;</p>

                                                                                            <p><strong>APEX CONTAINING ARAMID FIBRE</strong><br />
                                                                                                <strong><img src="http://www.dunloptire.co.th/img/hr.jpg" style="height:2px; width:729px" /></strong><br />
                                                                                                Aramid fibre เป็นเส้นใยสังเคราะห์ที่มีความแข็งแรงและทนความร้อนสูง โดยเป็นชื่อย่อที่มาจาก Aromatic polyamide ซึ่งวัสดุชนิดนี้ถูกนำมาใช้ในงานสำหรับเทคโนโลยีชั้นสูงที่ต้องการคุณสมบัติในด้านความแข็งแรง, น้ำหนักเบา หรือทนทนความร้อนสูง&nbsp;<br />
                                                                                                เช่น ชิ้นส่วนรถแข่ง, เรือใบ, เสื้อเกราะกันกระสุน และเทคโนโลยีอากาศยาน<br />
                                                                                                <br />
                                                                                                Aramid fibre จะช่วยให้สามารถตอบสนองประสิทธิภาพในการขับขี่บนพื้นถนนได้ดียิ่งขึ้น โดยนำมาใช้ที่บริเวณ Sidewall Apex ซึ่งเป็นส่วนประกอบสำคัญของยางเพื่อเพิ่มความแข็งแรงที่แก้มยางทำให้เกิดการยึดเกาะระหว่างยางกับล้อแม็กซ์อย่างแน่นหนาช่วยเพิ่มประสิทธิภาพ<br />
                                                                                                ในการขับขี่ในด้านต่างๆ ทั้งขณะเร่งความเร็วและขณะเบรค รวมถึงการเพิ่มสมรรถะขณะเข้าโค้งได้อย่างมั่นคงและแม่นยำอีกด้วย</p>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <table border="0" cellpadding="0" cellspacing="0" style="width:97%">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td></td>
                                                                                                        <td colspan="2">&nbsp;</td>
                                                                                                        <td></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td rowspan="4">&nbsp;</td>
                                                                                                        <td><img src="http://www.dunloptire.co.th/img/feat.jpg" style="height:16px; width:73px" /></td>
                                                                                                        <td rowspan="4"><img src="http://www.dunloptire.co.th/img/maxx06.jpg" style="height:198px; width:456px" /></td>
                                                                                                        <td rowspan="4">&nbsp;</td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td>
                                                                                                            <p>- Aramid fibre pulp</p>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td><img src="http://www.dunloptire.co.th/img/benefit.jpg" style="height:16px; width:86px" /></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td>
                                                                                                            <p>- เพิ่มความแข็งแรงที่แก้มยาง<br />
                                                                                                                - ความมั่นคงขณะเข้าโค้ง<br />
                                                                                                                - เพิ่มการตอบสนองต่อพื้นผิวถนน<br />
                                                                                                                - เพิ่มการความแม่นยำในการขับขี่<br />
                                                                                                                <br />
                                                                                                                คุุณสมบัติ Aramid fibre ได้แก่<br />
                                                                                                                - ทำจากเส้นใยสังเคราะห์<br />
                                                                                                                - น้ำหนักเบา<br />
                                                                                                                - แข็งแรงมากกว่าเหล็กถึง 5 เท่า<br />
                                                                                                                - ทนความร้อนสูง<br />
                                                                                                                - ทนต่อการกัดกร่อน</p>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td><img src="http://www.dunloptire.co.th/img/lb.gif" style="height:8px; width:9px" /></td>
                                                                                                        <td colspan="2">&nbsp;</td>
                                                                                                        <td><img src="http://www.dunloptire.co.th/img/rb.gif" style="height:8px; width:10px" /></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>

                                                                            <p><br />
                                                                                <strong>COMPOUND WITH MOTORSPORT NANOPARTICLES</strong><br />
                                                                                <strong><img src="http://www.dunloptire.co.th/img/hr.jpg" style="height:2px; width:729px" /></strong><br />
                                                                                มีการนำส่วนผสมของเนื่อยางแบบใหม่ซึ่งประกอบด้วย carbon black, silica, nanoparticles, resin และ polymer ชนิดพิเศษซึ่งได้รับการพัฒนา มาจากทาง Motorsport ทำให้ยาง SP Sport Maxx TT สามารถยึดเกาะบนถนนแห้ง/เปียกและการเบรคได้อย่างมีประสิทธิภาพ รวมถึงอายุการใช้งาน ที่ยาวนานขึ้นอีกด้วย</p>

                                                                            <table border="0" cellpadding="3" cellspacing="0" style="width:100%">
                                                                                <tbody>
                                                                                    <tr>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <table border="0" cellpadding="0" cellspacing="0" style="width:97%">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td><img src="http://www.dunloptire.co.th/img/lt.gif" style="height:12px; width:9px" /></td>
                                                                                                        <td colspan="2">&nbsp;</td>
                                                                                                        <td><img src="http://www.dunloptire.co.th/img/rt.gif" style="height:12px; width:10px" /></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td rowspan="4">&nbsp;</td>
                                                                                                        <td><img src="http://www.dunloptire.co.th/img/feat.jpg" style="height:16px; width:73px" /></td>
                                                                                                        <td rowspan="4"><img src="http://www.dunloptire.co.th/img/touch.jpg" style="height:182px; width:379px" /></td>
                                                                                                        <td rowspan="4">&nbsp;</td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td>
                                                                                                            <p>- ส่วนผสมเนื้อยางแบบ nanoparticles</p>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td><img src="http://www.dunloptire.co.th/img/benefit.jpg" style="height:16px; width:86px" /></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td>
                                                                                                            <p>- เพิ่มประสิทธิภาพในการยึดเกาะบนถนนแห้งและเปียก<br />
                                                                                                                - เพิ่มประสิทธิภาพในการเบรคบนถนนแห้งและเปียก<br />
                                                                                                                - เพิ่มอายุการใช้งานที่ยาวนานขึ้น</p>

                                                                                                            <p>คุณลักษณะของ Nanoparticles<br />
                                                                                                                - Nanoparticles มีขนาด 1 ต่อ 100x10-9&nbsp;เมตร<br />
                                                                                                                - ใช้เป็นวัตถุดิบสำหรับงานด้านเทคโนโลยีชั้นสูง<br />
                                                                                                                - การกระจายตัวของ Carbon Black ทำให้เกิดอนุภาคในการ ยึดเกาะโครงสร้างของ Nanopaticles ได้อย่างมีประสิทธิภาพ</p>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td><img src="http://www.dunloptire.co.th/img/lb.gif" style="height:8px; width:9px" /></td>
                                                                                                        <td colspan="2">&nbsp;</td>
                                                                                                        <td><img src="http://www.dunloptire.co.th/img/rb.gif" style="height:8px; width:10px" /></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <p>&nbsp;</p>

                                                                                            <p><img src="http://www.dunloptire.co.th/img/maxxtt-benchmark.gif" style="height:363px; width:719px" /></p>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>

                                                                            <p>&nbsp;</p>

                                                                            <div style="clear: both"></div>
                                                                        </div>
                                                                        </div>
                                                                        <div class="passenger_car_size">
                                                                            <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th colspan="3"  ><div align="center">ขนาดยาง</div></th>
                                                                                        <th><div align="center">เส้นผ่านศูนย์กลาง<br>
                                                                                            </div></th>
                                                                                        <th><div align="center">ความกว้าง<br>
                                                                                            </div></th>
                                                                                        <th><div align="center">ความกว้างของล้อ (นิ้ว)</div></th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <?php
                                                                                    foreach ($tireDiameter as $each):
                                                                                        ?>
                                                                                        <?php $result = $this->select_model->get_dunlop_tire_by_Diameter(2, $each->Tire_Diamete); ?>
                                                                                        <?php
                                                                                        $i = 1;
                                                                                        $cr = '';
                                                                                        foreach ($result as $each2):
                                                                                            ?>
                                                                                            <tr>
                                                                                                <?php if ($i == 1): ?>
                                                                                                    <td rowspan="<?= count($result) ?>"  width="32" height="16" class="tire-f" ><div align="center"><?= $each->Tire_Diamete ?></div></td>
                                                                                                    <?php if ($cr != $each2->Tire_Series): ?>
                                                                                                        <td  bgcolor="#ffde00" ><div align="center"><?= $each2->Tire_Series ?></div></td>
                                                                                                    <?php else: ?>
                                                                                                        <td  > </td>
                                                                                                    <?php endif; ?>

                                                                                                    <td   ><?= $each2->Tire_Name ?></td>
                                                                                                    <td><div align="center"><?= $each2->Tire_Radial ?></div></td>
                                                                                                    <td><div align="center"><?= $each2->Tire_Rim ?></div></td>
                                                                                                    <td><div align="center"><?= $each2->Tire_Width_inc ?></div></td>
                                                                                                <?php else: ?>
                                                                                                    <?php if ($cr != $each2->Tire_Series): ?>
                                                                                                        <td  bgcolor="#ffde00" ><div align="center"><?= $each2->Tire_Series ?></div></td>
                                                                                                    <?php else: ?>
                                                                                                        <td  > </td>
                                                                                                    <?php endif; ?>

                                                                                                    <td   ><?= $each2->Tire_Name ?></td>
                                                                                                    <td><div align="center"><?= $each2->Tire_Radial ?></div></td>
                                                                                                    <td><div align="center"><?= $each2->Tire_Rim ?></div></td>
                                                                                                    <td><div align="center"><?= $each2->Tire_Width_inc ?></div></td>
                                                                                                <?php
                                                                                                endif;
                                                                                                $i++;
                                                                                                ?>
                                                                                            </tr>
                                                                                            <?php
                                                                                            $cr = $each2->Tire_Series;
                                                                                        endforeach;
                                                                                        ?>
                                                                                    <?php endforeach; ?>
                                                                                </tbody>
                                                                                <tfoot>
                                                                                    <tr>
                                                                                        <td >&nbsp;</td>
                                                                                        <td colspan="5"  class="12pxwhite"><div align="right" class="style3">MFS = Max Flange Shield (Rim Protector), XL = Extra Load<span >...</span></div></td>
                                                                                    </tr>
                                                                                </tfoot>
                                                                            </table>
                                                                        </div>
                                                                        <div style="clear:both"></div>
                                                                        </div>
                                                                        </div>
                                                                        </td>
                                                                        </tr>

                                                                        </table></td>
                                                                        </tr>

                                                                        <tr height="30">
                                                                            <td>&nbsp;</td>
                                                                            <td>&nbsp;</td>
                                                                            <td>&nbsp;</td>
                                                                        </tr>
                                                                        <tr height="40">
                                                                            <td bgcolor="#373737">&nbsp;</td>
                                                                            <td width="942" bgcolor="#373737" align="right" class="footer"> 2014 Dunlop Tire (Thailand) Company Limited. All Right Reserved </td>

                                                                            <td bgcolor="#373737">&nbsp;</td>
                                                                        </tr>
                                                                        </table>

                                                                        <!-- end table 3x3-->
                                                                        <script type="text/javascript" src="<?= base_url() ?>public/js/jquery.ba-cond.min.js"></script>
                                                                        <script type="text/javascript" src="<?= base_url() ?>public/js/jquery.slitslider.js"></script>

                                                                        <script type="text/javascript">
                                                $(document).ready(function() {
                                                    $('#tech').hide();
                                                    $('.btn_prodinfo').click(function() {
                                                        $(this).addClass('active')
                                                        $('.btn_tech').removeClass('active')
                                                        $('#tech').hide();
                                                        $('.passenger_car_size').show();
                                                        $('#prodinfo').show();
                                                    });
                                                    $('.btn_tech').click(function() {
                                                        $(this).addClass('active');
                                                        $('.btn_prodinfo').removeClass('active')
                                                        $('#prodinfo').hide();
                                                        $('.passenger_car_size').hide();

                                                        $('#tech').show();
                                                    });


                                                    var Page = (function() {

                                                        var $navArrows = $('#nav-arrows'),
                                                                $nav = $('#nav-dots > span'),
                                                                slitslider = $('#slider').slitslider({
                                                            onBeforeChange: function(slide, pos) {

                                                                $nav.removeClass('nav-dot-current');
                                                                $nav.eq(pos).addClass('nav-dot-current');

                                                            }
                                                        }),
                                                                init = function() {

                                                                    initEvents();

                                                                },
                                                                initEvents = function() {

                                                                    // add navigation events
                                                                    $navArrows.children(':last').on('click', function() {

                                                                        slitslider.next();
                                                                        return false;

                                                                    });

                                                                    $navArrows.children(':first').on('click', function() {

                                                                        slitslider.previous();
                                                                        return false;

                                                                    });

                                                                    $nav.each(function(i) {

                                                                        $(this).on('click', function(event) {

                                                                            var $dot = $(this);

                                                                            if (!slitslider.isActive()) {

                                                                                // $nav.removeClass('nav-dot-current');
                                                                                // $dot.addClass('nav-dot-current');

                                                                            }

                                                                            slitslider.jump(i + 1);
                                                                            return false;

                                                                        });

                                                                    });

                                                                };

                                                        return {init: init};

                                                    })();

                                                    Page.init();


                                                });



                                                                        </script>
                                                                        </body>
                                                                        </html>
