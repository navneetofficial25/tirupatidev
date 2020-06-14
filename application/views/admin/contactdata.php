<style type="text/css">
.zoom img{

    transition-duration: 5s;
    margin: 0 auto;
}
a.edit {
    display: none;
}
img {
    vertical-align: middle;
    height: 40px;
    width: auto;
}

.zoom {
    transition: all 1s;
    -ms-transition: all 1s;
    -webkit-transition: all 1s;
    margin-top: 0px;
    padding-top: 0px;

}
.zoom:hover {
    -ms-transform: scale(2); /* IE 9 */
    -webkit-transform: scale(2); /* Safari 3-8 */
    transform: scale(2);
    margin-left: 40px;
}

.text-primary {
    float: left;
}
.btn-group, .btn-group-vertical {
    float: right;
}

.btn {
    color: #4e73df;
}
#lowinventory_filter label{
    color:grey;
    font-size:15px;
}
#lowinventory_filter input[type=search]{
    border: 1px solid grey;
    outline:none;
    padding:5px;
    font-size:15px;
    margin-right:5px;
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
                   <h4 class="page-title">Users Contact Data</h4><hr>
                  </div>
                  <div class="col-md-4">
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





        <div class="row">
          <div class="col-md-12">

            <div class="card-box table-responsive">
             
              <table id="lowinventory"  style="width:100%" class="table table-striped table-bordered table_shop_custom display">
                <thead>
                <tr>    
                    <th style="width: 15%">Name</th>
                    <th>Email</th>
                    <th>Telephone</th>
                    <th>Insurance Pack</th>
                    <th>Interested Insurance</th>
                    <th>Short Note</th>
                    <th>Action</th>


                  </tr>

                </thead>
                <tbody>

                </tbody>
              </table>
            </div>
          </div>
        </div>


      </div>
    </div>
  </div>
<!--Delete-->

   <!--Delete-->

    <div id="deletePurchaseModal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <?php echo form_open(base_url('admin/contactdata/deletecontactdetail'), array('method'=>'post'));?>
    <div class="modal-content">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">�</button>
    <h4 class="modal-title">Delete Course</h4>
    </div>
    <div class="modal-body">
    <div class="row">
    <div class="col-md-12">
    <input type="hidden" class="deletesliderId" name="deletesliderId"/>
    <h4><b>Do you really want to Delete this Course ?</b></h4>
    </div>
    </div>
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
    <input type="submit" class="btn btn-info" name="deleteslider" value="Delete">
    </div>
    </div>
    <?php echo form_close(); ?>
    </div>
    </div>



<script>
  $(document).ready(function() {
    $('#lowinventory').DataTable( {
        "ajax": "<?php echo base_url(); ?>admin/contactdata/contactinventory_api"
    } );


    $(document).on('click','.delete_sliders',function(){

     $('.deletesliderId').val($(this).attr('data-id'));
        $('#deletePurchaseModal').modal('show');

    });

});

  </script>