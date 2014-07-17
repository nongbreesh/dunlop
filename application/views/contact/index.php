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
        <link rel="stylesheet" type="text/css" href="<?= base_url('public') ?>/css/bootstrap.css" />
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
                        <table id="Table_01" width="603" height="42" border="0" cellpadding="0" cellspacing="0"> 
                            <tr>
                                <td>
                                    <a href="<?= base_url() ?>home"><img src="<?= base_url() ?>public/images/menu/contact/menu_01.png" width="98" height="42" alt=""/></a></td>
                                <td>
                                    <a href="<?= base_url() ?>product"> <img src="<?= base_url() ?>public/images/menu/contact/menu_02.png" width="96" height="42" alt=""/></a></td>
                                <td>
                                    <a href="<?= base_url() ?>knowledge"><img src="<?= base_url() ?>public/images/menu/contact/menu_03.png" width="129" height="42" alt=""/></a></td>
                                <td>
                                    <a href="<?= base_url() ?>about">  <img src="<?= base_url() ?>public/images/menu/contact/menu_04.png" width="119" height="42" alt=""/></a></td>
                                <td>
                                    <a href="<?= base_url() ?>address"><img src="<?= base_url() ?>public/images/menu/contact/menu_05.png" width="111" height="42" alt=""/></a></td>
                                <td>
                                    <a href="<?= base_url() ?>address"><img src="<?= base_url() ?>public/images/menu/contact/menu_06.png" width="137" height="42" alt=""/></a></td>
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

                                <div class="contact" style="margin-top: -20px;">
                                    <div class="title_trans"><h1>CONTACT</h1></div>
                                    <p class="contact_detail">หากท่านมีข้อสงสัยหรือคำแนะนำใดๆ เพิ่อมเติม ทางดันลอปยินดีที่จะรับฟัง และตอบคำถาม เพียงแค่กรอก ชื่อ, อีเมลล์ หรือเบอร์โทรศัพท์ที่จะติดต่อกลับของ
                                        ท่านพร้อมกรอกรายละเอียดของเรื่องที่ต้องการสอบถามในแบบฟอร์มด้านล่างนี้</p>
                                    <div class="col-xs-6">
                                        <span class="c_danger">กรุณากรอกข้อมูลที่มีเครื่องหมาย * ให้ครบถ้วน</span>

                                        <form role="form">
                                            <table class="contact_form">
                                                <tr>
                                                    <td ><label>ชื่อ :</label><br/><input type="text" id="exampleInputEmail1" class="form-control" ></input></td>
                                                    <td ><label>นามสกุล :</label><br/><input type="text" id="exampleInputEmail1" class="form-control" ></input></td>
                                                </tr>
                                                <tr>
                                                    <td  colspan="2"><label>ที่อยู่ :</label><br/><textarea class="form-control" rows="3"></textarea></td>

                                                </tr>
                                                <tr>
                                                    <td ><label>จังหวัด :</label><br/><select class="form-control">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select></td>
                                                    <td ><label>รหัสไปรษณีย์ :</label><br/><input style="width:150px" type="text" id="exampleInputEmail1" class="form-control" ></input></td>
                                                </tr>
                                                <tr>
                                                    <td ><label>โทรศัพท์ :</label><br/><input type="text" id="exampleInputEmail1" class="form-control" ></input></td>
                                                    <td ><label>อีเมลล์ :</label><br/><input type="text" id="exampleInputEmail1" class="form-control" ></input></td>
                                                </tr>
                                                <tr>
                                                    <td  colspan="2"><label>ข้อความ :</label><br/><textarea class="form-control" rows="3"></textarea></td>

                                                </tr>
                                                <tr>
                                                    <td  colspan="2"> <button class="btn-vdo">ส่งข้อความ</button></td>

                                                </tr>

                                            </table>
                                        </form>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="map"> <div id="map_canvas"></div></div>
                                        <div class="address_detail">
                                            <h1><img style="margin-right: 10px; margin-bottom: 7px;" src="<?= base_url() ?>public/images/location_icon.png"/>DUNLOP CONTACT ADDRESS</h1>
                                            <p>บริษัท ดันลอปไทร์ (ไทยแลนด์) จำกัด<br/>
                                                120 อาคารแอมเพิลทาวเวอร์ ชั้น 24 ห้อง 4/1 หมู่ที่ 11<br/>
                                                ถนนบางนา-ตราด กม.4 แขวงบางนา เขตบางนา<br/>
                                                กรุงเทพมหานคร 10260</p>
                                            <p><img style="margin-right: 10px; " src="<?= base_url() ?>public/images/phone1.png"/>+66 (0) 2744-0199</p>
                                            <p><img style="margin-right: 10px; " src="<?= base_url() ?>public/images/phone2.png"/>+66 (0) 2744-0198</p>
                                            <p>Dunlop Tire (Thailand) Co.,Ltd.
                                                120 Ample Tower, 4th Floor, Unit 4/1
                                                Bangna-Trad Km.4 Road, Kwang Bangna, Khet Bangna,
                                                Bangkok  10260</p>
                                            <p><img style="margin-right: 10px; " src="<?= base_url() ?>public/images/phone1.png"/>+66 (0) 2744-0199</p>
                                            <p><img style="margin-right: 10px; " src="<?= base_url() ?>public/images/phone2.png"/>+66 (0) 2744-0198</p>
                                        </div>
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
        <script src="https://maps.googleapis.com/maps/api/js"></script>
        <script>
                function initialize() {
                    var map_canvas = document.getElementById('map_canvas');
                    var map_options = {
                        center: new google.maps.LatLng(13.667343, 100.642701),
                        zoom: 18,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                    }
                    var map = new google.maps.Map(map_canvas, map_options)
                }
                google.maps.event.addDomListener(window, 'load', initialize);
        </script>
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


            function showvdo(id) {

                var videoWrap = document.getElementById('vdo');
                var element = document.getElementById(id);
                var src = element.getAttribute('data-value');
                // alert(src);
                videoWrap.innerHTML = '<embed src=' + src + ' type="application/x-shockwave-flash" width="425" height="230" allowscriptaccess="never" allowfullscreen="true"></embed>';

            }
        </script>
    </body>
</html>
