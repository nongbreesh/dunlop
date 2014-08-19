<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <!-- jQuery library (served from Google) -->
        <script src="<?php echo  base_url('public') ?>/js/1.8.2/jquery.min.js"></script>
        <!-- bxSlider Javascript file -->
        <script src="<?php echo  base_url('public') ?>/js/jquery.bxslider.min.js"></script>
        <!-- bxSlider CSS file -->
        <link href="<?php echo  base_url('public') ?>/css/jquery.bxslider.css" rel="stylesheet" />
        <link href="<?php echo  base_url('public') ?>/css/custom_style.css" rel="stylesheet"
              type="text/css" />
        <link href="<?php echo  base_url('public') ?>/css/animate.css" rel="stylesheet"
              type="text/css" />
        <link rel="stylesheet" type="text/css" href="<?php echo  base_url('public') ?>/css/custom.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo  base_url('public') ?>/css/style.css" />
        <script type="text/javascript" src="<?php echo  base_url('public') ?>/js/modernizr.custom.79639.js"></script>
        <noscript>
            <link rel="stylesheet" type="text/css" href="<?php echo  base_url('public') ?>/css/styleNoJS.css" />
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
    <body background="<?php echo  base_url() ?>public/images/home/bg_2.jpg" style="margin:auto">

        <!-- start table 3x3-->
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr height="78" >
                <td background="<?php echo  base_url() ?>public/images/home/logo_1.jpg">&nbsp;</td>
                <td width="942"  style="position: relative;"><table border="0" cellspacing="0" cellpadding="0" width="100%">
                        <tr>
                            <td><a href="<?php echo  base_url() ?>"><img src="<?php echo  base_url() ?>public/images/home/logo_2.jpg" /></a></td>
                            <td background="<?php echo  base_url() ?>public/images/home/logo_3m.png"  width="100%">

                            </td>

                        </tr>
                    </table>
                    <div class="menu">
                        <table id="Table_01" width="687" height="42" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td>
                                    <a href="<?php echo  base_url() ?>home"><img src="<?php echo  base_url() ?>public/images/menu/knowledge/menu_01.png" width="93" height="42" alt=""/></a></td>
                                <td>
                                    <a href="<?php echo  base_url() ?>product"> <img src="<?php echo  base_url() ?>public/images/menu/knowledge/menu_02.png" width="95" height="42" alt=""/></a></td>
                                <td>
                                    <a href="<?php echo  base_url() ?>knowledge"><img src="<?php echo  base_url() ?>public/images/menu/knowledge/menu_03.png" width="135" height="42" alt=""/></a></td>
                                <td>
                                    <a href="<?php echo  base_url() ?>about">  <img src="<?php echo  base_url() ?>public/images/menu/knowledge/menu_04.png" width="122" height="42" alt=""/></a></td>
                                <td>
                                    <a href="<?php echo  base_url() ?>address"><img src="<?php echo  base_url() ?>public/images/menu/knowledge/menu_05.png" width="136" height="42" alt=""/></a></td>
                                <td>
                                    <a href="<?php echo  base_url() ?>contact"><img src="<?php echo  base_url() ?>public/images/menu/knowledge/menu_06.png" width="106" height="42" alt=""/></a></td>
                            </tr>
                        </table>
                    </div>
                </td>
                <td background="<?php echo  base_url() ?>public/images/home/logo_3.jpg">&nbsp;</td>
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
                                            <li><a href="<?php echo  base_url() ?>knowledge/qa"><img style="" src="<?php echo  base_url() ?>public/images/qa.png" onmouseover="this.src = '<?php echo  base_url() ?>public/images/qa_hover.png'" onmouseout="this.src = '<?php echo  base_url() ?>public/images/qa.png'"/></a></li>
                                            <li><a href="<?php echo  base_url() ?>knowledge/tech"><img style="" src="<?php echo  base_url() ?>public/images/tech_hover.png" /></a></li>
                                            <li><a href="<?php echo  base_url() ?>knowledge/usage"><img style="" src="<?php echo  base_url() ?>public/images/usage.png" onmouseover="this.src = '<?php echo  base_url() ?>public/images/usage_hover.png'" onmouseout="this.src = '<?php echo  base_url() ?>public/images/usage.png'"/></a></li>
                                        </ul>
                                    </div>
                                    <div class="contact-r ">
                                        <div class="title_trans-r"> <h1>TECHNOLOGY</h1></div>
                                        <div class="content_body">
                                            <div class="header">DIGITAL ROLLING SIMULATION II</div>
                                            <p>	<span style="float: left;margin: 5px;"><img style="" src="<?php echo  base_url() ?>public/images/techno1.png"/></span>เทคโนโลยีใหม่ล่าสุดที่ Dunlop โดยเป็นการวิเคราะห์ การใช้งาน จริงโดย
                                                เครื่อง Computer ทั้งทางแห้งและเปียก โดยเปรียบเทียบระหว่างความแตกต่างของ 
                                                DRS กับ DRS II ที่ถูกพัฒนาให้มีสมรรถนะสูงขึ้นกว่าเดิม แล้วนำข้อมูลที่เกิดจาก
                                                การวิเคราะห์ทั้งหมดไปผลิต และทดสอบ สมรรถนะยางจริงก่อนออกสู่ตลาด เพื่อ
                                                รองรับกลุ่มเป้าหมายผู้ใช้รถยุโรประดับหรู หรือ Sporty Saloon ความเร็วสูงจึงไม่
                                                เพียงแต่เพิ่มสมรรถนะการเกาะถนนบนความเร็วสูง แต่ยังเพิ่มสมรรถนะ ความมั่น
                                                คงบน ทางเปียก ลดเสียงรบกวน และเพิ่มความนุ่มนวลในการขับขี่คุณสมบัติดังกล่าว</p>
                                            <div class="header">HIGHT SPEED STABILITY</div>
                                            <p>	การยึดเกาะถนนในความเร็วสูงทั้งทางตรงและทางโค้ง ดอกยางแบบ BLOCK RIGIDITY ผนวกกับ DIRECTIONAL เพิ่ม
                                                ความกระชับดอกยาง บนหน้าสัมผัสผิวถนนในทางตรง ร่องดอกบนไหล่รูปปีกนกเพิ่มแรกยึดเหนี่ยวเมื่อเข้าโค้งบนความเร็วสูง
                                                <br></br>
                                                <center><img style="" src="<?php echo  base_url() ?>public/images/techno2.png"/></center>
                                            </p>
                                            <div class="header">WET PERFORMANCE</div>
                                            <p>	ดอกยาง SP SPORT MAXX เพิ่มส่วนผสม COMPOUND สร้าง “FUNCTIONAL POLYMER” ทำให้เนื้อยางยึดเกาะถนน
                                                บนทางเปียก ขณะวิ่งด้วยความเร็วสูง ประสิทธิภาพการหยุดรถ (BREAK) บนทางเปียก เพิ่มขึ้น 5% เมื่อเทียบรุ่น SP9000
                                             <br></br>
                                                <center><img style="" src="<?php echo  base_url() ?>public/images/techno3.png"/></center></p>
                                            <div class="header">QUIETNESS</div>
                                            <p><span style="float: left;margin: 5px;"><img style="" src="<?php echo  base_url() ?>public/images/techno4.png"/></span>	ลดเสียงสะท้อนในขณะใช้ความเร็วสูงด้วยดอก
                                                ยาง SHIFTED PATTERN โดยการสลับตำแหน่งส่วน
                                                ปลายร่องดอกบนไหล่ยางช่วยลดเสียงรบกวน ห้องโดย
                                                สาร ผลการทดสอบ SP MAXX ลดเสียงรบกวนลง 
                                                1.1 เดซิเบล เมื่อเทียบกับ SP 9000 ยาง FLAGSHIP 
                                                รุ่นก่อน</p>
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
        <script type="text/javascript" src="<?php echo  base_url() ?>public/js/jquery.ba-cond.min.js"></script>
        <script type="text/javascript" src="<?php echo  base_url() ?>public/js/jquery.slitslider.js"></script>

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
