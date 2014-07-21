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
                            <td background="<?= base_url() ?>public/images/home/logo_3m.png"  width="100%">

                            </td>

                        </tr>
                    </table>
                    <div class="menu">
                        <table id="Table_01" width="687" height="42" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td>
                                    <a href="<?= base_url() ?>home"><img src="<?= base_url() ?>public/images/menu/knowledge/menu_01.png" width="93" height="42" alt=""/></a></td>
                                <td>
                                    <a href="<?= base_url() ?>product"> <img src="<?= base_url() ?>public/images/menu/knowledge/menu_02.png" width="95" height="42" alt=""/></a></td>
                                <td>
                                    <a href="<?= base_url() ?>knowledge"><img src="<?= base_url() ?>public/images/menu/knowledge/menu_03.png" width="135" height="42" alt=""/></a></td>
                                <td>
                                    <a href="<?= base_url() ?>about">  <img src="<?= base_url() ?>public/images/menu/knowledge/menu_04.png" width="122" height="42" alt=""/></a></td>
                                <td>
                                    <a href="<?= base_url() ?>address"><img src="<?= base_url() ?>public/images/menu/knowledge/menu_05.png" width="136" height="42" alt=""/></a></td>
                                <td>
                                    <a href="<?= base_url() ?>contact"><img src="<?= base_url() ?>public/images/menu/knowledge/menu_06.png" width="106" height="42" alt=""/></a></td>
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

                                <div class="wrapper">
                                    <div class="sidebar-l" ><div class="knowledge_title"></div> 
                                        <ul class="sidemenu">
                                            <li><a href="<?= base_url() ?>knowledge/qa"><img style="" src="<?= base_url() ?>public/images/qa.png" onmouseover="this.src = '<?= base_url() ?>public/images/qa_hover.png'" onmouseout="this.src = '<?= base_url() ?>public/images/qa.png'"/></a></li>
                                            <li><a href="<?= base_url() ?>knowledge/tech"><img style="" src="<?= base_url() ?>public/images/tech.png" onmouseover="this.src = '<?= base_url() ?>public/images/tech_hover.png'" onmouseout="this.src = '<?= base_url() ?>public/images/tech.png'"/></a></li>
                                            <li><a href="<?= base_url() ?>knowledge/usage"><img style="" src="<?= base_url() ?>public/images/usage_hover.png" /></a></li>
                                        </ul>
                                    </div>
                                    <div class="contact-r ">
                                        <div class="title_trans-r"> <h1>ความรู้พืนฐาน <span style="font-size: 36px;margin-left: -14px;">เรืองการบำรุงรักษายางรถยนต์</span></h1></div>
                                        <div class="content" style="background: #f0f0f0">
                                       <table border="0" cellpadding="0" cellspacing="0" style="width:100%">
	<tbody>
		<tr>
			<td>&nbsp;</td>
			<td>
			<p><img alt="ความเป็นมาและวิวัฒนาการของดันลอปไทร์" src="http://www.dunloptire.co.th/img/tirebasic-topic.jpg" style="height:84px; width:392px" /></p>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>
			<p>หากท่านต้องการสอบถามข้อมูลเพิ่มเติม สามารถแจ้งคำถามที่ต้องการได้ที่&nbsp;<a href="mailto:marketing@dunloptire.co.th">marketing@dunloptire.co.th</a></p>

			<p><img src="http://www.dunloptire.co.th/img/hr.jpg" style="height:2px; width:640px" /><br />
			&nbsp;</p>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><img src="http://www.dunloptire.co.th/img/tirebasic-topic1.jpg" style="height:32px; width:209px" /></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>
			<p>1. เมื่อเปลี่ยนยางใหม่ ควรเลือกใช้ยางที่ได้ตามมาตรฐานตามที่โรงงานผลิตรถยนต์กำหนด<br />
			2. ควรเลือกใช้ยางรุ่นเดียวกัน หรือประเภทการใช้งานเดียวกันกับรถยนต์นั้นๆ และให้ทำการตรวจสอบให้แน่ใจว่าทางโรงงานผลิตรถยนต์ได้ติดตั้งยางได้<br />
			อย่างถูกต้อง<br />
			3. อย่าใช้ยางต่างชนิดหรือต่างประเภทการใช้งานในรถยนต์คันเดียวกัน เพราะอาจทำให้เกิดปัญหาขณะขับขี่ได้ (ยกเว้นแต่กรณีฉุกเฉินเท่านั้น)<br />
			4. อย่านำยางไปทำการหล่อดอกยางใหม่หรือนำไปตกแต่งเพิ่มเติม เพราะอาจก่อให้เกิดอุบัติเหตุหรืออันตรายขณะขับขี่ได้<br />
			5. ควรเลือกใช้ยางที่เหมาะสมสำหรับการใช้งานขณะขับขี่<br />
			6. เมื่อเปลี่ยนยางใหม่ จำเป็นต้องเปลี่ยนยางในใหม่ด้วย<br />
			7. กรุณาใช้ยางในประเภทเดียวกันสำหรับรถยนต์คันเดียวกัน<br />
			8. ควรทำการประกอบยางกับรถยนต์โดยให้ดอกยางหันไปตามทิศทางที่กำหนดเพื่อให้การใช้งานได้อย่างมีประสิทธิภาพ</p>

			<p><img alt="line" src="http://www.dunloptire.co.th/img/hr.jpg" style="height:2px; width:640px" /><br />
			&nbsp;</p>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><img src="http://www.dunloptire.co.th/img/tirebasic-topic2.jpg" style="height:29px; width:216px" /></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>
			<p>1. คู่มือรถยนต์มีการกำหนดแรงดันลมยางที่เหมาะสมสำหรับรถยนต์แต่ละคัน (เป็นค่ามาตรฐานที่เหมาะสมจากโรงงานผลิตรถยนต์) ดังนั้นควรเติมลมยาง<br />
			ตามค่ามาตรฐานที่กำหนดหรือให้ช่างผู้ที่ชำนาญตรวจสอบ<br />
			2. ควรตรวจเช็คลมยางอย่างน้อยเดือนละ 1 ครั้ง และให้ทำการตรวจเช็คลมยางขณะยางเย็น กล่าวคือตรวจเช็คในขณะที่รถยนต์จอดอยู่ไม่ได้มีการใช้งาน เนื่องจากว่าแรงดันลมยางจะมีค่าเพิ่มขึ้นเนื่องจากความร้อนขณะใช้งานทำให้ค่าที่วัดได้คลาดเคลื่อน<br />
			3. ทำการการตรวจสอบสภาพยางว่ามีรอยฉีกขาด หรือรอยตะปู, เหล็ก, เศษแก้ว หรือวัตถุอื่นๆทิ่มแทงที่หน้ายางหรือไม่ถ้าไม่พบสิ่งผิดปกติแต่ยังมีปัญหา<br />
			ขณะใช้งานควรติดต่อร้านยางเพื่อทำการตรวจสอบและแก้ไขสิ่งผิดปกติดังกล่าว<br />
			4. ถ้าพบรอยบาดเฉือน หรือแผลฉีกขาดเกิดที่ยางให้ทำการหยุดใช้งานและส่งให้ร้านยางตรวจสอบความเสียหายทันที<br />
			5. อายุการใช้งานของยางตามปกติแล้วเมื่อความลึกดอกยางคงเหลือประมาณ 1.6 มม.ถ้ามีการใช้งานต่อจะส่งผลให้เกิดการลื่นไถลได้ง่ายซึ่งมีผลต่อ<br />
			ความปลอดภัยในการขับขี่ดังนั้นจึงควรทำการเปลี่ยนยางเส้นใหม่ทันที<br />
			6. ควรนำรถยนต์ไปทำการตรวจสอบสภาพที่ศูนย์บริการรถยนต์ปีละ 1 ครั้งโดยจะต้องให้ทำการตรวจสอบสภาพยางและแรงดันลมยางว่ามีสภาพปกติหรือไม่<br />
			7. ถ้ามีการตรวจสอบสภาพยางด้วยตนเองแล้วพบว่ามีรอยบาดแผลฉีกขาดเกิดขึ้นจนมีการรั่วไหลของลมยาง ให้ทำการซ่อมแซมยางเส้นดังกล่าวโดยช่าง<br />
			ผู้ชำนาญการทันที<br />
			8. ควรทำการสลับยางทุกๆ 10,000 กิโลเมตรตามตำแหน่งที่คู่มือรถยนต์กำหนดหรือจากคำแนะนำจากร้านยาง</p>

			<p><img src="http://www.dunloptire.co.th/img/tirebasic-topic2-1.jpg" style="height:76px; width:381px" /></p>

			<p>9. ถ้ามีการเปลี่ยนแปลงทิศทางขณะขับขี่ทางตรง (ดึงซ้าย - ขวา) ควรทำการตรวจเช็คสภาพยางและศูนย์รถยนต์โดยช่างผู้ชำนาญ<br />
			10. เมื่อยางที่ใช้งานมีสิ่งผิดปกติเกิดขึ้น ควรนำยางอะไหล่มาใช้ทำงานทดแทนก่อนที่จะนำยางเส้นที่มีปัญหาไปทำการซ่อมแซม<br />
			11. ยางรถยนต์มีวัตถุดิบหลักคือยางธรรมชาติและยางเทียม เมื่อมีการใช้งานไปนานๆจะมีการสึกหรอและเสื่อมสภาพ ดังนั้นหากมีการใช้งานมากกว่า&nbsp;<br />
			3 - 4 ปี ขึ้นไปควรที่จะทำการเปลี่ยนยางเส้นใหม่ทันทีเนื่องจากอาจเกิดอุบัติเหตุอันมีผลต่อความปลอดภัยในการขับขี่ได้</p>

			<p><img src="http://www.dunloptire.co.th/img/tirebasic-topic2-2.jpg" style="height:35px; width:303px" /></p>

			<p><img alt="line" src="http://www.dunloptire.co.th/img/hr.jpg" style="height:2px; width:640px" /></p>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><img src="http://www.dunloptire.co.th/img/tirebasic-topic3.jpg" style="height:33px; width:230px" /></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>
			<p>1. ควรทำการขับขี่รถยนต์ตามความเร็วที่กฎหมายกำหนด เช่น รถบรรทุกจะต้องวิ่งความเร็วไม่เกิน 80 กม./ชม. แต่ถ้าวิ่งความเร็วที่ 100 กม./ชม.&nbsp;<br />
			ขึ้นไปอาจจะส่งผลทำให้เกิดอุบัติเหตุได้ง่าย<br />
			2. อย่าเร่งเครื่องขณะเข้าโค้งหรือหยุดรถยนต์อย่างกะทันหันอาจทำให้เกิดอุบัติเหตุได้<br />
			3. ควรขับขี่รถยนต์โดยเว้นระยะห่างระหว่างรถยนต์คันหน้าในระยะที่เหมาะสม โดยเฉพาะขณะฝนตกและพื้นถนนเปียกเมื่อมีการหยุดรถยนต์กะทันหันทำให้เกิด<br />
			การลื่นไถลและเกิดอุบัติเหตุได้ง่าย<br />
			4. ถ้ามีเสียงผิดปกติขณะขับขี่รถยนต์ให้ทำการหยุดรถยนต์ในพื้นที่ปลอดภัยก่อนที่จะทำการตรวจสอบ<br />
			5. อย่าทำการการตกแต่งหรือดัดแปลงยางซึ่งอาจทำให้เกิดอุบัติเหตุขณะขับขี่ได้<br />
			6. ขนาดยางและล้อมีผลต่อสมรรถนะรถยนต์ ถ้ามีขนาดใหญ่เกินไปรถยนต์จะออกตัวช้าและเข็มไมล์คลาดเคลื่อน ถ้ามีขนาดเล็กเกินไปรถยนต์จะออกตัวเร็ว<br />
			และเข็มไมล์คลาดเคลื่อน</p>

			<p><img alt="line" src="http://www.dunloptire.co.th/img/hr.jpg" style="height:2px; width:640px" /><br />
			&nbsp;</p>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><img src="http://www.dunloptire.co.th/img/tirebasic-topic4.jpg" style="height:39px; width:290px" /></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>
			<p>1. ควรทำการเติมลมยางตามค่ามาตรฐานที่กำหนดเสมอ<br />
			2. เลี่ยงการขับขี่รถยนต์บนถนนที่เสี่ยงต่ออุบัติเหตุและผลกระทบต่อคุณภาพของยาง เช่น ถนนขรุขระหรือถนนที่มีสิ่งแปลกปลอมกีดขวาง เป็นต้น</p>

			<p><img src="http://www.dunloptire.co.th/img/tirebasic-topic4-1.jpg" style="height:102px; width:429px" /></p>

			<p>3. อย่าทำการบรรทุกน้ำหนักเกินค่ามาตรฐานที่ยางกำหนด อาจทำให้ยางระเบิดอันมีผลต่อความปลอดภัยในการขับขี่<br />
			4. ควรเลือกยางที่เหมาะสมกับการใช้งาน<br />
			5. เมื่อเปลี่ยนยางใหม่จะต้องทำการตรวจสอบการรั่วไหลของลมยางทุกครั้ง<br />
			6. เมื่อเปลี่ยนยางใหม่จะต้องทำการเปลี่ยนจุ๊บลมใหม่ทุกครั้ง</p>

			<p><img alt="line" src="http://www.dunloptire.co.th/img/hr.jpg" style="height:2px; width:640px" /><br />
			&nbsp;</p>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><img src="http://www.dunloptire.co.th/img/tirebasic-topic5.jpg" style="height:34px; width:208px" /></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>
			<p>1. ควรจอดในที่ปลอดภัยและให้แน่ใจก่อนที่จะถอดเปลี่ยนยางเสมอ<br />
			2. เลี่ยงที่จะจอดรถยนต์บริเวณที่มีแสงแดด ฝน น้ำมัน หรือสารเคมีอันมีผลกระทบต่อคุณภาพของยาง<br />
			3. วิธีอ่านวันที่ผลิตยาง มีดังนี้ เช่น 109 หมายถึงตัวเลขสองหลักแรกคือสัปดาห์ที่ 10 แต่เลขหลักที่สามคือปี 1999 แต่ถ้าเป็นปี 2000 ขึ้นไปจะมีตัวเลขสี่ตำแหน่ง เช่น 0500 หมายถึงตัวเลขสองหลักแรกคือสัปดาห์ที่ 5 ตัวเลขสองหลักหลังคือปี 2000 เป็นต้น<br />
			4. มาตรฐานยางมีดังนี้ GB, JIS, JATMA, ETRTO และ TRA<br />
			5. ควรปรึกษาช่างผู้ชำนาญเมื่อต้องการปรับเพิ่มหรือลดขนาดยาง<br />
			6. รูปภาพยางที่อยู่ในแผ่นโฆษณาจะมีรูปร่างและขนาดไม่เท่ากับของจริง<br />
			7. แก้มยางมีการแสดงข้อมูลเฉพาะและคุณสมบัติในการใช้งาน เพื่อให้ผู้ใช้สามารถเลือกใช้ยางได้ตรงความต้องการในการใช้งาน</p>

			<p><img alt="line" src="http://www.dunloptire.co.th/img/hr.jpg" style="height:2px; width:640px" /></p>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
	</tbody>
</table>


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
