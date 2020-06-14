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
.btn-group .plus {
    background-color:rgb( 239, 69, 84 );
    
}
.btn-group .plus:hover {
    background-color:rgb( 95, 96, 96 );
    
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
                   <h4 class="page-title">Bike Models</h4><br>
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

              <a class="btn plus m-r-5" title="Add Gallery" data-toggle="modal" data-target="#formModal"><i class="fa fa-plus" style="color:white;"></i></a>
                   <button type="button" class="btn plus m-r-5 setSupplierMultiBtn deleteMultiplePurchase" title="Delete" style="display:none"><i class="fa fa-trash" style="color:white;"></i></button>




              </div>
              <table id="lowinventory"  style="width:100%" class="table table-striped table-bordered table_shop_custom display">
                <thead>
                <tr>   
                    <th style="width: 15%">Model Name</th>
                    <th>Brand Name</th>
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
    <?php echo form_open(base_url('admin/bikedetails/deletemodel'), array('method'=>'post'));?>
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

    
                      
                        <!-- Modal -->
                        <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">

                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Company Name</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>

                                <div class="modal-body">
                                        <div class="form-group">
                                          <label for="exampleFormControlTextarea1">Add Model name</label>
                                          <textarea class="form-control" id="mname" rows="1" name="mname"></textarea>
                                        </div>
                                      </form>
                                </div>
                                <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="field-1" class="control-label">Select Product</label>
                                                                <select class="form-control" id="companies">
                                                                    <?php
                        foreach($company as $companies){

                            echo "<option value='".$companies['id']."'>".$companies['brand_name']."</option>";
                        }
                        ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                <div class="modal-footer">
                                <div class="form-group">    

                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" name="formSubmit" id="formSubmit">Save changes</button>
                                </div>
                                </div>

                            </div>

                            </div>
                        </div>




<script>
  $(document).ready(function() {
    $('#lowinventory').DataTable( {
        "ajax": "<?php echo base_url(); ?>admin/bikedetails/modeladdinventory_api"
    } );


    $(document).on('click','.delete_sliders',function(){

     $('.deletesliderId').val($(this).attr('data-id'));
        $('#deletePurchaseModal').modal('show');

    });

});

  </script>
  
  <script type="text/javascript">
$('#formSubmit').click(function() {
    var mname = $('#mname').val()
    var companies = $('#companies').val()
    $.ajax({
        url: "<?php echo base_url(); ?>admin/bikedetails/addmodel",
        type: 'POST',
        data:{'mname':mname,'companies':companies},
        success: function(msg) {
            location.reload(true)
        }
    });
    return false;
});
</script>

