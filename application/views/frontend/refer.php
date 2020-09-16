<style>
    .step{
  width: 100%;
  height: auto;
  padding-top: 2rem;
  padding-bottom: 2rem;
}
.step h3{
    text-align: center;
    font-weight: 400;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

}
.step .flex {
  display: flex;
  flex-wrap: nowrap;
    margin-top: 3rem;
}
.step .flex i{
  font-size: 50px;
  margin-bottom: 1rem;
}
.step .flex p{
  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
  text-align: center;
}
.step .style1 {

border-top: 2px solid grey;
margin-top: 30px;

}
.log_refer{
    width: 100%;
    height: auto;
    padding-top: 3rem;
    padding-bottom: 3rem;
    background-color: rgba(237, 237, 237);
}
.log_refer h3{
    font-weight: 400;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    color: grey;
}
.log_refer a{
    text-decoration: none;
    transition: .5s;
}
.log_refer a:hover{
    color: rgb( 95, 96, 96 );
}
</style>
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
                    <p>Refer your friend to us and Earn Upto 50,000 per month</p>
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
                                    
                                    
                                    <input class="lis" type="text" name="city" value="" size="40" aria-invalid="false" placeholder="Enter City" required></br>
                                        
                                    
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

    <div class="step">
        <div class="container">
            <h3>in 3 Easy Steps</h3>
            
            <div class="flex justify-content-center">
                <div class="col-md-2">
                    
                    <center><i class="fa fa-users" aria-hidden="true"></i></center>
                    <p>Refer Your Friends</p>
                       
                </div>
                <div class="col-md-2">
                    
                        <hr class="style1">
                    
                </div>
                <div class="col-md-2">
                    
                    <center><i class="fa fa-shield" aria-hidden="true"></i></center>
                        <p>They Insured with Us</p>
                        
                    
                </div>
                <div class="col-md-2">
                    
                        <hr class="style1">
                    
                </div>
                <div class="col-md-2">
                    
                    <center><i class="fa fa-inr" aria-hidden="true"></i></center>
                        <p>We Pay You</p>
                    
                </div>
                

            </div>
            
        </div>
    </div>
    <div class="log_refer">
        <div class="container">
            <h3><span style="color: rgb( 239, 69, 84 );"><a data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();">Log in</a></span> to view referral bonus received.</h3>
        </div>
    </div>
    