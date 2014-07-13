

<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">

    <!-- Content Header (Page header) -->


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

                        <h3 class="box-title">Contact list</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover todo-list ">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>First name</th>
                                    <th>Last name</th>
                                    <th>Full address</th>
                                    <th>Province</th>
                                    <th>Zip code</th>
                                    <th>Tel</th>
                                    <th>Email</th>
                                    <th>Message</th>
                                    <th>Create Date</th>
                                </tr>
                            </thead>
                            <tbody id="products_list">
                                <?php
                                foreach ($item_list as $row):
                                    ?>

                                    <tr>
                                        <td><?= $row->ID; ?></td>
                                        <td><?= $row->first_name; ?></td>
                                        <td><?= $row->last_name; ?></td>
                                        <td><?= $row->full_address; ?></td>
                                        <td><?= $row->province; ?></td>
                                        <td><?= $row->tel; ?></td>
                                        <td><?= $row->email; ?></td>
                                        <td><?= $row->message; ?></td>
                                        <td><?= time_ago($row->create_date) ?></td>

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


<script>

    function update_list() {

        $('#products_list').html('<tr><td colspan="10"><center><img src="<?php echo base_url(); ?>public/img/loading.gif"  width="50"/></center></td></tr>');
        setTimeout(
                function()
                {
                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>" + "index.php/service/load_contact",
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