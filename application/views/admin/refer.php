
<div class="container">
  <?php 
    if($this->session->flashdata('admin_error'))
    {
      echo '<p class="text-success">'.$this->session->flashdata('admin_error').'</p>';
    }
  ?>
<form action="refer/insert_data" method="post">
  <div class="form-group">
    <label for="exampleFormControlSelect1">Refer Id</label>
    <input list="refer" name="refer_id" placeholder="Refer ID" class="form-control">
    <datalist id="refer">
     <?php  foreach($fetch_refer as $value){ ?>
    <option value="<?php echo $value['referid']; ?>">
    <?php } ?>
    </datalist>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Money Earned</label>
    <input type="text" name="money" class="form-control" id="exampleFormControlInput1" placeholder="Money Earned">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Referance Name</label>
    <input type="text" name="rname" class="form-control" id="exampleFormControlInput1" placeholder="Referance Name">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Insurance Type</label>
    <input type="text" name="itype" class="form-control" id="exampleFormControlInput1" placeholder="Insurance Type">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Policy Type</label>
    <input type="text" name="ptype" class="form-control" id="exampleFormControlInput1" placeholder="Policy Type">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Total Premium</label>
    <input type="text" name="tpremium" class="form-control" id="exampleFormControlInput1" placeholder="Total Premium">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Premium Paid</label>
    <input type="text" name="ppaid" class="form-control" id="exampleFormControlInput1" placeholder="Premium Paid">
  </div>
    <button type="submit"name="formSubmit" class="btn btn-primary">Submit</button>
</form>
</div>
<div class="container p-5">
<table  id="dtBasicExample" class="table table-striped table-bordered table-sm p-5 my-3" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">ReferID

      </th>
      <th class="th-sm">Name

      </th>
      <th class="th-sm">Account Holder

      </th>
      <th class="th-sm">Account Number

      </th>
      <th class="th-sm">Ifsc Code

      </th>
    </tr>
  </thead>
  <tbody>
    <?php  foreach($fetch_refer as $value){ ?>
    <tr>
      <td><?php echo $value['referid']; ?></td>
      <td><?php echo $value['name']; ?></td>
      <td><?php echo $value['acc_name']; ?></td>
      <td><?php echo $value['bank_acc']; ?></td>
      <td><?php echo $value['ifsc']; ?></td>
    </tr>
    <?php } ?>
  </tfoot>
</table>

</div>
<script>$(document).ready(function () {
  $('#dtBasicExample').DataTable();
  $('.dataTables_length').addClass('bs-select');
});</script>
