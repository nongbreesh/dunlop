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
                var slider = $('.bxslider').bxSlider({
                    auto: true,
                    stopAuto: false,
                    startSlide: 0
                });

                $(document).on('click', '.bx-pager-link', function() {
                    slider.stopAuto();
                    slider.startAuto();
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
                        <table id="Table_01" width="861" height="42" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td>
                                    <a href="<?php echo  base_url() ?>home"><img src="<?php echo  base_url() ?>public/images/menu/home/menu_01.png" width="101" height="42" alt=""/></a></td>
                                <td>
                                    <a href="<?php echo  base_url() ?>product"> <img src="<?php echo  base_url() ?>public/images/menu/home/menu_02.png" width="89" height="42" alt=""/></a></td>
                                <td>
                                    <a href="<?php echo  base_url() ?>knowledge"><img src="<?php echo  base_url() ?>public/images/menu/home/menu_03.png" width="132" height="42" alt=""/></a></td>
                                <td>
                                    <a href="<?php echo  base_url() ?>about">  <img src="<?php echo  base_url() ?>public/images/menu/home/menu_04.png" width="121" height="42" alt=""/></a></td>
                                <td>
                                    <a href="<?php echo  base_url() ?>address"><img src="<?php echo  base_url() ?>public/images/menu/home/menu_05.png" width="137" height="42" alt=""/></a></td>
                                <td>
                                    <a href="<?php echo  base_url() ?>contact"><img src="<?php echo  base_url() ?>public/images/menu/home/menu_06.png" width="281" height="42" alt=""/></a></td>
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

                                <table class=border-radius  background="<?php echo  base_url() ?>public/images/home/bg_1.jpg" width="942" height="320" cellspacing="10" cellpadding="0" >
                                    <tr>
                                        <td valign="top" width="220">
                                            <form action="<?php echo  base_url() ?>search" method="post">
                                                <table  border="0" cellspacing="0" cellpadding="0" width="220">
                                                    <tr height="70">
                                                        <td><img src="<?php echo  base_url() ?>public/images/home/Find_1.png" /></td>
                                                    </tr>
                                                    <tr height="180">
                                                        <td background="<?php echo  base_url() ?>public/images/home/Find_2.png" valign="top"><table border="0" cellspacing="10" cellpadding="0">
                                                                <tr>
                                                                    <td><img src="<?php echo  base_url() ?>public/images/home/Find_4.png"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>

                                                                        <select name="size" id="size" style="margin-top: 10px;"><option value="0">(1) ขนาดหน้ายาง</option>
                                                                            <?php foreach ($tire_width as $each) { ?>
                                                                                <option value="<?php echo $each->Tire_Width; ?>"><?php echo $each->Tire_Width; ?></option>';
                                                                            <?php } ?>
                                                                        </select>

                                                                        <select name="series" id="series" style="width: 86px;margin-top: 10px;"><option value="0">(2) Series</option>
                                                                            <?php foreach ($tire_series as $each) { ?>
                                                                                <option value="<?php echo $each->Tire_Series; ?>"><?php echo $each->Tire_Series; ?></option>';
                                                                            <?php } ?>
                                                                        </select>

                                                                        <select name="diameter" id="diameter" style="width: 100%;margin-top: 10px;"><option value="0">(3) ขนาดขอบกระทะล้อ (นิ้ว)</option>
                                                                            <?php foreach ($tire_size as $each) { ?>
                                                                                <option value="<?php echo $each->Tire_Diameter; ?>"><?php echo $each->Tire_Diameter; ?></option>';
                                                                            <?php } ?>
                                                                        </select>

                                                                    </td>
                                                                </tr>
                                                            </table></td>
                                                    </tr>
                                                    <tr height="50">
                                                        <td background="<?php echo  base_url() ?>public/images/home/Find_3.png" style="background-repeat: no-repeat;"><table border="0" cellspacing="10" cellpadding="0">
                                                                <tr>
                                                                    <td><button type="submit" class="btn-vdo">SEARCH</button></td>
                                                                </tr>
                                                            </table></td>
                                                    </tr>
                                                </table>
                                            </form>
                                        </td>
                                        <td valign="top" align="center" width="230"><table width="210" border="0" cellspacing="0" cellpadding="0">
                                                <tr>
                                                    <td><img src="<?php echo  base_url() ?>public/images/home/product_1.png" /></td>
                                                </tr>
                                                <?php foreach ($dunlop_group as $each): ?>
                                                    <tr>
                                                        <td ><a href="<?php echo  base_url() ?>product/g/<?php echo  $each->Group_ID ?>" ><img style = "" src = "<?php echo  base_url() ?>administrator/public/uploads/<?php echo  $each->Group_IMG ?>" onmouseover="this.src = '<?php echo  base_url() ?>administrator/public/uploads/<?php echo  $each->Group_IMG_Hover ?>'" onmouseout="this.src = '<?php echo  base_url() ?>administrator/public/uploads/<?php echo  $each->Group_IMG ?>'"/></a></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                               
                                                <tr>
                                                    <td>&nbsp;</td>
                                                </tr>
                                            </table></td>
                                        <td width="452"><table width="450" border="0" cellspacing="0" cellpadding="0">
                                                <tr>
                                                    <td colspan="3"><img src="<?php echo  base_url() ?>public/images/home/vdo_1.png" /></td>
                                                </tr>
                                                <tr>
                                                    <td><img src="<?php echo  base_url() ?>public/images/home/vdo_2_1.png" /></td>
                                                    <td width="430" background="<?php echo  base_url() ?>public/images/home/vdo_2_2.png" style="text-align: center;">
                                                        <div class="vdo" id="vdo">
                                                            <embed id="video" src="https://www.youtube-nocookie.com/v/<?php echo  $dunlop_vdo[0]->VIDEO_LINK ?>?version=3&amp;hl=en_US&amp;rel=0&showinfo=0"
                                                                   type="application/x-shockwave-flash" width="425" height="230"  allowscriptaccess="never" allowfullscreen="true">

                                                            </embed>
                                                        </div>
                                                        <?php foreach ($dunlop_vdo as $each): ?>
                                                            <button class="btn-vdo" id="btn-vdo<?php echo  $each->VIDEO_ID ?>"  data-value="https://www.youtube-nocookie.com/v/<?php echo  $each->VIDEO_LINK ?>?version=3&amp;hl=en_US&amp;rel=0&showinfo=0" onclick="showvdo(this.id);"><?php echo  $each->VIDEO_Headline ?></button>
                                                        <?php endforeach; ?>
                                                    </td>
                                                    <td><img src = "<?php echo  base_url() ?>public/images/home/vdo_2_3.png" /></td>
                                                </tr>
                                                <tr>
                                                    <td colspan = "3"><img src = "<?php echo  base_url() ?>public/images/home/vdo_3.png" /></td>
                                                </tr>
                                            </table></td>
                                    </tr>
                                </table></td>
                        </tr>
                        <tr>
                            <td height = "15"></td>
                        </tr>
                    </table></td>
                <td >&nbsp;
                </td>
            </tr>
            <tr height = "500">
                <td>&nbsp;
                </td>
                <td valign = "top"><table height = "500" width = "942" cellspacing = "0" cellpadding = "0" >
                        <tr>
                            <td width = "550" valign = "top"><table class = border-radius background = "<?php echo  base_url() ?>public/images/home/bg_1.jpg" width = "550" height = "500" cellspacing = "10" cellpadding = "0" >
                                    <tr>
                                        <td valign = "top" colspan = "2" ><img src = "<?php echo  base_url() ?>public/images/home/Highlingt.png" /></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php foreach ($dunlop_highlight as $each) :
                                                ?>
                                                <div class="highlight"><a href="<?php echo  $each->Highlight_URL ?>"><img src="<?php echo  base_url() ?>administrator/public/uploads/<?php echo  $each->Highlight_IMG ?>" /></a></div>
                                            <?php endforeach; ?>
                                        </td>

                                    </tr>

                                </table></td>
                            <td width="15">&nbsp;</td>
                            <td width="377" valign="top"><table width="377" height="363" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                        <td colspan="3" height="80" width="357"><img src="<?php echo  base_url() ?>public/images/home/NEWS_1.png" /></td>
                                    </tr>
                                    <tr>
                                        <td height="263" width="10"><img src="<?php echo  base_url() ?>public/images/home/NEWS_2_1.png" /></td>
                                        <td height="263" width="357"  background="<?php echo  base_url() ?>public/images/home/NEWS_2_2.png">
                                            <div class="whatnews">
                                                <ul class="bxslider">
                                                    <?php foreach ($dunlop_news as $each): ?>
                                                        <li>
                                                            <div class="whatnews_frame" style="cursor: pointer;"><img onclick="location.href = '<?php echo  $each->NEWS_URL ?>'" src="<?php echo  base_url() ?>administrator/public/uploads/<?php echo  str_replace('thumb_', '', $each->NEWS_IMG) ?>" width="100%" /></div>
                                                            <p><?php echo  $each->NEWS_Headline ?></p>
                                                        </li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </div>
                                        </td>
                                        <td height="263" width="10"><img src="<?php echo  base_url() ?>public/images/home/NEWS_2_3.png" /></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" height="20" width="357"><img src="<?php echo  base_url() ?>public/images/home/NEWS_3.png" /></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" height="10">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" >

                                            <table width="377" border="0" cellspacing="0" cellpadding="0">
                                                <tr>
                                                    <td height="53"><img src="<?php echo  base_url() ?>public/images/home/search_1.png" /></td>
                                                </tr>
                                                <tr>
                                                    <td background="<?php echo  base_url() ?>public/images/home/search_2.png" valign="top" height="40">

                                                        <select  name="zone" id="zone" style="margin-left: 20px;
                                                                 margin-top:5px;
                                                                 width: 160px;"><option value="">กรุณาเลือกโซน</option>
                                                                 <?php foreach ($zone_list as $each) { ?>
                                                                <option value="<?php echo $each->ZONE_ID; ?>"><?php echo $each->ZONE_NAME; ?></option>';
                                                            <?php } ?>

                                                        </select>
                                                        <select name="area" id="area" style="margin-left: 20px;
                                                                margin-top: 5px;
                                                                width: 160px;"><option value="0">กรุณาเลือกพื้นที่</option></select>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td background="<?php echo  base_url() ?>public/images/home/search_2.png" valign="top" height="30" align="right">
                                                        <button class="btn-vdo" style="margin-right: 10px;" onclick="godealer();"> SEARCH</button></td>
                                                </tr>
                                                <tr height="10">
                                                    <td background="<?php echo  base_url() ?>public/images/home/search_3.png" ></td>
                                                </tr>
                                            </table>

                                        </td>
                                    </tr>
                                </table></td>
                        </tr>
                    </table></td>
                <td>&nbsp;</td>
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

                                                            function godealer() {
                                                                var zone = $("#zone").val();
                                                                var area = $("#area").val();

                                                                if (zone == '' || zone == 0) {
                                                                    alert('กรุณาเลือกโซนก่อนค่ะ');
                                                                    return false;
                                                                }
                                                                if (area == '' || area == 0) {
                                                                    alert('กรุณาเลือกพื้นที่ก่อนค่ะ');
                                                                    return false;
                                                                }
                                                                var url = '<?php echo  base_url() ?>address/zone/' + zone + '/' + area;
                                                                location.href = url;
                                                            }
                                                            $(document).ready(function() {


                                                                $('#zone').change(function() {
                                                                    $("#area").html($("<option></option>").val(0).html('กรุณาเลือกพื้นที่'));
                                                                    $.ajax({
                                                                        type: "POST",
                                                                        url: "<?php echo base_url(); ?>" + "home/load_area",
                                                                        data: {'id': $(this).val()},
                                                                        dataType: "json",
                                                                        success: function(data) {

                                                                            $.each(data, function(key, data) {
                                                                                console.log(key)
                                                                                $.each(data, function(index, data) {
                                                                                    //data.AREA_ID
                                                                                    //data.AREA_NAME
                                                                                    $("#area").append($("<option></option>").val(data.AREA_ID).html(data.AREA_NAME));
                                                                                })
                                                                            })

                                                                        },
                                                                        error: function(XMLHttpRequest) {
                                                                            console.log(XMLHttpRequest.status);
                                                                        }
                                                                    });
                                                                })
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
