<?php
if(!isset($_SESSION["referid"]))
{
    $button=' <li   class="  nav-item">
    <a  data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();" class="nav-link">
    Login/Signup
    </a>  
  </li> ';
}
else{
  $button='<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  '.$_SESSION["name"].'
  </a>
  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
    <a class="dropdown-item" href="'.base_url().'/frontend/user/dashboard">Dashboard</a>
    <a class="dropdown-item" href="'.base_url().'frontend/logout">Log Out</a>
  </div>
</li>   '; 
}
?>
<body>
    <nav class="top-nav">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
          <p class="font m-0 info">+91 8950000000 | Info@tirupatiinsurance.com</p>
          </div>
          
          <div class="col-md-6 px-5 show m-0 ">
            <div class="d-flex flex-row-reverse">
              <div class="list ">
              
                  <ul class="nav  text  ">
                    <li class="nav-item nav-top">
                    <?php
							$socials_datas=Utility::getsocial();
							//print_r($socials_datas);
            ?>            
						<?php if($socials_datas->youtube_url) {?>
            
                      <a href="https://<?=$socials_datas->youtube_url;?>" target="_blank"> <i class="ico fa fa-youtube "></i></a><?php }?>
						<?php if($socials_datas->twitter_url) {?>
                      <a href="https://<?=$socials_datas->twitter_url;?>" target="_blank"><i class=" ico fa fa-twitter"></i></a><?php }?>
						<?php if($socials_datas->linkedin_url) {?>
                      <a href="https://<?=$socials_datas->linkedin_url;?>" target="_blank"><i class="ico fa fa-linkedin"></i></a><?php }?>
						<?php if($socials_datas->facebook_url) {?>
                      <a href="https://<?=$socials_datas->facebook_url;?>" target="_blank"><i class="ico fa fa-facebook"></i></a><?php }?>
						<?php if($socials_datas->instagram_url) {?>
                      <a href="https://<?=$socials_datas->instagram_url;?>" target="_blank"><i class="ico fa fa-instagram"></i></a><?php }?>
						<?php if($socials_datas->pinterest_url) {?>
                      <a href="https://<?=$socials_datas->pinterest_url;?>" target="_blank"><i class="ico fa fa-pinterest"></i></a><?php }?> <span style="color:white; margin-right:5px;" >|</span>
                      </li>
                    
                    <li class="nav-item earn nav-top">
                      
                      <a style="text-decoration: none;" href="<?php echo base_url(); ?>refer-earn"><p class="refer font m-0">Refer and Earn</p></a>
                    </li>
                    
                  </ul>
                </div>
              </div>
              
          </div> 
        </div>
      </div>
</nav>
    <header class="header-area bg-white meu ">

      <div class="navbar-area ">

          <div class="container">

              <div class="row">

                  <div class="col-lg-12">

                      <nav class="navbar navbar-expand-lg">

                          <div class="logo">
                          <a class="custom-logo-link " rel="home" href="<?php echo base_url();?>"><img width="133" height="55" src="<?php echo base_url(); ?>assest/img/logo.jpg" alt="Tirupati insurance" class="custom-logo" ></a>
                             
                                  <a class="navbar-brand"  href="#" rel="home">

                                        

                                  </a>

                                  
                          </div>

                          

                          <button class="navbar-toggler nav-dark bbb" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fa fa-bars"></i>
                              

                          </button>



                          <div id="navbarSupportedContent" class="collapse navbar-collapse sub-menu-bar">
                            <ul id="nav" class="navbar-nav ml-auto ">
                            <li   class="  nav-item m-1 brk ">
                                |
                              </li>
                              <li class=" nav-item">
                                <a title="Home" href="<?php echo base_url(); ?>" class="nav-link">
                                 Home
                                </a>
                              </li>
                              <li   class="  nav-item m-1 brk ">
                                |
                              </li>
                              <li class=" nav-item">
                                <a title="About Us" href="<?php echo base_url(); ?>about-us" class="nav-link">
                                About Us
                                </a>
                              </li>
                              <li   class="  nav-item m-1 brk ">
                                |
                              </li>
                              <li class=" nav-item">
                                <a title="Services & solutions" href="<?php echo base_url(); ?>frontend/service" class="nav-link">
                                Services & solutions
                                </a>
                              </li>
                              <li   class="  nav-item m-1 brk ">
                                |
                              </li>
                              <li class=" nav-item">
                                <a title="Blogs" href="<?php echo base_url(); ?>frontend/blog" class="nav-link">
                               Blogs
                                </a>
                              </li>
                              <li   class="  nav-item m-1 brk ">
                                |
                              </li>
                              <li class=" nav-item ">
                                <a title="career" href="<?php echo base_url(); ?>frontend/career" class="nav-link">
                                careers
                                </a>
                              </li>
                              <li   class="  nav-item m-1 brk ">
                                |
                              </li>
                              <li   class="  nav-item">
                              
                                <a title="Contact Us" href="<?php echo base_url(); ?>contact-us" class="nav-link">
                                Contact Us
                                </a>
                                 
                              </li>
                              <li   class="  nav-item m-1 brk " >
                                |
                              </li>
                      <?php echo $button; ?>
                           
                            </ul>
                          </div>
                          
                        




                      </nav> <!-- navbar -->

                  </div>

              </div> <!-- row -->

          </div> <!-- container -->

      </div> <!-- navbar area -->

  </header>
    