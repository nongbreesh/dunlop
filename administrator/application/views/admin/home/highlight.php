

<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Hilight  <a href="javascript:;" onclick="add_product()" class="add-new-h2">Add Hilight</a>
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Hilight </li>
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

                        <h3 class="box-title">Hilight list</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover todo-list ">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Headline</th>
                                    <th><i class="fa fa-picture-o"></i></th>
                                    <th>URL</th>
                                    <th>Create Date</th>
                                    <th>Update Date</th>
                                </tr>
                            </thead>
                            <tbody id="products_list">
                                <?php
                                foreach ($item_list as $row):
                                    ?>

                                    <tr>
                                        <td><?php echo  $row->Highlight_ID; ?></td>
                                        <td><?php echo  $row->Highlight_Headline; ?><br>
                                        </span><span class="edit"><a href="javascript:;" onclick="edit_product(<?php echo  $row->Highlight_ID ?>);">Edit</a> | </span><span class="delete"><a class="delete-tag" href="#" onclick="return removedata(<?php echo  $row->Highlight_ID ?>);">Delete</a></div></td></td>
      
                                <td><img src="<?php echo base_url('public')?>/uploads/Thumbnails_<?php echo  $row->Highlight_IMG ?>"  height="50"/></td>
                                       
                                <td><?php echo  $row->Highlight_URL ?></td>


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
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Headline</label>
                                        <input name="input_headine" id="input_headine" type="text" class="form-control" >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">URL</label>
                                        <input name="input_url" id="input_url" type="text" class="form-control" >
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label for="exampleInputFile">IMG</label>
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




        $("#form_add_product").on('submit', function(e) {
            e.preventDefault();
            var $btn = $("#input_addproduct");
            $btn.button('loading');
            var is_update = $("#input_hdf_update").val();
            if (is_update == 'false') {
                $.ajax({
                    url: "<?php echo base_url(); ?>" + "index.php/service/add_highlight",
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
                    url: "<?php echo base_url(); ?>" + "index.php/service/edit_highlight/" + input_id,
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
                url: "<?php echo base_url(); ?>" + "index.php/service/gethighlight_detail",
                data: {"id": id},
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    $('#input_headine').val(data.result.Highlight_Headline);
                    $('#input_url').val(data.result.Highlight_URL);
                   
                    $('#product_pic').html('<img src="../public/uploads/Thumbnails_' + data.result.Highlight_IMG + '" height="50"><input type="hidden" id="input_hdimage" name="input_hdimage" value="' + data.result.Highlight_IMG + '" />');
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
                url: "<?php echo base_url(); ?>" + "index.php/service/delete_highlight",
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

        $('#products_list').html('<tr><td colspan="7"><center><img src="<?php echo base_url(); ?>public/img/loading.gif"  width="50"/></center></td></tr>');
        setTimeout(
                function()
                {
                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>" + "index.php/service/load_highlight",
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