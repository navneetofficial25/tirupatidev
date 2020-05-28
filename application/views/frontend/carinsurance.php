<section class="health_main">
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
                                <hr style="border-width: 2px; margin-top: -52px;">


                      
                            <!-- Tab panes -->
                            <div class="tab-content" >
                                <div id="renew" class="container tab-pane active">
  <?php echo form_open(base_url( 'frontend/carinsurance/renewDetails/'), array('method'=>'POST'));?>

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
                                                <input list="companies" class="lis"  id="comp" name="comp" placeholder="Enter Manufacturer ">
                                                <select id="companies">
                        <?php
                        foreach($company as $companies){

                            echo "<option value='".$companies['id']."'>".$companies['brand_name']."</option>";
                        }
                        ?>
                                                </select>
  
  
                                                
                                            </div>
                                            <div class="form-group date">
                                                <label class="adults" for="type">Fuel type</label>
                                                <input list="types"  class="lis"   id="type" name="type" placeholder="Enter Fuel Type">
                                                <datalist id="types">
                                                    <option value="Edge">
                                                    <option value="Firefox">
                                                    <option value="Chrome">
                                                    <option value="Opera">
                                                    <option value="Safari">
                                                
                                                </datalist>
                                            </div>
                                            <div class="form-group date">
                                                <label class="adults" for="usr">Registration year</label>
                                                <input type="text"  id="usr" name="regyr" placeholder="Select a Registration year">
                                                
                                            </div>
                                            <div class="form-group date">
                                                <label class="adults" for="ptype">Select Previous Policy Type</label>
                                                <input list="ptypes"   class="lis"  id="ptype" name="ptype" placeholder="Enter Policy Type">
                                                <datalist id="ptypes">
                                                    <option value="Edge">
                                                    <option value="Firefox">
                                                    <option value="Chrome">
                                                    <option value="Opera">
                                                    <option value="Safari">
                                                </datalist>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group date">
                                                <label class="adults" for="modal">Modal</label>
                                                <input list="modals"  class="lis"   id="modal" name="modal" placeholder="Enter Model">
                                                <datalist id="modals">
                                                </datalist>
                                            </div>
                                            <div class="form-group date">
                                                <label class="adults" for="vari">Varient</label>
                                                <input list="varis"  class="lis"   id="vari" name="vari" placeholder="Enter Varient">
                                                <datalist id="varis">
                                                </datalist>
                                            </div>
                                            <div class="form-group date">
                                                <label class="adults" for="pexpire">Select Policy Expire</label>
                                                <input list="pexpires"  class="lis"   id="pexpire" name="pexpire" placeholder="Not Expire">
                                                <datalist id="pexpires">
                                                    <option value="Edge">
                                                    <option value="Firefox">
                                                    <option value="Chrome">
                                                    <option value="Opera">
                                                    <option value="Safari">
                                                </datalist>
                                            </div>
                                            <div class="form-group date">
                                                <label class="adults" for="pinsur">Select Previous Insurer</label>
                                                <input list="pinsurs"  class="lis"   id="pinsur" name="pinsur" placeholder="Select Insurer">
                                                <datalist id="pinsurs">
                                                    <option value="Edge">
                                                    <option value="Firefox">
                                                    <option value="Chrome">
                                                    <option value="Opera">
                                                    <option value="Safari">
                                                </datalist>
                                            </div>
                                        </div>
                                        <div class="container chckb">
                                          
                                                <div class="form-group ">
                                                  
                                                    
                                                </br><button class="bu" name="formSubmit">Get Quote</button>
                                                </div>
                                              
                                        </div>

                                    </div>    
<?php echo form_close(); ?>

                                </div>


                                <div id="new" class="container tab-pane fade">
<?php echo form_open(base_url( 'frontend/carinsurance/renewDetails/'), array('method'=>'POST'));?>

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
                                                <input list="compaies" class="lis"  id="comp" name="comp" placeholder="Enter Manufacturer ">
                                                <datalist id="companies">
                                                <?php
                        foreach($company as $companies){

                            echo "<option value='".$companies['id']."'>".$companies['brand_name']."</option>";
                        }
                        ?>
                                                </datalist>
  
  
                                                
                                            </div>
                                            <div class="form-group date">
                                                <label class="adults" for="typ">Fuel type</label>
                                                <input list="tpes"  class="lis"   id="typ" name="type" placeholder="Enter Fuel Type">
                                                <datalist id="tpes">
                                                    <option value="Edge">
                                                    <option value="Firefox">
                                                    <option value="Chrome">
                                                    <option value="Opera">
                                                    <option value="Safari">
                                                </datalist>
                                            </div>
                                            <div class="form-group date">
                                                <label class="adults" for="r">Registration year</label>
                                                <input type="text"  id="r" name="regyr" placeholder="Select a Registration year">
                                                
                                            </div>
                                            <div class="form-group date">
                                                <label class="adults" for="ptpe">Select Previous Policy Type</label>
                                                <input list="ptpes"   class="lis"  id="ptpe" name="ptype" placeholder="Enter Policy Type">
                                                <datalist id="ptpes">
                                                    <option value="Edge">
                                                    <option value="Firefox">
                                                    <option value="Chrome">
                                                    <option value="Opera">
                                                    <option value="Safari">
                                                </datalist>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group date">
                                                <label class="adults" for="modl">Modal</label>
                                                <input list="modls"  class="lis"   id="modal" name="modal" placeholder="Enter Model">
                                                <datalist id="modals">
                                                </datalist>
                                            </div>
                                            <div class="form-group date">
                                                <label class="adults" for="var">Varient</label>
                                                <input list="vars"  class="lis"   id="vari" name="vari" placeholder="Enter Varient">
                                                <datalist id="varis">
                                                </datalist>
                                            </div>
                                            <div class="form-group date">
                                                <label class="adults" for="pexire">Select Policy Expire</label>
                                                <input list="pexires"  class="lis"   id="pexire" name="pexpire" placeholder="Not Expire">
                                                <datalist id="pexires">
                                                    <option value="Edge">
                                                    <option value="Firefox">
                                                    <option value="Chrome">
                                                    <option value="Opera">
                                                    <option value="Safari">
                                                </datalist>
                                            </div>
                                            <div class="form-group date">
                                                <label class="adults" for="pisur">Select Previous Insurer</label>
                                                <input list="pisurs"  class="lis"   id="pisur" name="pinsur" placeholder="Select Insurer">
                                                <datalist id="pisurs">
                                                    <option value="Edge">
                                                    <option value="Firefox">
                                                    <option value="Chrome">
                                                    <option value="Opera">
                                                    <option value="Safari">
                                                </datalist>
                                            </div>
                                        </div>
                                        <div class="container chckb">
                                          
                                                <div class="form-group ">
                                                 
                                                    
                                                </br><button class="bu" name="formSubmit">Get Quote</button>
                                                </div>
                                              
                                        </div>

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
              <div class="h">
              <div class="row">
                <div class="col-md-2">
                  <img src="<?= base_url();?>assest/img/discount.png">
                </div>
                <div class="col-md-4">
                  <h4>80% discouns</h4>
                   
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>  
                </div>
                <div class="col-md-2">
                  <img src="<?= base_url();?>assest/img/PngItem_690697.png">
                </div>
                <div class="col-md-4">
                    <h4>80% discouns</h4>
                    
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>  
                
                </div> 
                <div class="col-md-2">
                  <img src="<?= base_url();?>assest/img/faster-icon-png-0.png">
                </div>
                <div class="col-md-4">
                    <h4>80% discouns</h4>
                    
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>  
                
                </div> 
                <div class="col-md-2">
                  <img src="<?= base_url();?>assest/img/264-2640852_simple-wordpress-job-level-1-support-icon.png">
                </div>
                <div class="col-md-4">
                    <h4>80% discouns</h4>
                    
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>  
                
                </div>     
              </div>  
              </div>
            </div>  
          </section> 



                   
        <!-- Script -->
        <?php $this->load->view('frontend/Template/footer.php') ?>


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
        $('#modal').change(function(){
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