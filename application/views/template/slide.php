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
                            <div class="deco fromleft"><img src="<?= base_url() ?>administrator/public/uploads/slide/<?= $each->SLIDE_Object_img1 ?>" /></div>
                            <div class="deco1 moveDown"><img src="<?= base_url() ?>administrator/public/uploads/slide/<?= $each->SLIDE_Object_img2 ?>" /></div>
                            <div class="deco2 moveUp"><img src="<?= base_url() ?>administrator/public/uploads/slide/<?= $each->SLIDE_Object_img3 ?>" /></div>
                        </div>
                    </div>
                <?php elseif ($each->SLIDE_Animation_Type == 2): ?>
                    <div class="sl-slide bg-1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                        <div class="sl-slide-inner" style="background: url('<?= base_url() ?>administrator/public/uploads/slide/<?= $each->SLIDE_bg ?>');">
                            <div class="deco_2 fromleft"><img src="<?= base_url() ?>administrator/public/uploads/slide/<?= $each->SLIDE_Object_img1 ?>" /></div>
                            <div class="deco1_2 moveDown"><img src="<?= base_url() ?>administrator/public/uploads/slide/<?= $each->SLIDE_Object_img2 ?>" /></div>
                            <div class="deco2_2 moveUp"><img src="<?= base_url() ?>administrator/public/uploads/slide/<?= $each->SLIDE_Object_img3 ?>" /></div>
                        </div>
                    </div>
                <?php elseif ($each->SLIDE_Animation_Type == 3): ?>
                    <div class="sl-slide bg-1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                        <div class="sl-slide-inner" style="background: url('<?= base_url() ?>administrator/public/uploads/slide/<?= $each->SLIDE_bg ?>');">
                            <div class="deco fromleft"><img src="<?= base_url() ?>administrator/public/uploads/slide/<?= $each->SLIDE_Object_img1 ?>" /></div>
                            <div class="deco1 moveDown"><img src="<?= base_url() ?>administrator/public/uploads/slide/<?= $each->SLIDE_Object_img2 ?>" /></div>
                            <div class="deco2 moveUp"><img src="<?= base_url() ?>administrator/public/uploads/slide/<?= $each->SLIDE_Object_img3 ?>" /></div>
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