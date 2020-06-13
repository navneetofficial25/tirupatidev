<?php 
if(!isset($_SESSION["referid"]))
{
echo "<script>window.location.href='/insurance/';</script>";
}
else
{
  $earning=$_SESSION["ref_count"];
  $click=$_SESSION["earn"];
}
?>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<section class="d-flex heigth_section">
<div class="bg-dark text-white sidebar_left">
  <a href="#" class="w3-bar-item w3-button">Wallet</a>
  <a href="#" class="w3-bar-item w3-button">Edit Profile</a>
</div>

<!-- Page Content -->
<div class="sidebar_right">
<div class="w3-container">
<h2>Wallet</h2>
<p>Total earning:<?php echo $earning; ?></p>
<p>Total Clicks:<?php echo $click; ?></p>
</div>
<div class="container">
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Rfered Date</th>
      <th scope="col">Refered Person</th>
      <th scope="col">Money Earned</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($history as $value){?>
    <tr>
      <th scope="row"><?php echo $value['date'] ; ?></th>
      <td><?php echo $value['reference'] ; ?></td>
      <td><?php echo $value['money'] ; ?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
</div>
</div>

</section>