  <!-- START FOOTER -->
  <footer class="page-footer">
    <div class="footer-copyright">
      <div class="container">
        <span><?php echo $this->config->item('app_footer'); ?></span>
        <span class="right"><?php echo $this->config->item('app_footer_right'); ?></span>
        </div>
    </div>
  </footer>
  <!-- END FOOTER -->

  <!-- ================================================ Scripts ================================================ -->

  <!-- jQuery Library -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/materialize/js/jquery-1.11.2.min.js"></script>
  <!-- Materialize js -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/materialize/js/materialize.js"></script>
  <!-- prism-->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/materialize/js/prism.js"></script>
  <!-- Scrollbar-->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/materialize/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
  <!-- Chartist -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/materialize/js/plugins/chartist-js/chartist.min.js"></script>

  <!-- Data tables -->
  <!-- <script src="https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script> -->
  <!-- <script src="<?php echo base_url();?>assets/plugins/datatables/datatables.min.js"></script> -->

  <!-- plugins.js - Some Specific JS codes for Plugin Settings -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/materialize/js/plugins.js"></script>

  <script type="text/javascript">
    window.onload = function(){
      // toast success
      <?php
      if ($this->session->flashdata('success')){
      ?>
      setTimeout(function(){Materialize.toast("<?php echo $this->session->flashdata('success'); ?>", 3000, 'rounded');}, 1500);
      <?php
      }
      ?>
      // toast error
      <?php
      if ($this->session->flashdata('error')){
      ?>
      setTimeout(function(){Materialize.toast("<?php echo $this->session->flashdata('error'); ?>", 3000, 'rounded');}, 1500);
      <?php
      }
      ?>
    }
  </script>
  </body>
</html>
