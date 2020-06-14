<style>
.thunbnail_image{
height: 86px;
width: 100px;
margin-top: -11px;}
.btn-circle {
        width: 30px;
        height: 30px;
        text-align: center;
        padding: 6px 0;
        font-size: 12px;
        line-height: 1.428571429;
        border-radius: 15px;
      }
.btn-circle.btn-lg {
    width: 186px;
    height: 44px;
    padding: 10px 13px;
    font-size: 16px;
    line-height: 1.33;
    border-radius: 8px;
}
.note-editable{
  min-height: 180px!important;
  height: auto!important;
}
</style>
<script src="<?php echo base_url(); ?>admin/assets/js/jquery.min.js"></script>

<script src="<?php echo base_url(); ?>admin/assets/js/ckeditor/ckeditor.js"></script>
<script>
$(document).ready(function(){
    CKEDITOR.replace('textareaContent');
});
    </script>
<div class="content-page">
    <div class="content">
        <div class="container">
        <?php echo form_open(base_url('admin/abouts/upload'), array( 'id' => 'aboutdata', 'method'=>'POST'));?>           
<textarea name="about" id="textareaContent"><?php echo isset($about_desc)? $about_desc:'' ;?></textarea><br>
<div class="form-group">
          <input type="submit" name="formSubmit"  value="submit" class="btn btn-info">
        </div>
<?php echo form_close(); ?>
    </div>
      </div>
        </div>
    
<!--Delete-->



