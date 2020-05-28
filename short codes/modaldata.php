
</script>

<script type="text/javascript">
$('#formSubmit').click(function() {
var form_data = {
    bname: $('#bname').val()
};
$.ajax({
    url: "<?php echo base_url(); ?>admin/Cardetails/addcompany",
    type: 'POST',
    data: form_data,
    success: function(msg) {
        if (msg == 'YES')
            $('#alert-msg').html('<div class="alert alert-success text-center">Your mail has been sent successfully!</div>');
        else if (msg == 'NO')
            $('#alert-msg').html('<div class="alert alert-danger text-center">Error in sending your message! Please try again later.</div>');
        else
            $('#alert-msg').html('<div class="alert alert-danger">' + msg + '</div>');
    }
});
return false;
});
</script>