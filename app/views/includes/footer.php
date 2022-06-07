<script src="<?php echo URLROOT;?>/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>

<script src="<?php echo URLROOT; ?>/js/fontawesome.js" ></script>

<script src="<?php echo URLROOT; ?>/js/simple-datatables.js" ></script>

<!-- data tables script -->
<script src="<?php echo URLROOT;?>/js/datatables-simple-demo.js"></script>

<!-- sweet alert -->
<!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js" ></script> -->
<script src="<?php echo URLROOT; ?>/js/sweetalert.js" ></script>

<script >
    <?php if($this->session->getFlash('status')){ ?>  
        swal({
        title: "<?php echo $this->session->getFlash('status') ?>",
        text: "<?php echo $this->session->getFlash('status_text') ?>",
        icon: "<?php echo $this->session->getFlash('status_icon') ?>",
        button: "Ok",  
    });       
    <?php } ?>
</script>

<!-- main script -->
<script src="<?php echo URLROOT;?>/js/script.js"></script>

</body>
</html>