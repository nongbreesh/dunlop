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
                                    <div class="title_trans"><h1>FIND YOU TIRE</h1> 
                                        <div class="tire_search">
                                            <form action="<?= base_url() ?>search" method="post">
                                                <select name="size" id="size" style="margin-top: 10px;"><option value="0">(1) ขนาดหน้ายาง</option>
                                                    <?php foreach ($tire_width as $each) { ?>
                                                        <?php if ($size == $each->Tire_Width): ?>
                                                            <option  selected="selected" value="<?php echo $each->Tire_Width; ?>"><?php echo $each->Tire_Width; ?></option>';
                                                        <?php else: ?>
                                                            <option  value="<?php echo $each->Tire_Width; ?>"><?php echo $each->Tire_Width; ?></option>';
                                                        <?php endif; ?>
                                                    <?php } ?>
                                                </select>

                                                <select name="series" id="series" style="width: 86px;margin-top: 10px;"><option value="0">(2) Series</option>
                                                    <?php foreach ($tire_series as $each) { ?>
                                                        <?php if ($series == $each->Tire_Series): ?>
                                                              <option  selected="selected"  value="<?php echo $each->Tire_Series; ?>"><?php echo $each->Tire_Series; ?></option>';
                                                        <?php else: ?>
                                                             <option  value="<?php echo $each->Tire_Series; ?>"><?php echo $each->Tire_Series; ?></option>';
                                                        <?php endif; ?>
                                                    <?php } ?>
                                                </select>

                                                <select name="diameter" id="diameter" style="margin-top: 10px;"><option value="0">(3) ขนาดขอบกระทะล้อ (นิ้ว)</option>
                                                    <?php foreach ($tire_size as $each) { ?>
                                                      <?php if ($diameter == $each->Tire_Diameter): ?>
                                                             <option  selected="selected"  value="<?php echo $each->Tire_Diameter; ?>"><?php echo $each->Tire_Diameter; ?></option>';
                                                        <?php else: ?>
                                                            <option value="<?php echo $each->Tire_Diameter; ?>"><?php echo $each->Tire_Diameter; ?></option>';
                                                        <?php endif; ?>
                                                       
                                                    <?php } ?>
                                                </select>

                                                <button type="submit" class="btn-tire-search">SEARCH</button>
                                            </form>
                                        </div>

                                    </div>
                                    <div class="tire_result ">
                                        <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th style="width: 50px;"></th>
                                                    <th colspan="3"><div align="center">ขนาดยาง</div></th>
                                                    <th><div align="center">เส้นผ่านศูนย์กลาง<br>
                                                        </div></th>
                                                    <th><div align="center">ความกว้าง<br>
                                                        </div></th>
                                                    <th><div align="center">ความกว้างของล้อ (นิ้ว)</div></th>

                                                    <th><div align="center">ประเภทยาง</div></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($tire_list as $each): ?>
                                                    <tr>
                                                        <td><a href="<?= $each->Product_URL ==''?'#':$each->Product_URL ?>"><img src="<?= base_url() ?>administrator/public/uploads/<?= $each->Product_IMG ?>" border="0" style="max-width: 200px;max-height: 50px;"/></a> </td>
                                                        <td class="size"><?= $each->Tire_Diameter ?></td>
                                                        <td class="series"><?= $each->Tire_Series ?></td>
                                                        <td><?= $each->Tire_Name ?></td>
                                                        <td><div align="center"><?= $each->Tire_Radial ?></div></td>
                                                        <td><div align="center"><?= $each->Tire_Rim ?></div></td>
                                                        <td><div align="center"><?= $each->Tire_Width_inc ?></div></td>
                                                        <td> <img src="<?= base_url() ?>administrator/public/uploads/<?= $each->Type_IMG ?>" style="max-width: 200px;max-height: 50px;" /></td>
                                                    </tr>
                                                <?php endforeach; ?>

                                            </tbody>

                                        </table>
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
