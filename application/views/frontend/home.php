<div class="d-inline-block container-fluid banner-padding" style="padding-bottom:30px;">
    <div class="container first ">
      
      <p style="margin-top:30px; margin-bottom:30px;"> <span class="save">Save Upto 75%</span> With Our Insurance Plans. </br> we have best quates for you </p>
      <div class="flex">
        <a  href="<?php echo base_url()?>frontend/healthinsurance">
          <div class="card">
            <div class="card-image">
              <img class="img-responsive" alt="Health Insurance" src="<?php echo base_url()?>assest/img/health-insurance.svg">

            </div>
    
            <div class="card-content">
              <p> Health Insurance</p>
            </div>
          </div>
        </a>
        <a  href="#">
          <div class="card">
            <div class="card-image">
              <img class="img-responsive" alt="Term Insurance" src="<?php echo base_url()?>assest/img/term.svg">

            </div>
    
            <div class="card-content">
              <p> Term Insurance</p>
            </div>
          </div>
        </a>
        <a href="<?php echo base_url();?>frontend/carinsurance">
          <div class="card">
            <div class="card-image">
            
              <img class="img-responsive" alt="Car Insurance" src="<?php echo base_url()?>assest/img/car-insurance.svg">

            </div>
    
            <div class="card-content">
              <p> Car Insurance</p>
            </div>
          </div>
        </a>
        <a href="<?php echo base_url()?>frontend/bikeinsurance">
          <div class="card">
            <div class="card-image">
              <img class="img-responsive" alt="Bike Insurance" src="<?php echo base_url()?>assest/img/car-insurance.svg">

            </div>
    
            <div class="card-content">
              <p>Bike Insurance</p>
            </div>
          </div>
        </a>
        <a  href="#">
          <div class="card">
            <div class="card-image">
              <img class="img-responsive" alt="Travle Insurance" src="<?php echo base_url()?>assest/img/travel-insurance.svg">

            </div>
    
            <div class="card-content">
              <p>Travle Insurance</p>
            </div>
          </div>
        </a>
      </div>
      <p class="still">Still in Doubt? Why Don't We Speak On Call?</p> 
      <div class="row ">
        <div class="col-md-5 text-center">
          <button >give us a call</button>
        </div>
        <div class="col-md-2">
          <div class="or">
                <p>or</p>
            </div>
        </div>
        <div class="col-md-5 text-center">
          
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
          <input type="text" class="lis" id="pname" name="pname"placeholder="Enter Your Name"></br>
          <input type="text" class="lis" id="mob" name="mob" placeholder="Enter Mobile Number"></br>
           
          <select class="lis" id="services" name = "services">
                                    <option >Select Insurance</option>

                        <?php
                        foreach($company as $companies){
                            echo "<option value='".$companies['id']."'>".$companies['insurance']."</option>";
                        }
                        ?>
                                                </select> 
        </div>
        <div class="text-center">
        <input type="button"  id="formSubmit" value="submit" data-dismiss="modal">
                      </div>
                      <?php
      if($this->session->flashdata('success'))
      {
      echo '<div class="alert alert-success">'.$this->session->flashdata('success').'</div>';
      }
      else if($this->session->flashdata('error'))
      {
      echo '<div class="alert alert-danger">'.$this->session->flashdata('error').'</div>';
      }


      ?>                         

      </div>
    </div>
  </div>
  
    <section class="why">
      <div class="container">
        <h3>Why <span style="color: rgb( 239, 69, 84 ); font-style: normal;">Tirupati insurance ?</span></h3></br>
        <p>we are an independent  agency and our first priority will always be our coustomers, people, and businesses which we can help. we work with various insurance companies which offer diversity in plans and different coverage option. </p></br></br>
        <div class="container">    
          <div class="row">
          <div class="col-md-6 col-12">
              <div class="lft">
                <div class="point">
                  <img src="<?php echo base_url()?>assest/img/icon-3.png">
                
                  <p>Coustomized plans</p>
                </div>

                <div class="point">
                  <img src="<?php echo base_url()?>assest/img/icon-3.png">
                  <p>Risk Consulting</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-12 ">
              <div class="rgt ">
                <div class="point">
                  <img src="<?php echo base_url()?>assest/img/icon-3.png" >
                  <p>Dedicated Helpline</p>
                </div>
                <div class="point">
                  <img src="<?php echo base_url()?>assest/img/icon-3.png">
                  <p>Cost and Quality</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>          
    </section>
    
    <div class="d-inline-block container-fluid banner-padding">
      
      <div class="container brands">
        <h1>brands we keep</h1>
        <div class="flex">
          
    <?php   foreach($brandslogo as $logo){
	
								?>
          <div class="card">
            <div class="card-image">
            <img src="<?=$logo->image;?>" >
            </div>
          </div>
        <?php   }?>    

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
      
      <div class="container">
        <h3>If we have already had the pleasure of assisting you then please</h3>
        <div class="row">
          <div class="col-md-5 text-center">
            <button>review us</button> 
          </div>  
          <div class="col-md-2">
            <p class="or">or</p>
          </div>
          <div class="col-md-5 text-center">
            <button>see review</button> 
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
            <img src="<?php echo base_url()?>assest/img/2668181.png">
          </div>
        </div>
      </div>    
    </section>
    <?php $this->load->view('frontend/Template/footer.php') ?>

    <script type="text/javascript">
$('#formSubmit').click(function() {
    var pname = $('#pname').val()
    var mob = $('#mob').val()
    var services = $('#services').val()
    $.ajax({
        url: "<?php echo base_url(); ?>home/callmodel",
        type: 'POST',
        data:{'pname':pname,'services':services,'mob':mob},
        success: function(msg) {
           // console.log(data);
            if (msg == 'YES')
                $('#alert-msg').html('<div class="alert alert-success text-center">Your mail has been sent successfully!</div>');
            else if (msg == 'NO')
                $('#alert-msg').html('<div class="alert alert-danger text-center">Error in sending your message! Please try again later.</div>');
            else
                $('#alert-msg').html('<div class="alert alert-danger">' + msg + '</div>');
        }
    });
    return false;
});
</script>

