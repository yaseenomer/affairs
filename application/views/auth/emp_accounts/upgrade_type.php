<?php $this->load->view('app/layout/parts/top');
main_header(array('الترقيات'));
canvas_header('   انواع الترقي ') ?>

<div class="row">
    <div class="col-md-12">
        <?php flash($notConfirm,'danger') ?>
    </div>
</div>

<?php echo form_open(base_url('EmpAccounts/checkType')) ?>

    <input type="hidden" name="emp_no" value="<?php echo $id ?>">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label>حدد طريقة الترقي </label>
                <select name="type" class="form-control" style="width:100%">
                    <option value="1">الترقي بالبحث العلمي المتميز</option>
                    <option value="2"> الترقي بالإسهام في التدريس</option>
                    <option value="3">الترقي بالخدمة الطويلة الممتازة</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-md-offset-2">
            <input type="submit" class="btn btn-success" value="تأكـــيد ">
        </div>
    </div>
<?php echo form_close()?>

<?php canvas_footer();
$this->load->view('app/layout/parts/footer'); ?>