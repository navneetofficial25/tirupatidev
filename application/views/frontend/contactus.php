
        <div class="contact-us">
            <div class="hdr">
                <div class="container">
                     <div class="banner-text text-center size-banner">
                        <div class="contect fliter-heading">
                            <h3 style="margin-top:40px;"><span style="color:rgb( 239, 69, 84 ); margin-top:40px;">Enough about us,</span> <b>lets talk about you now !</b></h3>
                            <p style="font-size:15px; color:rgb( 95, 96, 96 );">We would love to work with you and are waiting for you to drop us a line! Please fill out the form below to get in touch with us or request for a quote here. We’ll be sure to get back to you as soon as we can.</p>
                        </div>
                      </div>
                 </div>
            </div> 
            
        </div> 
        <div class="">
            <div class="container contect-form" style="margin-top:50px; margin-bottom:50px;">
                <div class="row">
                    <div class="col-lg-7 col-xs-12">
                        <div class="group-form">
                            <div class="screen-reader-response" aria-live="polite"></div>
  <?php echo form_open(base_url( 'frontend/contactus/contactDetails'), array('id'=>'contactFrm','method'=>'POST'));?>
                            <span id="success_m" class="text-success"></span>
                                <input class="lis" type="text" name="name" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Enter Your Name Here">
                                <span id="name_error" class="text-danger m-0 p-0"></span></br>
                                <input class="lis" type="email" name="mail" value="" size="40"  placeholder="Enter Your Mail">
                                <span id="email_error" class="text-danger m-0 p-0"></span></br>
                                <input class="lis" type="tel" name="tel" value="" size="40" aria-invalid="false" placeholder="Enter Your Mobile Number">
                                <span id="tel_error" class="text-danger m-0 p-0"></span></br>
                                <input class="lis" type="text" name="pack" value="" size="40" aria-invalid="false" placeholder="Your Insurance Pack">
                                <span id="pack_error" class="text-danger m-0 p-0"></span></br>
                                <select class="lis" id="comp" name = "comp">
                                    <option >Select Insurance</option>

                        <?php
                        foreach($company as $companies){
                            echo "<option value='".$companies['id']."'>".$companies['insurance']."</option>";
                        }
                        ?>
                                                </select>
                                                <span id="comp_error" class="text-danger m-0 p-0"></span></br>
                                <textarea class="lis" name="text" cols="40" rows="3"  aria-invalid="false" placeholder="Brief Requirement"></textarea>
                                <span id="text_error" class="text-danger m-0 p-0"></span></br>
                                <input type="submit" name="formSubmit"  class="bu"  />
<?php echo form_close(); ?>
                         
                        </div>

                    </div>  
                    <div class="col-lg-5 col-xs-12" style="padding: 0;">
                        <div class="container contact-info">
                            <div class="uper-info">
                                <p>If you prefer a more tangible form of communication we're here:</p>
                                <hr class="style1">
                            </div>
                           
                                <div class="container">
                                  
                                    <div class="row">
                                      <div class="col-md-12 col-12">
                                        
                                        <div class="row conn">
                                            <div class="col-md-2">
                                            <i class="fa fa-map-marker" style="font-size: 35px; color: rgb( 227, 31, 36 );" aria-hidden="true"></i>
                                            </div>
                                            <div class="col-md-10">
                                                
                                            
                                                   
                                                        <p style="color: grey;">Reach us on our</p>
                                                        <h4>Office</h4>
                                                        <p style="color: grey;">Ground Floor,  Rajmahal Complex, Opp. PLA Petrol Pump, Delhi Road, Hisar Haryana 125001</p>
                                                  
                                                
                                            </div>
                                        </div>
                                        <div class="row conn">
                                            <div class="col-md-2">
                                            <i class="fa fa-phone" style="font-size: 35px; color: rgb( 227, 31, 36 );" aria-hidden="true"></i>
                                            </div>
                                            <div class="col-md-10">
                                            
                                            <p style="color: grey;">Give us a</p>
                                            <h4>Call</h4>
                                            <p style="color: grey;">+91 8950000000 </p>
                                            <p style="color: grey;">+91 9206244000 </p>
                                            </div>
                                          
                                        </div>
                                        <div class="row conn">
                                            <div class="col-md-2">
                                            <i class="fa fa-envelope" style="font-size: 35px; color: rgb( 227, 31, 36 );" aria-hidden="true"></i>
                                            </div>
                                            <div class="col-md-10">
                                            
                                            <p style="color: grey;">Drop an</p>
                                            <h4>Email</h4>
                                            <p style="color: grey;">Info@tirupatiinsurance.com</p>
                                            <p style="color: grey;">jagdish@tirupatiinsurance.com</p>
                                            </div>
                                          
                                        </div>


                                          
                          
                                          
                                       
                                      
                                        
                                          
                                          
                                     
                                      </div>
                                      
                                    </div>
                                 
                                </div>          
                              
                        </div>
                    </div>  
                </div>    
            </div>
        </div>
        <script>

    $("#contactFrm").submit(function(event){
	event.preventDefault();
	var post_url = $(this).attr("action"); 
	var request_method = $(this).attr("method"); 
	var form_data = $(this).serialize(); 
	
	$.ajax({
		url : post_url,
        type: request_method,
        dataType:"json",
        data : form_data, 
    }).done(function(response){ //
		if(response.error){
            console.log(response.name);
            $('#name_error').html(response.name);
            $('#email_error').html(response.mail);
            $('#tel_error').html(response.tel);
            $('#pack_error').html(response.pack);
            $('#comp_error').html(response.comp);
            $('#text_error').html(response.text);
        }
        if(!response.error){
            $('#success_m').html(response.success);
            $('.text-danger').html('');
            $('#contactFrm').trigger('reset');
        }
	});
});
</script>
       