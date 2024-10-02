<?php

    if(isset($_POST['tenant_reg'])){
        header("location: payment.php");
    }

?>

<?php include "header.php"; ?>

<!-- tenant registration section starts  -->

<section class="form-container">

   <form action="" method="post" enctype="multipart/form-data" autocomplete="off"> 
      <h3>Tenant Registration</h3>
      <input type="text" name="tenant_name" required maxlength="50" placeholder="Enter your name" class="box">
      <input type="email" name="tenant_email" required maxlength="50" placeholder="Enter your email" class="box">
      <input type="password" name="tenant_password" required maxlength="20" placeholder="Enter your password" class="box">
      <input type="text" name="tenant_phone" required maxlength="15" placeholder="Enter your phone number" class="box">
      <input type="text" name="tenant_address" required maxlength="100" placeholder="Enter your address" class="box">
      <input type="submit" value="Register now" name="tenant_reg" class="btn">
   </form>

</section>

<!-- tenant registration section ends -->

<?php include "footer.php"; ?>