<h2 class="main_heading">Now Buying Health Insurance is Much Simpleir</h2>
<div class="container car">
    <div class="">
        <div class="box_sh ">
            <div class="row">
                <div class="col-lg-4 col-xs-12 " style="padding:0px;">
                <img src="<?= base_url();?>assest/img/health-insurance-top-up.jpg" >
                    <div class="to">
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <div class=" small">
                                <img src="<?= base_url();?>assest/img/save-money.png">
                                    <h6>Save Upto 80%</h6>
                                    <p>Lowest Premiums</p>
                                </div>
                            </div>
                            <div class="col-md-12 col-12">
                                <div class=" small">
                                <img src="<?= base_url();?>assest/img/life-insurance.png" >
                                    <h6>Save Upto 80%</h6>
                                    <p>Lowest Premiums</p>
                                </div>
                            </div>
                            <div class="col-md-12 col-12">
                                <div class=" small">
                                <img src="<?= base_url();?>assest/img/family (1).svg">
                                    <h6>Save Upto 80%</h6>
                                    <p>Lowest Premiums</p>
                                </div>
                            </div>
                        </div>    
                    </div>    
                </div>
                <div class="col-lg-8 col-xs-12 " style="padding:0px; background-color:white;">
                    <ul class="nav " role="tablist">
                        <li class="nav-item">
                            <a class=" active" data-toggle="tab" href="#renew">Renew Details</a>
                        </li>
                        <li class="nav-item">
                            <a class="" data-toggle="tab" href="#new">New Bike</a>
                        </li>
                    </ul>
                    <hr style="border-width: 2px; margin-top: 0px;">
                    <div class="tab-content" >
                        <div id="renew" class="container tab-pane active">
                            <?php echo form_open(base_url( 'frontend/bikeinsurance/renewbikeDetails'), array('method'=>'POST'));?>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group date">
                                        <label class="adults" for="usr">Registration Number</label>
                                        <input type="text"  id="usr" name="regno" placeholder="Enter Registration Number">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group date">
                                        <label class="adults" for="comp ">Manufacturer</label>
                                        <select id="comp" class="lis" name="comp">
                                            <option value="#">Enter Company</option> 

                                            <?php
foreach($company as $companies){

echo "<option value='".$companies['id']."'>".$companies['brand_name']."</option>";
}
?>
                                        </select>
                                    </div>
                                    <div class="form-group date">
                                        <label class="adults" for="type">Fuel type</label>
                                        <select class="lis"   id="type" name="type">
                                            <option >Enter Fuel Type</option>
                                            <option value="#">A</option>
                                            <option value="#">B</option>
                                        </select>
                                    </div>
                                    <div class="form-group date">
            <label class="adults" for="regyr">Registration year</label>
            <select class="lis"  id="regyr" name="regyr">
                                                    <option selected disabled value="#">Select Year</option>
                                                    <?php for($i=1990; $i<=date("Y"); $i++ ) { ?>
                                                        <option  value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                    <?php } ?>
                                                    
                                                </select>
            
        </div>
                                    <div class="form-group date">
                                        <label class="adults" for="ptype">Select Previous Policy Type</label>
                                        <select class="lis"  id="ptype" name="ptype">
                                            <option value="#">Enter Policy Type</option>
                                            <option value="#">a</option>
                                            <option value="#">b</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group date">
                                        <label class="adults" for="modal">Modal</label>
                                        <select class="lis"   id="modal" name="modal">
                                            <option value="#">Enter Model</option>
                                            
                                        </select>
                                    </div>
                                    <div class="form-group date">
                                        <label class="adults" for="vari">Varient</label>
                                        <select class="lis"   id="vari" name="vari">
                                            <option value="#">Enter Varient</option>
                                        </select>
                                    </div>
                                    <div class="form-group date">
                                        <label class="adults" for="pexpire">Select Policy Expire</label>
                                        <input type="date" class="lis"  placeholder="Policy Expire" id="pexpire" name="pexpire">
                                    </div>
                                    <div class="form-group date">
                                        <label class="adults" for="pinsur">Select Previous Insurer</label>
                                        <select class="lis"   id="pinsur" name="pinsur">
                                            <option value="#">Select Insurer</option>
                                            <option value="#">a</option>
                                            <option value="#">b</option>
                                        </select>
                                    </div>
                                </div>
                                    
                            </div>

                            <div class="text-center">
                                <button name="formSubmit">Get Quote</button>
                            </div>
                            <?php echo form_close(); ?>
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
                        <div id="new" class="container tab-pane fade">
                            <?php echo form_open(base_url( 'frontend/bikeinsurance/renewbikeDetails'), array('method'=>'POST'));?>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group date">
                                        <label class="adults" for="us">Registration Number</label>
                                        <input type="text"  id="us" name="regno" placeholder="Enter Registration Number">
                                    </div>
                                </div> 
                                <div class="col-md-6">
                                    <div class="form-group date">
                                        <label class="adults" for="comps">Manufacturer</label>
                                                
                                                <select class="lis"  id="comps" name="comp">
                                                <option value="#">Enter Company</option>

                                                <?php
                        foreach($company as $companies){

                            echo "<option value='".$companies['id']."'>".$companies['brand_name']."</option>";
                        }
                        ?>
                                                </select>
  
  
                                                
                                    </div>
                                    <div class="form-group date">
                                        <label class="adults" for="type">Fuel type</label>
                                        <select class="lis"   id="types" name="type">
                                            <option >Enter Fuel Type</option>
                                            <option value="#">A</option>
                                            <option value="#">B</option>
                                        </select>
                                    </div>
                                    <div class="form-group date">
            <label class="adults" for="regyr">Registration year</label>
            <select class="lis"  id="regyrs" name="regyr">
                                                    <option selected disabled value="#">Select Year</option>
                                                    <?php for($i=1990; $i<=date("Y"); $i++ ) { ?>
                                                        <option  value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                    <?php } ?>
                                                    
                                                </select>
            
        </div>
                                    <div class="form-group date">
                                        <label class="adults" for="ptype">Select Previous Policy Type</label>
                                        <select class="lis"  id="ptypes" name="ptype">
                                            <option value="#">Enter Policy Type</option>
                                            <option value="#">a</option>
                                            <option value="#">b</option>
                                        </select>
                                    </div>
                                </div> 
                                <div class="col-md-6"> 
                                    <div class="form-group date">
                                        <label class="adults" for="modals">Modal</label>
                                        <select class="lis"   id="modals" name="modal">
                                            <option value="#">Enter Model</option>
                                            
                                        </select>
                                    </div>
                                    <div class="form-group date">
                                        <label class="adults" for="varis">Varient</label>
                                        <select class="lis"   id="varis" name="vari">
                                            <option value="#">Enter Varient</option>
                                        </select>
                                    </div>
                                    <div class="form-group date">
                                        <label class="adults" for="pexpires">Select Policy Expire</label>
                                        <input type="date" class="lis"  placeholder="Policy Expire" id="pexpires" name="pexpire">
                                    </div>
                                    <div class="form-group date">
                                        <label class="adults" for="pinsurs">Select Previous Insurer</label>
                                        <select class="lis"   id="pinsurs" name="pinsur">
                                            <option value="#">Select Insurer</option>
                                            <option value="#">a</option>
                                            <option value="#">b</option>
                                        </select>
                                    </div>
                                </div>         
                            </div>  
                            <div class="text-center">
                                <button name="formSubmit">Get Quote</button>
                            </div>  
                            <?php echo form_close(); ?>
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
                    
                </div>

            </div>    

        </div>

    </div>


</div>  



<section class="imp">
    <div class="container">
        <h2>Importance of Health Insurance</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>

    </div>    

</section>

<section class="why_Health">
  <div class="container">
    <h2>Why Health Insurance from Tirupati Insurance ?</h2>
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="point">
                    <img src="<?= base_url();?>assest/img/discount.png">
            
                    <h4>80% discouns</h4>
                    <hr class="style1">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>  
        
                </div>
                <div class="point">
                    <img src="<?= base_url();?>assest/img/faster-icon-png-0.png">
                    <h4>80% discouns</h4>
                    <hr class="style1">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>  
        
                </div>
          
            </div>
            <div class="col-md-6 col-12">
                <div class="point">
                    <img src="<?= base_url();?>assest/img/PngItem_690697.png">
            
                    <h4>80% discouns</h4>
                    <hr class="style1">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>  
        
                </div>
                <div class="point">
                    <img src="<?= base_url();?>assest/img/264-2640852_simple-wordpress-job-level-1-support-icon.png">
                    <h4>80% discouns</h4>
                    <hr class="style1">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>  
        
                </div>
          
            </div>
        </div>
        
        
        
        
    
        
    </div>  
  </section> 



           
<!-- Script -->


<script type='text/javascript'>
    // baseURL variable
    var baseURL= "<?php echo base_url();?>";
    
    $(document).ready(function(){
        $('#comp').change(function(){
            var comp = $(this).val();

            // AJAX request
            $.ajax({
                url:'<?=base_url()?>frontend/bikeinsurance/getbikeCompany',
                method: 'post',
                data: {comp: comp},
                dataType: 'json',
                success: function(response){

                    // Remove options
                    $('#modal').find('option').not(':first').remove();
                    $('#vari').find('option').not(':first').remove();

                    // Add options
                    $.each(response,function(index,data){
                        $('#modal').append('<option value="'+data['id']+'">'+data['model_name']+'</option>');
                    });
                }
            });
        });
        
        // Department change
        $('#modal').change(function(){
            var modal = $(this).val();

            // AJAX reques
            $.ajax({
                url:'<?=base_url()?>frontend/bikeinsurance/getbikeModel',
                method: 'post',
                data: {modal: modal},
                dataType: 'json',
                success: function(response){
                   
                    // Remove options
                    $('#vari').find('option').not(':first').remove();

                    // Add options
                    $.each(response,function(index,data){
                        $('#vari').append('<option value="'+data['id']+'">'+data['variant_name']+'</option>');
                    });
                }
            });
        });
        
    });
</script>

<script type='text/javascript'>
    // baseURL variable
    var baseURL= "<?php echo base_url();?>";
    
    $(document).ready(function(){
        $('#comps').change(function(){
            var comp = $(this).val();

            // AJAX request
            $.ajax({
                url:'<?=base_url()?>frontend/bikeinsurance/getbikeCompany',
                method: 'post',
                data: {comp: comp},
                dataType: 'json',
                success: function(response){

                    // Remove options
                    $('#modals').find('option').not(':first').remove();
                    $('#varis').find('option').not(':first').remove();

                    // Add options
                    $.each(response,function(index,data){
                        $('#modals').append('<option value="'+data['id']+'">'+data['model_name']+'</option>');
                    });
                }
            });
        });
        
        // Department change
        $('#modals').change(function(){
            var modal = $(this).val();

            // AJAX request
            $.ajax({
                url:'<?=base_url()?>frontend/bikeinsurance/getbikeModel',
                method: 'post',
                data: {modal: modal},
                dataType: 'json',
                success: function(response){
                    
                    // Remove options
                    $('#varis').find('option').not(':first').remove();

                    // Add options
                    $.each(response,function(index,data){
                        $('#varis').append('<option value="'+data['id']+'">'+data['variant_name']+'</option>');
                    });
                }
            });
        });
        
    });
</script>