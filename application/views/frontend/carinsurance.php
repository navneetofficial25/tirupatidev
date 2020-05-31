<section class="car">
            <div class="container">
                <h2>Now Buying Health Insurance is Much Simpleir</h2>
                <div class="sho">
                    <div class="row">
                        <div class="col-md-4" style="margin-right: -10px;">
                            <img src="<?= base_url();?>assest/img/health-insurance-top-up.jpg" width="110%" style="border-radius: 10px 0px 0px 0px;">
                            <div class="to">
                                <div class=" small">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="<?= base_url();?>assest/img/save-money.png">
                                        </div>
                                        <div class="col-md-8">
                                            <h6>Save Upto 80%</h6>
                                            <p>Lowest Premiums</p>
                                        </div>
                                    </div>
                                </div>   
                                <div class=" small">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="<?= base_url();?>assest/img/life-insurance.png" >
                                        </div>
                                        <div class="col-md-8">
                                            <h6>Save Upto 80%</h6>
                                            <p>Lowest Premiums</p>
                                        </div>
                                    </div>
                                </div> 
                                <div class=" small">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="<?= base_url();?>assest/img/family (1).svg">
                                        </div>
                                        <div class="col-md-8">
                                            <h6>Save Upto 80%</h6>
                                            <p>Lowest Premiums</p>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                        </div>
                        <div class="col-md-8 car" >
                            
                                
                                <ul class="nav " role="tablist">
                                    <li class="nav-item">
                                      <a class=" active" data-toggle="tab" href="#renew">Renew Details</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="" data-toggle="tab" href="#new">New Car</a>
                                    </li>
                                   
                                  </ul>
                                <hr style="border-width: 2px; margin-top: 0px;">


                      
                            <!-- Tab panes -->
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
                                                <input type="text"  id="regyr" name="regyr" placeholder="Select a Registration year">
                                                
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
                                                <label class="adults" for="pexpire">Select Policy Expire</label>
                                                
                                                <select class="lis"   id="pexpire" name="pexpire">
                                                    <option value="#">Not Expire</option>
                                                    <option value="#">a</option>
                                                    <option value="#">b</option>
                                                </select>
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
                                      
                                          
                                             
                                                  
                                                    
                                                <button class="bu text-center" name="formSubmit">Get Quote</button>
                                               
                                           
                                       

                                    </div>    
<?php echo form_close(); ?>

                                </div>


                                <div id="new" class="container tab-pane fade">
<?php echo form_open(base_url( 'frontend/carinsurance/renewDetails'), array('method'=>'POST'));?>

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

                                                <?php
                        foreach($company as $companies){

                            echo "<option value='".$companies['id']."'>".$companies['brand_name']."</option>";
                        }
                        ?>
                                                </select>
  
  
                                                
                                            </div>
                                            <div class="form-group date">
                                                <label class="adults" for="typ">Fuel type</label>
                                                
                                                <select class="lis"   id="typ" name="type">
                                                    <option value="#">Enter Fuel Type</option>
                                                    <option value="#">a</option>
                                                    <option value="#">b</option>
                                                </select>
                                            </div>
                                            <div class="form-group date">
                                                <label class="adults" for="r">Registration year</label>
                                                <input type="text"  id="r" name="regyr" placeholder="Select a Registration year">
                                                
                                            </div>
                                            <div class="form-group date">
                                                <label class="adults" for="ptpe">Select Previous Policy Type</label>
                                                
                                                <select class="lis"  id="ptpe" name="ptype">
                                                    <option value="#">Enter Policy Type</option>
                                                    <option value="#">a</option>
                                                    <option value="#">b</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group date">
                                                <label class="adults" for="modls">Modal</label>
                                               
                                                <select class="lis"   id="modls" name="modal">
                                                    <option value="#">Enter Model</option>
                                                </select>
                                            </div>
                                            <div class="form-group date">
                                                <label class="adults" for="vars">Varient</label>
                                                
                                                <select class="lis"   id="vars" name="vari">
                                                    <option value="#">Enter Varient</option>
                                                </select>
                                            </div>
                                            <div class="form-group date">
                                                <label class="adults" for="pexire">Select Policy Expire</label>
                                               
                                                <select class="lis"   id="pexire" name="pexpire">
                                                    <option value="#">Not Expire</option>
                                                    <option value="#">a</option>
                                                    <option value="#">b</option>
                                                </select>
                                            </div>
                                            <div class="form-group date">
                                                <label class="adults" for="pisur">Select Previous Insurer</label>
                                                
                                                <select class="lis"   id="pisur" name="pinsur">
                                                    <option value="#">Select Insurer</option>
                                                    <option value="#">a</option>
                                                    <option value="#">b</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                          
                                                
                                               
                                                    
                                                <button class="bu text-center" name="formSubmit">Get Quote</button>
                                               
                                     
                                        

                                    </div>
<?php echo form_close(); ?>

                                </div>

                              
                            </div>

                        </div> 
                    </div>
                </div>
            </div>
        </section>  



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

            // AJAX reques
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
                    $('#modls').find('option').not(':first').remove();
                    $('#vars').find('option').not(':first').remove();

                    // Add options
                    $.each(response,function(index,data){
                        $('#modls').append('<option value="'+data['id']+'">'+data['model_name']+'</option>');
                    });
                }
            });
        });
        
        // Department change
        $('#modls').change(function(){
            var modal = $(this).val();

            // AJAX request
            $.ajax({
                url:'<?=base_url()?>/frontend/carinsurance/getModel',
                method: 'post',
                data: {modal: modal},
                dataType: 'json',
                success: function(response){
                    
                    // Remove options
                    $('#vars').find('option').not(':first').remove();

                    // Add options
                    $.each(response,function(index,data){
                        $('#vars').append('<option value="'+data['id']+'">'+data['variant_name']+'</option>');
                    });
                }
            });
        });
        
    });
</script>