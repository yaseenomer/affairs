<div style="align-content: center; font-style: italic;"><center>صمم بواسطة جامعة السودان للعلوم و التكنولوجيا / قسم البرمجيات / 2018
        </body></center></div>
</div>
</div>

<!-- END CONTENT -->
<!-- BEGIN QUICK SIDEBAR -->


<!-- END QUICK SIDEBAR -->
</div>

<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->

<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<script src="<?php echo base_url()?>assets/js/respond.min.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>assets/js/jquery-migrate.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>assets/js/jquery.flot.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>assets/js/jquery.flot.resize.min.js" type="text/javascript"></script>

<script src="<?php echo base_url()?>assets/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()?>assets/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/js/icheck.min.js"></script>
<script src="<?php echo base_url()?>assets/js/metronic.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>assets/js/layout.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>assets/js/demo.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>assets/js/index.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/select2.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
<script src="<?php echo base_url()?>assets/js/myvue.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>assets/js/pie_chart.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>assets/js/myScript.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>assets/js/ajax.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.datetimepicker.full.min.js"></script>

<!-- END PAGE LEVEL SCRIPTS -->
<script>
    jQuery(document).ready(function() {
        Metronic.init(); // init metronic core componets
        Layout.init(); // init layout
        Demo.init(); // init demo features
        Index.init();
        Index.initDashboardDaterange();
        Index.initJQVMAP(); // init index page's custom scripts
        Index.initCalendar(); // init index page's custom scripts
        Index.initCharts(); // init index page's custom scripts
        Index.initChat();
        Index.initMiniCharts();
    });
</script>
<!-- END JAVASCRIPTS -->

<!-- END BODY -->
</html>