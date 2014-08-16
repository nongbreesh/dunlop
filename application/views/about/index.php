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
                    auto: true,
                    captions: true
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
                                    <a href="<?= base_url() ?>home"><img src="<?= base_url() ?>public/images/menu/about/menu_01.png" width="98" height="42" alt=""/></a></td>
                                <td>
                                    <a href="<?= base_url() ?>product"> <img src="<?= base_url() ?>public/images/menu/about/menu_02.png" width="95" height="42" alt=""/></a></td>
                                <td>
                                    <a href="<?= base_url() ?>knowledge"><img src="<?= base_url() ?>public/images/menu/about/menu_03.png" width="104" height="42" alt=""/></a></td>
                                <td>
                                    <a href="<?= base_url() ?>about">  <img src="<?= base_url() ?>public/images/menu/about/menu_04.png" width="174" height="42" alt=""/></a></td>
                                <td>
                                    <a href="<?= base_url() ?>address"><img src="<?= base_url() ?>public/images/menu/about/menu_05.png" width="107" height="42" alt=""/></a></td>
                                <td>
                                    <a href="<?= base_url() ?>contact"><img src="<?= base_url() ?>public/images/menu/about/menu_06.png" width="118" height="42" alt=""/></a></td>
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
                                    <div class="sidebar-l" ><div class="about_title"></div>

                                        <ul class="sidemenu">
                                            <li><a href="<?= base_url() ?>about/blackground"><img style="" src="<?= base_url() ?>public/images/blackground_hover.png" /></a></li>
                                            <li><a href="<?= base_url() ?>about/quality"><img style="" src="<?= base_url() ?>public/images/quality.png" onmouseover="this.src = '<?= base_url() ?>public/images/quality_hover.png'" onmouseout="this.src = '<?= base_url() ?>public/images/quality.png'"/></a></li>
                                            <li><a href="<?= base_url() ?>about/museum"><img style="" src="<?= base_url() ?>public/images/museum.png" onmouseover="this.src = '<?= base_url() ?>public/images/museum_hover.png'" onmouseout="this.src = '<?= base_url() ?>public/images/museum.png'"/></a></li>
                                            <li><a href="<?= base_url() ?>about/activities"><img style="" src="<?= base_url() ?>public/images/activities.png" onmouseover="this.src = '<?= base_url() ?>public/images/activities_hover.png'" onmouseout="this.src = '<?= base_url() ?>public/images/activities.png'"/></a></li>
                                            <li><a href="<?= base_url() ?>about/csr"><img style="" src="<?= base_url() ?>public/images/csr.png" onmouseover="this.src = '<?= base_url() ?>public/images/csr_hover.png'" onmouseout="this.src = '<?= base_url() ?>public/images/csr.png'"/></a></li>
                                        </ul>
                                    </div>
                                    <div class="contact-r ">
                                        <div class="title_trans-r"> <h1>BACKGROUND</h1></div>
                                        <p class="content2">
                                            <span style="float: left;margin: 5px;"><img style="" src="<?= base_url() ?>public/images/background1.png"/></span> วิวัฒนาการยางรถยนต์ที่ต้องเติมลมเส้นแรกเกิดเมื่อปี 1888 จากการคิดค้นของ 
                                            MR. J.B. Dunlop ชาวอังกฤษ ผู้ริเริ่มพัฒนายางรถยนต์ที่ต้องสูบลมและมียางในเส้นแรก
                                            ของโลกได้สำเร็จ แรงบันดาลใจของ Dunlop ในการพัฒนายางรถยนต์ที่ใช้สูบลม (ก่อน
                                            หน้านั้นรถยังใช้ยางตัน) เนื่องจากปัญหาของลูกชาย Dunlop จึงคิดทำไส้ในยางจักรยาน
                                            แล้วนำมาสูบลมทำให้เกิดแรงยืดหยุ่นและลดแรงกระแทก วิวัฒนาการดังกล่าวนำไปสู่การ
                                            ปฎิสนธิยางรถยนต์ที่ถูกพัฒนาควบคู่กันไปอย่างต่อเนื่องกว่า 110 ปี มาแล้ว นี่คือเกียรติ
                                            ยศของ Dunlop ที่ต้องถูกจารึกไว้ในโลกยานยนต์


                                        </p>
                                        <br></br><br></br>

                                        <center><img style="" src="<?= base_url() ?>public/images/background2.png"/></center>
                                        <h2 class="content2">หล่อหลอมแนวคิดทีมงานเป็นหนึงเดียว</h2>
                                        <div class="aboutpic">
                                            <ul class="bxslider" style="margin-top: -4px;">
                                                <li>
                                                    <img src="<?= base_url() ?>public/images/about_images/Photo_01.jpg" title="รถจักรยานของลูกชาย ..." style="height: 150px" />
                                                </li>
                                                <li>
                                                    <img src="<?= base_url() ?>public/images/about_images/Photo_02.jpg" title="รถจักรยานของลูกชาย ..." style="height: 150px" />
                                                </li>
                                                <li>
                                                    <img src="<?= base_url() ?>public/images/about_images/Photo_03.jpg" title="รถจักรยานของลูกชาย ..."  style="height: 150px" />
                                                </li>
                                                <li>
                                                    <img src="<?= base_url() ?>public/images/about_images/Photo_04.jpg" title="รถจักรยานของลูกชาย ..." style="height: 150px" />
                                                </li>
                                                <li>
                                                    <img src="<?= base_url() ?>public/images/about_images/Photo_05.jpg" title="รถจักรยานของลูกชาย ..." style="height: 150px" />
                                                </li>
                                                <li>
                                                    <img src="<?= base_url() ?>public/images/about_images/Photo_06.jpg" title="รถจักรยานของลูกชาย ..." style="height: 150px" />
                                                </li>
                                                <li>
                                                    <img src="<?= base_url() ?>public/images/about_images/Photo_07.jpg" title="รถจักรยานของลูกชาย ..." style="height: 150px" />
                                                </li>
                                                <li>
                                                    <img src="<?= base_url() ?>public/images/about_images/Photo_08.jpg" title="รถจักรยานของลูกชาย ..." style="height: 150px" />
                                                </li>
                                                <li>
                                                    <img src="<?= base_url() ?>public/images/about_images/Photo_09.jpg" title="รถจักรยานของลูกชาย ..." style="height: 150px" />
                                                </li>
                                                <li>
                                                    <img src="<?= base_url() ?>public/images/about_images/Photo_10.jpg" title="รถจักรยานของลูกชาย ..." style="height: 150px" />
                                                </li>
                                                <li>
                                                    <img src="<?= base_url() ?>public/images/about_images/Photo_11.jpg" title="รถจักรยานของลูกชาย ..." style="height: 150px" />
                                                </li>
                                                <li>
                                                    <img src="<?= base_url() ?>public/images/about_images/Photo_12.jpg" title="รถจักรยานของลูกชาย ..." style="height: 150px" />
                                                </li>
                                                <li>
                                                    <img src="<?= base_url() ?>public/images/about_images/Photo_13.jpg" title="รถจักรยานของลูกชาย ..." style="height: 150px" />
                                                </li>
                                                <li>
                                                    <img src="<?= base_url() ?>public/images/about_images/Photo_14.jpg" title="รถจักรยานของลูกชาย ..." style="height: 150px" />
                                                </li>
                                            </ul>
                                        </div> 
                                        <p class="content2">
                                            ทีมงานวิศวกรของ DUNLOP ถือว่าสร้างผลิตภัณฑ์ยางรถยนต์ที่มี
                                            คุณภาพมุ่งมันในความรับผิดชอบต่อสังคมคือ ภาระกิจที่ต้องทำให้ได้ 
                                            DUNLOP เสาะแสวงหาทีมงานคุณภาพพร้อมทั้งเน้นสิ่งอำนวยความสะดวก
                                            ในขณะปฏิบัติหน้าที่รวมถึงการสร้างที่ทำงานที่โอ่โถงให้ความสะดวกสบาย 
                                            และมีความอบอุ่น โดยเฉพาะ DUNLOP เน้นธรรมาภิบาลในการปกครองอัน
                                            นำมาสู่ความร่วมมือในการคิดค้นยางรถยนต์คุณภาพระดับพรีเมียม อย่าง
                                            ต่อเนื่อง 

                                        </p>
                                        <h2 class="content2">ดันลอป ประเทศไทย<br/><span style="font-size: 28px;">SUMITOMO RUBBER THAILAND</span></h2>
                                        <p class="content2">	บริษัท ซูมิโตโม รับเบอร์อินดัสตรี ประเทศญี่ปุ่นได้ตั้งโรงงานผลิตยางรถยนต์ Dunlop ในประเทศไทยเมื่อปี 2548 ในชื่อ
                                            บริษัทซูมิโตโม รับเบอร์์ (ไทยแลนด์ ) จำกัด หรือในนาม SRT โรงงานแห่งนี้ตั้งขึ้นในบริเวณอุตสาหกรรมอมตะซิตี้ จังหวัดระยอง 
                                            บนพื้นที่ 346 ไร่ หรือประมาณ 585,000 ตารางเมตร โดยใช้งบการลงทุนจนถึงมิถุนายน 2551 ไปแล้ว 12.2 พันล้านบาท

                                        </p>
                                        <center><img style="" src="<?= base_url() ?>public/images/background2.png"/></center>
                                        <p class="content2">	โรงงานเฟสแรกได้เริ่มผลิตยางรถยนต์ตั้งแต่เดือนพฤศจิกายน 2549 ด้วยเทคโนโลยีการผลิตแบบใหม่ในชื่อว่า “SUN 
                                            SYSTEM” ซึ่งเป็นระบบขบวน การผลิตที่ผสมผสานการผลิตให้เป็นหนึ่งเดียวเพื่อให้ได้ผลการผลิตที่สูงโรงงานเฟสสองได้เริ่มการ
                                            ผลิตเมื่อเดือนตุลาคม 2550 และเมื่อสิ้นสุดปี 2551 โรงงานทั้งสองเฟสจะมีกำลังผลิตยางสำหรับรถยนต์นั่ง รถ SUV เอนกประสงค์ 
                                            และ รถปิ๊กอัพ รวมกันที่ 28,000 เส้นต่อวันและเพื่อที่จะสามารถ ตอบสนองความต้องการของตลาดยางในอนาคต โรงงาน SRT 
                                            มีแผนที่จะขยายกำลังการผลิตถึง 73,000 เส้นต่อวันในปี 2553
                                        </p>
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
