

<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Gallery > add picture
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"> Gallery > add picture</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <section class="col-lg-4 connectedSortable">
                <div class="box box-info" id="loading-example">
                    <div class="box-header">
                        <!-- tools box -->
                        <div class="pull-right box-tools">
                            <button class="btn btn-danger btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-danger btn-sm" data-widget='remove' data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                        </div><!-- /. tools -->
                        <i class="fa  fa-plus"></i>

                        <h3 class="box-title">New Picture</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">

                        <form role="form" id="form_add_cate">
                            <input type="hidden" name="input_albumid" id="input_albumid" value="<?php echo  $album_id ?>"/>
                            <div class="box-body">

                                <div class="form-group">
                                    <label>Album Name : <?php echo  $album->Album_Name ?></label>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Picture Name</label>
                                    <input required="required" type="text" class="form-control" id="input_pic_name" name="input_pic_name" placeholder="Enter Pic name">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputFile">Picture</label>
                                    <label>Upload Image File:</label><br/>

                                    <div class="input-group input-group-sm col-lg-12">
                                        <input name="input_image_add"  id="input_image_add"  class="form-control" type="file" class="inputFile" />
                                        <span class="input-group-btn">
                                            <button class="btn btn-info btn-flat" id="btn_image_upload_add" type="button">Upload</button>
                                        </span>

                                    </div>
                                    <div id="product_pic_add" style="margin-top: 20px;"></div>

                                </div>




                            </div><!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary" id="input_addcate">Submit</button>
                            </div>
                        </form>
                    </div>

                </div>
            </section>
            <section class="col-lg-8 connectedSortable"> 
                <!-- Box (with bar chart) -->
                <div class="box box-body" id="loading-example">
                    <div class="box-header">
                        <!-- tools box -->
                        <div class="pull-right box-tools">

                            <button class="btn btn-danger btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-danger btn-sm" data-widget='remove' data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                        </div><!-- /. tools -->
                        <i class="fa fa-bars"></i>

                        <h3 class="box-title">Picture list</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive no-padding" style="overflow: auto">
                        <table class="table table-hover todo-list" >
                            <thead>
                                <tr>
                                    <th><strong>ID</strong></th>
                                    <th><strong>Album Name</strong></th>
                                    <th><strong>Thumbnail</strong></th>
                                    <th><strong>Pic Name</strong></th>
                                    <th><strong>Create Date</strong></th>
                                    <th><strong>Update Date</strong></th>
                                </tr>
                            </thead>
                            <tbody id="cate_list">
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


<!-- ORDER MODAL -->
<div class="modal fade" id="category-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog  modal-sm">
        <div class="modal-content">
            <form role="form" id="form_edit_cate">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"><i class="fa fa-shopping-cart"></i> <span>Update Pic</span></h4>
                </div>

                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-12 table-responsive" >


                            <input type="hidden" name="inputedit_hddcate" id="inputedit_hddcate" />
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Pic Name</label>
                                    <input required="required" type="text" class="form-control" id="inputedit_pic_name" name="inputedit_pic_name" placeholder="Enter pic name">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputFile">Image</label>
                                    <label>Upload Image File:</label><br/>

                                    <div class="input-group input-group-sm col-lg-6">
                                        <input name="inputedit_image"  id="inputedit_image"  class="form-control" type="file" class="inputFile" />
                                        <span class="input-group-btn">
                                            <button class="btn btn-info btn-flat" id="btn_image_upload_edit" type="button">Upload</button>
                                        </span>

                                    </div>
                                    <div id="productedit_pic" style="margin-top: 20px;"></div>
                                </div>


                            </div><!-- /.box-body -->


                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div>

                <div class="modal-footer clearfix">

                    <button type="submit" class="btn btn-primary pull-left" id="input_editcate"><i class="fa  fa-save"></i> Save change</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Discard</button>

                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<script>
    $(document).ready(function() {
        load_cate_list();

        $("#btn_image_upload_add").click(function() {

            var $btn = $(this);
            $btn.button('loading');


            var form = new FormData(document.getElementById('form_add_cate'));
            var file = document.getElementById('input_image_add').files[0];
            //var file = $('#input_image').val();
            if (file) {
                form.append('input_image_add', file);
                //alert(form);
            }

            if (input_image_add != "") {
                $.ajax({
                    url: "<?php echo base_url(); ?>" + "index.php/service/upload_picture_group",
                    type: "POST",
                    data: form,
                    dataType: "html",
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(data) {
                        $.growl('Add image success!', {type: 'success'}); //danger , info , warning
                        $btn.button('reset');
                        $("#product_pic_add").html(data);
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

        $("#btn_image_upload_edit").click(function() {

            var $btn = $(this);
            $btn.button('loading');


            var form = new FormData(document.getElementById('form_edit_cate'));
            var file = document.getElementById('inputedit_image').files[0];
            //var file = $('#input_image').val();
            if (file) {
                form.append('inputedit_image', file);
                //alert(form);
            }

            if (inputedit_image != "") {
                $.ajax({
                    url: "<?php echo base_url(); ?>" + "index.php/service/uploadedit_picture",
                    type: "POST",
                    data: form,
                    dataType: "html",
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(data) {
                        $.growl('Add image success!', {type: 'success'}); //danger , info , warning
                        $btn.button('reset');
                        $("#productedit_pic").html(data);
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



        $("#form_add_cate").on('submit', function(e) {
            e.preventDefault();
            var $btn = $("#input_addcate");
            $btn.button('loading');
            $.ajax({
                url: "<?php echo base_url(); ?>" + "index.php/service/add_pic",
                type: "POST",
                data: $(this).serialize(),
                dataType: "json",
                success: function(data) {
                    $.growl(data.status.message, {type: data.status.type}); //danger , info , warning
                    load_cate_list();
                    $btn.button('reset');
                },
                error: function(XMLHttpRequest) {
                    $.growl(XMLHttpRequest.status, {type: 'danger'}); //danger , info , warning
                    $btn.button('reset');
                }
            });
        });
        $("#form_edit_cate").on('submit', function(e) {
            e.preventDefault();
            var $btn = $("#input_editcate");
            $btn.button('loading');
            var id = $("#inputedit_hddcate").val();
            $.ajax({
                url: "<?php echo base_url(); ?>" + "index.php/service/update_pic/" + id,
                type: "POST",
                data: $(this).serialize(),
                dataType: "json",
                success: function(data) {
                    $.growl(data.status.message, {type: data.status.type}); //danger , info , warning
                    $btn.button('reset');
                    $("#category-modal").modal("hide");
                    load_cate_list();
                },
                error: function(XMLHttpRequest) {
                    $.growl(XMLHttpRequest.status, {type: 'danger'}); //danger , info , warning
                    $btn.button('reset');
                }
            });
        });
    });
    function load_cate_list() {
        $('#cate_list').html('<tr><td colspan="6"><center><img src="<?php echo base_url(); ?>public/img/loading.gif"  width="50"/></center></td></tr>');
        var albumid = $("#input_albumid").val();
        setTimeout(
                function()
                {
                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>" + "service/load_pic_list",
                        data: {'albumid': albumid},
                        dataType: "html",
                        success: function(data) {
                            $('#cate_list').html(data);
                        },
                        error: function(XMLHttpRequest) {
                            console.log(XMLHttpRequest.status);
                        }
                    });
                }
        , 1000);
    }

    function editdata(id) {

        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>" + "service/load_pic_detail",
            data: {'id': id},
            dataType: "json",
            success: function(data) {
                //console.log(data);

                $("#inputedit_hddcate").val(data.result.PIC_ID);
                $("#inputedit_pic_name").val(data.result.PIC_Name);
                $('#productedit_pic').html('<img src="<?php echo base_url(); ?>public/uploads/Thumbnails_' + data.result.PIC_Image + '" height="50"><input type="hidden" id="inputedit_hdimage" name="inputedit_hdimage" value="' + data.result.PIC_Image + '" />');
            },
            error: function(XMLHttpRequest) {
                console.log(XMLHttpRequest.status);
            }
        });
        $("#category-modal").modal("show");
    }


    function removedata(id) {
        if (confirm('ต้องการลบข้อมูลหรือไม่?')) {
            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>" + "index.php/service/delete_pic",
                data: {'id': id},
                dataType: "json",
                success: function(data) {
                    if (data.status.type == 'success') {
                        $.growl(data.status.message, {type: data.status.type}); //danger , info , warning
                        load_cate_list();

                    }
                },
                error: function(XMLHttpRequest) {
                    $.growl(XMLHttpRequest.status, {type: 'danger'}); //danger , info , warning
                }
            });
        }
    }


</script>