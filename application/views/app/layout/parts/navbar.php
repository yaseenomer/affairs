<body class="page-md page-header-fixed page-quick-sidebar-over-content page-sidebar-closed-hide-logo ">
<!-- BEGIN HEADER -->
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url('mainController')?>">
                <i class="fa fa-home fa-2x brand"></i>
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                        <li class="active main-header"><a href="#"> الشئون العلمية<span class="sr-only">(current)</span></a></li>


               <?php if (isset($this->session->user))  getMenuItems($this->session->user->GROUP_ID) ?>
				</li>
			</ul>
            <ul class="nav navbar-nav navbar-right">
              <?php if (isset($this->session->user))  if(user()->GROUP_ID == 1) {  ?>
             <li class="dropdown">
            
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user-o" aria-hidden="true"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url('users/usersgroups') ?>">  المجموعات    </a></li>
                        <li><a href="<?php echo base_url('users/MainMenus') ?>"> القوائم الرئيسية    </a></li>
                        <li><a href="<?php echo base_url('users/submenus/create') ?>">  القوائم الفرعية     </a></li>
                        <li><a href="<?php echo base_url('users/GroupPermissions') ?>">  الصلاحيات    </a></li>
            
                    </ul>
                </li>
              <?php } ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <?php if (isset($this->session->user)) {

                            echo $this->session->user->USR_NAME;

                        }elseif (isset($this->session->empAccount)){

                            echo $this->session->empAccount->USR_NAME;
                        }
                        ?>
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <?php if (isset($this->session->user)) { ?>

                        <li><a href="<?php echo base_url('auth/logout') ?>"> تسجيل خروج </a></li>

                        <?php }elseif (isset($this->session->empAccount)) { ?>

                        <li><a href="<?php echo base_url('EmpAccounts/logout') ?>"> <i class="fa fa-sign-out"></i> تسجيل خروج </a></li>

                        <?php } ?>

                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">