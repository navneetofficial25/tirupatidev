
<div class="container">
<form>
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
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Money Earned">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Referance Name</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Referance Name">
  </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>


</div>