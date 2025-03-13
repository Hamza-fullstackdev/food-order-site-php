<?php include("../Constrain/header.php") ?>

    <main>
        <?php 
        $id=$_GET["id"];
        ?>
        <div class="checkout center">
        <section class="checkoutsection">
            <?php
                $sql="SELECT * FROM `fooddata` WHERE Id=$id";
                $res=mysqli_query($conn,$sql);
                if(mysqli_num_rows($res)>0){
                    while($rows=mysqli_fetch_assoc($res)){
                        $id=$rows['Id'];
                        $image=$rows['FoodImage'];
                        $foodname=$rows['FoodName'];
                        $tagline=$rows['FoodTagline'];
                        $price=$rows['FoodPrice'];
                        $description=$rows['FoodDescription'];
                    }
                }
            ?>
            <h2>Special Pizza</h2>
            <div class="checkoutpanel">
                <img src="../Upload Images/<?php echo $image?>" alt="">
                <div class="checkoutcontent">
                    <p><?php echo $description?></p>
                    <div class="checkoutcart">
                        <h2>Select Quantity</h2>
                        <div class="checkoutdata flex">
                        <form action="" method="POST">
                            
                            <input type="number" value="1" required style="text-align:center; outline: none; padding: 5px;" name="quantity"><br><br>
                            <input type="submit" style="background-color: red; color:white; border:none; padding: 5px 10px; cursor: pointer;" name="submit">
                            <?php 
                            if($_SERVER["REQUEST_METHOD"]=="POST"){
                                $quantity=$_POST["quantity"];
                                $total=$quantity*$price;
                                $sql1="INSERT INTO `cart`(`FoodName`, `FoodQuantity`, `FoodTotalPrice`,`FoodImage`) VALUES ('$foodname','$quantity','$total','$image')";
                                $result=mysqli_query($conn,$sql1);
                                if($result){
                                    header("location:website.php");
                                }
                            }
                                
                                ?>
                        </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php include("../Constrain/footer.php") ?>

    </main>
    <script src="../Javascript/checkout.js"></script>
</body>

