<?php include "header.php"; ?>

<section class="listings">
    <h1 class="heading">Saved Properties</h1>

    <div class="box-container">
        <?php
        
        $user_id = $_SESSION['user_id']; 
        if (isset($_POST['remove'])) {
            $wishlist_id = $_POST['wishlist_id'];
            $delete_query = mysqli_query($con, "DELETE FROM wishlist WHERE wishlist_id = $wishlist_id");
        }
        $result = mysqli_query($con, "SELECT p.*, w.wishlist_id FROM wishlist w 
                                      JOIN property p ON w.property_id = p.property_id 
                                      WHERE w.user_id = $user_id");

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <div class="box">
                    <div class="thumb">
                        <p class="total-images"><i class="far fa-image"></i><span>4</span></p>
                        <p class="type"><span><?php echo $row['type']; ?></span><span><?php echo $row['status']; ?></span></p>
                        <img src="../admin/uploads/<?php echo $row['img1']; ?>" alt="">
                    </div>
                    <h3 class="name"><?php echo $row['name']; ?></h3>
                    <p class="location"><i class="fas fa-map-marker-alt"></i><span><?php echo $row['address']; ?></span></p>
                    <div class="flex">
                        <p><i class="fas fa-bed"></i><span><?php echo $row['bedroom']; ?></span></p>
                        <p><i class="fas fa-bath"></i><span><?php echo $row['bathroom']; ?></span></p>
                        <p><i class="fas fa-maximize"></i><span><?php echo $row['area']; ?>sqft</span></p>
                    </div>
                    <a href="view_property.php?id=<?php echo $row['property_id']; ?>" class="btn">View Property</a>

                    <form action="" method="post" style="display:inline;">
                        <input type="hidden" name="wishlist_id" value="<?php echo $row['wishlist_id']; ?>">
                        <input type="submit" name="remove" value="Remove" class="btn btn-danger">
                    </form>
                </div>
            <?php }
        } else {
            echo "<h1>No saved properties found in your wishlist.</h1>";
        }
        ?>
    </div>
</section>

<?php include "footer.php"; ?>
