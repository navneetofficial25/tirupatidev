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
                 <h3>Social Media links</h3>

                 <p style="color: #258bb6;"><i class="fa fa-info-circle"></i> Do not use http or https in the URL's. Use only www in the URL's . Eg: www.facebook.com/example</p>
                        <hr>
                   <?php echo form_open(base_url('sociallinks/storesocial_frm'), array( 'id' => 'storesocial_frm', 'method'=>'POST','enctype'=> 'multipart/form-data' ));?>
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



                                       <div id="con-close-modal1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title">Payment pending</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="field-1" class="control-label">Choose Status</label>
                                                                <select class="form-control">
                                                                    <option>Receive</option>
                                                                    <option>Return</option>

                                                                </select>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <!--<div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="field-3" class="control-label">Note</label>
                                                                <input type="text" class="form-control" id="field-3" placeholder="Quantity">
                                                            </div>
                                                        </div>
                                                    </div> -->

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group no-margin">
                                                                <label for="field-7" class="control-label">Note</label>
                                                                <textarea class="form-control autogrow" id="field-7" placeholder="Write something about yourself" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 104px;"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-info waves-effect waves-light">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.modal -->





      </div>
    </div>
  </div>
<!--Delete-->

  <div id="delete_customer" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

          <div class="modal-dialog">
          <form method="post">
          <div class="modal-content">

          <div class="modal-header">

          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

          <h4 class="modal-title">Delete Customer</h4>

          </div>

          <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
            <h4><b>Do you really want to Delete this customer ?</b></h4>
            </div>
          </div>
          </div>

          <div class="modal-footer">


          <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Save</button>

          <input type="submit" class="btn btn-info" name="" value="Delete">



          </div>

          </div>
          </form>
          </div>

          </div>

<!--change Status-->
<div id="Change-status" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

        <div class="modal-dialog">
        <form method="post">
        <div class="modal-content">

        <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

        <h4 class="modal-title">Change Status</h4>

        </div>

        <div class="modal-body">
            <div class="row">
              <div class="col-md-12">

                <div class="form-group no-margin">

                <label for="field-7" class="control-label">Change Status</label>

                <select class="form-control " name=""><option value="">Choose Status</option><option value="1">Active</option><option value="0">Deactive</option><option value="2">Block</option></select>

                </div>

              </div>
            </div>

        </div>

        <div class="modal-footer">

          <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>

          <input type="submit" class="btn btn-info " name="" value="Update Status">

        </div>

        </div>
        </form>
        </div>

        </div>

        <div id="notify" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                      <h4 class="modal-title">Notify</h4>
                  </div>
                  <div class="modal-body">

                      <div class="row">
                          <div class="col-md-12">
                              <div class="form-group">
                                  <input type="text" class="form-control" id="field-3" placeholder="Notify">
                              </div>
                          </div>
                      </div>

                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-info waves-effect waves-light">Save changes</button>
                  </div>
              </div>
          </div>
      </div><!-- /.modal -->

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
