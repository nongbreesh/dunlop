
<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Cache
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Cache</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-lg-6 col-xs-6">
                <!-- small box -->

                <ul class="timeline">

                </ul>


            </div>
        </div>
    </section><!--/.content -->
</aside><!--/.right-side -->
<script>
    $(document).ready(function() {
        cache_reload();
    });


    function delete_cache(file_name) {
        if (confirm('Are you sure'))
            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>" + "service/delete_cache",
                data: {"file_name": file_name},
                dataType: 'json',
                success: function(data) {
                    $.growl("delete_cache success", {type: "success"}); //danger , info , warning
                    cache_reload();

                },
                error: function(XMLHttpRequest) {
                    showError(XMLHttpRequest.status);
                    $btn.button('reset');
                }
            });

    }

    function flush_cache() {
        if (confirm('Are you sure'))
            var $btn = $("#btn_flush_cache");
        $btn.button('loading');
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>" + "service/flush_cache",
            dataType: 'json',
            success: function(data) {
                $.growl("Flush success", {type: "success"}); //danger , info , warning
                cache_reload();
                $btn.button('reset');
            },
            error: function(XMLHttpRequest) {
                showError(XMLHttpRequest.status);
                $btn.button('reset');
            }
        });

    }

    function cache_reload() {
        var $btn = $("#btnrefresh");
        $btn.button('loading');

        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>" + "service/cache_reload",
            dataType: 'html',
            success: function(data) {
                $(".timeline").html(data);
                $btn.button('reset');
            },
            error: function(XMLHttpRequest) {
                showError(XMLHttpRequest.status);

            }
        });
    }
</script>