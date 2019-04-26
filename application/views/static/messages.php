<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<script type="text/javascript">

    toastr.options.escapeHtml = true;
    toastr.options.closeButton = true;
    toastr.options.progressBar = true;
    <?php if($this->session->flashdata('success')){ ?>

    toastr.success("<?php echo $this->session->flashdata('success'); ?>");

    <?php }else if($this->session->flashdata('error')){  ?>

    <?php
    $return = '';
    if(is_array($this->session->flashdata('error'))) {
        $size = sizeof($this->session->flashdata('error'));
        for($i = 1; $i < $size;$i++) {
            echo 'toastr.error("'.trim($this->session->flashdata("error")[$i]).'");'."\n";
        }
    }
    else
        echo 'toastr.error("'.trim($this->session->flashdata("error")).'");'."\n";

    ?>

            <?php }else if($this->session->flashdata('warning')){  ?>

    toastr.warning("<?php echo $this->session->flashdata('warning'); ?>");

    <?php }else if($this->session->flashdata('info')){  ?>

    toastr.info("<?php echo $this->session->flashdata('info'); ?>");

    <?php } ?>
</script>
<?php
//print_r(htmlspecialchars($this->session->flashdata('warning')));
//die();
?>