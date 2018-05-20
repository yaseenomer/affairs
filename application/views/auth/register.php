<?php if (isset($exist)) { ?>
    <div class="alert alert-danger">
        <?php echo $exist ?>
    </div>
<?php } ?>



<div class="col-md-6 col-md-offset-3 o_database_list">
    <div class="text-center">
       <img src="<?php echo base_url(); ?>assets/img/sudanun2.png">
    </div>
	
	 <?php echo form_open(base_url().'authi/pCreate_user'); ?>

	<div class="form-group field-login">
            <label for="name" class="control-label"> «·«”„ »«·ﬂ«„·    </label>
            <input name="name" id="name" class="form-control" required="required" autofocus="autofocus" type="text">
        </div>

	 <div class="form-group field-login">
            <label for="number" class="control-label"> —ﬁ„ «·„‹‹‹ÊŸ›    </label>
            <input name="number" id="number" class="form-control" required="required" autofocus="autofocus" type="text">
        </div>
	<div class="form-group field-login">
            <label for="login" class="control-label"> «”„ «·œŒÊ·   </label>
            <input name="login" id="login" class="form-control" required="required" autofocus="autofocus" type="text">
        </div>

    <div class="form-group field-password">
            <label for="password" class="control-label">ﬂ·„… «·„—Ê— </label>
            <input name="password" id="password" class="form-control" required="required" autocomplete="current-password" maxlength="4096" type="password">
    </div>
        <button type="submit" class="btn btn-primary"> √‰‘‹‹«¡ «·Õ”‹‹«» ··„” Œœ„ </button>
        </div>
</form>