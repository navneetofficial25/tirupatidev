<style type="text/css">
.zoom img{

    transition-duration: 2s;
    margin: 0 auto;
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
    -ms-transform: scale(1.2); /* IE 9 */
    -webkit-transform: scale(1.2); /* Safari 3-8 */
    transform: scale(1.2);
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
.btn-group .plus {
    background-color:rgb( 239, 69, 84 );
    
}
.btn-group .plus:hover {
    background-color:rgb( 95, 96, 96 );
    
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
                   <h4 class="page-title" style="color:grey;">Our Clients and Brands</h4> <hr>
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
             
              <div class="btn-group pull-right m-t-10 m-b-20">

                   <a href="<?php echo base_url(); ?>admin/brands/galleryadd" class="btn plus  m-r-5" title="Add Gallery"><i class="fa fa-plus" style="color:white;"></i></a>
                   <button type="button" class="btn plus m-r-5 setSupplierMultiBtn deleteMultiplePurchase" title="Delete" style="display:none"><i class="fa fa-trash" style="color:white;"></i></button>




              </div>
              <table id="lowinventory"  style="width:100%" class="table table-striped table-bordered table_shop_custom display">
                <thead>
                <tr>   
                    <th style="width: 15%">Image</th>
                    <th>Image Title</th>
                    <th>Image description</th>
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
    <?php echo form_open(base_url('admin/brands/deletegallery'), array('method'=>'post'));?>
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

<!--change Status-->
<div id="Change-status" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

        <div class="modal-dialog">
        <form method="post">
        <div class="modal-content">

        <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">�</button>

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

        <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">�</button>
                                                    <h4 class="modal-title">Add purchase order</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="field-1" class="control-label">Select Product</label>
                                                                <select class="form-control">
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="field-2" class="control-label">Select Supplier</label>
                                                                <select class="form-control">
                                                                    <option>Supplier1</option>
                                                                    <option>Supplier2</option>
                                                                    <option>Supplier3</option>
                                                                    <option>Supplier4</option>
                                                                    <option>Supplier5</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="field-3" class="control-label">Quantity</label>
                                                                <input type="text" class="form-control" id="field-3" placeholder="Quantity">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="field-4" class="control-label">Delivery date</label>
                                                                <input type="text" class="form-control date_picker" id="field-4" placeholder="Delivery date">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="field-5" class="control-label">Credit period</label>
                                                                <input type="text" class="form-control" id="field-5" placeholder="Credit period">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <!--<div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group no-margin">
                                                                <label for="field-7" class="control-label">Personal Info</label>
                                                                <textarea class="form-control autogrow" id="field-7" placeholder="Write something about yourself" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 104px;"></textarea>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-info waves-effect waves-light">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.modal -->


<script>
  $(document).ready(function() {
    $('#lowinventory').DataTable( {
        "ajax": "<?php echo base_url(); ?>admin/brands/addinventory_api"
    } );


    $(document).on('click','.delete_sliders',function(){

     $('.deletesliderId').val($(this).attr('data-id'));
        $('#deletePurchaseModal').modal('show');

    });

});

  </script>
