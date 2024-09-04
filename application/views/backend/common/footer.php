</div>
  <footer class="sticky-footer bg-white">
    <div class="container my-auto">
      <div class="copyright text-center my-auto">
        <b><?php echo $lang['version']; ?></b> <?php echo $options['app_version']; ?>
        <strong><?php echo $options['app_footer']; ?> | <?php echo $lang['rightsreserved']; ?>
      </div>
    </div>
  </footer>
</div>

<!-- ./wrapper -->
<script language="javascript">
var base_url = '<?php echo base_url(); ?>';
var lang = <?php echo json_encode($lang); ?>;
var language = '<?php echo $language; ?>';
var languageabbr = '<?php echo $languageabbr; ?>';
</script>

<script src="<?php echo base_url(); ?>assets/backend/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/plugins/jQuery/jquery-ui.min.js"></script>
<script>
  
  $.widget.bridge('uibutton', $.ui.button);
</script>

<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url(); ?>assets/backend/modern/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/modern/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url(); ?>assets/backend/modern/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url(); ?>assets/backend/modern/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?php echo base_url(); ?>assets/backend/modern/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?php echo base_url(); ?>assets/backend/modern/js/demo/chart-area-demo.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/modern/js/demo/chart-pie-demo.js"></script>

<script src="<?php echo base_url(); ?>assets/backend/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/plugins/datatables-responsive/js/responsive.bootstrap4.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/plugins/sparkline/jquery.sparkline.min.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/plugins/knob/jquery.knob.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/plugins/daterangepicker/daterangepicker.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/plugins/datepicker/locales/bootstrap-datepicker.<?php echo $languageabbr; ?>.js" charset="UTF-8"></script>
<script src="<?php echo base_url(); ?>assets/backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/plugins/slimScroll/jquery.slimscroll.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/plugins/fastclick/fastclick.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/plugins/iCheck/icheck.min.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/plugins/select2/select2.full.min.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/plugins/loadingoverlay.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/plugins/iframeResizer/jquery-iframe-auto-height.min.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/plugins/iframeResizer/jquery.browser.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/dist/js/jquery.fullscreen.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/dist/js/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/dist/js/adminlte.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/dist/js/demo.js"></script>
<script type="text/javascript">
$(function($) {
 $.ajaxSetup({
     data: {
         '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>'
     }
 });
});
</script>
<script src="<?php echo base_url(); ?>assets/backend/dist/js/MercuryGMS.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/dist/js/bootbox.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/dist/js/notify.js"></script>


<?php
  if(isset($gc))
  {
    $i=1;
  foreach($gc->js_files as $file):
    if($i!=1)
    {
  ?>
  
      <script src="<?php echo $file; ?>"></script>
      
  <?php 
    } $i++;
  endforeach; 
  }
?>
<script language="javascript">
    <?php
    if(!empty($notify_msg) && isset($notify_type))
    {
    ?>
        const Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 4000
        });
        Toast.fire({
          type: '<?php echo $notify_type; ?>',
          title: '<?php echo $notify_msg; ?>'
	      });
    <?php
    }
    ?>
</script>
</body>
</html>