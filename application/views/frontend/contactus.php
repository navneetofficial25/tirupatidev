
        <div class="contact-us">
            <div class="hdr">
                <div class="container">
                     <div class="banner-text text-center size-banner">
  <?phpprint_r ($companies);?>
                        <div class="contect fliter-heading">
                            <h1 style="margin-top:40px;"><span style="color:rgb( 239, 69, 84 ); mar-top:40px;">Enough about us,</span> <b>lets talk about you now !</b></h1>
                            <p style="font-size:18px; color:rgb( 95, 96, 96 );">We would love to work with you and are waiting for you to drop us a line! Please fill out the form below to get in touch with us or request for a quote here. We’ll be sure to get back to you as soon as we can.</p>
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
  <?php echo form_open(base_url( 'frontend/contactus/contactDetails'), array('method'=>'POST'));?>

                                <input class="lis" type="text" name="name" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Enter Your Name Here"></br>
                                <input class="lis" type="email" name="email" value="" size="40"  placeholder="Enter Your Mail"></br>
                                <input class="lis" type="tel" name="tel" value="" size="40" aria-invalid="false" placeholder="Enter Your Mobile Number"></br>
                                <input class="lis" type="text" name="pack" value="" size="40" aria-invalid="false" placeholder="Your Insurance Pack"></br>
                                <select class="lis" id="comp" name = "comp">
                                    <option >Select Insurance</option>

                        <?php
                        foreach($company as $companies){
                            echo "<option value='".$companies['id']."'>".$companies['insurance']."</option>";
                        }
                        ?>
                                                </select></br>
                                <textarea class="lis" name="text" cols="40" rows="3"  aria-invalid="false" placeholder="Brief Requirement"></textarea></br>
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
                                        
                                          <div class="address">
                                            <i class="fa fa-map-marker" style="font-size: 40px; color: rgb( 227, 31, 36 );" aria-hidden="true"></i>
                                            <div class="con-info">
                                            <p>Reach us on our</p>
                                            <h3>Office</h3>
                                            <p class="address-text">Ground Floor,  Rajmahal Complex, Opp. PLA Petrol Pump, Delhi Road, Hisar Haryana 125001</p>
                                            </div>
                                          </div>
                          
                                          <div class="address">
                                            <i class="fa fa-phone" style="font-size: 40px; color: rgb( 227, 31, 36 );" aria-hidden="true"></i>
                                            <div class="con-info">
                                            <p>Give us a</p>
                                            <h3>Call</h3>
                                            <p class="address-text">+91 925 400 0000 </p>
                                            <p class="address-text">+91 819 893 2943</p>
                                            </div>
                                          </div>
                                       
                                      </div>
                                      <div class="col-md-12 col-12 ">
                                        
                                          <div class="address">
                                            <i class="fa fa-envelope" style="font-size: 40px; color: rgb( 227, 31, 36 );" aria-hidden="true"></i>
                                            <div class="con-info">
                                            <p>Drop an</p>
                                            <h3>Email</h3>
                                            <p class="address-text">hisarfever@gmail.com</p>
                                            <p class="address-text">vikaspoonia17@gmail.com</p>
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
       