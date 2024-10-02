<?php include "header.php"; ?>

<!-- listings section starts  -->

<section class="listings">

   <h1 class="heading">all listings</h1>

   <div class="box-container">

      <?php 
      $result = mysqli_query($con,"select * from property");
      while($row = mysqli_fetch_assoc($result)) { ?>
      <div class="box">
         <!-- <div class="admin">
            <h3>j</h3>
            <div>
               <p>john deo</p>
               <span>10-11-2022</span>
            </div>
         </div> -->
         <div class="thumb">
            <p class="total-images"><i class="far fa-image"></i><span>4</span></p>
            <p class="type"><span><?php echo $row['type']; ?></span><span><?php echo $row['status']; ?></span></p>
            <!-- <form action="" method="post" class="save">
               <button type="submit" name="save" class="far fa-heart"></button>
            </form> -->
            <img src=" ../admin/uploads/<?php echo $row['img1']; ?>" >
         </div>
         <h3 class="name"><?php echo $row['name']; ?></h3>
         <p class="location"><i class="fas fa-map-marker-alt"></i><span><?php echo $row['address']; ?></span></p>
         <div class="flex">
            <p><i class="fas fa-bed"></i><span><?php echo $row['bedroom']; ?></span></p>
            <p><i class="fas fa-bath"></i><span><?php echo $row['bathroom']; ?></span></p>
            <p><i class="fas fa-maximize"></i><span><?php echo $row['area']; ?>sqft</span></p>
         </div>
         <a href="view_property.php?id=<?php echo $row['property_id']; ?>" class="btn">view property</a>
      </div>
      <?php } ?>

   </div>

</section>

<!-- listings section ends -->

<?php include "footer.php"; ?>