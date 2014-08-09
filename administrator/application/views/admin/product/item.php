

<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Products  <a href="javascript:;" onclick="add_product()" class="add-new-h2">Add Product</a>
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Products </li>
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

                        <h3 class="box-title">Products list</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover todo-list ">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Group Name</th>
                                    <th>Product Name</th>
                                    <th><i class="fa fa-picture-o"></i></th>
                                    <th>Product_URL</th>
                                    <th>Create Date</th>
                                    <th>Update Date</th>
                                </tr>
                            </thead>
                            <tbody id="products_list">
                                <?php
                                foreach ($item_list as $row):
                                    ?>

                                    <tr>
                                        <td><?= $row->Product_ID; ?></td>
                                        <td><?= $row->Group_Name; ?></td>
                                        <td><?= $row->Product_Name ?><br>
                                            <div class = "tools"><span class="edit"><a href="javascript:;" onclick="edit_product(<?= $row->Product_ID ?>);">Edit</a> | </span><span class="delete"><a class="delete-tag" href="#" onclick="return removedata(<?= $row->Product_ID ?>);">Delete</a></div></td></td>
                                        </td>
                                        <td><img src="<?= base_url('public') ?>/uploads/Thumbnails_<?= $row->Product_IMG ?>"  height="50"/></td>
                                        <td><?= $row->Product_URL ?></td>
                                        <td><?= time_ago($row->Create_Date) ?></td>
                                        <td><?= time_ago($row->Update_Date) ?></td>

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

                            <div class="modal-body">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Group Name</label>
                                        <select class="form-control" name="input_group" id="input_group">
                                            <option value="">--- Select one ----</option>';
                                            <?php foreach ($group_list as $each) { ?>
                                                <option value="<?php echo $each->Group_ID; ?>"><?php echo $each->Group_Name; ?></option>';
                                            <?php } ?>
                                        </select>

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Product Name</label>
                                        <input name="input_name" id="input_name" type="text" class="form-control" >
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Product URL</label>
                                        <input name="input_url" id="input_url" type="text"  class="form-control" >
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Product TECH</label>

                                        <textarea  name="input_tech" id="input_tech"  rows="10" cols="68"> </textarea>     
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Product INFO</label>
                                        <textarea  name="input_info" id="input_info"  rows="10" cols="68"> </textarea>     
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label for="input_image">Product image_defualt</label>
                                    <label>Upload Image File:</label><br/>

                                    <div class="input-group input-group-sm col-lg-6">
                                        <input name="input_image"  id="input_image"  class="form-control" type="file" class="inputFile" />
                                        <span class="input-group-btn">
                                            <button class="btn btn-info btn-flat" id="btn_image_upload" type="button">Upload</button>
                                        </span>

                                    </div>
                                    <div id="product_pic" style="margin-top: 20px;"></div>

                                </div>
                                <div class="form-group">
                                    <label for="input_image_hover">Product image_hover</label>
                                    <label>Upload Image File:</label><br/>

                                    <div class="input-group input-group-sm col-lg-6">
                                        <input name="input_image_hover"  id="input_image_hover"  class="form-control" type="file" class="inputFile" />
                                        <span class="input-group-btn">
                                            <button class="btn btn-info btn-flat" id="btn_image_upload_hover" type="button">Upload</button>
                                        </span>

                                    </div>
                                    <div id="product_pic_hover" style="margin-top: 20px;"></div>

                                </div>

                                <div class="form-group">
                                    <label for="input_pdf">pdf download</label>
                                    <label>Upload pdf File:</label><br/>

                                    <div class="input-group input-group-sm col-lg-6">
                                        <input name="input_pdf"  id="input_pdf"  class="form-control" type="file" class="inputFile" />
                                        <span class="input-group-btn">
                                            <button class="btn btn-info btn-flat" id="btn_pdf_upload" type="button">Upload</button>
                                        </span>

                                    </div>
                                    <div id="product_pdf" style="margin-top: 20px;"></div>

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

        CKEDITOR.replace('input_tech',
                {
                    filebrowserImageBrowseUrl: '<?= base_url() ?>public/js/plugins/ckfinder/ckfinder.html?Type=Images',
                    filebrowserFlashBrowseUrl: '<?= base_url() ?>public/js/plugins/ckfinder/ckfinder.html?Type=Flash',
                    filebrowserUploadUrl: '<?= base_url() ?>public/js/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                    filebrowserImageUploadUrl: '<?= base_url() ?>public/js/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                    filebrowserFlashUploadUrl: '<?= base_url() ?>public/js/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
                    ,
                });

        CKEDITOR.replace('input_info',
                {
                    filebrowserImageBrowseUrl: '<?= base_url() ?>public/js/plugins/ckfinder/ckfinder.html?Type=Images',
                    filebrowserFlashBrowseUrl: '<?= base_url() ?>public/js/plugins/ckfinder/ckfinder.html?Type=Flash',
                    filebrowserUploadUrl: '<?= base_url() ?>public/js/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                    filebrowserImageUploadUrl: '<?= base_url() ?>public/js/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                    filebrowserFlashUploadUrl: '<?= base_url() ?>public/js/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
                    ,
                });


        $("#form_add_product").on('submit', function(e) {
            e.preventDefault();
            var $btn = $("#input_addproduct");
            $btn.button('loading');
            var is_update = $("#input_hdf_update").val();

            var input_tech = CKEDITOR.instances.input_tech.getData();

            $('<input />').attr('type', 'hidden')
                    .attr('name', 'input_tech')
                    .attr('value', input_tech)
                    .appendTo($(this));


            var input_info = CKEDITOR.instances.input_info.getData();

            $('<input />').attr('type', 'hidden')
                    .attr('name', 'input_info')
                    .attr('value', input_info)
                    .appendTo($(this));


            if (is_update == 'false') {
                $.ajax({
                    url: "<?php echo base_url(); ?>" + "index.php/service/add_product",
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
                var input_tech = CKEDITOR.instances.input_tech.getData();

                $('<input />').attr('type', 'hidden')
                        .attr('name', 'input_tech')
                        .attr('value', input_tech)
                        .appendTo($(this));


                var input_info = CKEDITOR.instances.input_info.getData();

                $('<input />').attr('type', 'hidden')
                        .attr('name', 'input_info')
                        .attr('value', input_info)
                        .appendTo($(this));
                $.ajax({
                    url: "<?php echo base_url(); ?>" + "index.php/service/edit_product/" + input_id,
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


        $("#btn_image_upload").click(function() {

            var $btn = $(this);
            $btn.button('loading');


            var form = new FormData(document.getElementById('form_add_product'));
            var file = document.getElementById('input_image').files[0];
            //var file = $('#input_image').val();
            if (file) {
                form.append('input_image', file);
                //alert(form);
            }

            if (input_image != "") {
                $.ajax({
                    url: "<?php echo base_url(); ?>" + "index.php/service/upload_picture",
                    type: "POST",
                    data: form,
                    dataType: "html",
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(data) {
                        $.growl('Add image success!', {type: 'success'}); //danger , info , warning
                        $btn.button('reset');
                        $("#product_pic").html(data);
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

        $("#btn_image_upload_hover").click(function() {

            var $btn = $(this);
            $btn.button('loading');


            var form = new FormData(document.getElementById('form_add_product'));
            var file = document.getElementById('input_image_hover').files[0];
            //var file = $('#input_image').val();
            if (file) {
                form.append('input_image', file);
                //alert(form);
            }

            if (input_image != "") {
                $.ajax({
                    url: "<?php echo base_url(); ?>" + "index.php/service/upload_picture_hover",
                    type: "POST",
                    data: form,
                    dataType: "html",
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(data) {
                        $.growl('Add image success!', {type: 'success'}); //danger , info , warning
                        $btn.button('reset');
                        $("#product_pic_hover").html(data);
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

        $("#btn_pdf_upload").click(function() {

            var $btn = $(this);
            $btn.button('loading');


            var form = new FormData(document.getElementById('form_add_product'));
            var file = document.getElementById('input_pdf').files[0];
            //var file = $('#input_image').val();
            if (file) {
                form.append('input_pdf', file);
                //alert(form);
            }

            if (input_image != "") {
                $.ajax({
                    url: "<?php echo base_url(); ?>" + "index.php/service/upload_pdf",
                    type: "POST",
                    data: form,
                    dataType: "html",
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(data) {
                        $.growl('Add image success!', {type: 'success'}); //danger , info , warning
                        $btn.button('reset');
                        $("#product_pdf").html(data);
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
                url: "<?php echo base_url(); ?>" + "index.php/service/getproduct_detail",
                data: {"id": id},
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    $('#input_item_code').val(data.result[0].item_code);
                    $('#input_categories').val(data.result[0].categories);
                    if (data.result[0].ishit == 1) {
                        $('#input_ishit').iCheck('check');
                    }
                    if (data.result[0].isoffer == 1) {
                        $('#input_isoffer').iCheck('check');
                    }
                    $('#input_name').val(data.result[0].Product_Name);
                    $('#input_url').val(data.result[0].Product_URL);
                    // $('#input_tech').val(data.result[0].Product_TECH);
                    //$('#input_info').val(data.result[0].Product_INFO);

                    CKEDITOR.instances.input_tech.setData(data.result[0].Product_TECH);
                    CKEDITOR.instances.input_info.setData(data.result[0].Product_INFO);
                    $('#input_group').val(data.result[0].Group_ID);
                    $('#product_pic').html('<img src="../public/uploads/Thumbnails_' + data.result[0].Product_IMG + '" height="50"><input type="hidden" id="input_hdimage" name="input_hdimage" value="' + data.result[0].Product_IMG + '" />');
                    $('#product_pic_hover').html('<img src="../public/uploads/Thumbnails_' + data.result[0].Product_IMG_HOVER + '" height="50"><input type="hidden" id="input_hdimage_hover" name="input_hdimage_hover" value="' + data.result[0].Product_IMG_HOVER + '" />');
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
                url: "<?php echo base_url(); ?>" + "index.php/service/delete_product",
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
                        url: "<?php echo base_url(); ?>" + "index.php/service/load_product",
                        dataType: "html",
                        success: function(data) {
                            //console.log(data);
                            $('#products_list').html(data);
                        },
                        error: function(XMLHttpRequest) {
                            $.growl(XMLHttpRequest.status, {type: 'danger'}); //danger , info , warning
                        }
                    });
                }, 1000);

    }

</script>