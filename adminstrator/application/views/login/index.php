<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
        <title>Trueyou mobile site Admin Ver.1.0 | Dashboard</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="<?php echo base_url() ?>public/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="<?php echo base_url() ?>public/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="<?php echo base_url() ?>public/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="<?php echo base_url() ?>public/css/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="<?php echo base_url() ?>public/css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- fullCalendar -->
        <link href="<?php echo base_url() ?>public/css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="<?php echo base_url() ?>public/css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="<?php echo base_url() ?>public/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url() ?>public/css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <script src="<?php echo base_url() ?>public/js/jquery-1.7.2.min.js" type="text/javascript"></script>
        <link href="<?php echo base_url() ?>public/css/style.css" rel="stylesheet" type="text/css" />
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <style>html, body {
                overflow-x: hidden!important;
                font-family: 'Source Sans Pro', sans-serif;
                -webkit-font-smoothing: antialiased;
                min-height: 100%;
                background: none;
            }
            .form-box .header {
                -webkit-border-top-left-radius: 4px;
                -webkit-border-top-right-radius: 4px;
                -webkit-border-bottom-right-radius: 0;
                -webkit-border-bottom-left-radius: 0;
                -moz-border-radius-topleft: 4px;
                -moz-border-radius-topright: 4px;
                -moz-border-radius-bottomright: 0;
                -moz-border-radius-bottomleft: 0;
                border-top-left-radius: 4px;
                border-top-right-radius: 4px;
                border-bottom-right-radius: 0;
                border-bottom-left-radius: 0;
                background: #3F3F3F;
                box-shadow: inset 0px -3px 0px rgba(0, 0, 0, 0.2);
                padding: 20px 10px;
                text-align: center;
                font-size: 26px;
                font-weight: 300;
                color: #fff;
            }
            .form-box .body, .form-box .footer {
                padding: 10px 20px;
                background: #fff;
                color: #444;
            }
        </style>
    </head>
    <body class="bg-login">

        <div class="form-box" id="login-box">

            <form method="post">
                <div class="body bg-white">
                    <div class="form-group">
                        <input type="text" name="userid" class="form-control" placeholder="User ID"/>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password"/>
                    </div>          

                </div>
                <div class="footer">  
                    <div class="row">
                        <div class="form-group col-xs-6">
                            <input type="checkbox" name="remember_me"/> Remember me
                        </div>
                        <div class="form-group col-xs-6">
                            <button type="submit" name="signin" class="btn  btn-block btn-primary" >Sign me in</button>  
                        </div>
                    </div>
                </div>
            </form>

            <div class="margin text-center">


            </div>
        </div>


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="../../js/bootstrap.min.js" type="text/javascript"></script>        

    </body>
</html>