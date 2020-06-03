<h2 class="main_heading">Now Buying Car Insurance is Much Simpleir</h2>
<div class="container car">
    <div class="">
        <div class="box_sh ">
            <div class="row">
                <div class="col-lg-4 col-xs-12 " style="padding:0px;">
                <img src="<?= base_url();?>assest/img/car.jpg">
                    <div class="to">
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <div class=" small">
                                    <img src="<?= base_url();?>assest/img/save-money.png">
                                    <h6>Save Upto 80%*</h6>
                                    <p>Lowest car Premiums</p>
                                </div>
                            </div>
                            <div class="col-md-12 col-12">
                                <div class=" small">
                                    <img src="<?= base_url();?>assest/img/life-insurance.png" >
                                    <h6>20+ Insurers</h6>
                                    <p>To Choose From</p>
                                </div>
                            </div>
                            <div class="col-md-12 col-12">
                                <div class=" small">
                                    <img src="<?= base_url();?>assest/img/family (1).svg">
                                    <h6>10 Thousand+</h6>
                                    <p>Vehicles Insured</p>
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
                            <a class="" data-toggle="tab" href="#new">New Car</a>
                        </li>
                    </ul>
                    <hr style="border-width: 2px; margin-top: 0px;">
                    <div class="tab-content" >
                        <div id="renew" class="container tab-pane active">
                            <?php echo form_open(base_url( 'frontend/carinsurance/renewDetails'), array('method'=>'POST'));?>
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
                                        <input list="comps"  class="lis"   id="comp" name="comp" placeholder="Enter Company">
                                        <datalist id="comps" >
                                        

                                            <?php
                                                foreach($company as $companies){

                                                echo "<option value='".$companies['brand_name']."'>";
                                                }
                                            ?>
                                        </datalist>
                                    </div>
                                    <div class="form-group date">
                                        <label class="adults" for="type">Fuel type</label>
                                        <input list="types"  class="lis"   id="type" name="comp" placeholder="Enter Fuel Type">
                                        <datalist   id="types">
                                            
                                            <option value="A">
                                            <option value="B">
                                        </datalist>
                                    </div>
                                    <div class="form-group date">
                                                <label class="adults" for="regyrss">Registration year</label>
                                                <input list="regyr"  class="lis"   id="regyrss" name="comp" placeholder="Select Year">
                                                <datalist   id="regyr" >
                                                    
                                                    <?php for($i=1990; $i<=date("Y"); $i++ ) { ?>
                                                        <option  value="<?php echo $i; ?>">
                                                    <?php } ?>
                                                    
                                                </datalist>
                                                    </div>
                                    <div class="form-group date">
                                        <label class="adults" for="ptypes">Select Previous Policy Type</label>
                                        <input list="ptype"  class="lis"   id="ptypes" name="comp" placeholder="Enter Policy Type">
                                        <datalist  id="ptype" >
                                            <option value="w">
                                            <option value="r">
                                            <option value="a">
                                        </datalist>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group date">
                                        <label class="adults" for="modal">Modal</label>
                                        <input list="modal" class="lis" id="modals" name="modl" placeholder="Enter Model">
                                        <datalist  id="modal" >
                                            <option value="dd">
                                            <option value="dd">
                                            <option value="dd">
                                            
                                        </datalist>
                                    </div>
                                    <div class="form-group date">
                                        <label class="adults" for="vari">Varient</label>
                                        <input list="m" class="lis" id="vari" name="modl" placeholder="Enter Varient">
                                        <datalist  id="m" >
                                            <option value="dd">
                                            <option value="dd">
                                            <option value="dd">
                                            
                                        </datalist>
                                    </div>
                                    <div class="form-group date">
                                        <label class="adults" for="pexpire">Select Policy Expire</label>
                                        <input type="date" class="lis" placeholder="Expire Date"  id="pexpire" name="pexpire">

                                    </div>
                                    <div class="form-group date">
                                        <label class="adults" for="inur">Select Previous Insurer</label>
                                        <input class="lis" list="pinsur" id="inur" placeholder="Select Insurer">
                                        <datalist class="lis"   id="pinsur" name="pinsur">
                                            <option value="4">
                                            <option value="5">
                                            <option value="2">
                                        </datalist>
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
                            <?php echo form_open(base_url( 'frontend/carinsurance/renewDetails'), array('method'=>'POST'));?>
                            <div class="row">
                                
                                <div class="col-md-6">
                                    <div class="form-group date">
                                        <label class="adults" for="comps">Manufacturer</label>
                                                <input list="compnies"  class="lis"   id="comps" name="comp" placeholder="Not Expire">
                                                <datalist id="compnies">
                                                <?php
                            foreach($company as $companies){

                            echo "<option value='".$companies['brand_name']."'>";
                            }
                            ?> 
                                                </datalist> 
                    
  
  
                                                
                                    </div>
                                    <div class="form-group date">
                                        <label class="adults" for="types">Fuel type</label>
                                        <input list="typs"  class="lis"   id="types" name="comp" placeholder="Enter Fuel Type">
                                        <datalist   id="typs" >
                                            <option value="kuch bhi" >
                                            <option value="A">
                                            <option value="B">
                                        </datalist>
                                    </div>
                                    <div class="form-group date">
                                                <label class="adults" for="regyrs">Registration year</label>
                                                <input list="regyr"  class="lis"   id="regyrs" name="comp" placeholder="Select Year">
                                                <datalist  id="regyr">
                                                    
                                                    <?php for($i=1990; $i<=date("Y"); $i++ ) { ?>
                                                        <option  value="<?php echo $i; ?>">
                                                    <?php } ?>
                                                    
                                                    </datalist>
                                                    </div>
                                    <div class="form-group date">
                                        <label class="adults" for="ptypes">Select Previous Policy Type</label>
                                        <input list="ptyps"  class="lis"   id="ptypes" name="comp" placeholder="Enter Policy Type">
                                        <datalist   id="ptyps" >
                                            <option value="1">
                                            <option value="2">
                                            <option value="3">
                                        </datalisst>
                                    </div>
                                </div> 
                                <div class="col-md-6"> 
                                    <div class="form-group date">
                                        <label class="adults" for="modals">Modal</label>
                                        <input list="modls"  class="lis"   id="modals" name="comp" placeholder="Enter Model">
                                        <datalist    id="modls" >
                                            <option value="2">
                                            <option value="3">
                                            <option value="4">
                                            <option value="5">
                                            
                                        </datalist>
                                    </div>
                                    <div class="form-group date">
                                        <label class="adults" for="vari">Varient</label>
                                        <input list="varis"  class="lis"   id="vari" name="comp" placeholder="Enter Varient">
                                        <datalist   id="varis" >
                                            <option value="4">
                                            <option value="5">
                                            <option value="7">
                                        </datalist>
                                    </div>
                                    <div class="form-group date">
                                        <label class="adults" for="pexpire">Select Policy Expire</label>
                                        <input type="date" class="lis" placeholder="Expire Date"  id="pexpire" name="pexpire">

                                    </div>
                                    <div class="form-group date">
                                        <label class="adults" for="pinsur">Select Previous Insurer</label>
                                        <input list="pinsurs"  class="lis"   id="pinsur" name="comp" placeholder="Select Insurer">
                                        <datalist   id="pinsurs">
                                            <option value="4">
                                            <option value="5">
                                            <option value="7">
                                        </datalist>
                                    </div>
                                </div>         
                            </div>  
                            <div class="text-center">
                                <button name="formSubmit">Get Quote</button>
                            </div>  
                            <?php echo form_close(); ?>
                           <?php echo validation_errors(); ?>
                        </div>

                    </div>
                    
                </div>

            </div>    

        </div>

    </div>


</div>


        <section class="imp">
            <div class="container">
                <h2>Importance of Car Insurance</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
        
            </div>    

        </section>

        <section class="why_Health">
          <div class="container">
            <h2>Why Car Insurance from Tirupati Insurance ?</h2>
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
                            <h4>UNBIASED EXPERT ADVISE</h4>
                            <hr class="style1">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>  
                
                        </div>
                  
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="point">
                            <img src="<?= base_url();?>assest/img/PngItem_690697.png">
                    
                            <h4>EXPRESS CLAIMS SERVICES</h4>
                            <hr class="style1">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>  
                
                        </div>
                        <div class="point">
                            <img src="<?= base_url();?>assest/img/264-2640852_simple-wordpress-job-level-1-support-icon.png">
                            <h4>24*7 COUSTOMER SUPPORT</h4>
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
                url:'<?=base_url()?>/frontend/carinsurance/getCompany',
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
                url:'<?=base_url()?>/frontend/carinsurance/getModel',
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
                url:'<?=base_url()?>/frontend/carinsurance/getCompany',
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
                url:'<?=base_url()?>/frontend/carinsurance/getModel',
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