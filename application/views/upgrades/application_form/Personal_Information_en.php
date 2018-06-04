<?php $this->load->view('app/layout/parts/top');
main_header(array('الترقيات'));
canvas_header('CV ') ?>

    <div class="row">


        <div class="col-md-3 col-sm-3 col-xs-3 pull-right">
            <ul class="nav nav-tabs tabs-right">
                <li class="active"><a href="#personal" data-toggle="tab"> Personal Information <i class="fa fa-user-o"> </i> </a></li>

            </ul>
        </div>
        <div class="col-md-9 col-sm-9 col-xs-9 pull-left">

            <div class="tab-content">

                <div class="tab-pane fade active in" id="personal">
                        <?php echo form_open_multipart(base_url('upgrades/Application_Form/insert'));  ?>
                    <div class="row">

                        <div class="col-md-3">
                            <label class="pull-right">Fourth Name</label>
                            <input type="text"  name="LST_NAME_ENG" class="form-control" >
                            <input type="hidden"  name="app_id"  value="<?php echo $app_id ?>" class="form-control">
                            <input type="hidden"  name="emp_no"  value="<?php echo $emp_no  ?>" class="form-control">
                        </div>

                        <div class="col-md-3">
                            <label class="pull-right">Third Name</label>
                            <input type="text"  name="THR_NAME_ENG" class="form-control">
                        </div>

                        <div class="col-md-3">
                            <label class="pull-right">Second Name</label>
                            <input type="text"  name="SND_NAME_ENG" class="form-control">
                        </div>

                        <div class="col-md-3">
                            <label class="pull-right">First Name</label>
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

                        <div class="col-md-6 input_fields_container">
                            <label class="pull-right"> Languages you know</label>

                         <!--   <input type="checkbox" name="EMP_LANGUAGES" value="عربي" class="form-control">عربي
                            <input type="checkbox" name="EMP_LANGUAGES" value="انجليزي" class="form-control">انجليزي
                            <input type="checkbox" name="EMP_LANGUAGES" value="لغات اخرى" class="form-control">لغات اخرى-->
                            <input type="text"  name="EMP_LANGUAGES[]" class="form-control">
                            <br>
                            <i class="fa fa-plus-square-o  add_more_button" aria-hidden="true" <?php tip('add new field for language') ?>> </i>

                           <!-- <button class="btn btn-sm btn-primary add_more_button">Add More Fields</button>-->
                        </div>
                        <!-------------------------add more---------------->
                       <!-- <div class="input_fields_container">
                            <div><input type="text"  name="EMP_LANGUAGES[]" class="form-control">
                                <button class="btn btn-sm btn-primary add_more_button fa-plus-circle ">Add More Fields</button>
                            </div>
                        </div>-->
                        <!-------------------------add more---------------->

                        <div class="col-md-6 input_fields_container2">
                            <label class="pull-right">  Home Phone Number </label>
                            <input type="text"  name="HOME_PHONE[]" class="form-control">
                            <br>
                            <i class="fa fa-plus-square-o  add_more_button2" aria-hidden="true"<?php tip('add new field for Phone') ?>> </i>

                        </div>
                    </div>
                    <br>
                    <!-- <div class="row">
                        <div class="col-md-6">
                            <label></label>
                        </div>
                       <div class="col-md-6 input_fields_container3">
                            <label class="pull-right">Attach the CV File</label>
                            <input type="file"  name="attachs[]" class="form-control"multiple="multiple">
                            <br>
                            <i class="fa fa-plus-square-o  add_more_button3" aria-hidden="true"> </i>

                        </div>

                    </div>
                    -->
                        <br>  <br>

                        <div class="row">
                            <div class="form-group col-md-12">
                                <input type="submit" class="btn btn-success" value="Save">
                                <input type="submit" class="btn btn-success" value="Save & Contiue">
                            </div>
                        </div>
    </form>
                </div>
    <!------------------------------------------------------->

            </div>

        </div>

    </div>

<?php canvas_footer();
$this->load->view('app/layout/parts/footer'); ?>


<script>
    // add more language
    $(document).ready(function() {
        var max_fields_limit      = 10; //set limit for maximum input fields
        var x = 1; //initialize counter for text box
        $('.add_more_button').click(function(e){ //click event on add more fields button having class add_more_button
            e.preventDefault();
            if(x < max_fields_limit){ //check conditions
                x++; //counter increment
                $('.input_fields_container').append('<div> <label class="pull-right"> Languages you know</label><input type="text"  name="EMP_LANGUAGES[]" class="form-control"><a href="#" class="remove_field fa fa-minus-square-o" style="margin-left:10px; color: red"  >  </a></div>'); //add input field
            }
        });
        $('.input_fields_container').on("click",".remove_field", function(e){ //user click on remove text links
            e.preventDefault(); $(this).parent('div').remove(); x--;
        })
    });
// add more phone
    $(document).ready(function() {
        var max_fields_limit      = 10; //set limit for maximum input fields
        var x = 1; //initialize counter for text box
        $('.add_more_button2').click(function(e){ //click event on add more fields button having class add_more_button
            e.preventDefault();
            if(x < max_fields_limit){ //check conditions
                x++; //counter increment
                $('.input_fields_container2').append('<div>  <label class="pull-right">  Home Phone Number </label>\n' +
                    '                            <input type="text"  name="HOME_PHONE[]" class="form-control"><a href="#" class="remove_field fa fa-minus-square-o" style="margin-left:10px; color: red"  >  </a></div>'); //add input field
            }
        });
        $('.input_fields_container2').on("click",".remove_field", function(e){ //user click on remove text links
            e.preventDefault(); $(this).parent('div').remove(); x--;
        })
    });

    // add more phone
    $(document).ready(function() {
        var max_fields_limit      = 10; //set limit for maximum input fields
        var x = 1; //initialize counter for text box
        $('.add_more_button3').click(function(e){ //click event on add more fields button having class add_more_button
            e.preventDefault();
            if(x < max_fields_limit){ //check conditions
                x++; //counter increment
                $('.input_fields_container3').append('<div>  <label class="pull-right">Attach the CV File</label>\n' +
                    '                            <input type="file"  name="attachs[]" class="form-control"multiple="multiple"><a href="#" class="remove_field fa fa-minus-square-o" style="margin-left:10px; color: red"  >  </a></div>'); //add input field
            }
        });
        $('.input_fields_container3').on("click",".remove_field", function(e){ //user click on remove text links
            e.preventDefault(); $(this).parent('div').remove(); x--;
        })
    });

</script>
