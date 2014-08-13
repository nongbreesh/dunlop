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
                            <td background="<?= base_url() ?>public/images/home/logo_3m.png"  width="100%">

                            </td>

                        </tr>
                    </table>
                    <div class="menu">
                        <table id="Table_01" width="687" height="42" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td>
                                    <a href="<?= base_url() ?>home"><img src="<?= base_url() ?>public/images/menu/knowledge/menu_01.png" width="93" height="42" alt=""/></a></td>
                                <td>
                                    <a href="<?= base_url() ?>product"> <img src="<?= base_url() ?>public/images/menu/knowledge/menu_02.png" width="95" height="42" alt=""/></a></td>
                                <td>
                                    <a href="<?= base_url() ?>knowledge"><img src="<?= base_url() ?>public/images/menu/knowledge/menu_03.png" width="135" height="42" alt=""/></a></td>
                                <td>
                                    <a href="<?= base_url() ?>about">  <img src="<?= base_url() ?>public/images/menu/knowledge/menu_04.png" width="122" height="42" alt=""/></a></td>
                                <td>
                                    <a href="<?= base_url() ?>address"><img src="<?= base_url() ?>public/images/menu/knowledge/menu_05.png" width="136" height="42" alt=""/></a></td>
                                <td>
                                    <a href="<?= base_url() ?>contact"><img src="<?= base_url() ?>public/images/menu/knowledge/menu_06.png" width="106" height="42" alt=""/></a></td>
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
                                    <div class="sidebar-l" ><div class="knowledge_title"></div> 
                                        <ul class="sidemenu">
                                            <li><a href="<?= base_url() ?>knowledge/qa"><img style="" src="<?= base_url() ?>public/images/qa.png" onmouseover="this.src = '<?= base_url() ?>public/images/qa_hover.png'" onmouseout="this.src = '<?= base_url() ?>public/images/qa.png'"/></a></li>
                                            <li><a href="<?= base_url() ?>knowledge/tech"><img style="" src="<?= base_url() ?>public/images/tech.png" onmouseover="this.src = '<?= base_url() ?>public/images/tech_hover.png'" onmouseout="this.src = '<?= base_url() ?>public/images/tech.png'"/></a></li>
                                            <li><a href="<?= base_url() ?>knowledge/usage"><img style="" src="<?= base_url() ?>public/images/usage_hover.png" /></a></li>
                                        </ul>
                                    </div>
                                    <div class="contact-r ">
                                        <div class="title_trans-r"> <h1>ความรู้พืนฐาน <span style="font-size: 36px;margin-left: -14px;">เรืองการบำรุงรักษายางรถยนต์</span></h1></div>
                                        <p class="contact-p" style="margin: 0px;">หากท่านต้องการสอบถามข้อมูล สามารถแจ้งคำถามที่ต้องการได้ที่ marketing@dunloptire.co.th</p>
                                        <div class="content_body" style="margin: 5px 10px;">
                                            <div class="header">การเลือกยางนอก/ยางใน</div>
                                            <p>
                                                <ul>
                                                    <li>เมื่อเปลี่ยนยางใหม่ ควรเลือกใช้ยางที่ได้ตามมาตรฐานตามที่โรงงานผลิตรถยนต์กำหนด</li>
                                                    <li>ควรเลือกใช้ยางรุ่นเดียวกัน หรือประเภทการใช้งานเดียวกันกับรถยนต์นั้นๆ และให้ทำการตรวจสอบให้แน่ใจว่าทางโรงงานผลิต
                                                        รถยนต์ได้ติดตั้งยางได้อย่างถูกต้อง</li>
                                                    <li>อย่าใช้ยางต่างชนิดหรือต่างประเภทการใช้งานในรถยนต์คันเดียวกัน เพราะอาจทำให้เกิดปัญหาขณะขับขี่ได้ (ยกเว้นแต่กรณี
                                                        ฉุกเฉินเท่านั้น)</li>
                                                    <li>อย่านำยางไปทำการหล่อดอกยางใหม่หรือนำไปตกแต่งเพิ่มเติม เพราะอาจก่อให้เกิดอุบัติเหตุหรืออันตรายขณะขับขี่ได้</li>
                                                    <li>ควรเลือกใช้ยางที่เหมาะสมสำหรับการใช้งานขณะขับขี่</li>
                                                    <li>เมื่อเปลี่ยนยางใหม่ จำเป็นต้องเปลี่ยนยางในใหม่ด้วย</li>
                                                    <li>กรุณาใช้ยางในประเภทเดียวกันสำหรับรถยนต์คันเดียวกัน</li>
                                                    <li>ควรทำการประกอบยางกับรถยนต์โดยให้ดอกยางหันไปตามทิศทางที่กำหนดเพื่อให้การใช้งานได้อย่างมีประสิทธิภาพ</li>

                                                </ul>
                                            </p>
                                            <div class="header">การตรวจสอบยางรายวัน</div>
                                            <p>
                                                <ul>
                                                    <li>คู่มือรถยนต์มีการกำหนดแรงดันลมยางที่เหมาะสมสำหรับรถยนต์แต่ละคัน (เป็นค่ามาตรฐานที่เหมาะสมจากโรงงานผลิตรถยนต์)
                                                        ดังนั้นควรเติมลมยางตามค่ามาตรฐานที่กำหนดหรือให้ช่างผู้ที่ชำนาญตรวจสอบ</li>
                                                    <li>ควรตรวจเช็คลมยางอย่างน้อยเดือนละ 1 ครั้ง และให้ทำการตรวจเช็คลมยางขณะยางเย็น กล่าวคือตรวจเช็คในขณะที่รถยนต์
                                                        จอดอยู่ไม่ได้มีการใช้งาน เนื่องจากว่าแรงดันลมยางจะมีค่าเพิ่มขึ้นเนื่องจากความร้อนขณะใช้งานทำให้ค่าที่วัดได้คลาดเคลื่อน</li>
                                                    <li>ทำการการตรวจสอบสภาพยางว่ามีรอยฉีกขาด หรือรอยตะปู, เหล็ก, เศษแก้ว หรือวัตถุอื่นๆทิ่มแทงที่หน้ายางหรือไม่ถ้าไม่พบ
                                                        สิ่งผิดปกติแต่ยังมีปัญหาขณะใช้งานควรติดต่อร้านยางเพื่อทำการตรวจสอบและแก้ไขสิ่งผิดปกติดังกล่าว</li>
                                                    <li>ถ้าพบรอยบาดเฉือน หรือแผลฉีกขาดเกิดที่ยางให้ทำการหยุดใช้งานและส่งให้ร้านยางตรวจสอบความเสียหายทันที</li>
                                                    <li>อายุการใช้งานของยางตามปกติแล้วเมื่อความลึกดอกยางคงเหลือประมาณ 1.6 มม.ถ้ามีการใช้งานต่อจะส่งผลให้เกิดการลื่น
                                                        ไถลได้ง่ายซึ่งมีผลต่อความปลอดภัยในการขับขี่ดังนั้นจึงควรทำการเปลี่ยนยางเส้นใหม่ทันที</li>
                                                    <li>ควรนำรถยนต์ไปทำการตรวจสอบสภาพที่ศูนย์บริการรถยนต์ปีละ 1 ครั้งโดยจะต้องให้ทำการตรวจสอบสภาพยางและแรงดัน
                                                        ลมยางว่ามีสภาพปกติหรือไม่</li>
                                                    <li>ถ้ามีการตรวจสอบสภาพยางด้วยตนเองแล้วพบว่ามีรอยบาดแผลฉีกขาดเกิดขึ้นจนมีการรั่วไหลของลมยาง ให้ทำการซ่อมแซม
                                                        ยางเส้นดังกล่าวโดยช่างผู้ชำนาญการทันที</li> 
                                                    <li>ควรทำการสลับยางทุกๆ 10,000 กิโลเมตรตามตำแหน่งที่คู่มือรถยนต์กำหนดหรือจากคำแนะนำจากร้านยาง
                                                        <br>
                                                     <center><img style="" src="<?= base_url() ?>public/images/usage1.png" /></center></li>
                                                    <li>ถ้ามีการเปลี่ยนแปลงทิศทางขณะขับขี่ทางตรง(ดึงซ้าย - ขวา)ควรทำการตรวจเช็คสภาพยางและศูนย์รถยนต์โดยช่างผู้ชำนาญ</li>
                                                    <li>เมื่อยางที่ใช้งานมีสิ่งผิดปกติเกิดขึ้น ควรนำยางอะไหล่มาใช้ทำงานทดแทนก่อนที่จะนำยางเส้นที่มีปัญหาไปทำการซ่อมแซม</li>
                                                    <li>ยางรถยนต์มีวัตถุดิบหลักคือยางธรรมชาติและยางเทียม เมื่อมีการใช้งานไปนานๆจะมีการสึกหรอและเสื่อมสภาพ ดังนั้นหากมี
                                                        การใช้งานมากกว่า 3 - 4 ปี ขึ้นไปควรที่จะทำการเปลี่ยนยางเส้นใหม่ทันทีเนื่องจากอาจเกิดอุบัติเหตุอันมีผลต่อความปลอดภัย
                                                        ในการขับขี่ได้<br><br>
                                                     <center><img style="" src="<?= base_url() ?>public/images/usage2.png" /></center></li>

                                                </ul>
                                            </p>
                                            <div class="header">เรื่องอื่นๆที่ต้องเอาใจใส่เวลาขับขี่</div>
                                            <p>
                                                <ul>
                                                    <li>ควรทำการขับขี่รถยนต์ตามความเร็วที่กฎหมายกำหนด เช่น รถบรรทุกจะต้องวิ่งความเร็วไม่เกิน 80 กม./ชม. แต่ถ้าวิ่งความ
                                                        เร็วที่ 100 กม./ชม. ขึ้นไปอาจจะส่งผลทำให้เกิดอุบัติเหตุได้ง่าย</li>
                                                    <li>อย่าเร่งเครื่องขณะเข้าโค้งหรือหยุดรถยนต์อย่างกะทันหันอาจทำให้เกิดอุบัติเหตุได้</li>
                                                    <li>ควรขับขี่รถยนต์โดยเว้นระยะห่างระหว่างรถยนต์คันหน้าในระยะที่เหมาะสม โดยเฉพาะขณะฝนตกและพื้นถนนเปียกเมื่อมีการหยุด
                                                        รถยนต์กะทันหันทำให้เกิดการลื่นไถลและเกิดอุบัติเหตุได้ง่าย</li>

                                                    <li>ถ้ามีเสียงผิดปกติขณะขับขี่รถยนต์ให้ทำการหยุดรถยนต์ในพื้นที่ปลอดภัยก่อนที่จะทำการตรวจสอบ</li>
                                                    <li>อย่าทำการการตกแต่งหรือดัดแปลงยางซึ่งอาจทำให้เกิดอุบัติเหตุขณะขับขี่ได้</li>
                                                    <li>ขนาดยางและล้อมีผลต่อสมรรถนะรถยนต์ ถ้ามีขนาดใหญ่เกินไปรถยนต์จะออกตัวช้าและเข็มไมล์คลาดเคลื่อน ถ้ามีขนาดเล็ก
                                                        เกินไปรถยนต์จะออกตัวเร็วและเข็มไมล์คลาดเคลื่อน</li>

                                                </ul>
                                            </p>
                                            <div class="header">เรืองที่ควรเอาใจใส่มื่อเปลี่ยนยางใหม่</div>
                                            <p>
                                                <ul>
                                                    <li>ควรทำการเติมลมยางตามค่ามาตรฐานที่กำหนดเสมอ</li>
                                                    <li>เลี่ยงการขับขี่รถยนต์บนถนนที่เสี่ยงต่ออุบัติเหตุและผลกระทบต่อคุณภาพของยาง เช่น ถนนขรุขระหรือถนนที่มีสิ่งแปลกปลอม
                                                        กีดขวาง เป็นต้น<br>
                                                     <center><img style="" src="<?= base_url() ?>public/images/usage3.png" /></center></li>
                                                    <li>อย่าทำการบรรทุกน้ำหนักเกินค่ามาตรฐานที่ยางกำหนด อาจทำให้ยางระเบิดอันมีผลต่อความปลอดภัยในการขับขี่</li>

                                                    <li>ควรเลือกยางที่เหมาะสมกับการใช้งาน</li>
                                                    <li>เมื่อเปลี่ยนยางใหม่จะต้องทำการตรวจสอบการรั่วไหลของลมยางทุกครั้ง</li>
                                                    <li>เมื่อเปลี่ยนยางใหม่จะต้องทำการเปลี่ยนจุ๊บลมใหม่ทุกครั้ง</li>






                                                </ul>
                                            </p>
                                            <div class="header">เรื่องอื่นๆที่ต้องเอาใจใส่</div>
                                            <p>
                                                <ul>
                                                    <li>ควรจอดในที่ปลอดภัยและให้แน่ใจก่อนที่จะถอดเปลี่ยนยางเสมอ</li>
                                                    <li>เลี่ยงที่จะจอดรถยนต์บริเวณที่มีแสงแดด ฝน น้ำมัน หรือสารเคมีอันมีผลกระทบต่อคุณภาพของยาง</li>
                                                    <li>วิธีอ่านวันที่ผลิตยาง มีดังนี้ เช่น 109 หมายถึงตัวเลขสองหลักแรกคือสัปดาห์ที่ 10 แต่เลขหลักที่สามคือปี 1999 แต่ถ้าเป็นปี 
                                                        2000 ขึ้นไปจะมีตัวเลขสี่ตำแหน่ง เช่น 0500 หมายถึงตัวเลขสองหลักแรกคือสัปดาห์ที่ 5 ตัวเลขสองหลักหลังคือปี 2000 เป็นต้น</li>

                                                    <li>มาตรฐานยางมีดังนี้ GB, JIS, JATMA, ETRTO และ TRA</li>
                                                    <li>ควรปรึกษาช่างผู้ชำนาญเมื่อต้องการปรับเพิ่มหรือลดขนาดยาง</li>
                                                    <li>รูปภาพยางที่อยู่ในแผ่นโฆษณาจะมีรูปร่างและขนาดไม่เท่ากับของจริง</li>

                                                    <li>แก้มยางมีการแสดงข้อมูลเฉพาะและคุณสมบัติในการใช้งาน เพื่อให้ผู้ใช้สามารถเลือกใช้ยางได้ตรงความต้องการในการใช้งาน</li>





                                                </ul>
                                            </p>
                                        </div>
                                        <div style="clear:both"></div>
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
