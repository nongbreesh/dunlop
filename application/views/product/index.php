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
                                            <?php foreach ($dunlop_group as $each): ?>
                                                <?php if ($groupid == $each->Group_ID): ?>
                                                    <li class="active"><a href = "<?= base_url() ?>product/g/<?= $each->Group_ID ?>"><img style = "" src = "<?= base_url() ?>administrator/public/uploads/<?= $each->Group_IMG_Hover ?>" /></a>
                                                    <?php else: ?>       
                                                        <li ><a href = "<?= base_url() ?>product/g/<?= $each->Group_ID ?>"><img style = "" src = "<?= base_url() ?>administrator/public/uploads/<?= $each->Group_IMG ?>" onmouseover="this.src = '<?= base_url() ?>administrator/public/uploads/<?= $each->Group_IMG_Hover ?>'" onmouseout="this.src = '<?= base_url() ?>administrator/public/uploads/<?= $each->Group_IMG ?>'"/></a>
                                                        <?php endif; ?>
                                                        <?php if ($groupid != 0 || $groupid != 1): ?>
                                                            <?php
                                                            $dunlop_product = $this->select_model->getdunlop_produt_by_gid($each->Group_ID);
                                                            ?>
                                                            <ul>
                                                                <?php if (!empty($dunlop_group_parent)): ?>
                                                                    <?php foreach ($dunlop_group_parent as $each0): ?>
                                                                        <?php if ($parentgid == $each0->Group_ID): ?>
                                                                            <li><a href = "<?= base_url() ?>product/g/<?= $each->Group_ID ?>/0/<?= $each0->Group_ID ?>"><img style = "" src = "<?= base_url() ?>administrator/public/uploads/<?= $each0->Group_IMG_Hover ?>" /></a></li>
                                                                        <?php else: ?>   
                                                                            <li><a href = "<?= base_url() ?>product/g/<?= $each->Group_ID ?>/0/<?= $each0->Group_ID ?>"><img style = "" src = "<?= base_url() ?>administrator/public/uploads/<?= $each0->Group_IMG ?>" onmouseover="this.src = '<?= base_url() ?>administrator/public/uploads/<?= $each0->Group_IMG_Hover ?>'" onmouseout="this.src = '<?= base_url() ?>administrator/public/uploads/<?= $each0->Group_IMG ?>'"/></a></li>
                                                                        <?php endif; ?>
                                                                    <?php endforeach; ?>
                                                                <?php endif; ?>
                                                                <?php foreach ($dunlop_product as $each1): ?>
                                                                    <?php if ($productid == $each1->Product_ID): ?>
                                                                        <li><a href = "<?= base_url() ?>product/g/<?= $each->Group_ID ?>/<?= $each1->Product_ID ?>"><img style = "" src = "<?= base_url() ?>administrator/public/uploads/<?= $each1->Product_IMG_HOVER ?>" /></a></li>
                                                                    <?php else: ?>    
                                                                        <li><a href = "<?= base_url() ?>product/g/<?= $each->Group_ID ?>/<?= $each1->Product_ID ?>"><img style = "" src = "<?= base_url() ?>administrator/public/uploads/<?= $each1->Product_IMG ?>" onmouseover="this.src = '<?= base_url() ?>administrator/public/uploads/<?= $each1->Product_IMG_HOVER ?>'" onmouseout="this.src = '<?= base_url() ?>administrator/public/uploads/<?= $each1->Product_IMG ?>'"/></a></li>
                                                                    <?php endif; ?>
                                                                <?php endforeach; ?>
                                                            </ul>
                                                        <?php endif; ?>

                                                    </li>
                                                <?php endforeach; ?>
                                        </ul>
                                    </div>
                                    <div class = "contact-r " >
                                        <?php if ($groupid == 0 || $groupid == 1 && $productid == 0): ?>

                                            <div class = "title_trans-r"><h1 style = "top: -20px;"><img src = "<?= base_url() ?>public/images/product/pass_head.png"/></h1></div>

                                            <div class = "passenger_car_graph">
                                                <div class = "point1"><a href = "#" ></a></div>
                                                <div class = "point2"><a href = "#" ></a></div>
                                                <div class = "point3"><a href = "#" ></a></div>
                                                <div class = "point4"><a href = "#" ></a></div>
                                                <div class = "point5"><a href = "#" ></a></div>
                                                <div class = "point6"><a href = "#" ></a></div>
                                            </div>
                                            <div class = "passenger_car_use"></div>
                                            <div style = "clear:both"></div>
                                        <?php else: ?>
                                            <?php if ($productid != 0): ?>
                                                <?php
                                                $r = $this->select_model->getdunlop_produt_by_id($productid);
                                                ?>
                                                <div class="title_trans-r"><h1 ><?= $r->Product_Name ?></h1></div>
                                                <div class="passenger_car">
                                                    <a class="btn_prodinfo active" href="javascript:;"></a>
                                                    <a class="btn_tech" href="javascript:;"></a>

                                                    <div class="passenger_car_header"></div>
                                                    <div id="tech">
                                                        <p>
                                                            <?= $r->Product_TECH ?>
                                                        </p>


                                                        <div style="clear: both"></div>
                                                    </div>
                                                    <div id="prodinfo">

                                                        <p>
                                                            <?= $r->Product_INFO ?>
                                                        </p>
                                                        <div style="clear: both"></div>
                                                        <?php if ($r->Product_PDF): ?>
                                                            <div class="download_pdf"><a target="_blank" href="<?= base_url() ?>administrator/public/uploads/files/<?= $r->Product_PDF ?>"</div>
                                                        <?php endif; ?>

                                                    </div>


                                                </div>
                                                <?php if (count($tireDiameter) > 0): ?>
                                                    <div class="passenger_car_size">
                                                        <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                                            <thead>
                                                                <tr>
                                                                    <th colspan="3"  ><div align="center">ขนาดยาง</div></th>
                                                                    <th><div align="center">เส้นผ่านศูนย์กลาง<br>
                                                                        </div></th>
                                                                    <th><div align="center">ความกว้าง<br>
                                                                        </div></th>
                                                                    <th><div align="center">ความกว้างของล้อ (นิ้ว)</div></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                                <?php
                                                                foreach ($tireDiameter as $each):
                                                                    ?>
                                                                    <?php $result = $this->select_model->get_dunlop_tire_by_Diameter($productid, $each->Tire_Diamete); ?>
                                                                    <?php
                                                                    $i = 1;
                                                                    $cr = '';
                                                                    foreach ($result as $each2):
                                                                        ?>
                                                                        <tr>
                                                                            <?php if ($i == 1): ?>
                                                                                <td rowspan="<?= count($result) ?>"  width="32" height="16" class="tire-f" ><div align="center"><?= $each->Tire_Diamete ?></div></td>
                                                                                <?php if ($cr != $each2->Tire_Series): ?>
                                                                                    <td  bgcolor="#ffde00" ><div align="center"><?= $each2->Tire_Series ?></div></td>
                                                                                <?php else: ?>
                                                                                    <td  > </td>
                                                                                <?php endif; ?>

                                                                                <td   ><?= $each2->Tire_Name ?></td>
                                                                                <td><div align="center"><?= $each2->Tire_Radial ?></div></td>
                                                                                <td><div align="center"><?= $each2->Tire_Rim ?></div></td>
                                                                                <td><div align="center"><?= $each2->Tire_Width_inc ?></div></td>
                                                                            <?php else: ?>
                                                                                <?php if ($cr != $each2->Tire_Series): ?>
                                                                                    <td  bgcolor="#ffde00" ><div align="center"><?= $each2->Tire_Series ?></div></td>
                                                                                <?php else: ?>
                                                                                    <td  > </td>
                                                                                <?php endif; ?>

                                                                                <td   ><?= $each2->Tire_Name ?></td>
                                                                                <td><div align="center"><?= $each2->Tire_Radial ?></div></td>
                                                                                <td><div align="center"><?= $each2->Tire_Rim ?></div></td>
                                                                                <td><div align="center"><?= $each2->Tire_Width_inc ?></div></td>
                                                                            <?php
                                                                            endif;
                                                                            $i++;
                                                                            ?>
                                                                        </tr>
                                                                        <?php
                                                                        $cr = $each2->Tire_Series;
                                                                    endforeach;
                                                                    ?>
                                                                <?php endforeach; ?>
                                                            </tbody>
                                                            <tfoot>
                                                                <tr>
                                                                    <td >&nbsp;</td>
                                                                    <td colspan="5"  class="12pxwhite"><div align="right" class="style3">MFS = Max Flange Shield (Rim Protector), XL = Extra Load<span >...</span></div></td>
                                                                </tr>
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                <?php endif; ?>
                                                <div style="clear:both"></div>
                                            <?php else: ?>
                                                <div class="title_trans-r"><h1><?= $dunlop_group_detail->Group_Name ?></h1></div>
                                                <div class="passenger_car">
                                                    <p><?= $dunlop_group_detail->Group_INFO ?></p>
                                                    <?php if ($dunlop_group_detail->Group_PDF): ?>
                                                        <div class="download_pdf" style="bottom: 0;"><a target="_blank" href="<?= base_url() ?>administrator/public/uploads/files/<?= $dunlop_group_detail->Group_PDF ?>"</div>
                                                    <?php endif; ?>
                                                </div>

                                                <div style="clear:both"></div>
                                            <?php endif; ?>

                                        <?php endif; ?>
                                    </div>
                                </div>
                            </td>
                        </tr>

                    </table></td>
            </tr>

            <tr height = "30">
                <td>&nbsp;
                </td>
                <td>&nbsp;
                </td>
                <td>&nbsp;
                </td>
            </tr>
            <tr height = "40">
                <td bgcolor = "#373737">&nbsp;
                </td>
                <td width = "942" bgcolor = "#373737" align = "right" class = "footer"> 2014 Dunlop Tire (Thailand) Company Limited. All Right Reserved </td>

                <td bgcolor = "#373737">&nbsp;
                </td>
            </tr>
        </table>

        <!--end table 3x3-->
        <script type = "text/javascript" src = "<?= base_url() ?>public/js/jquery.ba-cond.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>public/js/jquery.slitslider.js"></script>

        <script type="text/javascript">
                                                                            $(document).ready(function() {
                                                                                $('#tech').hide();
                                                                                $('.btn_prodinfo').click(function() {
                                                                                    $(this).addClass('active')
                                                                                    $('.btn_tech').removeClass('active')
                                                                                    $('#tech').hide();
                                                                                    $('.passenger_car_size').show();
                                                                                    $('#prodinfo').show();
                                                                                });
                                                                                $('.btn_tech').click(function() {
                                                                                    $(this).addClass('active');
                                                                                    $('.btn_prodinfo').removeClass('active')
                                                                                    $('#tech').show();
                                                                                    $('#prodinfo').hide();
                                                                                    $('.passenger_car_size').hide();
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
