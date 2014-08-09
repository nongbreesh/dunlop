

<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Tire  <a href="javascript:;" onclick="add_product()" class="add-new-h2">Add Tire</a>
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Tire </li>
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
                          <!--  <button  onclick="update_list()" class="btn btn-danger btn-sm refresh-btn" data-toggle="tooltip" title="Reload"><i class="fa fa-refresh"></i></button> -->
                            <button class="btn btn-danger btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-danger btn-sm" data-widget='remove' data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                        </div><!-- /. tools -->
                        <i class="fa fa-list"></i>

                        <h3 class="box-title">Tire list</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover todo-list ">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Width</th>
                                    <th>Series</th>
                                    <th>Diameter</th>
                                    <th>Radial</th>
                                    <th>Rim</th>
                                    <th>Width/inc</th>
                                    <th>Product Name</th>
                                    <th>Type</th>
                                    <th>Create Date</th>
                                    <th>Update Date</th>
                                </tr>
                            </thead>
                            <tbody id="products_list">
                                <?php
                                foreach ($item_list as $row):
                                    ?>

                                    <tr>
                                        <td><?= $row->Tire_ID; ?></td>
                                        <td><?= $row->Tire_Name; ?><br>
                                        </span><span class="edit"><a href="javascript:;" onclick="edit_product(<?= $row->Tire_ID ?>);">Edit</a> | </span><span class="delete"><a class="delete-tag" href="#" onclick="return removedata(<?= $row->Tire_ID ?>);">Delete</a></div></td></td>
                                </td>
                                <td><?= $row->Tire_Width ?></td>
                                <td><?= $row->Tire_Series ?></td>
                                <td><?= $row->Tire_Diameter ?>
                                <td><?= $row->Tire_Radial ?></td>
                                <td> <?= $row->Tire_Rim ?></td>
                                <td> <?= $row->Tire_Width_inc ?></td>
                                <td> <?= $row->Product_Name ?></td>
                                <td> <?= $row->Type_Name ?></td>


                                <td><?= time_ago($row->Create_Date) ?></td>
                                <td><?= time_ago($row->Update_Date) ?></td>

                            </tr> 
                            <?php
                        endforeach;
                        ?>
                    </tbody>
                </table>
                <?php
                if (count($item_list) > 0) {
                    echo $this->pagination->create_links();
                } else {
                    echo '<center> NO Result</center>';
                }
                ?>
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
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input name="input_name" id="input_name" type="text" class="form-control" >
                                    </div>

                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Width</label>
                                        <div class="input-group">
                                            <input type="text"  name="input_width" id="input_width" class="form-control" required="required" >
                                        </div> </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Series</label>
                                        <div class="input-group">
                                            <input type="text"  name="input_series" id="input_series" class="form-control" required="required" >
                                        </div>    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Diameter</label>
                                        <div class="input-group">
                                            <input type="text"  name="input_diamater" id="input_diamater" class="form-control" required="required" >
                                        </div>
                                    </div>




                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Radial</label>
                                        <div class="input-group">
                                            <input type="text"  name="input_radial" id="input_radial" class="form-control" required="required" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Rim</label>
                                        <div class="input-group">
                                            <input type="text"  name="input_rim" id="input_rim" class="form-control" required="required" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Width/Inc.</label>
                                        <div class="input-group">
                                            <input type="text"  name="input_width_inc" id="input_width_inc" class="form-control" required="required" >
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Product Name</label>

                                        <select class="form-control" name="input_product_id" id="input_product_id">
                                            <option value="">--- Select one ----</option>';
                                            <?php foreach ($product_list as $each) { ?>
                                                <option value="<?php echo $each->Product_ID; ?>"><?php echo $each->Product_Name; ?></option>';
                                            <?php } ?>
                                        </select>       
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Type</label>
                                        <select class="form-control" name="input_type_id" id="input_type_id">
                                            <option value="">--- Select one ----</option>';
                                            <?php foreach ($type_list as $each) { ?>
                                                <option value="<?php echo $each->Type_ID; ?>"><?php echo $each->Type_Name; ?></option>';
                                            <?php } ?>
                                        </select>        
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
                    url: "<?php echo base_url(); ?>" + "index.php/service/add_tire",
                    type: "POST",
                    data: $(this).serialize(),
                    dataType: "json",
                    success: function(data) {
                        $.growl(data.status.message, {type: data.status.type}); //danger , info , warning
                        $btn.button('reset');
                        //update_list();
                        $("#add_product-modal").modal("hide");
                        location.reload();
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
                    url: "<?php echo base_url(); ?>" + "index.php/service/edit_tire/" + input_id,
                    type: "POST",
                    data: $(this).serialize(),
                    dataType: "json",
                    success: function(data) {
                        $.growl(data.status.message, {type: data.status.type}); //danger , info , warning
                        $btn.button('reset');
                        //update_list();
                        $("#add_product-modal").modal("hide");
                        location.reload();
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
                url: "<?php echo base_url(); ?>" + "index.php/service/gettire_detail",
                data: {"id": id},
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    $('#input_name').val(data.result.Tire_Name);
                    $('#input_width').val(data.result.Tire_Width);
                    $('#input_series').val(data.result.Tire_Series);
                    $('#input_diamater').val(data.result.Tire_Diameter);
                    $('#input_radial').val(data.result.Tire_Radial);
                    $('#input_rim').val(data.result.Tire_Rim);
                    $('#input_width_inc').val(data.result.Tire_Width_inc);
                    $('#input_product_id').val(data.result.Product_ID);
                    $('#input_type_id').val(data.result.Type_ID);
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
                url: "<?php echo base_url(); ?>" + "index.php/service/delete_tire",
                data: {'id': id},
                dataType: "json",
                success: function(data) {
                    if (data.status.type == 'success') {
                        $.growl(data.status.message, {type: data.status.type}); //danger , info , warning
                        location.reload();
                        //update_list();
                    }
                },
                error: function(XMLHttpRequest) {
                    $.growl(XMLHttpRequest.status, {type: 'danger'}); //danger , info , warning
                }
            });
        }
    }

    function update_list() {

        $('#products_list').html('<tr><td colspan="12"><center><img src="<?php echo base_url(); ?>public/img/loading.gif"  width="50"/></center></td></tr>');
        setTimeout(
                function()
                {
                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>" + "index.php/service/load_tire",
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