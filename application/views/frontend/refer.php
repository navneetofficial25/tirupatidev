<?php
if(!isset($_SESSION["referid"]))
{
    $button='<input type="submit" name="formSubmit" onclick="openLoginModal();" value="Genrate Link" class="bu" />';
}
else
{
    $button='<input class="lis" type="tel" name="email" value="'.base_url().'?id='.$_SESSION["referid"].'"size="40" aria-invalid="false" placeholder="Your Email" disabled></br>
    <input type="submit" name="formSubmit" value="Copy Link" class="bu"  />';
}
?>
        <div class="refer-top" style="background-image: url(<?php echo base_url();?>assest/img/refer.jpg)">
            
            <div class="overlay2">
                <div class="container" >
                    <h2>Good Friends Share!</h2>
                    <p>Get your friend to try their home interiors & get 15,000!</p>
                </div>
                <div class="refer-form">
                <div class="container refer">
                    <div class="row">
                          
                        <div class="col-lg-6 col-xs-12" style="padding-right: 20px;">
                            <h5>If you have someone particular in mind...</h5>
                            <div class="group-form">
                                <div class="screen-reader-response" aria-live="polite"></div>
                                <form action="#" method="post" >
                                    <input class="lis" type="text" name="name" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Your Friend's Name " required></br>
                                    <input class="lis" type="email" name="email" value="" size="40"  placeholder="Your Friend's Mail" required></br>
                                    <input class="lis" type="tel" name="tel-331" value="" size="40" aria-invalid="false" placeholder="Your Friend's Phone Number" required></br>
                                    
                                    <select class="lis" class="lis" required>
                                        <option >Select City</option>
                                        <option value="#">A</option>
                                        <option value="#">B</option>
                                        <option value="#">C</option>
                                        <option value="#">D</option>
                                    </select></br>
                                    <input class="lis" type="tel" name="text-677" value="" size="40" aria-invalid="false" placeholder="Your Phone" required></br>
                                    <input type="submit" value="Send Invite" class="bu"  />
                                </form>    
                            </div>
                        </div>
                   
                            
                     
                        <div class="col-lg-6 col-xs-12">
                            
                            <h5>Generate your referral link:</h5>
                            <div class="group-form">
                                <?php echo $button; ?>
                            </div>
                            <h6 style="margin-top:30px; color:rgb( 190, 190, 190 );">And Shared Via:</h6>
                            <div class="text-center">
                                <a href="#" class="fa fa-facebook"></a>
                                <a href="#" class="fa fa-twitter"></a>
                                <a href="#" class="fa fa-whatsapp"></a>
                            </div>
                        </div>  
                    </div>    
                </div>
                </div>
            </div>
        </div>

    