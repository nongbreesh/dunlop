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
                                        <?php if ($groupid == 0): ?>
                                            <div class="title_trans-r"><h1 >ALL PRODUCTS</h1></div>
                                            <div class="passenger_car">
                                                <center><img style="" src="<?= base_url() ?>public/images/tire.jpg" /></center></center>
                                            </div>
                                        <?php elseif ($groupid == 1 && $productid == 0): ?>

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
                                            <?php elseif ($groupid == 5): ?>
                                                <div class="title_trans-r"><h1><?= $dunlop_group_detail->Group_Name ?></h1></div>

                                                <div style="margin:40px 10px;"><a class="btn_warranty active" href="javascript:;"></a>
                                                    <a class="btn_warranty2" href="javascript:;"></a></div>
                                               <div style="clear:both"></div>
                                                <div id="prodinfo">
                                                    <p style="margin:10px;"><span class="title_yellow">นโยบายการรับประกันคุณภาพ ผลิตภัณฑ์ยางรถยนต์ดันลอป</span><br/>
                                                    เฉพาะยางเรเดียลสำหรับรถนั่ง รถกระบะและรถตู้*</p>
                                                    <div class="content_body" style="margin:10px;" >
                                                        <div class="header" style="color:#000;">1. ยางรถยนต์ที่อยู่ภายใต้การรับประกัน</div>
                                                        <p>
                                                            <ul>
                                                                <li>การรับประกันนี้ใช้เฉพาะกับยางเรเดียลสำหรับรถนั่ง รถกระบะ และรถตู้ที่ผลิตในประเทศไทย หรือนำเข้าโดย บริษัท ดันลอป 
                                                                    ไทร์ (ไทยแลนด์) จำกัด</li>
                                                                <li>นโยบายการรับประกันนี้ใช้กับยางรถยนต์ที่ซื้อตั้งแต่วันที่ 1 กันยายน 2549 สำหรับยางรถยนต์ที่ซื้อก่อนวันที่ 1 กันยายน 2549 
                                                                    จะอยู่ภายใต้การรับประกันฉบับก่อน</li>
                                                                <li>ยางรถยนต์ดันลอปที่นำเข้าจากต่างประเทศโดยผู้นำเข้าอื่น (ที่ไม่ใช่บริษัทฯ) จะไม่ได้รับการประกันคุณภาพภายใต้เงื่อนไขการ
                                                                    รับประกันนี้ </li>
                                                                <li>สภาพที่ใช้ไม่ได้ใดๆจากการออกแบบหรือกระบวนการผลิต หรือวัสดุที่ใช้ในการผลิตจะได้รับการพิจารณาเป็นกรณีพิเศษจาก
                                                                    บริษัทฯเป็น กรณีไป</li>

                                                            </ul>
                                                        </p>
                                                        <div class="header"  style="color:#000;">2. รับประกันอะไรบ้าง?</div>
                                                        <p>
                                                            <ul>
                                                                <li>การรับประกันวัสดุและคุณภาพของผลิตภัณฑ์ยางรถยนต์ ยางรถยนต์เรเดียลทุกเส้นของดันลอปได้รับการประกันที่เกิดจากข้อ
                                                                    บกพร่องในด้านการออกแบบวัสดุและคุณภาพของผลิตภัณฑ์ ยางรถยนต์ตลอดอายุของดอกยางเดิมจนถึง 1.6 มิลลิเมตรของ
                                                                    ดอกยางที่เหลือในการประเมินความเสียหายต่างๆของยางรถยนต์ว่า เกิดขึ้นเนื่องจากผู้ใช้หรือผู้ผลิตนั้นจะกระทำโดยบุคคลที่
                                                                    แต่งตั้งขึ้นโดย บริษัท ดันลอป ไทร์ (ไทยแลนด์) จำกัด</li>
                                                                <li>มูลค่าในการชดเชยเนื่องด้วยมูลค่าในการชดเชยให้แก่ลูกค้าจะคิดเป็นเปอร์เซ็นต์ระดับความลึกร่องดอกยางที่เหลืออยู่จนถึงระดับ
                                                                    ความลึก ที่ 1.6 มิลลิเมตร โดยจำนวนเงินที่ชดเชยนั้นจะได้มาจากการคูณของราคาขายยางรถยนต์ใหม่ของร้านค้าในปัจจุบัน
                                                                    กับเปอร์เซ็นต์ระดับ ความลึกของร่องดอกยางที่เหลืออยู่ จำนวนในการชดเชยจะถูกคำนวณจาก “ระดับความลึกร่องดอกยาง
                                                                    ที่เหลืออยู่**” ซึ่งสามารถคำนวณได้ดังต่อไปนี้<br><br>
                                                                            <center><img style="" src="<?= base_url() ?>public/images/waran1.png" /></center></li>
                                                                            <li>การชดเชยจะกระทำโดยการขายยางใหม่แก่ผู้ใช้ในราคาดังนี้ 
                                                                                หมายเหตุ** การวัดความลึกร่องดอกยางที่เหลืออยู่โดยบริษัท ดันลอป ไทร์ (ไทยแลนด์) ถือเป็นที่สิ้นสุด<br><br>
                                                                            <center><img style="" src="<?= base_url() ?>public/images/waran2.png" /></center></li>
                                                                            <li>นโยบายการรับประกันนี้ไม่ครอบคลุมต้นทุนอื่นใด เช่น ค่าถอดและใส่ ค่าเสียเวลา ความสูญเสียจากการที่ไม่สามารถใช้รถยนต์ 
                                                                                ค่าความไม่สะดวก และค่าของความเสียหายที่กฎหมายยอมรับ</li>



                                                                            </ul>
                                                                            </p>
                                                                            <div class="header" style="color:#000;">3. อะไรบ้างที่ไม่ครอบคลุม</div>
                                                                            <p>
                                                                                <ul>
                                                                                    <li>ยางรถยนต์ที่เสียหายเนื่องจาก</li>
                                                                                    <li>อุบัติเหตุจากถนน (ฉีกขาด สิ่งกีดขวาง ทะลุ การหยุดรุนแรง และอื่นๆ)</li>
                                                                                    <li>การเติมลมไม่เหมาะสม การบรรทุกน้ำหนักเกิน การสึกไม่สม่ำเสมอ ไม่ถ่วงยาง</li>
                                                                                    <li>ชิ้นส่วนเครื่องกลที่ไม่เหมาะสม (เช่น เบรก กันกระเทือน กระทะล้อ)</li>
                                                                                    <li>การตั้งตัวเหนี่ยวที่ไม่ถูกต้อง อุบัติเหตุ ไฟไหม้ ความเสียหายจากสารเคมี การแข่งรถ การใช้รถนอกถนน วิ่งขณะที่ยางแบน 
                                                                                        การติดตั้งที่ไม่เหมาะสม การทำลายทรัพย์สิน การใช้ผิดประเภท การใช้ผิดลักษณะ</li>
                                                                                    <li>ยางติดรถที่จดทะเบียนต่างประเทศหรือใช้นอกประเทศไทย</li>
                                                                                    <li>ยางที่เอาเลขทะเบียนออก</li>
                                                                                    <li>ยางที่เรียกค่าเสียหายโดยผู้ที่ไม่ใช่ผู้ซื้อคนแรก กรมธรรม์นี้โอนไม่ได้</li>
                                                                                    <li>ยางที่ย้ายไปใช้ในรถคันอื่นจากรถคันเดิม</li>





                                                                                </ul>
                                                                            </p>
                                                                            <div class="header" style="color:#000;">4. อื่นๆ</div>
                                                                            <p>
                                                                                <ul>
                                                                                    <li>ค่าธรรมเนียมในการขนส่งผลิตภัณฑ์ยางรถยนต์เพื่อขอชดเชย (Claim) จากผู้แทนจำหน่ายถึง บริษัท ดันลอปไทร์ (ไทยแลนด์) 
                                                                                        จำกัด จะเป็นภาระของผู้แทนจำหน่าย และบริษัทฯจะไม่รับผิดชอบต่อการสูญหายหรือความเสียหายใดๆในระหว่างการขนส่ง</li>
                                                                                    <li>ค่าธรรมเนียมในการขนส่งผลิตภัณฑ์ยางรถยนต์ที่ไม่ได้รับการชดเชยกลับคืนจะเป็นภาระของบริษัท ดันลอป ไทร์ (ไทยแลนด์) 
                                                                                        จำกัด </li>
                                                                                    <li>ตั้งแต่วันที่ 1 กันยายน 2549 เป็นต้นไป ระยะเวลาของการรับประกันคุณภาพยางรถยนต์มีรายละเอียดดังนี้<br><br>
                                                                            <center><img style="" src="<?= base_url() ?>public/images/waran3.png" /></center></li>

                                                                                    <li>หมายเหตุ
                                                                                        1. สำหรับรายละเอียดวิธีการปฏิบัติดูได้จากหน้าแรกของแผ่นพับ<br>
                                                                                            2.สำหรับรถใหม่วันที่ทำการซื้อให้นับตั้งแต่วันที่จดทะเบียนรถหรือวันที่ระบุใน ใบเสร็จรับเงิน<br>
                                                                                                3.ในกรณีที่ไม่มีหลักฐานการซื้อขาย ระยะเวลารับประกันจะเริ่มนับจาก เดือน/ปี ที่ผลิตเป็นหลัก<br>
                                                                                                    4.ในกรณียางเก่าที่ผ่านการใช้งานมาแล้วและนำมาซื้อขายใหม่จะไม่อยู่ภายใต้เงื่อนไขการรับประกัน</li>






                                                                                                    </ul>
                                                                                                    </p>
                                                                                                    <div class="header" style="color:#000;">5. ผลการพิจารณาการชดเชย</div>
                                                                                                    <p>
                                                                                                        <ul>
                                                                                                            <li>ผลของการพิจารณาให้การชดเชยแก่ผลิตภัณฑ์ยางรถยนต์ที่เสียหายโดยบริษัท ดันลอปไทร์ (ไทยแลนด์) จำกัด ถือเป็นที่สิ้นสุด
                                                                                                                และ ผลิตภัณฑ์ยางรถยนต์ที่ยอมรับการชดเชยจะถือเป็นทรัพย์สินของบริษัท ดันลอป ไทร์ (ไทยแลนด์) จำกัด</li>





                                                                                                        </ul>
                                                                                                    </p>
                                                                                                    <div class="header" style="color:#000;">6. การสงวนสิทธิ์ด้านนโยบาย</div>
                                                                                                    <p>
                                                                                                        <ul>
                                                                                                            <li>บริษัท ดันลอป ไทร์ (ไทยแลนด์) จำกัด ขอสงวนสิทธิ์ในการยกเลิกและ/หรือแก้ไขเปลี่ยนแปลงนโยบายนี้ทั้งหมดหรือส่วนหนึ่ง
                                                                                                                ส่วนใด ของนโยบาย เพื่อความเหมาะสมโดยไม่จำเป็นต้องแจ้งล่วงหน้า</li>





                                                                                                        </ul>
                                                                                                    </p>
                                                                                                    </div>
                                                                                                    <div style="clear: both"></div>
                                                                                                    </div>

                                                                                                    <div id="tech">
                                                                                                    </div>
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
$('#tech').hide();
                                                    $('.btn_warranty').click(function() {
                                                        $(this).addClass('active')
                                                        $('.btn_warranty2').removeClass('active')
                                                        $('#tech').hide();
                                                        $('.passenger_car_size').show();
                                                        $('#prodinfo').show();
                                                    });
                                                    $('.btn_warranty2').click(function() {
                                                        $(this).addClass('active');
                                                        $('.btn_warranty').removeClass('active')
                                                        $('#prodinfo').hide();
                                                        $('.passenger_car_size').hide();

                                                        $('#tech').show();
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
