 <!-- Control Sidebar -->

  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer ml-1">
    <!-- To the right -->
    
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-<?php echo date('Y');?> <a href="#"></a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?php echo base_url()?>assests/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url()?>assests/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url()?>assests/admin/plugins/select2/js/select2.full.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>assests/admin/dist/js/adminlte.min.js"></script>
<script src="<?php echo base_url()?>assests/admin/plugins/summernote/summernote-bs4.js"></script>
<script>
  // $(function () {
  //    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
  // })
</script>
<script type="text/javascript">

</script>
</body>
</html>