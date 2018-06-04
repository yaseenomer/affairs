<!doctype html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="<?php echo base_url()?>assets/css/bootstrap/css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url()?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url()?>assets/css/components-md-rtl.css" id="style_components" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">

    <link href="<?php echo base_url()?>assets/css/main.css" rel="stylesheet" type="text/css"/>

</head>
<body class="main-body">
<div class="col-md-12">
    <div class="nav-main">
        <div class="user-info">

            <i class="fa fa-user-o u-i"></i><span class="u-i"><?php echo user()->USR_NAME?></span>

            <i class="fa fa-cog u-i"></i>

            <i class="fa fa-comments u-i"></i>

            <i class="fa fa-clock-o u-i"></i>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="main-title text-center">
           نظام الترقيات

        </div>

        <div class="main">
            <div class="col-xs-5 col-md-offset-2">
                <a href="<?php echo base_url('EmpAccounts/emp')?>">
                    <div class="item redk">
                        <i class="fa  fa-university fa-4x icon-item "></i>
                    </div>
                    <div class="main-head">تقديم لإستاذ   </div>
                </a>

            </div>

            <div class="col-xs-5">
                <a href="<?php echo base_url('upgrades/apply/show')?>">
                    <div class="item green1">
                        <i class="fa fa-mortar-board fa-4x icon-item"></i>
                    </div>
                    <div class="main-head">عرض طلبات    </div>
                    <div class="main-head">الترقيات    </div>
                </a>

            </div>

        </div>


    </div>
</div>




<script src="<?php echo base_url()?>assets/js/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>assets/js/bootstrap.min.js" type="text/javascript"></script>

</body>
</html>



