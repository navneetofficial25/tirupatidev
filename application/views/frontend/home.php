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
							$socials_datas= $socials_data[0];
							//print_r($socials_datas);
						?>            
                      <a href="https://<?=$socials_datas->youtube_url;?>" target="_blank"> <i class="fa fa-youtube "></i></a>
                      <a href="https://<?=$socials_datas->twitter_url;?>" target="_blank"><i class="fa fa-twitter"></i></a>
                      <a href="https://<?=$socials_datas->linkedin_url;?>" target="_blank"><i class="fa fa-linkedin"></i></a>
                      <a href="https://<?=$socials_datas->facebook_url;?>" target="_blank"><i class="fa fa-facebook"></i></a>
                      <a href="https://<?=$socials_datas->instagram_url;?>" target="_blank"><i class="fa fa-instagram"></i></a>
                      <a href="https://<?=$socials_datas->pinterest_url;?>" target="_blank"><i class="fa fa-pinterest"></i></a>
                      </li>
                    <li class="nav-item">
                      <h4 class="ri"> | </h4>
                    </li>
                    <li class="nav-item">
                      <p class="refer">Refer and Earn</p>
                      <img src="assest/img/s.png" >
                    </li>
                    <li class="nav-item">
                      
                      <img src="assest/img/s.png" >
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
      
      <a class="navbar-brand " href="index.html"><img src="assest/img/logo.jpg" alt="Eniacoder"  ></a>
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
    <div class="first">
      <p> <span class="save">Save Upto 75%</span> With Our Insurance Plans. </br> we have best quates for you </p>
      <div class="container">
        <div class="row">
          <div class="col">
            <img src="assest/img/health-insurance.svg" >
            <p>health insurance</p>
          </div>
          <div class="col">
            <img src="assest/img/term.svg" >
            <p>term insurance</p>
          </div>
          <div class="col">
            <img src="assest/img/car-insurance.svg" >
            <p>car insurance</p>
          </div>
          <div class="col">
            <img src="assest/img/car-insurance.svg" >
            <p>bike insurance</p>
          </div>
          <div class="col">
            
            <img src="assest/img/travel-insurance.svg" >
            <p>travle insurance</p>
            
          </div>
          
        </div>    
      </div>
      <p class="still">Still in Doubt? Why Don't We Speak On Call?</p> 
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <button class="give">give us a call</button> 
          </div>  
          <div class="col-md-2">
            <p class="or">or</p>
          </div>
          <div class="col-md-5">
            <button class="take">get a call back</button> 
          </div> 
        </div>
      </div> 
    </div>
    <section class="why">
      <div class="container">
        <h3>Why <span style="color: rgb( 239, 69, 84 ); font-style: normal;">Tirupati insurance ?</span></h3></br>
        <p>we are an independent  agency and our first priority will always be our coustomers, people, and businesses which we can help. we work with various insurance companies which offer diversity in plans and different coverage option. </p></br></br>
        <div class="container">    
          <div class="row">
            <div class="col-md-2">
              <img src="assest/img/icon-3.png" >
            </div>
            <div class="col-md-4">
              <p class="se">Coustomized plans</p>
            </div>
            <div class="col-md-2">
              <img src="assest/img/icon-3.png"  >
            </div>   
            <div class="col-md-4">
              <p class="se">Dedicated Helpline</p>
            </div>
            <div class="col-md-2">
              <img src="assest/img/icon-3.png" >
            </div>
            <div class="col-md-4">
              <P class="se">Risk Consulting</P>
            </div>
            <div class="col-md-2">
              <img src="assest/img/icon-3.png" >
            </div>
            <div class="col-md-4">
              <p class="se">Cost and Quality</p>
            </div>
          </div>
        </div>
      </div>          
    </section>
    <section class="brands">
      <h1>brands we keep</h1>
      <div class="container">
        <div class="row">
          
    <?php  $keys=0; foreach($brandslogo as $logo){
								if($keys==0){echo '<li>';}
								?>
          <div class="col-md">
            <div class="box">
            <img src="<?=$logo->image;?>" >
            </div>
          </div>
        <?php  $keys++; if($keys==6){echo '</li>';}  }?>    

<!--          <div class="col-md">
            <div class="box">
            <img src="assest/img/insurance-1582354125.jpg">
            </div>
          </div>
          <div class="col-md">
            <div class="box">
            <img src="assest/img/Tata-AIA-Logojpg.jpg">
            </div>
          </div>
          <div class="col-md">
            <div class="box">
            <img src="assest/img/insurance-1582354125.jpg" >
            </div>
          </div>
          <div class="col-md">
            <div class="box">
            <img src="assest/img/Tata-AIA-Logojpg.jpg" >
            </div>
          </div>
          <div class="col-md">
            <div class="box">
            <img src="assest/img/insurance-1582354125.jpg" >
            </div>
          </div>-->
        </div>
      </div>
    </section>
    <section class="review">
      
      <div class="container">
        <h3>If we have already had the pleasure of assisting you then please</h3>
        <div class="row">
          <div class="col-md-5">
            <button class="give">review us</button> 
          </div>  
          <div class="col-md-2">
            <p class="or">or</p>
          </div>
          <div class="col-md-5">
            <button class="take">see review</button> 
          </div> 
        </div>
        <h3>to see what our clients feel about us</h3>
      </div> 
      
    </section>
    <section class="about">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h3>About <span style="color: rgb( 239, 69, 84 ); font-style: normal;">Tirupati insurance</span></h3></br>
            <p>we are an independent agency and our first priority will always be our coustomers, people, and businesses which we can help. we work with various insurance companies which offer diversity in plans and different coverage option. </p>
            <p>Our experts browse through hundreds of option before preseting the option which suits you best. We take into account deffernt fectors before selecting the best policy for you.</p>
            </br> <button>Read more...</button>
          </div>
          <div class="col-md-4">
            <img src="assest/img/2668181.png">
          </div>
        </div>
      </div>    
    </section>  
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
            <img src="assest/img/right-arrow.svg">
            <p class="raj">Rajmahal Complex,Opp-PLA Petrol Pump,Delhi Road, Hisar-125001</p>
            <p><span><img src="assest/img/call (2).png"></span> 8950000000</p>
            <p><span><img src="assest/img/call (2).png"></span> info@tirupatiinsurance.com</p>
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
                      <a href="https://<?=$socials_datas->youtube_url;?>" target="_blank"> <i class="fa fa-youtube "></i></a>
                      <a href="https://<?=$socials_datas->twitter_url;?>" target="_blank"><i class="fa fa-twitter"></i></a>
                      <a href="https://<?=$socials_datas->linkedin_url;?>" target="_blank"><i class="fa fa-linkedin"></i></a>
                      <a href="https://<?=$socials_datas->facebook_url;?>" target="_blank"><i class="fa fa-facebook"></i></a>
                      <a href="https://<?=$socials_datas->instagram_url;?>" target="_blank"><i class="fa fa-instagram"></i></a>
                      <a href="https://<?=$socials_datas->pinterest_url;?>" target="_blank"><i class="fa fa-pinterest"></i></a>
            </div>
          </div>
        </div>
        <p class="reserved">@2020 Tirupati Insurance All Rights Reserved. Developed By <span><a href="#" class="lik">hisar fever.</a></span></p>
      </div>
    </section> 
  </body>  
</html>