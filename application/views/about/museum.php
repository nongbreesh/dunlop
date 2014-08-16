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
        <link rel="stylesheet" type="text/css" href="<?= base_url('public') ?>/css/slidestyle.css" />
        <script type="text/javascript" src="<?= base_url('public') ?>/js/modernizr.custom.79639.js"></script>
        <script type="text/javascript" src="<?= base_url('public') ?>/js/jquery.gallery.js"></script>
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

            $(function() {
                $('#dg-container').gallery({
                    // autoplay: true
                });
                $('#dg-container2').gallery({
                   // autoplay: true
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
                                            <li><a href="<?= base_url() ?>about/blackground"><img style="" src="<?= base_url() ?>public/images/blackground.png" onmouseover="this.src = '<?= base_url() ?>public/images/blackground_hover.png'" onmouseout="this.src = '<?= base_url() ?>public/images/blackground.png'"/></a></li>
                                            <li><a href="<?= base_url() ?>about/quality"><img style="" src="<?= base_url() ?>public/images/quality.png" onmouseover="this.src = '<?= base_url() ?>public/images/quality_hover.png'" onmouseout="this.src = '<?= base_url() ?>public/images/quality.png'"/></a></li>
                                            <li><a href="<?= base_url() ?>about/museum"><img style="" src="<?= base_url() ?>public/images/museum_hover.png" /></a></li>
                                            <li><a href="<?= base_url() ?>about/activities"><img style="" src="<?= base_url() ?>public/images/activities.png" onmouseover="this.src = '<?= base_url() ?>public/images/activities_hover.png'" onmouseout="this.src = '<?= base_url() ?>public/images/activities.png'"/></a></li>
                                            <li><a href="<?= base_url() ?>about/csr"><img style="" src="<?= base_url() ?>public/images/csr.png" onmouseover="this.src = '<?= base_url() ?>public/images/csr_hover.png'" onmouseout="this.src = '<?= base_url() ?>public/images/csr.png'"/></a></li>
                                        </ul>
                                    </div>
                                    <div class="contact-r ">
                                        <div class="title_trans-r"> <h1>MUSEUM</h1></div>
                                        <p class="content2">Dunlop มีเครือข่ายครอบคลุมไปกว่า 166 ประเทศทั่วโลก และ มีฐานการผลิตอยู่ใน 3 ทวีป เชื่อมโยงเครือข่ายตลาดยาง
                                            รถยนต์ทั่วโลก สามารถรองรับการเติบโตของธุรกิจยานยนต์ ได้อย่างครบวงจร</p>
                                        <h2 class="content2">Photo Collection</h2>
                                        <br></br>

                                        <section id="dg-container" class="dg-container">
                                            <div class="dg-wrapper">
                                                <a href="#"><img style="" src="<?= base_url() ?>public/images/about_images/Photo_01.jpg" width="100%" /><div>x xxxxxxx</div></a>
                                                <a href="#"><img style="" src="<?= base_url() ?>public/images/about_images/Photo_02.jpg" width="100%" /><div>x xxxxxxx</div></a>
                                                <a href="#"><img style="" src="<?= base_url() ?>public/images/about_images/Photo_03.jpg" width="100%" /><div>x xxxxxxx</div></a>
                                                <a href="#"><img style="" src="<?= base_url() ?>public/images/about_images/Photo_04.jpg" width="100%" /><div>x xxxxxxx</div></a>
                                                <a href="#"><img style="" src="<?= base_url() ?>public/images/about_images/Photo_05.jpg" width="100%" /><div>x xxxxxxx</div></a>
                                                <a href="#"><img style="" src="<?= base_url() ?>public/images/about_images/Photo_06.jpg" width="100%" /><div>x xxxxxxx</div></a>
                                                <a href="#"><img style="" src="<?= base_url() ?>public/images/about_images/Photo_07.jpg" width="100%" /><div>x xxxxxxx</div></a>
                                                <a href="#"><img style="" src="<?= base_url() ?>public/images/about_images/Photo_08.jpg" width="100%" /><div>x xxxxxxx</div></a>
                                                <a href="#"><img style="" src="<?= base_url() ?>public/images/about_images/Photo_09.jpg" width="100%" /><div>x xxxxxxx</div></a>
                                                <a href="#"><img style="" src="<?= base_url() ?>public/images/about_images/Photo_10.jpg" width="100%" /><div>x xxxxxxx</div></a>
                                                <a href="#"><img style="" src="<?= base_url() ?>public/images/about_images/Photo_11.jpg" width="100%" /><div>x xxxxxxx</div></a>
                                                <a href="#"><img style="" src="<?= base_url() ?>public/images/about_images/Photo_12.jpg" width="100%" /><div>x xxxxxxx</div></a>
                                                <a href="#"><img style="" src="<?= base_url() ?>public/images/about_images/Photo_13.jpg" width="100%" /><div>x xxxxxxx</div></a>
                                                <a href="#"><img style="" src="<?= base_url() ?>public/images/about_images/Photo_14.jpg" width="100%" /><div>x xxxxxxx</div></a>

                                            </div>
                                            <nav>	
                                                <span class="dg-prev">&lt;</span>
                                                <span class="dg-next">&gt;</span>
                                            </nav>
                                        </section>


                                        <p class="content2">	ประวัติยางดันลอป ที่มีมากกว่า 100 ปี นั้นมีความเกี่ยวข้องกับบุคลลมากมาย และผ่านการทดสอบ การพัฒนามา
                                            นับครั้งไม่ถ้วน ซึ่งก็มีบางส่วนที่อาจจะไม่เกี่ยวข้องกับธุรกิจยานยนต์ในปัจจุบัน ในหน้าที่จะเป็นการรวบรวม ภาพเก่าๆ 
                                            ต่างๆ ที่พอจะหาได้ โดยเฉพาะอย่างยิ่งเป็นรูปที่เป็นของต่างประเทศ</p>

                                        <h2 class="content2"> Poster Collection</h2>
                                        <br></br>
                                        <section id="dg-container2" class="dg-container">
                                            <div class="dg-wrapper">
                                                <a href="#"><img style="" src="<?= base_url() ?>public/images/about_images/Poster_01.jpg" width="100%" /><div>x xxxxxxx</div></a>
                                                <a href="#"><img style="" src="<?= base_url() ?>public/images/about_images/Poster_02.jpg" width="100%" /><div>x xxxxxxx</div></a>
                                                <a href="#"><img style="" src="<?= base_url() ?>public/images/about_images/Poster_03.jpg" width="100%" /><div>x xxxxxxx</div></a>
                                                <a href="#"><img style="" src="<?= base_url() ?>public/images/about_images/Poster_04.jpg" width="100%" /><div>x xxxxxxx</div></a>
                                                <a href="#"><img style="" src="<?= base_url() ?>public/images/about_images/Poster_05.jpg" width="100%" /><div>x xxxxxxx</div></a>
                                                <a href="#"><img style="" src="<?= base_url() ?>public/images/about_images/Poster_06.jpg" width="100%" /><div>x xxxxxxx</div></a>
                                                <a href="#"><img style="" src="<?= base_url() ?>public/images/about_images/Poster_07.jpg" width="100%" /><div>x xxxxxxx</div></a>
                                                <a href="#"><img style="" src="<?= base_url() ?>public/images/about_images/Poster_08.jpg" width="100%" /><div>x xxxxxxx</div></a>
                                                <a href="#"><img style="" src="<?= base_url() ?>public/images/about_images/Poster_09.jpg" width="100%" /><div>x xxxxxxx</div></a>
                                                <a href="#"><img style="" src="<?= base_url() ?>public/images/about_images/Poster_10.jpg" width="100%" /><div>x xxxxxxx</div></a>
                                                <a href="#"><img style="" src="<?= base_url() ?>public/images/about_images/Poster_11.jpg" width="100%" /><div>x xxxxxxx</div></a>
                                                <a href="#"><img style="" src="<?= base_url() ?>public/images/about_images/Poster_12.jpg" width="100%" /><div>x xxxxxxx</div></a>
                                                <a href="#"><img style="" src="<?= base_url() ?>public/images/about_images/Poster_13.jpg" width="100%" /><div>x xxxxxxx</div></a>
                                                <a href="#"><img style="" src="<?= base_url() ?>public/images/about_images/Poster_14.jpg" width="100%" /><div>x xxxxxxx</div></a>
                                                <a href="#"><img style="" src="<?= base_url() ?>public/images/about_images/Poster_15.jpg" width="100%" /><div>x xxxxxxx</div></a>
                                                <a href="#"><img style="" src="<?= base_url() ?>public/images/about_images/Poster_16.jpg" width="100%" /><div>x xxxxxxx</div></a>
                                                <a href="#"><img style="" src="<?= base_url() ?>public/images/about_images/Poster_17.jpg" width="100%" /><div>x xxxxxxx</div></a>
                                                <a href="#"><img style="" src="<?= base_url() ?>public/images/about_images/Poster_18.jpg" width="100%" /><div>x xxxxxxx</div></a>
                                                <a href="#"><img style="" src="<?= base_url() ?>public/images/about_images/Poster_19.jpg" width="100%" /><div>x xxxxxxx</div></a>
                                                <a href="#"><img style="" src="<?= base_url() ?>public/images/about_images/Poster_20.jpg" width="100%" /><div>x xxxxxxx</div></a>
                                                <a href="#"><img style="" src="<?= base_url() ?>public/images/about_images/Poster_21.jpg" width="100%" /><div>x xxxxxxx</div></a>
                                                <a href="#"><img style="" src="<?= base_url() ?>public/images/about_images/Poster_22.jpg" width="100%" /><div>x xxxxxxx</div></a>
                                                <a href="#"><img style="" src="<?= base_url() ?>public/images/about_images/Poster_23.jpg" width="100%" /><div>x xxxxxxx</div></a>
                                            </div>
                                            <nav>	
                                                <span class="dg-prev">&lt;</span>
                                                <span class="dg-next">&gt;</span>
                                            </nav>
                                        </section>

                                        <p class="content2"><span style="color:#fcda36">ดันลอป</span> ซึ่งเกาะติดชีวิตประจำวันของผู้คนโดยผ่านทางยางรถยนต์ได้มอบสิ่งใหม่ๆ ให้กับผู้คน โดยแสดงถึงทัศน
                                            วิสัยที่ลำ้สมัย หน้านี้เป็นการรวบรวมโปสเตอร์ต่างๆ ที่เก็บไว้ที่ดันลอปแต่ละสาขาเป็นการพยายามรวบรวมงานเก่าเท่าที่จะ
                                            ทำได้</p>

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
