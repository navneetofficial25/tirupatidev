<?php $this->load->view('admin/template/header.php') ?>
<?php $this->load->view('admin/template/sidebar.php') ?>
<?php $this->load->view('admin/template/topbar.php') ?>
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
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">
           <!--START Page-Title -->

            <div class="row">
                <div class="col-sm-12">
                <div class="col-md-8">
                   <h4 class="page-title">Our Gallery </h4>
                   <ol class="breadcrumb">
                  <li><a href="<?php echo base_url(); ?>">Dashboard</a></li>
                  <li><a href="<?php echo base_url(); ?>ourgallery">Our Gallery </a></li>

                  <li class="active">Add Gallery </li>
                  </ol>
                  </div>


                </div>
            </div>
           <!--END Page-Title -->
           <div class="row">
        <div class="col-sm-12">
        <?php
        if($this->session->flashdata('success'))
        {
            echo '<div class="alert alert-success">'.$this->session->flashdata('success').'</div>';
        }
        else if($this->session->flashdata('error'))
        {
            echo '<div class="alert alert-danger">'.$this->session->flashdata('error').'</div>';
        }
        ?>
        </div>
        </div>

  <?php echo form_open(base_url( 'ourgallery/galleryadd' ), array( 'id' => 'galleryadd', 'method'=>'POST','enctype'=> 'multipart/form-data' ));?>

        <div class="row">
        <div class="col-sm-12 m-t-20">
        <div class="card-box">

          <div class="form-group">
            <label>Gallery Title <sup>*</sup></label>
            <input type="text" class="form-control required_validation_for_product" value="<?php echo set_value('title'); ?>" name="ctitle" placeholder="Enter Gallery Text" />
          </div>


          <div class="form-group">
            <label>Image Description<sup>*</sup></label>
            <input type="text" class="form-control required_validation_for_product" value="<?php echo set_value('short_desc'); ?>" name="short_desc" placeholder="Enter image description" />
          </div>


           <div class="form-group">
            <label>Gallery Image <sup>*</sup></label>
           <input type="file"  id="fileupload" class="form-control images_class first_image"  name="images" style="border:0px solid !important;padding: 7px 0px 0px 0px;" />
           </div>



           <div class="errorMessage"><?php echo form_error('images'); ?></div>
           <div class="form-group">
            <label>preview</label>
           <span  class="dvPreview" id="dvPreview" >

             <img  class="thunbnail_image images_preview" src="<?=base_url();?>assets/images/users/avatar-1.jpg"/>
             </span>
          </div>

            <div class="form-group">
          <input type="submit" name="formSubmit"  value="submit" class="btn btn-info">
        </div>
                    </div>




       <!--END ADD Shipping SECTION -->

 </div>


        </div>
<?php echo form_close(); ?>
      </div>
    </div>
  </div>
<!--Delete-->




<script>
  tinymce.init({
    selector: '#mytextarea'
  });
  </script>

<script language="javascript" type="text/javascript">

$(function () {
    $("#fileupload").change(function () {
        $("#dvPreview").html("");
        var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
        if (regex.test($(this).val().toLowerCase())) {
            if ($.browser.msie && parseFloat(jQuery.browser.version) <= 9.0) {
                $("#dvPreview").show();
                $("#dvPreview")[0].filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = $(this).val();
            }
            else {
                if (typeof (FileReader) != "undefined") {
                    $("#dvPreview").show();
                    $("#dvPreview").append("<img class='thunbnail_image images_preview'/>");
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $("#dvPreview img").attr("src", e.target.result);
                    }
                    reader.readAsDataURL($(this)[0].files[0]);
                } else {
                    alert("This browser does not support FileReader.");
                }
            }
        } else {
            alert("Please upload a valid image file.");
        }
    });
});
</script>

 <script type="text/javascript">
 $(document).ready(function(){
 $(document).on('submit','#galleryadd',function(c){


                               var rep_image_val='';
                 $(this).find(".required_validation_for_product").each(function()
               {

                        var val22 = jQuery(this).val();

                        if (!val22)
                        {
                                rep_image_val = 'error form';
                                $(this).css("border-color","red");


                        }
                                  $(this).on('keypress change',function(){
          $(this).css("border-color","#ccc");
        });
                });




                $(this).find(".first_image").each(function()
                {
                console.log("gf");
                var val_image = jQuery(this).val();

              if (!val_image)
                {
                        rep_image_val = 'error form';
                        $(this).css("border-color","red");
                        $(this).css("border-width","1px");
                      //  alert("Please select first image");
                       // $(this).siblings('.message_text').text('Please generate  barcode');


                }

                });


                            if(rep_image_val)
                {
                        c.preventDefault();
                        return false;
                }



          });

          $(".first_image").on("change",function()
          {
                $(this).css("border-color","ccc");
                $(this).css("border-width","0px");
          });


          });



          $('.images_class').on('change',function()
          {
            console.log($(this)[0].files[0]);
            var file1    = $(this)[0];
                var file    = file1.files[0];
                  var reader  = new FileReader();

                  reader.onloadend = function () {


                    $(file1).parents('.images_preview_row').find('.images_preview').attr('src',reader.result);

                  }

                  if (file) {
                    reader.readAsDataURL(file);
                  } else {
                    $(this).parents('.images_preview_row').find('.images_preview').attr('src','');

                  }



          });

function previewFile(div) {
    var x = document.getElementById(div);
  var preview = x.querySelector('img');
  var file    = document.querySelector('input[type=file]').files[0];
  var reader  = new FileReader();

  reader.onloadend = function () {
    preview.src = reader.result;
  }

  if (file) {
    reader.readAsDataURL(file);
  } else {
    preview.src = "";
  }
 }
          </script>


