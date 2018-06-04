<?php $this->load->view('app/layout/parts/top');
main_header(array('الترقيات'));
canvas_header('CV ') ?>

    <div class="row">
        <?php echo form_open(base_url('upgrades/Apply/insert'))?>
        <div class="col-md-3 col-sm-3 col-xs-3">
            <ul class="nav nav-tabs tabs-left">
                <li class="active"><a href="#personal" data-toggle="tab"><i class="fa fa-user-o"> </i> Personal Information  </a></li>

                <li class=""><a href="#edu" data-toggle="tab"><i class="fa fa-graduation-cap"></i>   Pre-University Education </a></li>

                <li class=""><a href="#unv" data-toggle="tab"><i class="fa fa-graduation-cap"></i> University Qualifications & University Degree   </a></li>

                <li class=""><a href="#exp" data-toggle="tab"><i class="fa fa-graduation-cap"></i>   University / Teaching / Supervisory Experience</a></li>

                <li class=""><a href="#prosearch" data-toggle="tab"><i class="fa fa-graduation-cap"></i>     Research Projects </a></li>

                <li class=""><a href="#publication" data-toggle="tab"><i class="fa fa-graduation-cap"></i> Publications,Conferences & Research  </a></li>

                <li class=""><a href="#pubmember" data-toggle="tab"><i class="fa fa-graduation-cap"></i> Participants in The Publication  </a></li>

                <li class=""><a href="#siminars" data-toggle="tab"><i class="fa fa-graduation-cap"></i> Professional & Administrative Experience  </a></li>

                <li class=""><a href="#personnals" data-toggle="tab"><i class="fa fa-graduation-cap"></i> People can be Consulted  </a></li>
            </ul>
        </div>
        <div class="col-md-9 col-sm-9 col-xs-9">

            <div class="tab-content">

                <div class="tab-pane fade active in" id="personal">
                        <?php echo form_open_multipart(base_url('upgrades/Application_Form/insert'))?>

                        <div class="row">

                        <div class="col-md-3">
                            <label>Fourth Name</label>
                            <input type="text"  name="LST_NAME_ENG" class="form-control">
                            <input type="hidden"  name="app_id"  value="<?php echo $this->session->app_id; ?>" class="form-control">
                            <input type="hidden"  name="emp_no"  value="<?php echo $this->session->emp_no;  ?>" class="form-control">
                        </div>

                        <div class="col-md-3">
                            <label>Third Name</label>
                            <input type="text"  name="THR_NAME_ENG" class="form-control">
                        </div>

                        <div class="col-md-3">
                            <label>Second Name</label>
                            <input type="text"  name="SND_NAME_ENG" class="form-control">
                        </div>

                        <div class="col-md-3">
                            <label>First Name</label>
                            <input type="text"  name="FRT_NAME_ENG" class="form-control">
                        </div>


                    </div>
                    <br>
                    <!----- names  arabic-->
                    <div class="row">
                        <div class="col-md-3">
                            <label>الأسم الأول </label>
                            <input type="text"  name="FRT_NAME_AR" class="form-control">
                        </div>


                        <div class="col-md-3">
                            <label>الأسم الثاني </label>
                            <input type="text"  name="SND_NAME_AR" class="form-control">
                        </div>


                        <div class="col-md-3">
                            <label>الأسم الثالث </label>
                            <input type="text"  name="THR_NAME_AR" class="form-control">
                        </div>

                        <div class="col-md-3">
                            <label>الأسم الرابع </label>
                            <input type="text"  name="LST_NAME_AR" class="form-control">
                        </div>

                    </div>
                    <br>
                    <!----- EMP_LANGUAGES-->
                    <div class="row">
                        <div class="col-md-6">
                            <label> Languages you know</label>

                         <!--   <input type="checkbox" name="EMP_LANGUAGES" value="عربي" class="form-control">عربي
                            <input type="checkbox" name="EMP_LANGUAGES" value="انجليزي" class="form-control">انجليزي
                            <input type="checkbox" name="EMP_LANGUAGES" value="لغات اخرى" class="form-control">لغات اخرى-->
                            <input type="text"  name="EMP_LANGUAGES" class="form-control">
                        </div>
                    </div>
                    <br>
                    <div class="row">

                        <div class="col-md-6">
                            <label>  Home Phone Number </label>
                            <input type="text"  name="HOME_PHONE" class="form-control">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Attach the CV File</label>
                            <input type="file"  name="FILE_BATH[]" class="form-control"multiple="multiple">
                        </div>

                    </div>
                        <br>  <br>

                        <div class="row">
                            <div class="form-group col-md-12">
                                <input type="submit" class="btn btn-success" value="Save">
                            </div>
                        </div>
                    <?php echo form_close()?>
                </div>
    <!------------------------------------------------------->

                <div class="tab-pane fade" id="edu">
                    <form name="form2" action="<?= base_url('upgrades/Edu/insert') ?>" method="post" enctype="multipart/form-data" role="form">
                    <div class="row">
                        <div class=" form-group col-md-6">
                            <label>  School Grade </label>
                            <select name="PRE_EDU_TYPE"class="form-control">
                                <option value=""></option>
                                <option value="Basis">Basis</option>
                                <option value="Primary">Primary</option>
                                <option value="Intermediate">Intermediate</option>
                                <option value="Secondary">Secondary</option>

                            </select>
                        </div>

                        <div class=" form-group col-md-6">
                            <label>  School Name  </label>
                            <input type="text"  name="SCHOOL_NAME" class="form-control">
                        </div>
                    </div>
                        <br>
                        <div class="row" class=" form-group col-md-6">
                            <label for="item"> Country</label>
                            <select name="COUNTRY_NO"  class="form-control"  style="width:60%"  id="lev1">
                                <option>Select from the menu </option>

                                <?php
                                if(!empty($levels))
                                {
                                    foreach($levels as $each)
                                    {
                                        ?>
                                        <option value="<?php echo  $each->COUNTRY_NO ?>"><?php echo iconv("windows-1256","utf-8",$each->COUNTRY_NAME_EN )?></option>
                                        <?php
                                    }
                                }
                                ?>
                            </select>
                            <br> <br> <br>
                        <div class="row">
                        <div class=" form-group col-md-4">
                            <label>  YEAR </label>
                            <input type="text" class="form-control" name="PRE_EDU_START" id="PRE_EDU_START" value="<?php echo set_value('PRE_EDU_START'); ?>" >
                            <?php echo form_error('PRE_EDU_START','<span class='.'error'.'>','</span>') ?>
                        </div>


                        <div class=" form-group col-md-4">
                            <label> TO YEAR    </label>
                            <input type="text" class="form-control" name="PRE_EDU_END" id="PRE_EDU_END" value="<?php echo set_value('PRE_EDU_END'); ?>">
                            <?php echo form_error('PRE_EDU_END','<span class='.'error'.'>','</span>') ?>
                        </div>

                        <div class=" form-group col-md-4">
                            <label> Rating / Percentage </label>
                            <input type="TEXT" class="form-control" name="PRE_EDU_GRADE">
                        </div>
                    </div>
                        </div>
                    
                    <br>
                    <div class="row">
                        <div class="col-md-4">
                            <label>Attach The Certificate </label>
                            <input type="file"  name="FILE_BATH[]" class="form-control"multiple="multiple">
                        </div>

                    </div>
                        <br>  <br>

                        <div class="row">
                            <div class="form-group col-md-12">
                                <input type="submit" class="btn btn-success" value="Save">
                            </div>
                        </div>

                    </form>
                </div>
    <!------------------------------------------------------->
                <div class="tab-pane fade" id="unv">
                <form name="form3" action="<?= base_url('upgrades/APPLICATION_UNIV_EDU/insert') ?>" method="post" enctype="multipart/form-data" role="form">
                <div class="row">
                        <div class=" form-group col-md-4">
                            <label> Type of Qualification  </label>
                            <select name="UNIV_EDU_TYPE"class="form-control">
                                <option value=""></option>
                                <option value="Two Years Diploma">Two Years Diploma</option>
                                <option value="Diploma 3 years">Diploma 3 Years</option>
                                <option value="Bachelor of 4 Years">Bachelor of 4 Years</option>
                                <option value="Bachelor of 5 Years">Bachelor of 5 Years</option>
                                <option value=" Higher Diploma"> Higher Diploma</option>
                                <option value="master ">master </option>
                                <option value="Ph.D">Ph.D</option>

                            </select>
                        </div>

                        <div class=" form-group col-md-4">
                            <label>  University </label>
                            <select name="UNV_ID"class="form-control">
                                <option value=""></option>
                                

                            </select>
                        </div>
                        <div class=" form-group col-md-4">
                            <label>  Country </label>
                            <select name="COUNTRY_NO"  class="form-control"  style="width:60%"  id="lev1">
                                <option>اختار من القائمة </option>

                                <?php
                                if(!empty($levels))
                                {
                                    foreach($levels as $each)
                                    {
                                        ?>
                                        <option value="<?php echo  $each->COUNTRY_NO ?>"><?php echo iconv("windows-1256","utf-8",$each->COUNTRY_NAME )?></option>
                                        <?php
                                    }
                                }
                                ?>
                            </select>

                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-5">
                            <label> College </label>
                            <input type="text" class="form-control" name="UNIV_EDU_COLLEGE">
                        </div>

                        <div class="form-group col-md-5">
                            <label> Specialization  </label>
                            <input type="text" class="form-control" name="UNIV_EDU_SPECIAL">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="form-group col-md-5">
                            <label> Received Date </label>
                            <input type="text" class="form-control" name="DATE_OF_ISSUED" id="DATE_OF_ISSUED"value="<?php echo set_value('DATE_OF_ISSUED'); ?>" >
                            <?php echo form_error('DATE_OF_ISSUED','<span class='.'error'.'>','</span>') ?>
                        </div>

                        <div class="form-group col-md-5">
                            <label> Estimation </label>
                            <input type="text" class="form-control" name="UNIV_EDU_GRADE">
                        </div>
                    </div>
                            <br>
                            <div class="row">
                              <div class="form-group col-md-10">
                                <label> Thesis Title / Research  </label>
                                   <textarea class="form-control" name="THESIS_TITLE"></textarea>
                              </div>
                            </div>
                     <br>
                    <div class="row">
                        <div class="col-md-4">
                            <label> Attach the search file </label>
                            <input type="file"  name="FILE_BATH[]" class="form-control"multiple="multiple">
                        </div>

                    </div>
                        <br>  <br>

                        <div class="row">
                            <div class="form-group col-md-12">
                                <input type="submit" class="btn btn-success" value="Save">
                            </div>
                        </div>
                     </form>
                </div>

    <!------------------------------------------------------->
                <div class="tab-pane fade" id="exp">
                <form name="form4" action="<?= base_url('upgrades/APP_UNIVERSITIES_EXP/insert') ?>" method="post" enctype="multipart/form-data" role="form">
                     <br>
                    <div class="row">
                    <label> نوع الخبرة  </label>
                       <input type="radio" name="UNI_EXP_TYPE" value="1" /> تدريس
                       
                       <input type="radio" name="UNI_EXP_TYPE" value="2" />اشراف داخلي
                       
                       <input type="radio" name="UNI_EXP_TYPE" value="3" />اشراف خارجي

                    </div>
                        <br>  <br>
                    <div class="row">
                         <div class=" form-group col-md-4">
                            <label> Type of Experience </label>
                            <select name="UNI_EXP_SUB_TYPE"class="form-control">

                                <option value=""></option>
                                <option value="1">Ph.D</option>
                                <option value="2">Master</option>
                                <option value="3">High Diploma</option>
                                <option value="5">Bachelor </option>
                                <option value="0">  Diploma</option>

                            </select>

                        </div>

                        <div class="form-group col-md-4">
                            <label > Start Date  </label>
                            <input  type="text" class="form-control" name="START_DATE" id="START_DATE" value="<?php echo set_value('START_DATE'); ?>">
                            <?php echo form_error('START_DATE','<span class='.'error'.'>','</span>') ?>
                        </div>

                        <div class="form-group col-md-4">
                            <label > End date </label>
                            <input  type="text" class="form-control" name="END_DATE" id="END_DATE" value="<?php echo set_value('END_DATE'); ?>">
                            <?php echo form_error('END_DATE','<span class='.'error'.'>','</span>') ?>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class=" form-group col-md-6">
                            <label>  University </label>
                            <select name="UNV_ID"class="form-control">
                                <option>اختار من القائمة </option>
                                <?php
                                if(!empty($uni))
                                {
                                    foreach($uni as $each)
                                    {
                                        ?>
                                        <option value="<?php echo  $each->UNV_ID ?>"><?php echo $each->UNV_ENG_NAME ?></option>
                                        <?php
                                    }
                                }
                                ?>

                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>College </label>
                            <input type="text" class="form-control" name="UNIV_EXP_COLLEGE">
                        </div>

                    </div>
                        <div class="row">
                        <div class="form-group col-md-6">
                            <label>Department  </label>
                            <input type="text" class="form-control" name="UNIV_EXP_DEPART">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Specialization  </label>
                            <input type="text" class="form-control" name="UNIV_EXP_SPECIAL">
                        </div></div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>The Courses he Studied  </label>
                            <textarea class="form-control" name="EXP_COURCES"></textarea>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Number of Projects Supervised </label>
                            <input type="text" class="form-control" name="PROJECTS_NUMBERS">
                        </div>
                    </div>
                        <div class="row">
                        <div class="form-group col-md-6">
                            <label>Notes  </label>
                            <textarea class="form-control" name="NOTES"></textarea>
                        </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <input type="submit" class="btn btn-success" value="Save">
                            </div>
                        </div>

                </form>

                </div>
    <!------------------------------------------------------->

                <div class="tab-pane fade" id="prosearch">
                 <form name="form5" action="<?= base_url('upgrades/APP_PROJECTS/insert') ?>" method="post" enctype="multipart/form-data" role="form">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label > Date of the Project   </label>
                            <input  type="text" class="form-control" name="DATE_OF_PRO" id="DATE_OF_PRO" value="<?php echo set_value('DATE_OF_PRO'); ?>">
                            <?php echo form_error('DATE_OF_PRO','<span class='.'error'.'>','</span>') ?>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Name of Principal Investigator  </label>
                            <!--<textarea class="form-control" name="RESEARCHER_NAME"></textarea>-->
                            <input type="text" class="form-control" name="RESEARCHER_NAME">
                        </div>
                    </div>
                        <div class="form-group col-md-6">
                            <label>Address  </label>
                            <textarea class="form-control" name="PRO_TITLE"></textarea>
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label>Description  </label>
                            <textarea class="form-control" name="DESCRIPTION"></textarea>
                        </div>

                     <div class="row">
                        <div class="col-md-4">
                            <label>Attach the Project File</label>
                            <input type="file"  name="FILE_BATH[]" class="form-control"multiple="multiple">
                        </div>

                    </div>
                        <br>  <br>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <input type="submit" class="btn btn-success" value="Save">
                        </div>
                    </div>
                </form>
                </div>
                <!------------------------------------------------------->

                <!------------------------------------------------------->
                <div class="tab-pane fade" id="publication">
                    <form name="form6" action="<?= base_url('upgrades/APP_PUBLICATIONS/insert') ?>" method="post" enctype="multipart/form-data" role="form">
                    <div class="row">
                        <label> Type of PUBLICATIONS </label>
                        <input type="radio" name="PUB_TYP" value="1" /> Conference

                        <input type="radio" name="PUB_TYP" value="2" />Activity

                        <input type="radio" name="PUB_TYP" value="3" />Scientific paper

                        <input type="radio" name="PUB_TYP" value="4" />Semmenar

                        <input type="radio" name="PUB_TYP" value="5" />Published

                        <input type="radio" name="PUB_TYP" value="6" />Book

                        <input type="radio" name="PUB_TYP" value="7" />Magazine

                        <input type="radio" name="PUB_TYP" value="8" />symposium


                    </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label > Date    </label>
                                <input  type="text" class="form-control" name="DATE_OF_PUB" id="DATE_OF_PUB"value="<?php echo set_value('DATE_OF_PUB'); ?>">
                                <?php echo form_error('DATE_OF_PUB','<span class='.'error'.'>','</span>') ?>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Place  </label>
                                <input type="text" class="form-control" name="PLACE_OF_PUB">
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label>The language  </label>
                            <input type="text" class="form-control" name="PUB_LANGUGE">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Address  </label>
                            <!--<textarea class="form-control" name="TITLE"></textarea>-->
                            <input type="text"class="form-control" name="TITLE">
                        </div>

                        <div class="form-group col-md-6">
                            <label>The Description  </label>
                            <textarea class="form-control" name="DESCRIPTION"></textarea>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <label>Attach the Publication File </label>
                                <input type="file"  name="FILE_BATH[]" class="form-control"multiple="multiple">
                            </div>

                        </div>
                        <br>  <br>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <input type="submit" class="btn btn-success" value="Save">
                        </div>
                    </div>
                    </form>
                </div>

                <!------------------------------------------------------->

                <div class="tab-pane fade" id="pubmember">
                    <form name="form7" action="<?= base_url('upgrades/PUBLICATIONS_PARTS/insert') ?>" method="post" enctype="multipart/form-data" role="form">
                        <div class="row">

                            <div class="col-md-3">
                                <label>Fourth Name</label>
                                <input type="text"  name="LST_NAME_ENG" class="form-control">
                            </div>

                            <div class="col-md-3">
                                <label>Third Name</label>
                                <input type="text"  name="THR_NAME_ENG" class="form-control">
                            </div>

                            <div class="col-md-3">
                                <label>Second Name</label>
                                <input type="text"  name="SND_NAME_ENG" class="form-control">
                            </div>

                            <div class="col-md-3">
                                <label>First Name</label>
                                <input type="text"  name="FRT_NAME_ENG" class="form-control">
                            </div>


                        </div>
                        <br>
                        <!----- names  arabic-->
                        <div class="row">
                            <div class="col-md-3">
                                <label>الأسم الأول </label>
                                <input type="text"  name="FRT_NAME_AR" class="form-control">
                            </div>


                            <div class="col-md-3">
                                <label>الأسم الثاني </label>
                                <input type="text"  name="SND_NAME_AR" class="form-control">
                            </div>


                            <div class="col-md-3">
                                <label>الأسم الثالث </label>
                                <input type="text"  name="THR_NAME_AR" class="form-control">
                            </div>

                            <div class="col-md-3">
                                <label>الأسم الرابع </label>
                                <input type="text"  name="LST_NAME_AR" class="form-control">
                            </div>

                        </div>
                        <br>
                      <!--  <div class="row">
                            <div class="col-md-4">
                                <label>أرفق  الملف </label>
                                <input type="file"  name="FILE_BATH" class="form-control">
                            </div>

                        </div>-->
                        <br>  <br>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <input type="submit" class="btn btn-success" value="Save">
                        </div>
                    </div>
                    </form>
                </div>

                <!------------------------------------------------------->
                <!------------------------------------------------------->

                <div class="tab-pane fade" id="siminars">
                    <form name="form8" action="<?= base_url('upgrades/APP_OTHER_EXPRIENCES/insert') ?>" method="post" enctype="multipart/form-data" role="form">
                        <div class="row">
                            <label> Type of Experience  </label>
                            <input type="radio" name="EXP_TYPE" value="1" /> Administrative Experience

                            <input type="radio" name="EXP_TYPE" value="2" />Professional Experience

                        </div>
                        <br>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>The Description  </label>
                                <textarea class="form-control" name="DESCRIPTION"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label > Start Date    </label>
                                <input  type="text" class="form-control" name="EXP_START_DATE" id="EXP_START_DATE" value="<?php echo set_value('EXP_START_DATE'); ?>">
                                <?php echo form_error('EXP_START_DATE','<span class='.'error'.'>','</span>') ?>
                            </div>

                                <div class="form-group col-md-6">
                                    <label > End date    </label>
                                    <input  type="text" class="form-control" name="EXP_END_DATE" id="EXP_END_DATE" value="<?php echo set_value('EXP_END_DATE'); ?>">
                                    <?php echo form_error('EXP_END_DATE','<span class='.'error'.'>','</span>') ?>
                                </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Place of Expertise  </label>
                                <!--<textarea class="form-control" name="TITLE"></textarea>-->
                                <input type="text"class="form-control" name="EXP_PLACE">
                            </div>

                            <div class=" form-group col-md-6">
                                <label>  University </label>
                                <select name="UNV_ID"class="form-control">
                                    <option>اختار من القائمة </option>
                                    <?php
                                    if(!empty($univ))
                                    {
                                        foreach($univ as $each)
                                        {
                                            ?>
                                            <option value="<?php echo  $each->UNV_ID ?>"><?php echo $each->UNV_ENG_NAME ?></option>
                                            <?php
                                        }
                                    }
                                    ?>

                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Attach the Certificate </label>
                                <input type="file"  name="FILE_BATH[]" class="form-control"multiple="multiple">
                            </div>

                        </div>
                        <br>  <br>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <input type="submit" class="btn btn-success" value="Save">
                            </div>
                        </div>
                    </form>


                </div>

                <!------------------------------------------------------->

                <div class="tab-pane fade" id="personnals">
                    <form name="form9" action="<?= base_url('upgrades/APP_CV_REFERENCES/insert') ?>" method="post" enctype="multipart/form-data" role="form">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label> The Name   </label>
                            <input type="text"class="form-control" name="EMP_NAME">
                        </div>

                        <div class="form-group col-md-6">
                            <label> Current Address  </label>
                            <input type="text"class="form-control" name="ADDRESS">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Phone   </label>
                            <input type="text"class="form-control" name="REL_PHONE">
                        </div>

                        <div class="form-group col-md-6">
                            <label>E-mail     </label>
                            <input type="text"class="form-control" name="E_MAIL">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Job   </label>
                            <input type="text"class="form-control" name="REF_JOB">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Workplace      </label>
                            <input type="text"class="form-control" name="WORK_PLC">
                        </div>
                        <div class="form-group col-md-6">
                            <label> scientific degree     </label>
                            <select name="CURRENT_DEG" >
                                <option>اختار من القائمة </option>
                                <?php
                                if(!empty($qual))
                                {
                                    foreach($qual as $q)
                                    {
                                        ?>
                                        <option value="<?php echo  $q->DEG_ID ?>"><?php echo $q->DEG_ENG_NAME ?></option>
                                        <?php
                                    }
                                }
                                ?>


                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-12">
                            <input type="submit" class="btn btn-success" value="Save">
                        </div>
                    </div>

                </div>

            </div>

        </div>
        <?php echo form_close()?>
    </div>

<?php canvas_footer();
$this->load->view('app/layout/parts/footer'); ?>

<script type="text/javascript">
    var dateoptions = {
        timepicker:false,
        format:'d-M-y'
    };
    $('#PRE_EDU_START').datetimepicker(dateoptions);
</script>

<script type="text/javascript">
    var dateoptions = {
        timepicker:false,
        format:'d-M-y'
    };
    $('#PRE_EDU_END').datetimepicker(dateoptions);
</script>

<script type="text/javascript">
    var dateoptions = {
        timepicker:false,
        format:'d-M-y'
    };
    $('#DATE_OF_ISSUED').datetimepicker(dateoptions);
</script>

<script type="text/javascript">
    var dateoptions = {
        timepicker:false,
        format:'d-M-y'
    };
    $('#START_DATE').datetimepicker(dateoptions);
</script>


<script type="text/javascript">
    var dateoptions = {
        timepicker:false,
        format:'d-M-y'
    };
    $('#END_DATE').datetimepicker(dateoptions);
</script>

<script type="text/javascript">
    var dateoptions = {
        timepicker:false,
        format:'d-M-y'
    };
    $('#DATE_OF_PRO').datetimepicker(dateoptions);
</script>

<script type="text/javascript">
    var dateoptions = {
        timepicker:false,
        format:'d-M-y'
    };
    $('#DATE_OF_PUB').datetimepicker(dateoptions);
</script>

<script type="text/javascript">
    var dateoptions = {
        timepicker:false,
        format:'d-M-y'
    };
    $('#EXP_END_DATE').datetimepicker(dateoptions);
</script>

<script type="text/javascript">
    var dateoptions = {
        timepicker:false,
        format:'d-M-y'
    };
    $('#EXP_START_DATE').datetimepicker(dateoptions);
</script>


