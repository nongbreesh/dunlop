

<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Slide  <a href="javascript:;" onclick="add_product()" class="add-new-h2">Add Slide</a>
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Slide </li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <section class="col-lg-12 connectedSortable"> 
                <!-- Box (with bar chart) -->
                <div class="box box-body" id="loading-example">
                    <div class="box-header">
                        <!-- tools box -->
                        <div class="pull-right box-tools">
                            <button  onclick="update_list()" class="btn btn-danger btn-sm refresh-btn" data-toggle="tooltip" title="Reload"><i class="fa fa-refresh"></i></button>
                            <button class="btn btn-danger btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-danger btn-sm" data-widget='remove' data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                        </div><!-- /. tools -->
                        <i class="fa fa-list"></i>

                        <h3 class="box-title">Slide list</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover todo-list ">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Animation style</th>
                                    <th>Slide bg</th>
                                    <th>Slide obj Tire</th>
                                    <th>Slide obj2 Logo</th>
                                    <th>Slide obj3 Slogan</th>
                                    <th>Create Date</th>
                                    <th>Update Date</th>
                                </tr>
                            </thead>
                            <tbody id="products_list">
                                <?php
                                foreach ($item_list as $row):
                                    ?>

                                    <tr>
                                        <td><?php echo  $row->SLIDE_ID; ?></td>
                                        <td><?php echo  $row->SLIDE_Animation_Type; ?><br>
                                            </span><div class="edit"><a href="javascript:;" onclick="edit_product(<?php echo  $row->SLIDE_ID ?>);">Edit</a> | </span><span class="delete"><a class="delete-tag" href="#" onclick="return removedata(<?php echo  $row->SLIDE_ID ?>);">Delete</a></div>
                                        </td>
                                        <td><?php echo  $row->SLIDE_bg ?></td>
                                        <td><?php echo  $row->SLIDE_Object_img1 ?></td>
                                        <td><?php echo  $row->SLIDE_Object_img2 ?></td>
                                        <td><?php echo  $row->SLIDE_Object_img3 ?></td>
                                        <td><?php echo  time_ago($row->Create_Date) ?></td>
                                        <td><?php echo  time_ago($row->Update_Date) ?></td>

                                    </tr> 
                                    <?php
                                endforeach;
                                ?>
                            </tbody>
                        </table>
                    </div><!-- /.box-body -->
                    <div class="box-footer">

                    </div><!-- /.box-footer -->
                </div><!-- /.box -->        




            </section><!-- /.Left col -->
        </div>
    </section><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->


<!-- NEW PRODUCT MODAL -->
<div class="modal fade" id="add_product-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog  modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><i class="fa fa-shopping-cart"></i> Add New Product</h4>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-12 table-responsive">

                        <form id="form_add_product" enctype="multipart/form-data" name="form_add_product"  method="post">

                            <div class="modal-body row">
                                <div class="col-lg-12 ">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Background (offer min width >= 950px ,min Height >= 350px)</label>
                                        <br/> <label>Upload Image File:</label><br/>

                                        <div class="input-group input-group-sm col-lg-6">
                                            <input name="input_image_slide_bg"  id="input_image_slide_bg"  class="form-control" type="file" class="inputFile" />
                                            <span class="input-group-btn">
                                                <button class="btn btn-info btn-flat" id="btn_image_upload_slide_bg" type="button">Upload</button>
                                            </span>

                                        </div>
                                        <div id="product_pic_slide_bg" style="margin-top: 20px;"></div>

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Tire Object image (offer max width = 540px , max Height = 350px)</label>
                                        <br/> <label>Upload Image File:</label><br/>

                                        <div class="input-group input-group-sm col-lg-6">
                                            <input name="input_image_slide_object1"  id="input_image_slide_object1"  class="form-control" type="file" class="inputFile" />
                                            <span class="input-group-btn">
                                                <button class="btn btn-info btn-flat" id="btn_image_upload_slide_object1" type="button">Upload</button>
                                            </span>

                                        </div>
                                        <div id="product_pic_slide_object1" style="margin-top: 20px;"></div>

                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputFile">Logo Object image (offer max width = 480px , max Height = 230px)</label>
                                        <br/> <label>Upload Image File:</label><br/>

                                        <div class="input-group input-group-sm col-lg-6">
                                            <input name="input_image_slide_object2"  id="input_image_slide_object2"  class="form-control" type="file" class="inputFile" />
                                            <span class="input-group-btn">
                                                <button class="btn btn-info btn-flat" id="btn_image_upload_slide_object2" type="button">Upload</button>
                                            </span>

                                        </div>
                                        <div id="product_pic_slide_object2" style="margin-top: 20px;"></div>

                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputFile">Slogan Object image (offer max width = 545px , max Height = 245px)</label>
                                        <br/> <label>Upload Image File:</label><br/>

                                        <div class="input-group input-group-sm col-lg-6">
                                            <input name="input_image_slide_object3"  id="input_image_slide_object3"  class="form-control" type="file" class="inputFile" />
                                            <span class="input-group-btn">
                                                <button class="btn btn-info btn-flat" id="btn_image_upload_slide_object3" type="button">Upload</button>
                                            </span>

                                        </div>
                                        <div id="product_pic_slide_object3" style="margin-top: 20px;"></div>

                                    </div>


                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Animation style</label>
                                        <div class="checkbox">
                                            <label class="form-inline">
                                                <input type="radio" name="input_slide_anim" id="input_slide_anim_0" checked="checked" value="0">
                                                <label for="input_slide_anim_0">Defualt</label>
                                            </label> 
                                            <label class="form-inline">
                                                <input type="radio" name="input_slide_anim" id="input_slide_anim_1" checked="checked" value="1">
                                                <label for="input_slide_anim_1">STYLE 1</label>
                                            </label> 
                                            <label class="form-inline">
                                                <input type="radio"  name="input_slide_anim" id="input_slide_anim_2"  value="2" >
                                                <label for="input_slide_anim_2">STYLE 2</label>
                                            </label>   
                                            <label class="form-inline">
                                                <input type="radio"  name="input_slide_anim" id="input_slide_anim_3"  value="3" >
                                                <label for="input_slide_anim_3">STYLE 3</label>
                                            </label>   
                                        </div>
                                    </div>
                                </div>



                            </div>
                            <div class="modal-footer clearfix c">
                                <input type="hidden" name="input_hdf_update" id="input_hdf_update"/>
                                <input type="hidden" name="input_id" id="input_id"/>
                                <button type="submit" class="btn btn-primary pull-left" id="input_addproduct"><i class="fa  fa-save"></i> Save change</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Discard</button>
                            </div>
                        </form>

                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div>

            <div class="modal-footer clearfix">

            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>
    $(document).ready(function() {
        $("#form_add_product").on('submit', function(e) {
            e.preventDefault();
            var $btn = $("#input_addproduct");
            $btn.button('loading');
            var is_update = $("#input_hdf_update").val();
            if (is_update == 'false') {
                $.ajax({
                    url: "<?php echo base_url(); ?>" + "index.php/service/add_slide",
                    type: "POST",
                    data: $(this).serialize(),
                    dataType: "json",
                    success: function(data) {
                        $.growl(data.status.message, {type: data.status.type}); //danger , info , warning
                        $btn.button('reset');
                        update_list();
                        $("#add_product-modal").modal("hide");
                    },
                    error: function(XMLHttpRequest) {
                        $.growl(XMLHttpRequest.status, {type: 'danger'}); //danger , info , warning
                        $btn.button('reset');
                    }
                });
            }
            else {
                var input_id = $("#input_id").val();
                $.ajax({
                    url: "<?php echo base_url(); ?>" + "index.php/service/edit_slide/" + input_id,
                    type: "POST",
                    data: $(this).serialize(),
                    dataType: "json",
                    success: function(data) {
                        $.growl(data.status.message, {type: data.status.type}); //danger , info , warning
                        $btn.button('reset');
                        update_list();
                        $("#add_product-modal").modal("hide");
                    },
                    error: function(XMLHttpRequest) {
                        $.growl(XMLHttpRequest.status, {type: 'danger'}); //danger , info , warning
                        $btn.button('reset');
                    }
                });
                var is_update = $("#input_hdf_update").val('false');
            }

        });

        $("#btn_image_upload_slide_bg").click(function() {

            var $btn = $(this);
            $btn.button('loading');


            var form = new FormData(document.getElementById('form_add_product'));
            var file = document.getElementById('input_image_slide_bg').files[0];
            if (file) {
                form.append('input_image_slide_bg', file);
                //alert(form);
            }

            if (input_image_slide_bg != "") {
                $.ajax({
                    url: "<?php echo base_url(); ?>" + "index.php/service/upload_picture_slide_bg",
                    type: "POST",
                    data: form,
                    dataType: "html",
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(data) {
                        $.growl('Add image success!', {type: 'success'}); //danger , info , warning
                        $btn.button('reset');
                        $("#product_pic_slide_bg").html(data);
                    },
                    error: function(XMLHttpRequest) {
                        $.growl(XMLHttpRequest.status, {type: 'danger'}); //danger , info , warning
                        $btn.button('reset');
                    }
                });
            }
            else {
                $.growl("Please select images", {type: 'danger'}); //danger , info , warning
                $btn.button('reset');
            }
        });

        $("#btn_image_upload_slide_object1").click(function() {

            var $btn = $(this);
            $btn.button('loading');


            var form = new FormData(document.getElementById('form_add_product'));
            var file = document.getElementById('input_image_slide_object1').files[0];
            if (file) {
                form.append('input_image_slide_object1', file);
                //alert(form);
            }

            if (input_image_slide_object1 != "") {
                $.ajax({
                    url: "<?php echo base_url(); ?>" + "index.php/service/upload_picture_slide_object1",
                    type: "POST",
                    data: form,
                    dataType: "html",
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(data) {
                        $.growl('Add image success!', {type: 'success'}); //danger , info , warning
                        $btn.button('reset');
                        $("#product_pic_slide_object1").html(data);
                    },
                    error: function(XMLHttpRequest) {
                        $.growl(XMLHttpRequest.status, {type: 'danger'}); //danger , info , warning
                        $btn.button('reset');
                    }
                });
            }
            else {
                $.growl("Please select images", {type: 'danger'}); //danger , info , warning
                $btn.button('reset');
            }
        });

        $("#btn_image_upload_slide_object2").click(function() {

            var $btn = $(this);
            $btn.button('loading');


            var form = new FormData(document.getElementById('form_add_product'));
            var file = document.getElementById('input_image_slide_object2').files[0];
            if (file) {
                form.append('input_image_slide_object2', file);
                //alert(form);
            }

            if (input_image_slide_object2 != "") {
                $.ajax({
                    url: "<?php echo base_url(); ?>" + "index.php/service/upload_picture_slide_object2",
                    type: "POST",
                    data: form,
                    dataType: "html",
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(data) {
                        $.growl('Add image success!', {type: 'success'}); //danger , info , warning
                        $btn.button('reset');
                        $("#product_pic_slide_object2").html(data);
                    },
                    error: function(XMLHttpRequest) {
                        $.growl(XMLHttpRequest.status, {type: 'danger'}); //danger , info , warning
                        $btn.button('reset');
                    }
                });
            }
            else {
                $.growl("Please select images", {type: 'danger'}); //danger , info , warning
                $btn.button('reset');
            }
        });


        $("#btn_image_upload_slide_object3").click(function() {

            var $btn = $(this);
            $btn.button('loading');


            var form = new FormData(document.getElementById('form_add_product'));
            var file = document.getElementById('input_image_slide_object3').files[0];
            if (file) {
                form.append('input_image_slide_object3', file);
                //alert(form);
            }

            if (input_image_slide_object3 != "") {
                $.ajax({
                    url: "<?php echo base_url(); ?>" + "index.php/service/upload_picture_slide_object3",
                    type: "POST",
                    data: form,
                    dataType: "html",
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(data) {
                        $.growl('Add image success!', {type: 'success'}); //danger , info , warning
                        $btn.button('reset');
                        $("#product_pic_slide_object3").html(data);
                    },
                    error: function(XMLHttpRequest) {
                        $.growl(XMLHttpRequest.status, {type: 'danger'}); //danger , info , warning
                        $btn.button('reset');
                    }
                });
            }
            else {
                $.growl("Please select images", {type: 'danger'}); //danger , info , warning
                $btn.button('reset');
            }
        });


    });
    function add_product() {
        //$.growl('Add product success!', {type: 'success'}); //danger , info , warning
        $("#input_hdf_update").val('false');
        $('#add_product-modal').modal('show');
    }
    function edit_product(id) {
        //$.growl('Add product success!', {type: 'success'}); //danger , info , warning
        if (id != "") {
            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>" + "index.php/service/getslide_detail",
                data: {"id": id},
                dataType: 'json',
                success: function(data) {
                    switch (data.result.SLIDE_Animation_Type) {
                        case 0:
                            $('#input_slide_anim_0').iCheck('check');
                            break;
                        case 1:
                            $('#input_slide_anim_1').iCheck('check');
                            break;
                        case 2:
                            $('#input_slide_anim_2').iCheck('check');
                            break;
                        case 3:
                            $('#input_slide_anim_3').iCheck('check');
                            break;
                    }

                    $('#product_pic_slide_bg').html('<img src="../public/uploads/slide/Thumbnails_' + data.result.SLIDE_bg + '" height="50"><input type="hidden" id="input_hdimage_slide_bg" name="input_hdimage_slide_bg" value="' + data.result.SLIDE_bg + '" />');
                    $('#product_pic_slide_object1').html('<img src="../public/uploads/slide/Thumbnails_' + data.result.SLIDE_Object_img1 + '" height="50"><input type="hidden" id="input_hdimage_slide_object1" name="input_hdimage_slide_object1" value="' + data.result.SLIDE_Object_img1 + '" />');
                    $('#product_pic_slide_object2').html('<img src="../public/uploads/slide/Thumbnails_' + data.result.SLIDE_Object_img2 + '" height="50"><input type="hidden" id="input_hdimage_slide_object2" name="input_hdimage_slide_object2" value="' + data.result.SLIDE_Object_img2 + '" />');
                    $('#product_pic_slide_object3').html('<img src="../public/uploads/slide/Thumbnails_' + data.result.SLIDE_Object_img3 + '" height="50"><input type="hidden" id="input_hdimage_slide_object3" name="input_hdimage_slide_object3" value="' + data.result.SLIDE_Object_img3 + '" />');
                    $("#input_hdf_update").val('true');
                    $("#input_id").val(id);
                    $('#add_product-modal').modal('show');
                },
                error: function(XMLHttpRequest) {
                    $.growl(XMLHttpRequest.status, {type: 'danger'}); //danger , info , warning
                }
            });
        }
    }
    function removedata(id) {
        if (confirm('ต้องการลบข้อมูลหรือไม่?')) {
            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>" + "index.php/service/delete_slide",
                data: {'id': id},
                dataType: "json",
                success: function(data) {
                    if (data.status.type == 'success') {
                        $.growl(data.status.message, {type: data.status.type}); //danger , info , warning
                        update_list();
                    }
                },
                error: function(XMLHttpRequest) {
                    $.growl(XMLHttpRequest.status, {type: 'danger'}); //danger , info , warning
                }
            });
        }
    }

    function update_list() {

        $('#products_list').html('<tr><td colspan="8"><center><img src="<?php echo base_url(); ?>public/img/loading.gif"  width="50"/></center></td></tr>');
        setTimeout(
                function()
                {
                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>" + "index.php/service/load_slide",
                        dataType: "html",
                        success: function(data) {
                            $('#products_list').html(data);
                        },
                        error: function(XMLHttpRequest) {
                            $.growl(XMLHttpRequest.status, {type: 'danger'}); //danger , info , warning
                        }
                    });
                }, 1000);

    }

</script>