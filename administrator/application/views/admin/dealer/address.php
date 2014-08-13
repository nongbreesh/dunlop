

<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dealer Address
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dealer Address</li>
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

                        <h3 class="box-title">New Dealer Address</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">

                        <form role="form" id="form_add_cate">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Dealer Zone</label>
                                    <select class="form-control"  id="input_zone" name="input_zone" >
                                        <option value="">--- Select one ----</option>';
                                        <?php foreach ($zone_list as $each) { ?>
                                            <option value="<?php echo $each->ZONE_ID; ?>"><?php echo $each->ZONE_NAME; ?></option>';
                                        <?php } ?>
                                    </select>    
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Dealer Area</label>
                                    <select class="form-control"  id="input_area" name="input_area" required="required" >
                                        <option value="">--- Select Zone ----</option>';
                                    </select>    
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Dealer Name</label>
                                    <input required="required" type="text" class="form-control" id="input_dealer_name" name="input_dealer_name" placeholder="Enter dealer name">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Address</label>
                                    <textarea required="required" type="text" class="form-control" id="input_dealer_address" name="input_dealer_address"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tel</label>
                                    <input required="required" type="text" class="form-control" id="input_dealer_tel" name="input_dealer_tel" placeholder="Enter dealer Tel">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Url</label>
                                    <input  type="text" class="form-control" id="input_dealer_url" name="input_dealer_url" placeholder="Enter dealer Url">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Agent</label>
                                    <div class="checkbox">
                                        <label class="form-inline">
                                            <input type="radio" name="input_dealer_agent" id="input_dealer_agent_yes" value="1">
                                            <label for="input_dealer_agent_yes">YES</label>
                                        </label> 
                                        <label class="form-inline">
                                            <input type="radio"  name="input_dealer_agent" id="input_dealer_agent_no" checked="checked" value="0" >
                                            <label for="input_dealer_agent_no">NO</label>
                                        </label>     
                                        </label>
                                    </div>
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

                        <h3 class="box-title">Category list</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive no-padding" style="overflow: auto">
                        <table class="table table-hover todo-list" >
                            <thead>
                                <tr>
                                    <th><strong>ID</strong></th>
                                    <th><strong>Area</strong></th>
                                    <th><strong>Name</strong></th>
                                    <th><strong>Address</strong></th>
                                    <th><strong>Tel</strong></th>
                                    <th><strong>Url</strong></th>
                                    <th><strong>Agent</strong></th>
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
                    <h4 class="modal-title"><i class="fa fa-shopping-cart"></i> <span>Update category</span></h4>
                </div>

                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-12 table-responsive" >


                            <input type="hidden" name="inputedit_hddcate" id="inputedit_hddcate" />
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Dealer Zone</label>
                                    <select class="form-control"  id="inputedit_zone" name="inputedit_zone" >
                                        <option value="">--- Select one ----</option>';
                                        <?php foreach ($zone_list as $each) { ?>
                                            <option value="<?php echo $each->ZONE_ID; ?>"><?php echo $each->ZONE_NAME; ?></option>';
                                        <?php } ?>
                                    </select>    
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Dealer Area</label>
                                    <select class="form-control"  id="inputedit_area" name="inputedit_area" required="required" >
                                        <option value="">--- Select Zone ----</option>';
                                    </select>    
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Dealer Name</label>
                                    <input required="required" type="text" class="form-control" id="inputedit_dealer_name" name="inputedit_dealer_name" placeholder="Enter dealer name">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Address</label>
                                    <textarea required="required" type="text" class="form-control" id="inputedit_dealer_address" name="inputedit_dealer_address"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tel</label>
                                    <input required="required" type="text" class="form-control" id="inputedit_dealer_tel" name="inputedit_dealer_tel" placeholder="Enter dealer Tel">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Url</label>
                                    <input  type="text" class="form-control" id="inputedit_dealer_url" name="inputedit_dealer_url" placeholder="inputedit_dealer_url dealer Url">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Agent</label>
                                    <div class="checkbox">
                                        <label class="form-inline">
                                            <input type="radio" name="inputedit_dealer_agent" id="inputedit_dealer_agent_yes" value="1">
                                            <label for="inputedit_dealer_agent_yes">YES</label>
                                        </label> 
                                        <label class="form-inline">
                                            <input type="radio"  name="inputedit_dealer_agent" id="inputedit_dealer_agent_no" checked="checked" value="0" >
                                            <label for="inputedit_dealer_agent_no">NO</label>
                                        </label>     
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">

                                    <label for="input_detail">Gallery</label>
                                    <select class="form-control"  id="inputedit_album" name="inputedit_album" >
                                        <option value="">--- Select one ----</option>';
                                        <?php foreach ($album_list as $each) { ?>
                                            <option value="<?php echo $each->Album_ID; ?>"><?php echo $each->Album_Name; ?></option>';
                                        <?php } ?>
                                    </select>        

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


        $('#input_zone').change(function() {
            $('#input_area').html($('<option>').text('--- Select Zone ----').attr('value', ''));
            $.ajax({
                url: "<?php echo base_url(); ?>" + "index.php/service/load_area",
                type: "POST",
                data: {'zone_id': $(this).val()},
                dataType: "json",
                success: function(data) {
                    $.each(data.result, function(index, value)
                    {
                        $('#input_area').append($('<option>').text(value.AREA_NAME).attr('value', value.AREA_ID));
                    });


                },
                error: function(XMLHttpRequest) {
                    //$.growl(XMLHttpRequest.status, {type: 'danger'}); //danger , info , warning
                }
            });
        });

        $('#inputedit_zone').change(function() {
            $('#inputedit_area').html($('<option>').text('--- Select Zone ----').attr('value', ''));
            $.ajax({
                url: "<?php echo base_url(); ?>" + "index.php/service/load_area",
                type: "POST",
                data: {'zone_id': $(this).val()},
                dataType: "json",
                success: function(data) {
                    $.each(data.result, function(index, value)
                    {
                        $('#inputedit_area').append($('<option>').text(value.AREA_NAME).attr('value', value.AREA_ID));
                    });


                },
                error: function(XMLHttpRequest) {
                    //$.growl(XMLHttpRequest.status, {type: 'danger'}); //danger , info , warning
                }
            });
        });


        $("#form_add_cate").on('submit', function(e) {
            e.preventDefault();
            var $btn = $("#input_addcate");
            $btn.button('loading');
            $.ajax({
                url: "<?php echo base_url(); ?>" + "index.php/service/add_dealer_address",
                type: "POST",
                data: $(this).serialize(),
                dataType: "json",
                success: function(data) {
                    $.growl(data.status.message, {type: data.status.type}); //danger , info , warning
                    load_cate_list();
                    load_category();
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
                url: "<?php echo base_url(); ?>" + "index.php/service/update_dealer_address/" + id,
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
        $('#cate_list').html('<tr><td colspan="9"><center><img src="<?php echo base_url(); ?>public/img/loading.gif"  width="50"/></center></td></tr>');
        setTimeout(
                function()
                {
                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>" + "service/load_dealer_list",
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
            url: "<?php echo base_url(); ?>" + "service/load_dealer_detail",
            data: {'id': id},
            dataType: "json",
            success: function(data) {
                //console.log(data);

                $('#inputedit_hddcate').val(id);
                $('#inputedit_zone').val(data.result.ZONE_ID);
                load_area(data.result.ZONE_ID, data.result.Area_ID);
                $('#inputedit_dealer_name').val(data.result.Dealer_Name);
                $('#inputedit_dealer_address').val(data.result.Dealer_Address);
                $('#inputedit_dealer_tel').val(data.result.Dealer_Tel);
                $('#inputedit_dealer_url').val(data.result.Dealer_URL);
                $('#inputedit_album').val(data.result.Album_ID);
                if (data.result.Dealer_Agent == 1) {
                    $('#inputedit_dealer_agent_yes').iCheck('check');
                } else {
                    $('#inputedit_dealer_agent_no').iCheck('check');
                }

            },
            error: function(XMLHttpRequest) {
                console.log(XMLHttpRequest.status);
            }
        });
        $("#category-modal").modal("show");
    }

    function load_area(zone_id, area_id) {
        $.ajax({
            url: "<?php echo base_url(); ?>" + "index.php/service/load_area",
            type: "POST",
            data: {'zone_id': zone_id},
            dataType: "json",
            success: function(data) {
                $.each(data.result, function(index, value)
                {
                    $('#inputedit_area').append($('<option>').text(value.AREA_NAME).attr('value', value.AREA_ID));
                });


                $('#inputedit_area').val(area_id);

            },
            error: function(XMLHttpRequest) {
                //$.growl(XMLHttpRequest.status, {type: 'danger'}); //danger , info , warning
            }
        });
    }
    function removedata(id) {
        if (confirm('ต้องการลบข้อมูลหรือไม่?')) {
            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>" + "index.php/service/delete_dealer",
                data: {'id': id},
                dataType: "json",
                success: function(data) {
                    if (data.status.type == 'success') {
                        $.growl(data.status.message, {type: data.status.type}); //danger , info , warning
                        load_cate_list();
                        load_category();

                    }
                },
                error: function(XMLHttpRequest) {
                    $.growl(XMLHttpRequest.status, {type: 'danger'}); //danger , info , warning
                }
            });
        }
    }


</script>