<?php $this->load->view('app/layout/parts/top');main_header(array('الترقيات')); canvas_header('   عرض طلبات الترقي  ') ?>




<div class="row">

    <table class="table table-advance table-bordered table-striped" id="example" >
        <thead>
        <tr>
            <th>#</th>
            <th>الاسم </th>
            <th>الكلية  </th>
            <th>القسم </th>
            <th>التخصص </th>
            <th>الدرجة الحالية  </th>
            <th>الدرجة المراد الترقي لها  </th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th>2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td>@fat</td>
            <td>@fat</td>
            <td>@fat</td>
        </tr>

        </tbody>
    </table>

</div>




<?php canvas_footer();
$this->load->view('app/layout/parts/footer'); ?>