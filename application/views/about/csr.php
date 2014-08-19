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
        <link rel="stylesheet" type="text/css" href="<?php echo  base_url('public') ?>/css/bootstrap.css" />
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
                            <td background="<?php echo  base_url() ?>public/images/home/logo_3.jpg"  width="100%">

                            </td>

                        </tr>
                    </table>
                    <div class="menu">
                        <table id="Table_01" width="696" height="42" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td>
                                    <a href="<?php echo  base_url() ?>home"><img src="<?php echo  base_url() ?>public/images/menu/about/menu_01.png" width="98" height="42" alt=""/></a></td>
                                <td>
                                    <a href="<?php echo  base_url() ?>product"> <img src="<?php echo  base_url() ?>public/images/menu/about/menu_02.png" width="95" height="42" alt=""/></a></td>
                                <td>
                                    <a href="<?php echo  base_url() ?>knowledge"><img src="<?php echo  base_url() ?>public/images/menu/about/menu_03.png" width="104" height="42" alt=""/></a></td>
                                <td>
                                    <a href="<?php echo  base_url() ?>about">  <img src="<?php echo  base_url() ?>public/images/menu/about/menu_04.png" width="174" height="42" alt=""/></a></td>
                                <td>
                                    <a href="<?php echo  base_url() ?>address"><img src="<?php echo  base_url() ?>public/images/menu/about/menu_05.png" width="107" height="42" alt=""/></a></td>
                                <td>
                                    <a href="<?php echo  base_url() ?>contact"><img src="<?php echo  base_url() ?>public/images/menu/about/menu_06.png" width="118" height="42" alt=""/></a></td>
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
                                    <div class="sidebar-l" ><div class="about_title"></div>

                                        <ul class="sidemenu">
                                            <li><a href="<?php echo  base_url() ?>about/blackground"><img style="" src="<?php echo  base_url() ?>public/images/blackground.png" onmouseover="this.src = '<?php echo  base_url() ?>public/images/blackground_hover.png'" onmouseout="this.src = '<?php echo  base_url() ?>public/images/blackground.png'"/></a></li>
                                            <li><a href="<?php echo  base_url() ?>about/quality"><img style="" src="<?php echo  base_url() ?>public/images/quality.png" onmouseover="this.src = '<?php echo  base_url() ?>public/images/quality_hover.png'" onmouseout="this.src = '<?php echo  base_url() ?>public/images/quality.png'"/></a></li>
                                            <li><a href="<?php echo  base_url() ?>about/museum"><img style="" src="<?php echo  base_url() ?>public/images/museum.png" onmouseover="this.src = '<?php echo  base_url() ?>public/images/museum_hover.png'" onmouseout="this.src = '<?php echo  base_url() ?>public/images/museum.png'"/></a></li>
                                             <li><a href="<?php echo  base_url() ?>about/activities"><img style="" src="<?php echo  base_url() ?>public/images/activities.png" onmouseover="this.src = '<?php echo  base_url() ?>public/images/activities_hover.png'" onmouseout="this.src = '<?php echo  base_url() ?>public/images/activities.png'"/></a></li>
                                             <li><a href="<?php echo  base_url() ?>about/csr"><img style="" src="<?php echo  base_url() ?>public/images/csr_hover.png" /></a></li>
                                        </ul>
                                    </div>
                                    <div class="contact-r " >
                                        <div class="title_trans-r"> <h1 style="margin-top: 20px;">CSR</h1></div>
                                        <div class="content-activities">
                                            <div class="row">
                                                <?php foreach ($content_list as $each): ?>
                                                    <div class="col-xs-6 content-list">
                                                        <div class="col-xs-4"><img style="" src="<?php echo  base_url() ?>administrator/public/uploads/Thumbnails_<?php echo  $each->Content_thumbnail ?>" /></div>
                                                        <div class="col-xs-8 content-title"><a href="<?php echo  base_url() ?>about/csr_news/<?php echo  $each->Content_ID ?>"><?php echo  $each->Content_Headline ?></a></div>
                                                    </div>
                                                <?php endforeach; ?>

                                            </div>
                                            <div style="clear:both"></div>
                                        </div>
                                        <div class="paging">
                                            <?php echo $this->pagination->create_links(); ?>
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
