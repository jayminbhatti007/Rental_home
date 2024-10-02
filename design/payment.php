<?php include "header.php"; ?>

<!-- payment section starts  -->
<!-- 
<section class="form-container">

   <form action="" method="post" enctype="multipart/form-data" autocomplete="off"> 
      <h3>Make a Payment</h3>
      <input type="text" name="card_name" required maxlength="50" placeholder="Name on card" class="box">
      <input type="text" name="card_number" required maxlength="16" placeholder="Card number" class="box">
      <input type="text" name="expiry_date" required maxlength="5" placeholder="Expiry date (MM/YY)" class="box">
      <input type="text" name="cvv" required maxlength="3" placeholder="CVV" class="box">
      <input type="submit" value="Pay now" name="pay" class="btn">
   </form>

</section> -->


<?php
// Include the database configuration file (or add your connection here)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project_prince";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
?>


<?php
if (isset($_POST['pay'])) {
    // Get form data
    $card_name = mysqli_real_escape_string($conn, $_POST['card_name']);
    $card_number = mysqli_real_escape_string($conn, $_POST['card_number']);
    $expiry_date = mysqli_real_escape_string($conn, $_POST['expiry_date']);
    $cvv = mysqli_real_escape_string($conn, $_POST['cvv']);
    
    // SQL query to insert data into the payment table
   //  $sql = "INSERT INTO payment (card_name, card_number, expiry_date, cvv) 
   //          VALUES ('$card_name', '$card_number', '$expiry_date', '$cvv')";

$sql = "INSERT INTO payment (`card_name`, `card_number`, `expiry_date`, `cvv`) VALUES ('$card_name', '$card_number', '$expiry_date', '$cvv')";

   //  // Execute the query and check if it was successful
   //  if ($conn->query($sql) === TRUE) {
   //      echo "<p>Payment successful! Your payment has been processed.</p>";
   //  } else {
   //      echo "Error: " . $sql . "<br>" . $conn->error;
   //  }
}
?>

<!-- Payment Form Section (Your existing HTML form) -->
<section class="form-container">

   <form action="" method="post" enctype="multipart/form-data" autocomplete="off"> 
      <h3>Make a Payment</h3>
      <input type="text" name="card_name" required maxlength="50" placeholder="Name on card" class="box">
      <input type="text" name="card_number" required maxlength="16" placeholder="Card number" class="box">
      <input type="text" name="expiry_date" required maxlength="5" placeholder="Expiry date (MM/YY)" class="box">
      <input type="text" name="cvv" required maxlength="3" placeholder="CVV" class="box">
      <input type="submit" value="Pay now" name="pay" class="btn">
   </form>

</section>



<!-- payment section ends -->

<?php include "footer.php"; ?>