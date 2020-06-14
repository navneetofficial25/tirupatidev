<style>
.text-primary {
    float: left;
}
.btn-group, .btn-group-vertical {
    float: right;
}

.btn {
    color: #4e73df;
}
</style><!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tables 2</h1>
<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    <div class="btn-group pull-right m-t-10 m-b-20">

                   <a href="<?php echo base_url(); ?>admin/tablest/tableadd" class="btn btn-default m-r-5" title="Add Course"><i class="fa fa-plus"></i></a>
              </div>
  </div>
  
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable lowinventory" width="100%" cellspacing="0">
                        <thead>
                <tr> <th>Testimonials Name</th>
                    <th style="width: 15%">Testimonials Image</th>
                    <th>Testimonials Name</th>
                    <th>Testimonials Designation </th>
                    <th>Testimonials Comments </th>
                    <th>Action</th>


                  </tr>

                </thead>
                <tbody>
                <tr>
                      <td>Michael Bruce</td>
                      <td>Javascript Developer</td>
                      <td>Singapore</td>
                      <td>29</td>
                      <td>2011/06/27</td>
                      <td><a class="edit" href="<?php echo base_url(); ?>admin/tablest/tableadd" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
                          <a class="delete_sliders" data-id="28" style="color: red;cursor: pointer;" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                    </tr>
                    <tr>
                      <td>Donna Snider</td>
                      <td>Customer Support</td>
                      <td>New York</td>
                      <td>27</td>
                      <td>2011/01/25</td>
                      <td><a class="edit" href="http://localhost/myproject/admin/testimonials/testimonialsedit/28" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
           <a class="delete_sliders" data-id="28" style="color: red;cursor: pointer;" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                    </tr>
                </tbody>
      </table>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


   <!--Delete-->

   <div id="deletePurchaseModal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <?php echo form_open(base_url('testimonials/deletecourse'), array('method'=>'post'));?>
    <div class="modal-content">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">�</button>
    <h4 class="modal-title">Delete testimonials</h4>
    </div>
    <div class="modal-body">
    <div class="row">
    <div class="col-md-12">
    <input type="hidden" class="deletesliderId" name="deletesliderId"/>
    <h4><b>Do you really want to Delete this Testimonials  ?</b></h4>
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


   

<script>
  $(document).ready(function() {
    $('#lowinventory').DataTable( {
        "ajax": "<?php echo base_url(); ?>testimonials/addinventory_api"
    } );


    $(document).on('click','.delete_sliders',function(){

     $('.deletesliderId').val($(this).attr('data-id'));
        $('#deletePurchaseModal').modal('show');

    });

});

  </script>


