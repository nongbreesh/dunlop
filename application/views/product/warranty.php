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
                                            <?php $this->load->view('template/slide'); ?>
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
                                            <li><a href="<?= base_url() ?>product/index"><img style="" src="<?= base_url() ?>public/images/product/Product_menu_1.png" onmouseover="this.src = '<?= base_url() ?>public/images/product/Product_menu_1_OV.png'" onmouseout="this.src = '<?= base_url() ?>public/images/product/Product_menu_1.png'" /></a></li>
                                            <li><a href="<?= base_url() ?>product/product_4x4"><img style="" src="<?= base_url() ?>public/images/product/Product_menu_3.png"  onmouseover="this.src = '<?= base_url() ?>public/images/product/Product_menu_3_OV.png'" onmouseout="this.src = '<?= base_url() ?>public/images/product/Product_menu_3.png'"/></a></li> 
                                            <li><a href="<?= base_url() ?>product/product_pickup"><img style="" src="<?= base_url() ?>public/images/product/Product_menu_2.png" onmouseover="this.src = '<?= base_url() ?>public/images/product/Product_menu_2_OV.png'" onmouseout="this.src = '<?= base_url() ?>public/images/product/Product_menu_2.png'"/></a></li>
                                            <li><a href="<?= base_url() ?>product/product_oem"><img style="" src="<?= base_url() ?>public/images/product/Product_menu_4.png" onmouseover="this.src = '<?= base_url() ?>public/images/product/Product_menu_4_OV.png'" onmouseout="this.src = '<?= base_url() ?>public/images/product/Product_menu_4.png'"/></a></li>
                                            <li><a href="<?= base_url() ?>product/warranty"><img style="" src="<?= base_url() ?>public/images/product/Product_menu_5_OV.png" /></a></li>
                                        </ul>
                                    </div>
                                    <div class="contact-r " >
                                        <div class="title_trans-r"><h1>WARRANTY POLICY</h1></div>
                                        <div class="passenger_car">
                                            <a class="btn_warranty active" href="javascript:;"></a>
                                            <a class="btn_warranty2" href="javascript:;"></a>

                                            <div class="passenger_car_header"></div>
                                            <div id="prodinfo">
                                                <p>&nbsp;</p>

                                                <p><img src="http://www.dunloptire.co.th/img/dz101-tireicon.jpg" style="float:left;"/><br />
                                                    &lsquo;สปอร์ตแรงไม่รองใคร ยึดเกาะ ทั้งทางแห้งและทางเปียก เพื่อประสิทธิภาพ การขับขี่ด้วยความเร็ว&rsquo;<br />
                                                    <br />
                                                    DIREZZA DZ102 ยางสปอร์ตนวัตกรรมใหม่ ที่มีสมรรถนะ สำหรับรถสปอร์ตความเร็วสูง ไม่ว่าจะเป็นรูปลักษณ์ดอกยางที่เพิ่มประสิทธิภาพในการต้านทานการเหินน้ำ รวมถึงการยึดเกาะทั้งบนถนนแห้งและเปียก การเข้าโค้ง ประสิทธิภาพการเบรกที่สั้นกว่าเดิม ให้ความมั่นใจในทุกการขับขี่ ทั้งยัง ใช้เทคโนโลยี Hybrid Band ในการผสานการออกแบบ ลายดอกยาง เพื่อช่วยลดเสียงรบกวนขณะขับขี่ DIREZZA DZ102 จึงเป็นการออกแบบที่ลงตัว ที่เหมาะกับผู้ที่รักในความเร็วแบบ เท่ห์และแรงไม่รองใคร</p>



                                                <div style="clear: both"></div>
                                            </div>

                                            <div id="tech">

                                                <p>- กรอกข้อมูลรายละเอียดให้ครบถ้วนในแบบฟอร์มใบขอรับการรับรองการรับประกันคุณภาพยางดันลอป (เอกสารนี้เรียกว่า&ldquo;ใบรับประกัน&rdquo;) พร้อมลายเซ็น/ประทับตราของร้านค้าที่ท่านซื้อยาง<br />
                                                    <br />
                                                    - ฉีก ตามรอยปรุและนำส่งใบรับประกันไปที่ บริษัท ดันลอป ไทร์ (ไทยแลนด์) จำกัด ภายใน 7 วัน นับจากวันที่ซื้อและลูกค้าเก็บส่วนนโยบาย การรับประกันเอกสารทั้งสองส่วนของใบรับประกันนี้ใช้เป็นหลักฐานของการรับประกัน</p>

                                                <p>- ในกรณีที่ยางรถยนต์ที่ลูกค้าซื้อจากร้านได้รับความเสียหาย และลูกค้าต้องการให้ บริษัทฯตรวจสอบยางดังกล่าว ลูกค้าจะต้องนำยางรถ ที่เสียหายนั้นไปที่ร้านค้า และแสดงใบรับประกัน เพื่อให้ร้านค้าตรวจสอบหมายเลขยาง(Serial Number) และวันที่ซื้อยาง และให้ร้านค้าปฎิบัติดังนี้<br />
                                                    - กรณี ยางที่มีอายุไม่เกิน 4 ปีจากเดือน/ปีที่ผลิต ให้ร้านค้าส่งยางที่เสียหายพร้อมกับ แบบฟอร์มการเรียกค่าชดเชยยางรถยนต์ที่เสียหาย ให้บริษัทฯตัดสิน<br />
                                                    - กรณี ยางที่มีอายุเกิน 4 ปีจากเดือน/ปีที่ผลิต แต่ไม่เกิน 4 ปีจากวันที่ซื้อร้านค้าจะต้องแจ้งเลขที่ของใบรับประกันในแบบฟอร์มการเรียก ค่าชดเชย ยางรถยนต์ที่เสียหาย พร้อมทั้งส่งยางที่เสียหายให้บริษัทฯตัดสิน<br />
                                                    - กรณียางที่มีอายุเกิน 4 ปีจากวันที่ซื้อ โดยมีใบรับประกัน หรือเกิน 4 ปีจากเดือน/ปีที่ผลิตโดยไม่มีใบรับประกัน จะถือว่ายางรถยนต์เส้น ดังกล่าวพ้นระยะเวลารับประกันไปแล้ว<br />
                                                    <br />
                                                    - ในกรณีที่ยางที่ติดมากับรถใหม่ได้รับความเสียหาย และลูกค้าต้องการให้บริษัทฯตรวจสอบยางดังกล่าว ลูกค้าจะต้องนำยางรถยนต์นั้น ไปที่ร้านค้าและแสดงหลักฐานการจดทะเบียนครั้งแรกของรถคันดังกล่าวเพื่อให้ร้านค้าตรวจสอบหมายเลขยาง(Serial Number) และวันที่ จดทะเบียนให้ร้านค้าดำเนินการดังต่อไปนี้&nbsp;<br />
                                                    - กรณียางรถยนต์ที่มีอายุไม่เกิน 4 ปีจากเดือน/ปีที่ผลิต ร้านค้า ไม่ต้อง แนบ เอกสารแสดงการ จดทะเบียนครั้งแรกของรถยนต์ ให้นำส่งยางที่เสียหาย พร้อมกับแบบฟอร์มการเรียกค่าชดเชยยางที่เสียหาย ให้ บริษัทฯตัดสิน<br />
                                                    - กรณี ยางรถยนต์ที่มีอายุเกิน 4 ปีจากเดือน/ปีที่ผลิต แต่ไม่เกิน 4 ปี ถ้านับจากวัน/เดือน/ปีที่จดทะเบียนครั้งแรกของรถ ร้านค้าต้องแสดง หลักฐานการจดทะเบียนแรกของรถยนต์ พร้อมกับแบบฟอร์มการเรียกค่าชดเชยยางรถยนตร์ที่เสียหาย และยางที่เสียหายให้บริษัทฯตัดสิน<br />
                                                    - กรณียางรถยนต์ที่มีอายุเกิน 4 ปีจากวัน/เดือน/ปีที่จดทะเบียนของรถยนต์ จะถือว่ายางเส้นดังกล่าวพ้นระยะเวลาการรับประกันไปแล้ว<br />
                                                    <br />
                                                    - ในกรณีที่ไม่มีการระบุหมายเลขใบเอกสารการรับประกัน ตามข้อ 3 หรือ ไม่มีหลักฐานวัน/เดือน/ปีที่จดทะเบียนครั้งแรกตามข้อ 4 ให้ถือว่าระยะเวลาการรับประกันจะเริ่มนับจาก เดือน/ปีที่ผลิตยางเส้นดังกล่าว&nbsp;<br />
                                                    - บริษัทฯขอสงวนสิทธิ์ในการตรวจสอบหาสาเหตุของการชำรุดเสียหายของผลิตภัณฑ์ยางรถยนต์ ก่อนที่จะทำการชดเชย<br />
                                                    - บริษัทฯ ขอสงวนสิทธิ์ที่จะไม่คืนเงินหรือจ่ายค่าชดเชย ในกรณีที่ผลการตรวจสอบแสดงว่าสาเหตุของความเสียหายไม่ได้เป็นผลจากความ บกพร่องในการออกแบบ,กรรมวิธีการผลิต และ/หรือ วัสดุที่ใช้ในการผลิต<br />
                                                    - บริษัทฯขอสงวนสิทธิ์ในการเปลี่ยนแปลงข้อกำหนดหรือเงื่อนไขในการรับประกันในทุกกรณี</p>

                                                <p>&nbsp;</p>



                                                <div style="clear: both"></div>
                                            </div>
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
                                                    $('.btn_warranty').click(function() {
                                                        $(this).addClass('active')
                                                        $('.btn_warranty2').removeClass('active')
                                                        $('#tech').hide();
                                                        $('.passenger_car_size').show();
                                                        $('#prodinfo').show();
                                                    });
                                                    $('.btn_warranty2').click(function() {
                                                        $(this).addClass('active');
                                                        $('.btn_warranty').removeClass('active')
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
