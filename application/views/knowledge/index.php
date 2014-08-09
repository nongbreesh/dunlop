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
                                            <li><a href="<?= base_url() ?>knowledge/qa"><img style="" src="<?= base_url() ?>public/images/qa_hover.png" /></a></li>
                                            <li><a href="<?= base_url() ?>knowledge/tech"><img style="" src="<?= base_url() ?>public/images/tech.png" onmouseover="this.src = '<?= base_url() ?>public/images/tech_hover.png'" onmouseout="this.src = '<?= base_url() ?>public/images/tech.png'"/></a></li>
                                            <li><a href="<?= base_url() ?>knowledge/usage"><img style="" src="<?= base_url() ?>public/images/usage.png" onmouseover="this.src = '<?= base_url() ?>public/images/usage_hover.png'" onmouseout="this.src = '<?= base_url() ?>public/images/usage.png'"/></a></li>
                                        </ul>
                                    </div>
                                    <div class="contact-r ">
                                        <div class="title_trans-r"> <h1>ความรู้พืนฐาน <span style="font-size: 36px;margin-left: -14px;">เรืองการปลอดภัยของรถยนต์</span></h1></div>

                                        <h2>เราอยากให้ผู้ใช้รถยนต์ทุกท่านมีความรู้เพิ่มเติมบ้างเพื่อให้ตลอดการใช้ยางรถยนต์ของท่านมีสภาพที่ดีอยู่เสมอ</h2>

                                        <div class="list_bar">

                                            <ul class='accordion'>
                                                <li>
                                                    <label for='cp-1'>แรงดันลมต่ำเป็นอย่างไร</label>
                                                    <input type='radio' name='a' id='cp-1' checked='checked'>
                                                        <div class='content_list'>
                                                            <p>ในสภาวะที่แรงดันลมยางน้อยเกินไปไม่เพียงพอต่อสภาพที่จะทำให้รถยนต์ขับเคลื่อนไปได้อย่างสมบูรณ์ ไม่เพียงแต่จะทำให้สิ้นเปลืองน้ำมันเชื้อเพลิงเท่านั้น จากภายนอกยังสังเกตเห็นความร้อนที่สูงขึ้น จากความร้อนที่เกิดขึ้นนี้ทำให้ยางรถยนต์ถูกเผาให้เสื่อมเร็วขึ้นซึ่งอาจก่อให้้เกิดอันตรายต่อผู้ขับขี่ แรงดันลมยางมีีความสัมพันธ์ต่อการขับเคลื่อนของรถยนต์ ถ้าแรงดันลมน้อยเกินไปจะทำให้รถยนต์เคลื่อนที่ได้อย่างเชื่องช้า ดังนั้นควรตรวจสอบลมยาง&nbsp;<br />
                                                                ให้เหมาะสมกับรถยนต์ของเราให้ดี ที่พิเศษคือยางซีรีย์ต่ำ</p>

                                                            <center><img src="http://www.dunloptire.co.th/img/q1-1.jpg" style="height:178px; width:357px" /></center>

                                                            <p>ถ้าลมยางน้อยเกินไปจะดูจากภายนอกไม่ออกจึงจำเป็นต้องรอให้ยางเย็นตัวลงก่อนจึงจะตรวจสอบแรงดันลมได้โดยใช้เครื่องมือที่เชื่อถือได้<br />
                                                                นอกจากนี้เมื่อเราเปลี่ยนแปลงขนาดของยางรถยนต์จะต้องขอคำแนะนำจากร้านค้าที่ไว้ใจได้เพื่อทราบค่าของลมยางที่เหมาะสมกับรถเรา</p>

                                                            <p>&nbsp;</p>
                                                        </div>
                                                </li>

                                                <li>
                                                    <label for='cp-2'>รับรู้ค่าลมยางรถของคุณ</label>
                                                    <input type='radio' name='a' id='cp-2'>
                                                        <div class='content_list'>
                                                            <p><img src="http://www.dunloptire.co.th/img/q3-1.jpg" style="float:left; height:126px; width:204px" />ภายในรถยนต์นั้น โรงงานที่ผลิตรถยนต์ต้องแนบข้อมูลเกี่ยวกับขนาดยาง และปริมาณแรงดันลมยาง มากับรถยนต์ (ปกติจะติดไว้ที่บริเวณประตูหน้ารถ) ตำแหน่งของแผ่นข้อมูลจะแตกต่างกันไปตามยี่ห้อรถ เพื่อให้ผู้ขับขี่นำไปปฏิบัติก่อนออกรถทุกครั้งให้ตรวจสอบลมยางด้วยว่ามีแรงดันเหมาะสมกับรถยนต์ ที่ท่านใช้อยู่หรือไม่</p>


                                                        </div>
                                                </li>
                                                <li>
                                                    <label for='cp-3'>อันตราย! ถ้ายางของคุณสึก หน้ายางโล้น</label>
                                                    <input type='radio' name='a' id='cp-3'>
                                                        <div class='content_list'>
                                                            <p><img src="http://www.dunloptire.co.th/img/q2-2.jpg" style="float:left; height:126px; width:204px" />การเพิ่มน้ำหนักบรรทุก ซึ่งมีผลต่อการสึกของยางรถยนต์ ไม่เพียงแต่ทำให้สมรรถนะการขับเคลื่อนของรถ<br />
                                                                ลดลง แต่มีผลให้ในยามฝนตก การรีดน้ำออกจากล้อรถยนต์มีน้อยกว่าปกติด้วย มีผลต่อเนื่องให้การห้ามล้อ และพวงมาลัยเริ่มขัดข้อง การลื่นไถลของยางจะปรากฎขึ้นถ้าระดับการสึกหลอมีมากจนเห็นได้ชัด ดังนั้นควรที่จะทำการเปลี่ยนยางใหม่ทันที</p>


                                                        </div>
                                                </li>
                                                <li>
                                                    <label for='cp-4'>สภาพอย่างไรจึงเรียกว่า ยางหมดอายุการใช้งาน (หมดสภาพ)</label>
                                                    <input type='radio' name='a' id='cp-4'>
                                                        <div class='content_list'>
                                                            <p>ตัววัดความสึกหรอของยาง (เครื่องหมายสามเหลี่ยม) จะมีอยู่ที่บริเวณหน้ายาง และเส้นรอบวงที่แก้มยาง ซึ่งจะมีอยู่ 4-9 ตำแหน่ง เมื่อหน้ายางมีการสึกหรอลึกลงจนเหลือ 1.6 mm. ตัววัดยางสึกหรอนี้จะปรากฎขึ้นมาเพื่อบ่งบอกว่าระดับการสึกหรอของยางนี้ต่ำกว่ามาตรฐาน<br />
                                                                ความปลอดภัย ยางที่สึกหรอขนาดนี้จะทำให้สมรรถนะในการขับขี่ลดลงและถ้ายังฝืนใช้ต่อไปอาจเป็นอัตรายต่อผู้ขับขี่ได้</p>

                                                            <p><img src="http://www.dunloptire.co.th/img/q4-1.jpg" style="height:125px; width:384px" /></p>

                                                        </div>
                                                </li>
                                                <li>
                                                    <label for='cp-5'>ยางรถยนต์ที่เสียหายโดยไม่ได้ตั้งใจ ไม่ต้องห่วงจริงหรือ</label>
                                                    <input type='radio' name='a' id='cp-5'>
                                                        <div class='content_list'>
                                                            <p><img src="http://www.dunloptire.co.th/img/q5-1.jpg" style="float:left; height:270px; width:211px" />เมื่อยางรถยนต์เกิดบาดแผลหรือการเสียรูป ซึ่งไม่สามารถทำการซ่อมแซมให้ยางมีสภาพการใช้งานที่ดี ดังเดิมสมมุติว่าความเสียหายกินถึงบริเวณเส้นใยเหล็กหรือโครงยางด้านใน ซึ่งทำให้เกิดอันตราย ต่อผู้ขับขี่จากความเสียหายนี้ได้ ให้หยุดการใช้งานทันที และอย่าละเลยที่จะหมั่นตรวจสอบยางรายวัน ในวันหนึ่งใดวันหนึ่งเห็นว่ามีร่องรอยบาดแผลหรือยางเสียรูปผิดปกติให้ไปพบร้านยาง เพื่อทำการตรวจสอบทันที</p>

                                                            <p>ดูรูปร่างแก้มยางว่ามีความผิดปกติหรือไม่ ? เมื่อสภาพแก้มยางด้านใดด้านหนึ่งเกิดการเสียรูป ให้รีบไปพบร้านยางเพื่อทำการตรวจสอบทันที โดยเฉพาะการเสียรูปที่เรียกว่า&ldquo;ยางบวม&rdquo; เกิดจากการ ที่ล้อเบียดหรือปีนขอบถนนจึงเป็นผลให้ใยเหล็กที่อยู่ชั้นในของยางฉีกขาด ทำให้เกิดการเสียหายกับ<br />
                                                                แก้มยาง หากยังคงใช้งานต่อเนื่องอาจเกิดอันตรายได้</p>
                                                        </div>
                                                </li>
                                                <li>
                                                    <label for='cp-6'>การสลับยางมีวิธีการอย่างไร</label>
                                                    <input type='radio' name='a' id='cp-6'>
                                                        <div class='content_list'>
                                                            <p>หลักในการสลับตำแหน่งยางนั้น จะทำการสลับตามชนิดของยาง และประเภทของระบบขับเคลื่อนของรถยนต์ โดยการสลับยางจะช่วยทำให้การสึกหรอ ของหน้ายางเรียบสม่ำเสมอเท่ากันทั้ง 4 เส้น รวมทั้งช่วยยึดอายุการใช้งาน ขอแนะนำให้ทำการสลับยางทุกๆ 5,000 กิโลเมตร หรืออย่างน้อยภายใน 10,000 กิโลเมตร</p>

                                                            <p><img src="http://www.dunloptire.co.th/img/q6-1.jpg" style="width: 565px;" /></p>
                                                        </div>
                                                </li>
                                                <li>
                                                    <label for='cp-7'>การปรับขนาดยางและล้อทำอย่างไร</label>
                                                    <input type='radio' name='a' id='cp-7'>
                                                        <div class='content_list'>
                                                            <p>โดยปกติแล้วบริษัทผู้ผลิตรถยนต์จะเป็นผู้กำหนดสเปคขนาดยางเพื่อใช้ในการประกอบกับล้อของรถยนต์แต่ละรุ่น แต่ละยี่ห้อ เพื่อให้ได้ยางที่เหมาะสม กับรถยนต์ ทั้งนี้ได้ผ่านมาตรฐานตามเกณฑ์การทดสอบที่บริษัทผู้ผลิตรถยนต์เป็นผู้กำหนด</p>

                                                            <p><img src="http://www.dunloptire.co.th/img/q7-1.jpg" style="height:125px; width:331px" /></p>

                                                            <p>สำหรับการเปลี่ยนยางใหม่ เพื่อทำการทดแทนยางเส้นเก่าที่ติดมากับรถยนต์ หรือต้องการที่จะเปลี่ยนรูปลักษณ์ของยางและล้อให้สวยงามนั้น มีสิ่งที่ต้องคำนึงถึงดังต่อไปนี้<br />
                                                                1. ความสามารถในการรับน้ำหนัก จะต้องมากกว่าหรือเท่ากับขนาดเดิม<br />
                                                                2. ขนาดเส้นผ่าศูนย์กลางยาง จะต้องใกล้เคยงกับขนาดเดิม</p>

                                                            <p>การเปลี่ยนแปลงขนาดยางและล้อที่ผิดวิธีจะมีผลเสียดังนี้<br />
                                                                1. ขนาดยางเล็กไปทำให้ความสามารถในการรับน้ำหนักลดลง, สิ้นเปลืองน้ำมันเชื้อเพลิง และมาตรวัดความเร็ว แสดงผลคลาดเคลื่อน<br />
                                                                2. ขนาดยางใหญ่ไปทำให้ยางอาจเสียดสี หรือสัมผัสกับชิ้นส่วนอื่นๆ ของรถยนต์, พวงมาลัยหนักขณะใช้ความเร็วต่ำ และมาตรวัดความเร็ว แสดงผลคลาดเคลื่อน<br />
                                                                <br />
                                                                ดังนั้นการเปลี่ยนแปลงขนาดยาง และล้อควรปรึกษากับทางร้านค้า/ ตัวแทนจำหน่ายยางรถยนต์ เพื่อให้ได้ขนาดยาง และล้อที่เหมาะสมกับรถยนต์ของท่าน</p>

                                                        </div>
                                                </li>
                                                <li>
                                                    <label for='cp-8'>การดูแลรักษาเก็บยางรถยนต์อย่างไร จึงนับว่าเป็นวิธีที่ถูกต้อง</label>
                                                    <input type='radio' name='a' id='cp-8'>
                                                        <div class='content_list'>
                                                            <p><img src="http://www.dunloptire.co.th/img/q8-1.jpg" style="float:left; height:137px; width:344px" />การบำรุงรักษายางนั้น จะต้องหลีกเลี่ยงการจอดรถยนต์หรือเก็บยางในบริเวณ ที่มีแดดมีฝน (เลี่ยงความร้อนและหลีกเลี่ยงความชื้น) นอกจากนี้ระวังอย่าเก็บในสถานที่ที่จะทำให้ยางเลื่อมสภาพได้ ให้เลี่ยงการเก็บยางไว้ใกล้หม้อแบตเตอรี่ น้ำมันบางชนิด เครื่องทำความร้อน หากปฏิบัติตามอย่างเคร่งครัดจะช่วยลดความเสี่ยงที่ยางของคุณจะเสื่อมสภาพ<br />
                                                                เร็วขึ้นได้</p>

                                                        </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <br></br>

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
