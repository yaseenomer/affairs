<?php $this->load->view('app/layout/parts/top') ?>
<div class="page-content-wrapper">
    <div class="page-content">
    <div class="page-header">
           <div class="header-title">
              <span class="h-main">الشئون العلمية</span>  /
               <span class="h-sub">الدورات</span>
           </div>
            
     </div>
      <div class="row" id="showcourse">





        <div class="col-md-10 col-md-offset-1">
            <div class="portlet light bordered">
              <div class="portlet-body form">

                  <div class="row">
                      <div class="col-md-12">
                          <?php if (isset($error)) { ?>
                              <div class="alert alert-danger">
                                  <?php echo $error ?>
                              </div>
                          <?php } ?>
                      </div>
                  </div>







                 <form action="<?=base_url('affirs/courses/insert')?>" method="post" role="form" enctype="multipart/form-data" >
                     <div class="form-body">
                            <div class="row">
                               <div class="col-md-8 col-md-offset-2">
                                    <div class="form-group">
                                       <label for="item">البرنامج </label>
     								   <select name="PROG_ID"  class="form-control"  style="width:100%">
									   <option>اختار من القائمة </option>
                                           <?php foreach ($programs as $program)  { ?>
									             <option value="<?=$program->PROG_ID?>"><?=$program->PROG_ARAB_NAME?></option>
                                           <?php  } ?>
									   </select>
                                    </div>
                                </div>
                                
                            </div>



                         <div class="row">
                             <div class="col-md-8 col-md-offset-2">
                                 <div class="form-group">
                                     <label for="item">الاستاذ  </label>
                                     <select name="tech"  class="form-control"  style="width:100%">
                                         <option>اختار من القائمة </option>
                                         <?php foreach ($techers  as $techer)  { ?>
                                             <option value="<?=$techer->INS_ID?>"><?=$techer->INS_ARAB_NAME?></option>
                                         <?php  } ?>
                                     </select>
                                 </div>
                             </div>

                         </div>


                              <!-- row end -->
                               <div class="row">
                               <div class="col-md-8 col-md-offset-2">
                                    <div class="form-group">
                                       <label for="item">تاريخ بداية الدورة</label>
                                       <input name="COUR_START_DATE"  type="text" class="form-control" >

                                    </div>
                                
                                    <div class="form-group">
                                       <label for="item">تاريخ النهاية</label>
                                       <input name="COUR_END_DATE"  type="text" class="form-control" >

                                    </div>
                                </div>
                            </div>
                            
                            <!-- row end -->
                             <div class="row">
                               <div class="col-md-8 col-md-offset-2">
                                    <div class="form-group <?=form_error('START_TIME')? ' has-error': ''?>" >
                                       <label for="item">زمن بداية الدورة</label>
                                       <input name="START_TIME" type="text" class="form-control" >
                                        <?=form_error('START_TIME')? '<span class="help-block">'.form_error('START_TIME').'</span>' : ''?>

                                    </div>
                               
                                    <div class="form-group" >
                                       <label for="item">زمن النهاية</label>
                                       <input name="END_TIME" type="text" class="form-control" id="dat">
                                    </div>
                                </div>
                            </div>



                            <!-- row end -->
                            <div class="row">
                               <div class="col-md-8 col-md-offset-2">
                                    <div class="form-group  " >
                                       <label for="item">عدد المقاعد </label>
                                       <input name="COUR_SEATS" type="text" class="form-control" >

                                    </div>
                                </div>
                            </div>
                            <!-- row end -->
                            <div class="row">
                               <div class="col-md-8 col-md-offset-2">
                                    <div class="form-group">
                                       <label for="item">الدولة </label>
     								   <select name="COUNTRY_NO"  class="form-control"  style="width:100%">
									   <option>اختار من القائمة </option>
                                           <?php foreach ($countries as $country)  { ?>
                                               <option value="<?=$country->COUNTRY_NO?>"><?=iconv("windows-1256" , "utf-8",$country->COUNTRY_NAME)?></option>
                                           <?php  } ?>
									   </select>
                                    </div>
                                </div>
                                
                            </div>

                             <!-- row end -->
                         <!-- row end -->
                             <div class="row">
                                 <div class="col-md-8  col-md-offset-2">
                                     <div class="form-group">
                                         <label for="item">   الرسوم للفرد الواحد  </label>
                                         <input name="COUR_FEES_EXPECTE" type="text" class="form-control">
                                     </div>
                                 </div>
                             </div>
                            <div class="row">
                               <div class="col-md-8 col-md-offset-2 ">
                                    <div class="form-group">
                                       <label for="item"> الجهة \ في حالة من خارج الجامعة  </label>
                                       <input name="COUR_PLACE" type="text" class="form-control" >
                                    </div>
                                </div>
                            </div>
                              <!-- row end --><div class="row">
                               <div class="col-md-8 col-md-offset-2 ">
                                    <div class="form-group">
                                       <label for="item">  مرفقات الدورة    </label>
                                       <input name="attach" type="file" class="form-control" >
                                    </div>
                                </div>
                            </div>
                              <!-- row end -->
                            <div class="row">
                               <div class="col-md-8 col-md-offset-2">
                                    <div class="form-group">
                                     <input name="" type="submit" class="btn btn-success" value="حفظ">
                                     <input name="" type="reset" class="btn btn-default" value="رجوع">
                                    </div>
                                </div>
                            </div>
                            <!-- row end -->
                     </div>
                 </form>
              </div>
            </div>
         </div>
      </div>  
      
</div>

<?php $this->load->view('app/layout/parts/footer'); ?>

    <script>
        new Vue({
            el:'#showcourse'
        });


            // $(function () {
            //     $('#dat').datetimepicker({
            //         icons: {
            //             time: "fa fa-clock-o",
            //             date: "fa fa-calendar",
            //             up: "fa fa-arrow-down",
            //             down: "fa fa-arrow-up",
            //             left: "fa fa-arrow-right",
            //             right: "fa fa-arrow-left"
            //         },
            //
            //
            //     });
            // });

    </script>
