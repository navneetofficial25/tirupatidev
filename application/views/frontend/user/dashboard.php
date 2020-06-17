<?php 
if(!isset($_SESSION["referid"]))
{
echo "<script>window.location.href='/insurance/';</script>";
}
else
{
  $earning=$_SESSION["ref_count"];
  $click=$_SESSION["earn"];
  $bank_acc=$_SESSION["bank_acc"];
  $ifsc=$_SESSION["ifsc"];
  $acc_name=$_SESSION["acc_name"];
}
?>
<style>


/* Style the tab */

.dash{
  width: 100%;
  height: auto;
  margin-top: 20px;
}
.tab {
 
 
  background-color:rgb( 44, 44, 44 );
  width: 100%;
  height: auto;
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: white;
  padding: 10px 0px 10px 0px;
  width: 100%;
  border: none;
  outline: none;
  text-align: center;
  cursor: pointer;
  transition: 0.2s;
  font-size: 17px;
}
.tabcontent button{
  width: 10rem;
  font-size: 1.1rem;
  padding: 5px;
  margin-top: 1rem;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color:rgb( 239, 69, 84 );
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color:rgb( 239, 69, 84 );
}

/* Style the tab content */
.tabcontent {
  
  
  

  width: 100%;
 
  height: auto;
  background-color: white;
}

.tabcontent .card-header{
  background-color: rgb( 44, 44, 44 );

  color: white;
}
.tabcontent .card-header h4{
  text-transform: uppercase;
  font-weight: lighter;
}
.tabcontent button{
  outline: none;
  border: none;
  color: white;
  background-color: rgb( 239, 69, 84 );
  border-radius: 5px;
  
}
.tabcontent button:hover{

  background-color: rgb( 44, 44, 44 );

  
}
.tabcontent table{
  width: 100%;
}

.tabcontent input[type=text], input[type=email], input[type=number], input[type=password]{
  width: 100%;
        border-top: none;
        padding-left: 15px;
      color: black;
        outline: none;
        border-left: none;
        border-right: none;
        
        text-align: left;
        font-size: 14px;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        margin-bottom: 20px;

}
.tabcontent .card {
  width: 100%;
  height: auto;
  margin-bottom: 20px;
}


@media only screen and (max-width: 500px){
  .tabcontent .card {
  
  margin-top: 10px;
}
}

.tabcontent p{
  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
  font-size: 18px;
  
}
</style>
<div class="dash">
  <div class="container">
  <div class="row">

    <div class="col-md-2" style="padding: 0px;">
      <div class="tab text-center" >
        <button class="tablinks" onclick="openCity(event, 'profile')" id="defaultOpen">Profile</button>
        <button class="tablinks" onclick="openCity(event, 'wallet')">Wallet</button>
  
      </div>

    </div>

    <div class="col-md-10" style="padding: 0px;">
      <div id="profile" class="tabcontent ">
        <!-- <div class="card">
          <div class="card-header">
              <h4>Your Profile</h4>
          </div> -->
          <!-- <div class="card-body">

            <div class="row">
                <div class="col-md-6">
                  <label for="name">Name:</label>
                  <input type="text" id="name" placeholder="Your Name..">
                  <label for="pemail">Primary Email:</label>
                    <input type="email" id="pemail" placeholder="Primary Email">
                </div>
                <div class="col-md-6">
                <label for="number">Phone Number:</label>
            <input type="number" id="number" placeholder="Contact Number..">
            <label for="number">Secondary Mobile Number:</label>
            <input type="number" id="number" placeholder="Contact Number..">
                </div>
            </div>

            <button>Update Profile</button>
            
            
            
          </div>
        </div> -->
        <!-- <div class="card">
          <div class="card-header">
              <h4>Change Password</h4>
          </div>
          <div class="card-body">

            <div class="row">
                <div class="col-md-6">
                  <label for="npass">New Password</label>
                  <input type="password" id="npass" placeholder="Type New Password">
                </div>
                <div class="col-md-6">
                <label for="ncpass">confirm Password</label>
                  <input type="text" id="ncpass" placeholder="Confirm Password">
                </div>
            </div>

            <button>Change Password</button>
            
            
            
          </div>
        </div> -->

        <div class="card">
          <div class="card-header">
              <h4>Bank Details</h4>
          </div>
          <div class="card-body table-responsive">

          <table class="table table-bordered">
    <thead>
      <tr>
        <th>Account Number</th>
        <th>IFSC CODE</th>
        <th>Account Holder</th>

      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $bank_acc;?></td>
        <td><?php echo $ifsc;?></td>
        <td><?php echo $acc_name;?></td>
      
      </tr>
     
    </tbody>
  </table>
            
          </div>
        </div>

        <div class="card">
          <div class="card-header">
              <h4>Add  Bank Account Details</h4>
          </div>
          <div class="card-body">
          <form action="../login/update_bank" method="Post">
                <?php 
                if($this->session->flashdata('dashboard_error'))
                {
                  echo '<p class="text-success">'.$this->session->flashdata('dashboard_error').'</p>';
                }
                ?>
            <div class="row">
                <div class="col-md-6">
                  <label for="acnum">Bank Account Number:</label>
                  <input type="number" name="bank_acc" id="acnum" placeholder="Enter Your Bank Account Number">
                </div>
                <div class="col-md-6">
                <label for="acnumc">Confirm Account Number:</label>
                  <input type="number" name="cbank_acc" id="acnumc" placeholder="confirm Bank Account Number">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                  <label for="ifsc">Ifsc Code:</label>
                  <input type="text" name="ifsc" id="ifsc" placeholder="Enter Ifsc Code">
                </div>
                <div class="col-md-6">
                <label for="achname">Account Holder Name:</label>
                  <input type="text" name="acc_name" id="achname" placeholder="Enter Account Holder Name">
                </div>
            </div>
          

            <input type="submit"name="formSubmit" class="button" value="Add">
            </form>
            
            
          </div>
        </div>
  
</div>

<div id="wallet" class="tabcontent">


  <div class="card">
    <div class="card-header">
      <h4>Your Wallet</h4>
    </div>  
    <div class="card-body">
      <div class="row ">
        <div class="col-md-6">
        <p>Total Earned: <?php $total=0; foreach($history as $value){
            $total += $value['money'] ; 
           } echo $total ;?></p>
        </div>
        <div class="col-md-6">
          <p>Total Refered: <?php  echo count($history);  ?></p>
        </div>
      </div>

      
    
        
    </div>  
    
  </div>


  <div class="card">
    <div class="card-header">
        <h4>Refer History</h4>
    </div>
    <div class="card-body table-responsive">
    <table class="table table-bordered">
    <thead>
      <tr>
        <th>Refered Date</th>
        <th>Refered Person</th>
        <th>Money Earned</th>
        <th>Insurance Type</th>
        <th>Policy Type</th>
        <th>Total Premium</th>
        <th>Premium Paid</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($history as $value){?>
    <tr>
      <td><?php echo $value['date'] ; ?></th>
      <td><?php echo $value['reference'] ; ?></td>
      <td><?php echo $value['money'] ; ?></td>
      <td><?php echo $value['insurance_type'] ; ?></td>
      <td><?php echo $value['policy_type'] ; ?></td>
      <td><?php echo $value['total_premium'] ; ?></td>
      <td><?php echo $value['premium_paid'] ; ?></td>
    </tr>
    <?php } ?>
     
    </tbody>
  </table>
</div>

    </div>

  </div>
  </div>
</div>
</div>








<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>