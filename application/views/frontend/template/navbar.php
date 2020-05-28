<body>
    <div class="top-nav">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <p class="info">+91 8950000000 <span class="b "> | </span> <span class="c">Info@tirupatiinsurance.com</span></p>
          </div>
          
          <div class="col-md-6 ">
            <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" >
              <div class="container">
                <div class="navbar-collapse collapse justify-content-end" >
                  <ul class="navbar-nav ">
                    <li class="nav-item">
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
                      </li>
                    <li class="nav-item">
                      <h4 class="ri"> | </h4>
                    </li>
                    <li class="nav-item">
                      <p class="refer">Refer and Earn</p>
                      <img src="<?php echo base_url();?>assest/img/s.png" >
                    </li>
                    <li class="nav-item">
                      
                      <img src="<?php echo base_url();?>assest/img/s.png" >
                    </li>
                  </ul>
                </div>
              </div>
            </nav>  
          </div> 
        </div>
      </div>
    </div>
    <nav class="navbar navbar-b navbar-trans navbar-expand-md bg-white nav">
      
      <a class="navbar-brand " href="<?php echo base_url();?>"><img src="<?php echo base_url(); ?>assest/img/logo.jpg" alt="Eniacoder"  ></a>
      <button class="navbar-toggler navbar-dark  bbb " type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="container">
        <div class="navbar-collapse collapse justify-content-end" id="collapsibleNavbar" >
          <ul class="navbar-nav blk">
            <li class="nav-item">
              
              <p> | <span><a class="nav-link  active" href="#">Home</a></span></p>
            </li>
            <li class="nav-item">
            
              <p> | <span><a class="nav-link" href="#">about us</a></span></p>
            </li>
            <li class="nav-item">
            
              <p> | <span><a class="nav-link " href="#">services & solutions</a></span></p>
            </li>
            <li class="nav-item">
              
              <p> | <span><a class="nav-link " href="#">blogs</a></span></p>
            </li>
            <li class="nav-item">
              
              <p> | <span><a class="nav-link " href="#">careers</a></span></p>
            </li>
            <li class="nav-item">
              
              <p> | <span><a class="nav-link " href="#">Contact us</a></span> </p>
            </li>
          </ul>
        </div>
      </div>
    </nav>