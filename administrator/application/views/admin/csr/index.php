

<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            CSR  <a href="javascript:;" onclick="add_product()" class="add-new-h2">Add CSR</a>
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">CSR </li>
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

                        <h3 class="box-title">CSR list</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover todo-list ">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Headline</th>
                                    <th>Wrap Description</th>
                                    <th>Create Date</th>
                                    <th>Update Date</th>
                                </tr>
                            </thead>
                            <tbody id="products_list">
                                <?php
                                foreach ($news_list as $row):
                                    ?>

                                    <tr>
                                        <td><img src="<?php echo  base_url() ?>public/uploads/Thumbnails_<?php echo  $row->Content_thumbnail; ?>" height="50"></td>
                                        <td><?php echo  $row->Content_ID; ?></td>
                                        <td><?php echo  $row->Content_Headline; ?><br>
                                        </span><span class="edit"><a href="javascript:;" onclick="edit_product(<?php echo  $row->Content_ID ?>);">Edit</a> | </span><span class="delete"><a class="delete-tag" href="#" onclick="return removedata(<?php echo  $row->Content_ID ?>);">Delete</a></div></td>
                                <td><?php echo  $row->Content_wrap; ?></td>
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
                <h4 class="modal-title"><i class="fa fa-shopping-cart"></i> Add Highlight</h4>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-12 table-responsive">

                        <form id="form_add_product" enctype="multipart/form-data" name="form_add_product"  method="post">

                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="input_title">Headline</label>
                                    <input required="required" name="input_title" id="input_title" type="text" value="" class="form-control" >
                                </div>

                                <div class="form-group">

                                    <label for="input_wordwrap">Wrap Description</label>

                                    <textarea   equired="required" name="input_wordwrap" id="input_wordwrap"  rows="10" cols="70"></textarea>     
                                </div>
                                <div class="form-group">

                                    <label for="input_detail">Full Description</label>
                                    <textarea equired="required"  name="input_detail" id="input_detail"  rows="10" cols="70"></textarea>          

                                </div>
                                <div class="form-group">

                                    <label for="input_detail">Gallery</label>
                                    <select class="form-control"  id="input_album" name="input_album" >
                                        <option value="">--- Select one ----</option>';
                                        <?php foreach ($album_list as $each) { ?>
                                            <option value="<?php echo $each->Album_ID; ?>"><?php echo $each->Album_Name; ?></option>';
                                        <?php } ?>
                                    </select>        

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Product image</label>
                                    <label>Upload Image File:</label><br/>

                                    <div class="input-group input-group-sm col-lg-6">
                                        <input name="input_image"  id="input_image"  class="form-control" type="file" class="inputFile" />
                                        <span class="input-group-btn">
                                            <button class="btn btn-info btn-flat" id="btn_image_upload" type="button">Upload</button>
                                        </span>

                                    </div>
                                    <div id="product_pic" style="margin-top: 20px;"></div>

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


        $("#form_add_product").on('submit', function(e) {
            e.preventDefault();
            var $btn = $("#input_addproduct");
            $btn.button('loading');
            var is_update = $("#input_hdf_update").val();
            var input_id = $("#input_id").val();
            var title = $("#input_title").val();
            var wrap_detail = CKEDITOR.instances.input_wordwrap.getData();
            var detail = CKEDITOR.instances.input_detail.getData();
            var hdimage = $("#input_hdimage").val();
            var input_album = $("#input_album").val();
            if (is_update == 'false') {
                $.ajax({
                    url: "<?php echo base_url(); ?>" + "index.php/service/add_csr",
                    type: "POST",
                    data: {'input_title': title, 'input_wordwrap': wrap_detail, 'input_detail': detail, 'input_hdimage': hdimage, 'input_album': input_album},
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

                $.ajax({
                    url: "<?php echo base_url(); ?>" + "index.php/service/edit_csr/" + input_id,
                    type: "POST",
                    data: {'input_title': title, 'input_wordwrap': wrap_detail, 'input_detail': detail, 'input_hdimage': hdimage, 'input_album': input_album},
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
                url: "<?php echo base_url(); ?>" + "index.php/service/getcontent",
                data: {"id": id},
                dataType: 'json',
                success: function(data) {
                    console.log(data);


                    $('#input_title').val(data.result.Content_Headline);
                    CKEDITOR.instances.input_wordwrap.setData(data.result.Content_wrap);
                    CKEDITOR.instances.input_detail.setData(data.result.Content_detail);
                    $('#input_album').val(data.result.Album_ID);
                    $("#input_hdf_update").val('true');
                    $("#input_id").val(id);
                    $('#add_product-modal').modal('show');
                    $('#product_pic').html('<img src="<?php echo base_url(); ?>public/uploads/Thumbnails_' + data.result.Content_thumbnail + '" height="50"><input type="hidden" id="input_hdimage" name="input_hdimage" value="' + data.result.Content_thumbnail + '" />');

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
                url: "<?php echo base_url(); ?>" + "index.php/service/delete_content",
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
                        url: "<?php echo base_url(); ?>" + "index.php/service/load_csr",
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

<script>
    $(document).ready(function() {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('input_wordwrap',
                {
                    filebrowserImageBrowseUrl: '<?php echo  base_url() ?>public/js/plugins/ckfinder/ckfinder.html?Type=Images',
                    filebrowserFlashBrowseUrl: '<?php echo  base_url() ?>public/js/plugins/ckfinder/ckfinder.html?Type=Flash',
                    filebrowserUploadUrl: '<?php echo  base_url() ?>public/js/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                    filebrowserImageUploadUrl: '<?php echo  base_url() ?>public/js/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                    filebrowserFlashUploadUrl: '<?php echo  base_url() ?>public/js/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
                });

        CKEDITOR.replace('input_detail',
                {
                    filebrowserImageBrowseUrl: '<?php echo  base_url() ?>public/js/plugins/ckfinder/ckfinder.html?Type=Images',
                    filebrowserFlashBrowseUrl: '<?php echo  base_url() ?>public/js/plugins/ckfinder/ckfinder.html?Type=Flash',
                    filebrowserUploadUrl: '<?php echo  base_url() ?>public/js/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                    filebrowserImageUploadUrl: '<?php echo  base_url() ?>public/js/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                    filebrowserFlashUploadUrl: '<?php echo  base_url() ?>public/js/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
                    ,
                });


    });





</script>