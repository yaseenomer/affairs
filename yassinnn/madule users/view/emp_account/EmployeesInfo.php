<?php $this->load->view('app/layout/parts/first'); //$this->load->view('app/layout/parts/top') ?>
<div class="page-content-wrapper">
    <div class="page-content">
    <div class="page-header">
           <div class="header-title">
               <span class="h-main">الشئون العلمية</span>  /
               <span class="h-sub">  الموظفين</span>
           </div>
            
     </div>
     
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="portlet light bordered">
              <div class="portlet-body form">
                 <form action="<?= base_url() ?>Emp_no/insert" method="post" role="form" >
                     <div class="form-body">
                      <?php foreach ($generals as $general) {
                              //  VAR_DUMP($general);
                            $EMP_TYPE=$general->EMP_TYPE;
                      $EMP_NO=$general->EMP_NO;
                      $col=$this->EmpNoModel->Getcol($EMP_NO);
                            $LOC_NO=$general->COL_NO;
                            $DEP_ID=$general->DEP_NO;
                      $this->session->set_userdata('LOC_NO',$LOC_NO);
                      $this->session->set_userdata('DEP_ID',$DEP_ID);
                          //  echo $EMP_TYPE;
                           if(($EMP_TYPE=2) ||($EMP_TYPE=8)) {

                                ?>
                           <div class="row">
                           <div class="col-md-12 ">
                           <div class="panel panel-default">
                           <div class="panel-heading">بيانات الموظف
                           </div>
                           <div class="panel-body">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#home" data-toggle="tab"> البيانات الشخصية </a></li>
                            </ul>
                              <div class="tab-content">
                                <div class="tab-pane fade active in" id="home">
                                   
                                <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                       <label for="item">رقم الموظف  </label>
     								   <input  name="EMP_NO" type="text" class="form-control" value="<?= $general->EMP_NO ?>" readonly="" />
                                    </div>
                                </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                       <label for="item">اسم الموظف  </label>
     								   <input  name="EMP_NAME" type="text" class="form-control" value="<?= iconv("windows-1256" , "utf-8",$general->EMP_NAME) ?>" readonly="" />
                                    </div>
                                </div> 
                                 </div>

                                </div>

                             <div class="row">

                               <div class="col-md-6">
                                    <div class="form-group">
                                       <label for="item">الكلية  </label>
                                        <input  name="LOC_NO" type="text" class="form-control" value="<?= $general->LOC_NAME ?>" readonly=""/>
     								   
                                    </div>
                                </div> 

                               <div class="col-md-6">
                                    <div class="form-group">
                                       <label for="item">القسم  </label>
                                        <input  name="DEP_ID" type="text" class="form-control" value="<?= $general->DEP_NAME ?>" readonly=""/>
     								   
                                    </div>
                                </div> 
                            </div>

                            <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                     <input name="" type="submit" class="btn btn-success" value="استمرار">
                                     <input name="" type="reset" class="btn btn-default" value="رجوع">
                                    </div>
                                </div>
                            </div>
                            <!-- row end -->
                 <?php } else { ?><SCRIPT LANGUAGE="JavaScript">
                                      window.alert("عزرا انت لست من فئة الاساتذة  ");
                                      // window.location.href='http://affairs.com/Emp_no/Emp_no.php';
                                  </script><?php
                 }
                 }//end foreach

                 ?>
                     </div>
                 </form>
              </div>

            </div>

         </div>


      </div>




</div>     
<?php $this->load->view('app/layout/parts/footer'); ?>
<script type="text/javascript">
    var dateoptions = {
	      timepicker:false,
          format:'Y-m-d'
	 };
    $('#BIRTH_DATE').datetimepicker(dateoptions);
</script>

<script type="text/javascript">
    var dateoptions = {
	      timepicker:false,
          format:'Y-m-d'
	 };
    $('#HIRE_DATE').datetimepicker(dateoptions);
</script>

<script type="text/javascript">
    var dateoptions = {
	      timepicker:false,
          format:'Y-m-d'
	 };
    $('#DISMISS_DATE').datetimepicker(dateoptions);
</script>


<script type="text/javascript">
    var dateoptions = {
	      timepicker:false,
          format:'Y-m-d'
	 };
    $('#REHIRING_DATE').datetimepicker(dateoptions);
</script>

<script type="text/javascript">
    var dateoptions = {
	      timepicker:false,
          format:'Y-m-d'
	 };
    $('#DEG_DATE').datetimepicker(dateoptions);
</script>
