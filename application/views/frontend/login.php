<div class="refer-top" style="background-image: url(<?php echo base_url();?>assest/img/refer.jpg)">
            
            <div class="overlay2">
                <div class="container" >
                    <h2>Login & Sign up</h2>
                    <p>If you are not registred with us Please sign up</p>
                </div>
                <div class="refer-form">
                <div class="container refer">
                    <div class="row">
                          
                        <div class="col-lg-6 col-xs-12" style="padding-right: 20px;">
                            <h5>New User, Sign up here</h5>
                            <div class="group-form">
                                <div class="screen-reader-response" aria-live="polite"></div>
                                <form action="login/signup" method="post" >
                                    <input class="lis" type="email" name="email" value="" size="40"  placeholder="Enter EMail" required></br>
                                    <input class="lis" type="password" name="password" value="" size="40" aria-invalid="false" placeholder="Password" required></br>
                                    <input type="submit" value="Signup" class="bu"  />
                                </form>    
                            </div>
                        </div>
                   
                            
                     
                        <div class="col-lg-6 col-xs-12">
                            
                            <h5>Already registred Login here</h5>
                            <div class="group-form">
                            <form method="post" action="login/login">
                                <input class="lis" type="tel" name="email" value="" size="40" aria-invalid="false" placeholder="Your Email" required></br>
                                <input class="lis" type="password" name="password" value="" size="40" aria-invalid="false" placeholder="Password" required></br>
                                <input type="submit" name="formSubmit" value="Login" class="bu"  />
                            </form>    
                            </div>
                        </div>  
                    </div>    
                </div>
                </div>
            </div>
        </div>

    