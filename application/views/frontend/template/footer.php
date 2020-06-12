<div class="shadow-lg foot">
      <div class="container">
        <div class="row">
        <?php
							$sitedata=Utility::sitedata();
						//	print_r($sitedata);
            ?>
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <h5><?=$sitedata->heading;?></h5>
            <hr class="style1">
            <p><?=$sitedata->description;?></p>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <h5>products</h5>
            <hr class="style1">
            <div class="links">
              <a href="#">Health insurance</a></br>
              <a href="#">Term insurance</a></br>
              <a href="#">Bike insurance</a></br>
              <a href="#">Car insurance</a></br>
              <a href="#">Travel insurance</a></br>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <h5>quick links</h5>
            <hr class="style1">
            <div class="links">
              <a href="#">covid-19 update/assitance</a></br>
              <a href="#">blog</a></br>
              <a href="#">privacy</a></br>
              <a href="#">terms and condition</a></br>
              <a href="#">code of coduct</a></br>
              <a href="#">agent panel</a></br>
              <a href="#">site map</a></br>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <h5>get in touch</h5>
            <hr class="style1">
            <input type="email" name="email" placeholder="Email here..." >
            <span class=" arrow"><a class="fa fa-location-arrow" ></a></span>
            <p>Rajmahal Complex,Opp-PLA Petrol Pump,Delhi Road, Hisar-125001</p>
            <p><i class="fa fa-phone" style="margin-right: 7px; font-size: 20px;"></i> 8950000000</p>
            <p><i class="fa fa-envelope" style="margin-right: 7px; font-size: 20px;"></i> info@tirupatiinsurance.com</p>
          </div>
        </div>
      </div>    
    </div> 
    <section class="last"> 
      <div class="container">
        <p>follow us on</p>
       
          
            <div class="text-center">
            <?php
							$socials_datas=Utility::getsocial();
							//print_r($socials_datas);
            ?>   
						<?php if($socials_datas->youtube_url) {?>
              
                      <a href="https://<?=$socials_datas->youtube_url;?>" target="_blank"> <i class="fa fa-youtube "></i></a><?php }?>
						<?php if($socials_datas->twitter_url) {?>
                      <a href="https://<?=$socials_datas->twitter_url;?>" target="_blank"><i class="fa fa-twitter"></i></a><?php }?>
						<?php if($socials_datas->linkedin_url) {?>
                      <a href="https://<?=$socials_datas->linkedin_url;?>" target="_blank"><i class="fa fa-linkedin"></i></a><?php }?>
						<?php if($socials_datas->facebook_url) {?>
                      <a href="https://<?=$socials_datas->facebook_url;?>" target="_blank"><i class="fa fa-facebook"></i></a><?php }?>
						<?php if($socials_datas->instagram_url) {?>
                      <a href="https://<?=$socials_datas->instagram_url;?>" target="_blank"><i class="fa fa-instagram"></i></a><?php }?>
						<?php if($socials_datas->pinterest_url) {?>
                      <a href="https://<?=$socials_datas->pinterest_url;?>" target="_blank"><i class="fa fa-pinterest"></i></a><?php }?>
            </div>

        <p class="reserved">@<?php echo date("Y"); ?> Tirupati Insurance All Rights Reserved. Developed By <span><a href="#" class="lik">hisar fever.</a></span></p>
      </div>
    </section>  
    <div class="modal fade login" id="loginModal">
		      <div class="modal-dialog login animated">
    		      <div class="modal-content">
    		         <div class="modal-header signup">
                   <h4 class="modal-title">Login with</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="box">
                             <div class="content">
                                <div class="division">
                                    <div class="line l"></div>
                                      <span>or</span>
                                    <div class="line r"></div>
                                </div>
                                <div class="error"></div>
                                <div class="form loginBox">
                                    <form method="" action="" accept-charset="UTF-8">
                                    <input id="email" class="form-control" type="text" placeholder="Email" name="email">
                                    <input id="password" class="form-control" type="password" placeholder="Password" name="password">
                                    <input class="btn btn-default btn-login" type="button" value="Login" onclick="loginAjax()">
                                    </form>
                                </div>
                             </div>
                        </div>
                        <div class="box">
                            <div class="content registerBox" style="display:none;">
                             <div class="form">
                                <form method="" html="{:multipart=>true}" data-remote="true" action="" accept-charset="UTF-8">
                                <input id="email" class="form-control" type="text" placeholder="Email" name="email">
                                <input id="password" class="form-control" type="password" placeholder="Password" name="password">
                                <input id="password_confirmation" class="form-control" type="password" placeholder="Repeat Password" name="password_confirmation">
                                <input class="btn btn-default btn-register" type="button" value="Create account" name="commit">
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="forgot login-footer">
                            <span>Looking to
                                 <a href="javascript: showRegisterForm();">create an account</a>
                            ?</span>
                        </div>
                        <div class="forgot register-footer" style="display:none">
                             <span>Already have an account?</span>
                             <a href="javascript: showLoginForm();">Login</a>
                        </div>
                    </div>
    		      </div>
<script>
/*
 *
 * login-register modal
 * Autor: Creative Tim
 * Web-autor: creative.tim
 * Web script: https://creative-tim.com
 * 
 */
function showRegisterForm(){
    $('.loginBox').fadeOut('fast',function(){
        $('.registerBox').fadeIn('fast');
        $('.login-footer').fadeOut('fast',function(){
            $('.register-footer').fadeIn('fast');
        });
        $('.modal-title').html('Register with');
    }); 
    $('.error').removeClass('alert alert-danger').html('');
       
}
function showLoginForm(){
    $('#loginModal .registerBox').fadeOut('fast',function(){
        $('.loginBox').fadeIn('fast');
        $('.register-footer').fadeOut('fast',function(){
            $('.login-footer').fadeIn('fast');    
        });
        
        $('.modal-title').html('Login with');
    });       
     $('.error').removeClass('alert alert-danger').html(''); 
}

function openLoginModal(){
    showLoginForm();
    setTimeout(function(){
        $('#loginModal').modal('show');    
    }, 230);
    
}
function openRegisterModal(){
    showRegisterForm();
    setTimeout(function(){
        $('#loginModal').modal('show');    
    }, 230);
    
}

function loginAjax(){
    /*   Remove this comments when moving to server
    $.post( "/login", function( data ) {
            if(data == 1){
                window.location.replace("/home");            
            } else {
                 shakeModal(); 
            }
        });
    */

/*   Simulate error message from the server   */
     shakeModal();
}

function shakeModal(){
    $('#loginModal .modal-dialog').addClass('shake');
             $('.error').addClass('alert alert-danger').html("Invalid email/password combination");
             $('input[type="password"]').val('');
             setTimeout( function(){ 
                $('#loginModal .modal-dialog').removeClass('shake'); 
    }, 1000 ); 
}

</script>

</html>