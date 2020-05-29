<div class="shadow-lg mt-3 foot">
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
            <i class='fa fa-location-arrow' style="transform: rotate(45deg); color: white; background-color: black;"></i>
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
          
        <p class="reserved">@2020 Tirupati Insurance All Rights Reserved. Developed By <span><a href="#" class="lik">hisar fever.</a></span></p>
      </div>
    </section>  
  </body>  
</html>