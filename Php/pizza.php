<?php include("../Constrain/header.php") ?>

    </header>
    <div class="mainheading">
        <h2>Pizza Deals</h2>
    </div>
    <section class="mainsection center">
        <div class="mainsectioncontent flex">
        <?php 
         $sql="SELECT * FROM `fooddata` WHERE FoodCategory=1";
         $res=mysqli_query($conn,$sql);
         if(mysqli_num_rows($res)>0){
             while($rows=mysqli_fetch_assoc($res)){
                 $id=$rows['Id'];
                 $image=$rows['FoodImage'];
                 $foodname=$rows['FoodName'];
                 $tagline=$rows['FoodTagline'];
                 $price=$rows['FoodPrice'];
                 $description=$rows['FoodDescription'];
                 $category=$rows['FoodCategory'];
                 ?>

                 <div class="boxcard">
                <div class="boximage">
                    <img src="../Images/<?php echo $image ?>" alt="">
                </div>
                <div class="boxcontent">
                    <h2><?php echo $foodname ?></h2>
                    <p><?php echo $tagline ?></p>
                    <h2><?php echo $price ?></h2>
                    <div class="star">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star"></i>
                        <i class="bi bi-star"></i>
                        <i class="bi bi-star"></i>
                        <i class="bi bi-star"></i>
                    </div>
                    <button><a href="<?php echo SITEURL;?>/checkout.php?id=<?php echo $id;?>">Add to cart</a></button>
                </div>
            </div>

            <?php
             }
         }
         ?>
    </section>
    <?php include("../Constrain/footer.php") ?>

</body>