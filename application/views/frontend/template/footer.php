<div class="foot">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <p class="get">Tirupati insaurance</p>
            <hr class="style1">
            <p class="we">we are an independent agency and our first priority will always be our coustomers, people, and businesses which we can help. we work with various insurance companies which offer diversity in plans and different coverage option. </p></br></br>
          </div>
          <div class="col-md-3">
            <p class="get">products</p>
            <hr class="style1">
            <div class="links">
              <a href="#">Health insurance</a></br>
              <a href="#">Term insurance</a></br>
              <a href="#">Bike insurance</a></br>
              <a href="#">Car insurance</a></br>
              <a href="#">Travel insurance</a></br>
            </div>
          </div>
          <div class="col-md-3">
            <p class="get">quick links</p>
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
          <div class="col-md-3">
            <p class="get">get in touch</p>
            <hr class="style1">
            <input type="email" name="email" placeholder="Email here..." >
            <img src="<?php echo base_url()?>assest/img/right-arrow.svg">
            <p class="raj">Rajmahal Complex,Opp-PLA Petrol Pump,Delhi Road, Hisar-125001</p>
            <p><span><img src="<?php echo base_url()?>assest/img/call (2).png"></span> 8950000000</p>
            <p><span><img src="<?php echo base_url()?>assest/img/call (2).png"></span> info@tirupatiinsurance.com</p>
          </div>
        </div>
      </div>    
    </div> 
    <section class="last"> 
      <div class="container">
        <p>follow us on</p>
        <div class="row">
          <div class="col-md" >
            <div class="res">
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
          </div>
        </div>
        <p class="reserved">@2020 Tirupati Insurance All Rights Reserved. Developed By <span><a href="#" class="lik">hisar fever.</a></span></p>
      </div>
    </section> 
  </body>  
</html>