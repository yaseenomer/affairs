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
            <a class="navbar-brand" href="#">
                <i class="fa fa-home fa-2x brand"></i>
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active main-header"><a href="#">الشئون العلمية  <span class="sr-only">(current)</span></a></li>

              <li class="dropdown">
                   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="">لوحة التحكم </span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url('CountriesController') ?>">الدول</a></li>
                        <li><a href="<?php echo base_url('UniversitiesController') ?>">الجامعات</a></li>
                        <li><a href="<?php echo base_url('Departments_con') ?>">الاقسام</a></li>
                        <li><a href="<?php echo base_url('Emp_no') ?>">الموظفين</a></li>
                        <li><a href="<?php echo base_url('Specialties_con') ?>">التخصصات</a></li>
                        <li><a href="<?php echo base_url('Program_typesController') ?>">انواع التدريب و البعثات</a></li>
                        <li><a href="<?php echo base_url('Academic_degreesController') ?>">المؤاهلات الاكاديمية</a></li>

                   </ul>
                </li>
            </ul>
<!--*******************************************-->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="dropdown">
                   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">التدريب </span></a>
                    <ul class="dropdown-menu">
                         <li><a href="<?php echo base_url('affirs/programs') ?>">البرامج</a></li>
                         <li><a href="<?php echo base_url('affirs/courses') ?>">الدورات</a></li>
                         <li><a href="<?php echo base_url('Instructors_con') ?>">الاساتذة</a></li>
                          <li><a href="<?php echo base_url('affirs/Candidates') ?>">المرشحين  للدورات</a></li>
                          <li ><a href="<?php echo base_url('Emp_no') ?>">   بحث عن رقم موظف </a></li>
                          <li ><a href="<?php echo base_url('Emp_name') ?>">  بحث عن رقم موظف بالاسم </a></li>
                   </ul>
                </li>
            </ul>
<!--*******************************************-->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="dropdown">
                   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">الابتعاث </span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url('affirs/Scholarship') ?>">الابتعاث</a> </li>
                        <li><a href="<?php echo base_url('Scholarships_deti_con') ?>">تفاصيل الابتعاث</a></li>
                        <li><a href="<?php echo base_url('Scholarships_ext_con') ?>">تمديد الابتعاث</a></li>
                       <!-- <li><a href="<?php echo base_url('Scholarship_attach_con') ?>">مرفقات البعثات</a></li>-->

                   </ul>
                </li>
            </ul>
<!--*******************************************.-->

<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
            <li class="dropdown">
                   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">اللجان </span></a>
                   <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url('CommitteesController') ?>">اللجان</a> </li>
                        <li><a href="<?php echo base_url('Committees_memberController') ?>">اعضاء اللجان</a></li>
                        <li><a href="<?php echo base_url('Committees_meetingController') ?>">اجتماعات اللجان</a></li>
                       <li><a href="<?php echo base_url('Scholarship_decis_con') ?>">قرارات البعثات </a> </li>
                       <li><a href="<?php echo base_url('affirs/Candidates2') ?>">عرض جميع الدورات  </a> </li>
                       <li><a href="<?php //echo base_url('Scholarship_decis_con') ?>">قرارات الترقيات   </a> </li>
                   </ul>
            </ul>


<!--*******************************************-->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav">
            <li class="dropdown">
                   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">الترقيات </span></a>
                       <ul class="dropdown-menu">    
                        <!--<li><a href="<?php echo base_url('') ?>">استمارة الترقيات</a> </li>-->
                        <li><a href="#"> استمارة الترقيات</a></li>
                        <li><a href="<?php echo base_url('Exprinces_con') ?>">الخبرات المهنية و التدريسية</a>   </li>
                           <li ><a href="<?php echo base_url('Publications_con') ?>">   النشرات و المؤتمرات و البحوث </a></li>
                           <li><a href="<?php echo base_url('Other_universities_con') ?>">جامعات اخرى</a></li>
                   </ul>
            </ul>
<!--*******************************************-->
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?=user()->USR_NAME ?>  <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?=base_url('auth/auth/logout')?>">تسجيل خروج </a></li>

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