<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <!--START Page-Title -->
            <div class="row">

                <div class="col-md-8">
                   <h4 class="page-title">Social Media</h4>
                   <ol class="breadcrumb">
                  <li><a href="#">Dashboard</a></li>

                  <li class="active">Social Media</li>
                  </ol>
                  </div>

            </div>
           <!--END Page-Title -->
               <div class="row">
        <div class="col-sm-12">
        </div>
        </div>
        <?php

         $socials_datas=$socials_data[0];
        ?>
            <div class="row m-t-20">
              <div class="col-lg-12">
                <div class="card-box">

                 <p style="color: #258bb6;"><i class="fa fa-info-circle"></i> Do not use http or https in the URL's. Use only www in the URL's . Eg: www.facebook.com/example</p>
                        <hr>
                   <?php echo form_open(base_url('admin/sociallinks/storesocial_frm'), array( 'id' => 'storesocial_frm', 'method'=>'POST','enctype'=> 'multipart/form-data' ));?>
                    <div class="form-group">
                      <label for="userName">Twitter handle</label>
                      <input type="text" value="<?=$socials_datas->twitter_url;?>" name="twitter_url" parsley-trigger="change" maxlength="100" placeholder="" class="form-control" id="userName">
                      <p>Twitter handle or username</p>
                    </div>
                    <div class="form-group">
                      <label for="userName">Facebook page url</label>
                      <input type="text" value="<?=$socials_datas->facebook_url;?>"  name="facebook_url" parsley-trigger="change" maxlength="100" placeholder="" class="form-control" id="userName">
                      <p>URL of your facebook page</p>
                    </div>

                   <!-- <div class="form-group">
                      <label for="userName">Google plus url</label>
                      <input type="text" name="google_url" value="<?=$socials_datas->google_url;?>" parsley-trigger="change" maxlength="100" placeholder="" class="form-control" id="userName">
                      <p>Your google plus profile url</p>
                    </div> -->
                    <div class="form-group">
                      <label for="userName">Youtube url</label>
                      <input type="text" name="youtube_url" value="<?=$socials_datas->youtube_url;?>" parsley-trigger="change" maxlength="100" placeholder="" class="form-control" id="userName">
                      <p>Your youtube channel url</p>

                    </div> 

                    <div class="form-group">
                      <label for="userName">Instagram url</label>
                      <input type="text" name="instagram_url" value="<?=$socials_datas->instagram_url;?>" parsley-trigger="change" maxlength="100" placeholder="" class="form-control" id="userName">
                      <p>Your instagram page url</p>
                    </div>
                    <div class="form-group">
                      <label for="userName">Pinterest url</label>
                      <input type="text" name="pinterest_url" value="<?=$socials_datas->pinterest_url;?>"  parsley-trigger="change" maxlength="100" placeholder="" class="form-control" id="userName">
                      <p>Your Pinterest page url</p>
                    </div>
                    <div class="form-group">
                      <label for="userName">Linked in url</label>
                      <input type="text" name="linkedin_url" value="<?=$socials_datas->linkedin_url;?>"  parsley-trigger="change" maxlength="100" placeholder="" class="form-control" id="userName">
                      <p>Your LinkedIn account url</p>
                    </div>



                    <div class="form-group m-b-0">
                      <button class="btn btn-primary waves-effect waves-light" type="submit">
                        Update
                      </button>

                    </div>

                   <?php echo form_close(); ?>
                </div>
              </div>


            </div>



      </div>
    </div>
  </div>

<?php $this->load->view('admin/Template/footer.php') ?>

<script>
$(document).ready(function(){

    $(".select2").select2();
  $(".click_show").click(function(){
      $(".hide_div").show();
      $(".click_show").hide();
  });
  $(".click_hide").click(function(){
      $(".hide_div").hide();
      $(".click_show").show();
  });
});
</script>
