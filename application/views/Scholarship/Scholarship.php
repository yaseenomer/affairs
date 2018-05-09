<?php $this->load->view('app/layout/parts/top') ?>
<div class="page-content-wrapper">
    <div class="page-content">
    <div class="page-header">
           <div class="header-title">
               <span class="h-main">الشئون العلمية</span>  /
               <span class="h-sub"> استمارة الابتعاث</span>
           </div>       
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="portlet light bordered">
              <div class="portlet-body form">
                 <form role="form" action="" method="post" enctype="multipart/form-data">
                            
                     <div class="row">
                     <div class="col-md-8 ">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           بيانات الابتعاث
                        </div>
                        <div class="panel-body">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#home" data-toggle="tab">بيانات الاستاذ </a>
                                </li>
                                <li class=""><a href="#profile" data-toggle="tab">البيانات الاكاديمية</a>
                                </li>
                                <li class=""><a href="#messages" data-toggle="tab">بيانات الابتعاث</a>
                                </li>
								<li class=""><a href="#attach" data-toggle="tab">المرفقات</a>
                                </li>
                                
                            </ul>
                              <div class="tab-content">
                                <div class="tab-pane fade active in" id="home">
                                    <h4>بيانات الاستاذ </h4>
                                    <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item">اسم الاستاذ  </label>
     								   <select name="EMP_NO"  class="form-control"  style="width:100%">
									   <option>اختار من القائمة </option>
									   <option></option>
									   </select>
                                    </div>
                                </div> 
                            </div>
                                                        
                             <!-- row end -->
                             <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item">الكلية  </label>
     								   <select name="LOC_NO"  class="form-control"  style="width:100%">
									   <option>اختار من القائمة </option>
									   <option></option>
									   </select>
                                    </div>
                                </div> 
                            </div>
                                                        
                             <!-- row end -->
                             <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item">القسم  </label>
     								   <select name="DEP_ID"  class="form-control"  style="width:100%">
									   <option>اختار من القائمة </option>
									   <option></option>
									   </select>
                                    </div>
                                </div> 
                            </div>
                                                        
                             <!-- row end -->
                             <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item">السنة  </label>
     								   <select name="YEAR_ID"  class="form-control"  style="width:100%">
									   <option>اختار من القائمة </option>
									   <option></option>
									   </select>
                                    </div>
                                </div> 
                            </div>
                                                        
                             <!-- row end -->
                             <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item">البرنامج  </label>
     								   <select name="PROG_ID"  class="form-control"  style="width:100%">
									   <option>اختار من القائمة </option>
									   <option></option>
									   </select>
                                    </div>
                                </div> 
                            </div>
                                                        
                             <!-- row end -->
                                </div>
                                <div class="tab-pane fade" id="profile">
                                    <h4>البيانات الاكاديمية </h4>
                                    <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item">المؤهل الحالي  </label>
     								   <select name="CURRENT_DEG"  class="form-control"  style="width:100%">
									   <option>اختار من القائمة </option>
									   <option></option>
									   </select>
                                    </div>
                                </div> 
                            </div>
                                                        
                             <!-- row end -->
                             <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item">تاريخ منح المؤهل  </label>
     								   <input  name="DEG_DATE"  id="DEG_DATE" type="text" class="form-control"  value="<?php echo set_value('DEG_DATE'); ?>"/>
                                    <?php echo form_error('DEG_DATE','<span class='.'error'.'>','</span>') ?> 
                                    </div>
                                </div> 
                            </div>
                                                        
                             <!-- row end -->
                             <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item">الجامعة التي منح منها  </label>
     								   <select name="DEG_UNIVERSITY"  class="form-control"  style="width:100%">
									   <option>اختار من القائمة </option>
									   <option></option>
									   </select>
                                    </div>
                                </div> 
                            </div>
                                                        
                             <!-- row end -->
                              <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item">الكلية التي منح منها    </label>
     								   <input  name="DEG_COLLEGE" type="text" class="form-control"/>
                                    </div>
                                </div> 
                            </div>
                                                        
                             <!-- row end -->
                                </div>
                                <div class="tab-pane fade" id="messages">
                                    <h4> بيانات الابتعاث</h4>
                                    <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item">المؤهل المراد الحصول عليه  </label>
     								   <select name="NEXT_DEG"  class="form-control"  style="width:100%">
									   <option>اختار من القائمة </option>
									   <option></option>
									   </select>
                                    </div>
                                </div> 
                            </div>
                                                        
                             <!-- row end -->
                              <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item">مجال التخصص  </label>
     								   <select name="SP_ID"  class="form-control"  style="width:100%">
									   <option>اختار من القائمة </option>
									   <option></option>
									   </select>
                                    </div>
                                </div> 
                            </div>
                                                        
                             <!-- row end -->
                              <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item">الجامعة المراد الالتحاق بها  </label>
     								   <select name="UNIVERSITY_TARGET"  class="form-control"  style="width:100%">
									   <option>اختار من القائمة </option>
									   <option></option>
									   </select>
                                    </div>
                                </div> 
                            </div>
                                                        
                            <!-- row end -->
                              <div class="form-group">
                                            <label> الحالة  </label>
                                            <div class="radio">
                                                <label>
                                                    <input name="SCHOLAR_TYP" id="optionsRadios1" value="1" checked="" type="radio">   مجاز 
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input name="SCHOLAR_TYP" id="optionsRadios2" value="2" type="radio">     غير مجاز
                                                </label>
                                            </div>
                                           
                                          </div>
                                          <!-- row end -->
                              <div class="form-group">
                                            <label> نوع التفريغ  </label>
                                            <div class="radio">
                                                <label>
                                                    <input name="FREE_TYP" id="optionsRadios1" value="1" checked="" type="radio">   كامل 
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input name="FREE_TYP" id="optionsRadios2" value="2" type="radio">     جزئي
                                                </label>
                                            </div>
                                           
                                          </div>
							                                                     
                             <!-- row end -->
							<div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item">   العنوان خارج السودان </label>
     								   <input  name="OUTSIDE_ADDRESS" type="text" class="form-control"/>
                                    </div>
                                </div> 
                            </div>
                                                        
                                                                  
                             <!-- row end -->
                             
                                </div>
								
								<div class="tab-pane fade" id="attach">
                                    <h4> المرفقات </h4>	
							<div class="row">
                               <div class="col-md-8">
    <input type="file" id="file" name="files[]" multiple="multiple" accept="image/*" />
  <input type="submit" value="Upload!" />
                                </div> 
                            </div>
								</div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                            
                            <!-- row end -->
                            <div class="row">
                               <div class="col-md-8">
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
<script type="text/javascript">
    var dateoptions = {
	      timepicker:false,
          format:'Y-m-d'
	 };
    $('#DEG_DATE').datetimepicker(dateoptions);
</script>

<!-- The template to display files available for upload -->
<script id="template-upload" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-upload fade">
        <td>
            <span class="preview"></span>
        </td>
        <td>
            <p class="name">{%=file.name%}</p>
            <strong class="error text-danger"></strong>
        </td>
        <td>
            <p class="size">Processing...</p>
            <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
        </td>
        <td>
            {% if (!i && !o.options.autoUpload) { %}
                <button class="btn btn-primary start" disabled>
                    <i class="glyphicon glyphicon-upload"></i>
                    <span>Start</span>
                </button>
            {% } %}
            {% if (!i) { %}
                <button class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
</script>
<!-- The template to display files available for download -->
<script id="template-download" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-download fade">
        <td>
            <span class="preview">
                {% if (file.thumbnailUrl) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                {% } %}
            </span>
        </td>
        <td>
            <p class="name">
                {% if (file.url) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
                {% } else { %}
                    <span>{%=file.name%}</span>
                {% } %}
            </p>
            {% if (file.error) { %}
                <div><span class="label label-danger">Error</span> {%=file.error%}</div>
            {% } %}
        </td>
        <td>
            <span class="size">{%=o.formatFileSize(file.size)%}</span>
        </td>
        <td>
            {% if (file.deleteUrl) { %}
                <button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                    <i class="glyphicon glyphicon-trash"></i>
                    <span>Delete</span>
                </button>
                <input type="checkbox" name="delete" value="1" class="toggle">
            {% } else { %}
                <button class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
</script>