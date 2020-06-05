<h2 class="main_heading">Now Buying Car Insurance is Much Simpleir</h2>

<div class="container car">
    <div class="">
        <div class="box_sh">
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
                            <?php echo form_open(base_url( 'frontend/carinsurance/renewDetails'), array('id'=>'carform','method'=>'POST'));?>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group date">
                                        <label class="adults" for="usr">Registration Number</label>
                                        <input type="text"  id="usr" name="registraion" placeholder="Enter Registration Number">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group date">
                                        <label class="adults" for="comp ">Manufacturer</label>
                                        <input list="comps"  class="lis"   id="company_name" name="company" placeholder="Enter Fuel Type">
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
                                        <input list="types"  class="lis"   id="type" name="fuel_type" placeholder="Enter Fuel Type">
                                        <datalist   id="types">
                                                
                                        </datalist>
                                    </div>
                                    <div class="form-group date">
                                                <label class="adults" for="regyrss">Registration year</label>
                                                <input list="regyr"  class="lis"   id="regyrss" name="regyr" placeholder="Select Year">
                                                <datalist   id="regyr" >
                                                    
                                                    <?php for($i=1990; $i<=date("Y"); $i++ ) { ?>
                                                        <option  value="<?php echo $i; ?>">
                                                    <?php } ?>
                                                    
                                                </datalist>
                                                    </div>
                                    <div class="form-group date">
                                        <label class="adults" for="ptypes">Select Previous Policy Type</label>
                                        <input list="ptype"  class="lis"   id="" name="ptypes" placeholder="Enter Policy Type">
                                        <datalist  id="ptype" >
                                            
                                        </datalist>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group date">
                                        <label class="adults" for="modal">Modal</label>
                                        <input list="modalss" class="lis" id="modal_list" name="modl" placeholder="Enter Model">
                                        <datalist  id="modalss" >
                                           
                                        </datalist>
                                    </div>
                                    <div class="form-group date">
                                        <label class="adults" for="vari">Varient</label>
                                        <input list="mvarient" class="lis" id="vari" name="vari" placeholder="Enter Varient">
                                        <datalist  id="mvarient" >
                                          
                                        </datalist>
                                    </div>
                                    <div class="form-group date">
                                        <label class="adults" for="pexpire">Select Policy Expire</label>
                                        <input type="date" class="lis" placeholder="Expire Date"  id="" name="policy_expire">

                                    </div>
                                    <div class="form-group date">
                                        <label class="adults" for="inur">Select Previous Insurer</label>
                                        <input class="lis" list="pinsur" name="pinsur" id="inur" placeholder="Select Insurer">
                                        <datalist>
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
                        </div>
                        <div id="new" class="container tab-pane fade">
                            <?php echo form_open(base_url( 'frontend/carinsurance/newCar'), array('id'=>'newfrm','method'=>'POST'));?>
                            <div class="row">
                                
                                <div class="col-md-6">
                                    <div class="form-group date">
                                        <label class="adults" for="comps">Manufacturer</label>
                                                <input list="compnies"  class="lis"   id="new_company" name="company" placeholder="Not Expire">
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
                                        <input list="typs"  class="lis"  name="fuel_type" placeholder="Enter Fuel Type">
                                        <datalist   id="typs" >
                                            <option selected disabled value="Select" >
                                           
                                        </datalist>
                                    </div>
                                    <div class="form-group date">
                                                <label class="adults" for="regyrs">Registration year</label>
                                                <input list="regyr"  class="lis"  name="regyr" placeholder="Select Year">
                                                <datalist  id="regyr">
                                                    
                                                    <?php for($i=1990; $i<=date("Y"); $i++ ) { ?>
                                                        <option  value="<?php echo $i; ?>">
                                                    <?php } ?>
                                                    
                                                    </datalist>
                                                    </div>
                            
                                </div> 
                                <div class="col-md-6"> 
                                    <div class="form-group date">
                                        <label class="adults" for="modals">Modal</label>
                                        <input list="modls"  class="lis" id="new_model" name="modal" placeholder="Enter Model">
                                        <datalist    id="modls" >
                                
                                            
                                        </datalist>
                                    </div>
                                    <div class="form-group date">
                                        <label class="adults" for="vari">Varient</label>
                                        <input list="new_varis"  class="lis"   name="vari" placeholder="Enter Varient">
                                        <datalist   id="new_varis" >
                                            
                                        </datalist>
                                    </div>
                                    <div class="form-group date">
                                        <label class="adults" for="pexpire">Select Policy Expire</label>
                                        <input type="date" class="lis" placeholder="Expire Date" name="policy_expire">

                                    </div>
                                    
                                </div>         
                            </div>  
                            <div class="text-center">
                                <button name="">Get Quote</button>
                            </div>  
                            <?php echo form_close(); ?>
            
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
                            <img src="<?= base_url();?>assest/img/discount.svg">
                    
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
                <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
     
        <!-- Modal body -->
        <div class="modal-body">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
         <span id="validation" class="form_errors"></span>
        </div>
        
     
      </div>
    </div>
  </div>
                
                
                
            
                
            </div>  
          </section> 



                   
        <!-- Script -->


<script type='text/javascript'>
    // baseURL variable
     $(document).ready(function(){

        $("#company_name").on('input', function (){
            var comp = $(this).val();
            // AJAX request
            $.ajax({
                url:'<?=base_url()?>/frontend/carinsurance/getCompany',
                method: 'post',
                data: {comp},
                success: function(response){
                    console.log(response);
                    response = $.parseJSON(response);
                    $.each(response, function (i,v)
                    {
                        $("#modalss").append("<option value='"+v.model_name+"'></option>");   
                    }); 
                }
            });
        });
        $("#modal_list").on('input', function (){
            var comp = $(this).val();
            $.ajax({
                url:'<?=base_url()?>/frontend/carinsurance/getModel',
                method: 'post',
                data: {comp: comp},
                success: function(response){
                    console.log(response);
                    response = $.parseJSON(response);
                    $.each(response, function (i,v)
                    {
                        $("#mvarient").append("<option value='"+v.variant_name+"'></option>");   
                    });
                }
            });
        });
    
        });
        
</script>
<script type='text/javascript'>
    // baseURL variable
     $(document).ready(function(){

        $("#new_company").on('input', function (){
            var comp = $(this).val();
            // AJAX request
            $.ajax({
                url:'<?=base_url()?>/frontend/carinsurance/getCompany',
                method: 'post',
                data: {comp: comp},
                success: function(response){
                    console.log(response);
                    response = $.parseJSON(response);
                    $.each(response, function (i,v)
                    {
                        $("#modls").append("<option value='"+v.model_name+"'></option>");   
                    });
                }
            });
        });
        $("#new_model").on('input', function (){
            var comp = $(this).val();
            $.ajax({
                url:'<?=base_url()?>/frontend/carinsurance/getModel',
                method: 'post',
                data: {comp: comp},
                success: function(response){
                    console.log(response);
                    response = $.parseJSON(response);
                    $.each(response, function (i,v)
                    {
                        $("#new_varis").append("<option value='"+v.variant_name+"'></option>");   
                    });
                }
            });
        });
    
        });
        
</script>

<script>
    $("#carform,#newfrm").submit(function(event){
	event.preventDefault();
	var post_url = $(this).attr("action"); 
	var request_method = $(this).attr("method"); 
	var form_data = $(this).serialize(); 
	
	$.ajax({
		url : post_url,
		type: request_method,
		data : form_data,
	}).done(function(response){ //
        console.log(response);
        $('#validation').html(response);
        $('#myModal').modal('show').fadeIn('slow');
        $("#carform,#newfrm").trigger("reset");
	});
});
</script>
