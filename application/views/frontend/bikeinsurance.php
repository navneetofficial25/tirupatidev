<h2 class="main_heading">Now Buying Bike Insurance is Much Simpleir</h2>
<div class="container car">
    <div class="">
        <div class="box_sh ">
            <div class="row">
                <div class="col-lg-4 col-xs-12 " style="padding:0px;">
                <img src="<?= base_url();?>assest/img/bike.jpg" >
                    <div class="to">
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <div class=" small">
                                <img src="<?= base_url();?>assest/img/save-money.png">
                                    <h6>Save Upto 80%*</h6>
                                    <p>Lowest Bike Premiums</p>
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
                            <a class="" data-toggle="tab" href="#new">New Bike</a>
                        </li>
                    </ul>
                    <hr style="border-width: 2px; margin-top: 0px;">
                    <div class="tab-content" >
                        <div id="renew" class="container tab-pane active">
                            <?php echo form_open(base_url( 'frontend/bikeinsurance/renewbikeDetails'), array('id'=>'bikeform','method'=>'POST'));?>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group date">
                                        <label class="adults" for="usrg">Registration Number</label>
                                        <input type="text"  id="usrg" name="reg" placeholder="Enter Registration Number">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group date">
                                    <label class="adults" for="compg ">Manufacturer</label>
                                        <input list="compsg"  class="lis"   id="compg" name="compa" placeholder="Enter Company">
                                        <datalist id="compsg" >
                                        

                                            <?php
                                                foreach($company as $companies){

                                                echo "<option value='".$companies['brand_name']."'>";
                                                }
                                            ?>
                                        </datalist>
                                    </div>
                                    <div class="form-group date">
                                    <label class="adults" for="typeg">Fuel type</label>
                                        <input list="typesg"  class="lis"   id="typeg" name="fultype" placeholder="Enter Fuel Type">
                                        <datalist   id="typesg">
                                            
                                            <option value="A">
                                            <option value="B">
                                        </datalist>
                                    </div>
                                    <div class="form-group date">
                                    <label class="adults" for="regyrssg">Registration year</label>
                                                <input list="regyrg"  class="lis"   id="regyrssg" name="regisyr" placeholder="Select Year">
                                                <datalist   id="regyrg" >
                                                    
                                                    <?php for($i=1990; $i<=date("Y"); $i++ ) { ?>
                                                        <option  value="<?php echo $i; ?>">
                                                    <?php } ?>
                                                    
                                                </datalist>
            
        </div>
                                    <div class="form-group date">
                                    <label class="adults" for="ptypesg">Select Previous Policy Type</label>
                                        <input list="ptypeg"  class="lis"   id="ptypesg" name="pptype" placeholder="Enter Policy Type">
                                        <datalist  id="ptypeg" >
                                            <option value="w">
                                            <option value="r">
                                            <option value="a">
                                        </datalist>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group date">
                                    <label class="adults" for="modalsg">Modal</label>
                                        <input list="modalg" class="lis" id="modalsg" name="moda" placeholder="Enter Model">
                                        <datalist  id="modalg" >
                                            <option value="dd">
                                            <option value="dd">
                                            <option value="dd">
                                            
                                        </datalist>
                                    </div>
                                    <div class="form-group date">
                                    <label class="adults" for="varig">Varient</label>
                                        <input list="mg" class="lis" id="varig" name="varnt" placeholder="Enter Varient">
                                        <datalist  id="mg" >
                                            <option value="dd">
                                            <option value="dd">
                                            <option value="dd">
                                            
                                        </datalist>
                                    </div>
                                    <div class="form-group date">
                                        <label class="adults" for="pexpie">Select Policy Expire</label>
                                        <input type="date" class="lis"  placeholder="Policy Expire" id="pexpie" name="pexre">
                                    </div>
                                    <div class="form-group date">
                                    <label class="adults" for="inuri">Select Previous Insurer</label>
                                        <input class="lis" list="pinsuri" id="inuri"  name="piur" placeholder="Select Insurer">
                                        <datalist   id="pinsuri" >
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
                            <?php echo form_open(base_url( 'frontend/bikeinsurance/newBike'), array('id'=>'newbikefrm','method'=>'POST'));?>
                            <div class="row">
                                
                                <div class="col-md-6">
                                    <div class="form-group date">
                                    <label class="adults" for="compsi">Manufacturer</label>
                                                <input list="compniesi"  class="lis"   id="compsi" name="compa" placeholder="Not Expire">
                                                <datalist id="compniesi">
                                                <?php
                            foreach($company as $companies){

                            echo "<option value='".$companies['brand_name']."'>";
                            }
                            ?> 
                                                </datalist> 
  
  
                                                
                                    </div>
                                    <div class="form-group date">
                                    <label class="adults" for="typesi">Fuel type</label>
                                        <input list="typsi"  class="lis"   id="typesi" name="fultype" placeholder="Enter Fuel Type">
                                        <datalist   id="typsi" >
                                            <option value="kuch bhi" >
                                            <option value="A">
                                            <option value="B">
                                        </datalist>
                                    </div>
                                    <div class="form-group date">
                                    <label class="adults" for="regyrsi">Registration year</label>
                                                <input list="regyri"  class="lis"   id="regyrsi" name="regisyr" placeholder="Select Year">
                                                <datalist  id="regyri">
                                                    
                                                    <?php for($i=1990; $i<=date("Y"); $i++ ) { ?>
                                                        <option  value="<?php echo $i; ?>">
                                                    <?php } ?>
                                                    
                                                    </datalist>
            
                                    </div>
                                    
                                </div> 
                                <div class="col-md-6"> 
                                    <div class="form-group date">
                                    <label class="adults" for="modalsi">Modal</label>
                                        <input list="modlsi"  class="lis"   id="modalsi" name="moda" placeholder="Enter Model">
                                        <datalist    id="modlsi" >
                                            <option value="2">
                                            <option value="3">
                                            <option value="4">
                                            <option value="5">
                                            
                                        </datalist>
                                    </div>
                                    <div class="form-group date">
                                    <label class="adults" for="varii">Varient</label>
                                        <input list="variis"  class="lis"   id="varii" name="varnt" placeholder="Enter Varient">
                                        <datalist   id="variis" >
                                            <option value="4">
                                            <option value="5">
                                            <option value="7">
                                        </datalist>
                                    </div>
                                    <div class="form-group date">
                                        <label class="adults" for="pepires">Select Policy Expire</label>
                                        <input type="date" class="lis"  placeholder="Policy Expire" id="pexre" name="pexpire">
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
        <h2>Importance of Bike Insurance</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>

    </div>    

</section>

<section class="why_Health">
  <div class="container">
    <h2>Why Bike Insurance from Tirupati Insurance ?</h2>
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
        $('#compg').change(function(){
            var comp = $(this).val();

            // AJAX request
            $.ajax({
                url:'<?=base_url()?>frontend/bikeinsurance/getbikeCompany',
                method: 'post',
                data: {comp: comp},
                dataType: 'json',
                success: function(response){

                    // Remove options
                    $('#modalsg').find('option').not(':first').remove();
                    $('#varig').find('option').not(':first').remove();

                    // Add options
                    $.each(response,function(index,data){
                        $('#modalsg').append('<option value="'+data['id']+'">'+data['model_name']+'</option>');
                    });
                }
            });
        });
        
        // Department change
        $('#modalsg').change(function(){
            var modal = $(this).val();

            // AJAX reques
            $.ajax({
                url:'<?=base_url()?>frontend/bikeinsurance/getbikeModel',
                method: 'post',
                data: {modal: modal},
                dataType: 'json',
                success: function(response){
                   
                    // Remove options
                    $('#varig').find('option').not(':first').remove();

                    // Add options
                    $.each(response,function(index,data){
                        $('#varig').append('<option value="'+data['id']+'">'+data['variant_name']+'</option>');
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
        $('#compsi').change(function(){
            var comp = $(this).val();

            // AJAX request
            $.ajax({
                url:'<?=base_url()?>frontend/bikeinsurance/getbikeCompany',
                method: 'post',
                data: {comp: comp},
                dataType: 'json',
                success: function(response){

                    // Remove options
                    $('#modalsi').find('option').not(':first').remove();
                    $('#varii').find('option').not(':first').remove();

                    // Add options
                    $.each(response,function(index,data){
                        $('#modalsi').append('<option value="'+data['id']+'">'+data['model_name']+'</option>');
                    });
                }
            });
        });
        
        // Department change
        $('#modalsi').change(function(){
            var modal = $(this).val();

            // AJAX request
            $.ajax({
                url:'<?=base_url()?>frontend/bikeinsurance/getbikeModel',
                method: 'post',
                data: {modal: modal},
                dataType: 'json',
                success: function(response){
                    
                    // Remove options
                    $('#varii').find('option').not(':first').remove();

                    // Add options
                    $.each(response,function(index,data){
                        $('#varii').append('<option value="'+data['id']+'">'+data['variant_name']+'</option>');
                    });
                }
            });
        });
        
    });
</script>

