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

                var g = getParameterByName('g');

                $("#bgPopup").data("state", 0);
                if (g) {
                    centerPopup();
                    loadPopup();
                }
                /*$("#pop_slide").click(function() {
                 centerPopup();
                 loadPopup();
                 });*/
                $("#popupClose").click(function() {
                    disablePopup();
                });
                $(document).keypress(function(e) {
                    if (e.keyCode == 27) {
                        disablePopup();
                    }
                });
            });

//Recenter the popup on resize - Thanks @Dan Harvey [http://www.danharvey.com.au/]  
            $(window).resize(function() {
                centerPopup();
            });

            function loadPopup() {
                //loads popup only if it is disabled  
                if ($("#bgPopup").data("state") == 0) {
                    $("#bgPopup").css({
                        "opacity": "0.7"
                    });
                    $("#bgPopup").fadeIn("medium");
                    $("#Popup").fadeIn("medium");
                    $("#bgPopup").data("state", 1);
                }
            }

            function disablePopup() {
                if ($("#bgPopup").data("state") == 1) {
                    $("#bgPopup").fadeOut("medium");
                    $("#Popup").fadeOut("medium");
                    $("#bgPopup").data("state", 0);
                }
            }

            function centerPopup() {
                var winw = $(window).width();
                var winh = $(window).height();
                var popw = $('#Popup').width();
                var poph = $('#Popup').height();
                $("#Popup").css({
                    "position": "absolute",
                    "top": winh / 2 - poph / 2,
                    "left": winw / 2 - popw / 2
                }
                );
                //IE6  
                $("#bgPopup").css({
                    "height": winh
                });
            }
            function getParameterByName(name) {
                name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
                var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
                        results = regex.exec(location.search);
                return results == null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
            }
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
                        <table id="Table_01" width="688" height="42" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td>
                                    <a href="<?= base_url() ?>home"><img src="<?= base_url() ?>public/images/menu/address/menu_01.png" width="99" height="42" alt=""/></a></td>
                                <td>
                                    <a href="<?= base_url() ?>product"> <img src="<?= base_url() ?>public/images/menu/address/menu_02.png" width="92" height="42" alt=""/></a></td>
                                <td>
                                    <a href="<?= base_url() ?>knowledge"><img src="<?= base_url() ?>public/images/menu/address/menu_03.png" width="135" height="42" alt=""/></a></td>
                                <td>
                                    <a href="<?= base_url() ?>about">  <img src="<?= base_url() ?>public/images/menu/address/menu_04.png" width="93" height="42" alt=""/></a></td>
                                <td>
                                    <a href="<?= base_url() ?>address"><img src="<?= base_url() ?>public/images/menu/address/menu_05.png" width="157" height="42" alt=""/></a></td>
                                <td>
                                    <a href="<?= base_url() ?>contact"><img src="<?= base_url() ?>public/images/menu/address/menu_06.png" width="112" height="42" alt=""/></a></td>
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

                                <div class="contact" style="margin-top: -20px;">
                                    <div class="title_trans"><h1>ตัวแทนจำหน่าย <img style="margin-top: -14px;
                                                                                    margin-left: -5px; " src="<?= base_url() ?>public/images/add_loc_icon.png"/></h1> </div>
                                    <div class="row" style="min-height: 1100px;">
                                        <div class="mapaddress">
                                            <div class="bg1 <?= $id == 1 ? 'active' : '' ?>"><a href="<?= base_url() ?>address/zone/1" ></a></div>
                                            <div class="bg2 <?= $id == 5 ? 'active' : '' ?>"><a href="<?= base_url() ?>address/zone/5" ></a></div>
                                            <div class="bg3 <?= $id == 2 ? 'active' : '' ?>"><a href="<?= base_url() ?>address/zone/2" ></a></div>
                                            <div class="bg4 <?= $id == 3 ? 'active' : '' ?>"><a href="<?= base_url() ?>address/zone/3" ></a></div>
                                            <div class="bg5 <?= $id == 4 ? 'active' : '' ?>"><a href="<?= base_url() ?>address/zone/4" ></a></div>
                                            <div class="bg6 <?= $id == 6 ? 'active' : '' ?>"><a href="<?= base_url() ?>address/zone/6" ></a></div>
                                            <div class="bg7 <?= $id == 7 ? 'active' : '' ?>"><a href="<?= base_url() ?>address/zone/7" ></a></div>
                                        </div>

                                        <!--<?php if ($id == 1): ?>
                                                                                                                                                                <div class="mapaddress bg1"></div>
                                        <?php elseif ($id == 2): ?>
                                                                                                                                                                <div class="mapaddress bg2"></div>
                                        <?php elseif ($id == 3): ?>
                                                                                                                                                                <div class="mapaddress bg3"></div>
                                        <?php elseif ($id == 4): ?>
                                                                                                                                                                <div class="mapaddress bg4"></div>
                                        <?php elseif ($id == 5): ?>
                                                                                                                                                                <div class="mapaddress bg5"></div>
                                        <?php elseif ($id == 6): ?>
                                                                                                                                                                <div class="mapaddress bg6"></div>
                                        <?php elseif ($id == 7): ?>
                                                                                                                                                                <div class="mapaddress bg7"></div>

                                        <?php endif; ?>-->


                                        <div class="dealer_list">

                                            <?php foreach ($zone_list as $each): ?>
                                                <div class="zone_name">
                                                    <?php if ($id == $each->ZONE_ID): ?>
                                                        <a class="active" href="<?= base_url() ?>address/zone/<?= $each->ZONE_ID ?>"><?= $each->ZONE_NAME ?></a>
                                                    <?php else: ?>
                                                        <a href="<?= base_url() ?>address/zone/<?= $each->ZONE_ID ?>"><?= $each->ZONE_NAME ?></a>
                                                    <?php endif; ?>
                                                </div>
                                            <?php endforeach; ?>
                                            <div style="clear: both"></div>
                                        </div>

                                        <div class="province_list">
                                            <h1><?= $zone_header ?></h1>
                                            <?php foreach ($area_list as $each): ?>
                                                <div class="area_name">
                                                    <?php if ($area == $each->AREA_ID): ?>
                                                        <a class="active" href="<?= base_url() ?>address/zone/<?= $each->ZONE_ID ?>/<?= $each->AREA_ID ?>"><?= $each->AREA_NAME ?></a>
                                                    <?php else: ?>
                                                        <a href="<?= base_url() ?>address/zone/<?= $each->ZONE_ID ?>/<?= $each->AREA_ID ?>"><?= $each->AREA_NAME ?></a>
                                                    <?php endif; ?>
                                                </div>
                                            <?php endforeach; ?>
                                            <div style="clear: both"></div>
                                        </div>


                                        <div class="dealer_detail">
                                            <table class="tb_dealer_detail">
                                                <thead>
                                                    <tr>
                                                        <th>ผู้แทนจำหน่าย</th>
                                                        <th>ที่อยู่</th>
                                                        <th>เบอร์โทร</th>
                                                        <th>แผนที่</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?php foreach ($dealer_detail as $each): ?>
                                                        <tr>
                                                            <?php if ($each->Dealer_Agent == 1): ?>
                                                                <td><a href="<?= base_url() ?>address/zone/<?= $each->ZONE_ID ?>/<?= $each->AREA_ID ?>?g=<?= $each->Dealer_ID ?>" ><img src="<?= base_url() ?>public/images/dunlop_icon.png" width="15"/></a> <?= $each->Dealer_Name ?> </td>
                                                            <?php else: ?>
                                                                <td><?= $each->Dealer_Name ?> </td>
                                                            <?php endif; ?>
                                                            <td><?= $each->Dealer_Address ?> </td>
                                                            <td><?= $each->Dealer_Tel ?> </td>
                                                            <?php if ($each->Dealer_URL != '' && $each->Dealer_URL != '-'): ?>
                                                                <td align="center"><a target="_blank" href="<?= $each->Dealer_URL ?>"><img src="<?= base_url() ?>public/images/address/pin2.png" /></a> </td>
                                                            <?php else: ?>
                                                                <td></td>
                                                            <?php endif; ?>
                                                        </tr>
                                                    <?php endforeach; ?>

                                                </tbody>
                                            </table>
                                            <div style="clear: both"></div>
                                        </div>

                                    </div>
                                    <div style="clear: both"></div>
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
        <div id="Popup">  
            <a id="popupClose">x</a>  
            <div class="dealerpic">
                <ul class="bxslider">
                    <?php if (isset($dealer_pic)): ?>
                        <?php foreach ($dealer_pic as $each): ?>
                            <li>
                                <img src="<?= base_url() ?>administrator/public/uploads/<?= str_replace('thumb_', '', $each->PIC_Image) ?>" style="width: 500px;" />
                            </li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>
            </div> 
        </div>   
        <div id="bgPopup"></div>
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
