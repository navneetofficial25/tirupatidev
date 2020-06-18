<?php
if(isset($_GET["id"]))
{
   $refer_id=$_GET["id"];
   setcookie('referid',$_GET["id"],time() + (86400 * 30), "/");
}
else if(isset($_COOKIE['referid'])){
	$refer_id=$_COOKIE['referid'];
}
else
{
   $referid="No Refer Id Present";
}
?>
<div class="d-inline-block container-fluid banner-padding" style="padding-bottom:30px;">
    <div class="container first ">
      
      <p style="margin-top:30px; margin-bottom:30px;"> <span class="save">Save Upto 75%</span> With Our Insurance Plans. </br> we have best Qoutes for you </p>
      
        <div class="flex justify-content-center">
          
        <a  href="<?php echo base_url()?>health-insurance">
          <div class="card">
            <div class="card-image text-center p-3">
              <img alt="Health Insurance" src="<?php echo base_url()?>assest/img/health-insurance.svg">

            </div>
    
            <div class="card-content text-center">
              <p> Health Insurance</p>
            </div>
          </div>
        </a>
        <a  href="<?php echo base_url(); ?>frontend/term">
          <div class="card">
            <div class="card-image text-center p-3">
              <img class="img-responsive" alt="Term Insurance" src="<?php echo base_url()?>assest/img/term.svg">

            </div>
    
            <div class="card-content">
              <p> Term Insurance</p>
            </div>
          </div>
        </a>
        <a href="<?php echo base_url();?>car-insurance">
          <div class="card">
            <div class="card-image text-center p-3">
            
              <img class="img-responsive" alt="Car Insurance" src="<?php echo base_url()?>assest/img/car-insurance.svg">

            </div>
    
            <div class="card-content">
              <p> Car Insurance</p>
            </div>
          </div>
        </a>
        <a href="<?php echo base_url()?>bike-insurance">
          <div class="card">
            <div class="card-image text-center p-3">
              <img class="img-responsive" alt="Bike Insurance" src="<?php echo base_url()?>assest/img/bike.svg">

            </div>
    
            <div class="card-content text-center">
              <p>Bike Insurance</p>
            </div>
          </div>
        </a>
        <a  href="<?php echo base_url(); ?>frontend/travel">
          <div class="card">
            <div class="card-image text-center p-3">
              <img class="img-responsive" alt="Travel Insurance" src="<?php echo base_url()?>assest/img/travel-insurance.svg">

            </div>
    
            <div class="card-content">
              <p>Travel Insurance</p>
            </div>
          </div>
        </a>

        </div>

     
      <p class="still my-3"><b>Still in Doubt? Why Don't We Speak On Call?</b></p> 
      <div class="row justify-content-center ">
        <div class="col-md-2 contact-width">
         <a href="tel:+918950000000"> <button>give us a call</button></a>
        </div>
        <div class="col-md-1">
          <div class="or">
                <p>or</p>
            </div>
        </div>
        <div class="col-md-2 contact-width">
          
          <button data-toggle="modal" data-target="#myModal" type="button" >get a call back</button> 
          
        </div>
    
    </div>
    </div>
  </div>
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header" style="background-color:rgb( 239, 69, 84 ); height:60px;">
          
          <h4>Get A Call Back</h4>
          
          <button type="button" class="close" data-dismiss="modal" style="outline:none;">&times;</button>
          
        </div>
        <div class="modal-body">
        <span id="success_message"></span>
        <form id="myForm">
          <input type="text" class="lis" id="pname" name="pname" placeholder="Enter Your Name">
          <span id="name_error" class="text-danger m-0 p-0"></span></br>
          <input type="text" class="lis" id="mob" name="mob" placeholder="Enter Mobile Number">
          <span id="mobile_error" class="text-danger m-0 p-0"></span></br>
           
          <select class="lis" id="services" name = "services">
                                    <option selected disabled>Select Insurance</option>

                        <?php
                        foreach($company as $companies){
                            echo "<option value='".$companies['id']."'>".$companies['insurance']."</option>";
                        }
                        ?>
                                                </select>
                                                <span id="list_error m-0 p-0" class="text-danger"></span> 
        </div>
        <div class="text-center">
        <input type="button"  id="formSubmit" value="submit" data-dismiss="modal">
                      </div>          
       </form>
      </div>
    </div>
  </div>
  
    <section class="why">
      <div class="container">
        <h3>Why <span style="color: rgb( 239, 69, 84 ); font-style: normal;">Tirupati insurance ?</span></h3></br>
        <p>we are an independent  agency and our first priority will always be our Customers, people, and businesses which we can help. we work with various insurance companies which offer diversity in plans and different coverage option. </p></br></br>
        <div class="container">    
          <div class="row">
          <div class="col-md-6 col-12">
              <div class="lft">
                <div class="point">
                  <img src="<?php echo base_url()?>assest/img/point.svg">
                
                  <p>Customized plans</p>
                </div>

                <div class="point">
                  <img src="<?php echo base_url()?>assest/img/point.svg">
                  <p>Risk Consulting</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-12 ">
              <div class="rgt ">
                <div class="point">
                  <img src="<?php echo base_url()?>assest/img/point.svg" >
                  <p>Dedicated Helpline</p>
                </div>
                <div class="point">
                  <img src="<?php echo base_url()?>assest/img/point.svg">
                  <p>Cost and Quality</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>          
    </section>
    
    <div class="d-inline-block container-fluid banner-padding">
      
      <div class="container brands py-5">
        <h1>brands we keep</h1>
        <div class="">
        <div id="carouselExampleIndicators1_1" class="carousel slide" data-ride="carousel" data-interval='false'>
						 <div class="carousel-inner ">
							<div class="carousel-item active ">
              <div class="flex justify-content-center ">
        <?php for($i=0; $i<4; $i++) {?>
          <div class="card">
            <div class="card-image">
            <img src="<?=$brandslogo[$i]->image;?>" >
            </div>
          </div>
        <?php } ?>
          </div>
          </div>
          <div class="carousel-item">
          <div class="flex justify-content-center ">
        <?php for($i=0; $i<4; $i++) {?>
          <div class="card">
            <div class="card-image">
            <img src="<?=$brandslogo[$i]->image;?>" >
            </div>
          </div>
        <?php } ?>
          </div>
          </div>
          </div>
          </div>
  

<!--          <div class="col-md">
            <div class="box">
            <img src="<?php echo base_url()?>assest/img/insurance-1582354125.jpg">
            </div>
          </div>
          <div class="col-md">
            <div class="box">
            <img src="<?php echo base_url()?>assest/img/Tata-AIA-Logojpg.jpg">
            </div>
          </div>
          <div class="col-md">
            <div class="box">
            <img src="<?php echo base_url()?>assest/img/insurance-1582354125.jpg" >
            </div>
          </div>
          <div class="col-md">
            <div class="box">
            <img src="<?php echo base_url()?>assest/img/Tata-AIA-Logojpg.jpg" >
            </div>
          </div>
          <div class="col-md">
            <div class="box">
            <img src="<?php echo base_url()?>assest/img/insurance-1582354125.jpg" >
            </div>
          </div>-->
        </div>
      </div>
    </div>
    <section class="review">
      
      <div class="container ">
        <h3>If we have already had the pleasure of assisting you then please</h3>
        <div class="row justify-content-center ">
          <div class="col-md-2 contact-width">
            <a target="_blank" href="https://g.page/r/CXcIyC-jkBOsEAI/review
"><button>review us</button> </a>
          </div>  
          <div class="col-md-1">
            <p class="or">or</p>
          </div>
          <div class="col-md-2 contact-width">
           <a target="_blank" href="https://g.page/r/CXcIyC-jkBOsEAI"><button>see review</button> </a> 
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
            </br> <a href="<?php echo base_url() ; ?>about-us "><button>Read more...</button></a>
          </div>
          <div class="col-md-4">
            <img src="<?php echo base_url()?>assest/img/2668181.png">
          </div>
        </div>
      </div>    
    </section>
    
   

    <script type="text/javascript">
$('#formSubmit').click(function() {
    var pname = $('#pname').val()
    var mob = $('#mob').val()
    var services = $('#services').val()
    $.ajax({
        url: "<?php echo base_url(); ?>home/callmodel",
        type: 'POST',
        dataType:"json",
        data:{'pname':pname,'services':services,'mob':mob},
        success: function(msg) {
         console.log(msg)
         if(msg.error){
           $('#name_error').html(msg.pname);
           $('#mobile_error').html(msg.mob);
           $('#list_error').html(msg.services);
         }
         if(!msg.error){
          $('#name_error').html('');
           $('#mobile_error').html('');
           $('#list_error').html('');
           $('#success_message').html(msg.success);
           $("#myForm").trigger("reset");
           setTimeout(function(){
            $('#success_message').html('');
            $('#myModal').modal('hide');
          
          }, 1500);
         }
        }
    });
    return false;
});
</script>
<script>
   $('.carousel').carousel({
  interval: 2000
})</script>
