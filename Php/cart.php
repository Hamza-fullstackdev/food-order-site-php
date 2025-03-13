<?php include("../Constrain/header.php") ?>

    <main>
        <section class="cartsection">
            <h2>Your Cart</h2>
            <div class="cardmain center">
                <div class="cartpanel">
                    <?php 
                        $sql="SELECT * FROM `cart`";
                        $res=mysqli_query($conn,$sql);
                        if(mysqli_num_rows($res)>0){
                            while($rows=mysqli_fetch_assoc($res)){
                                $foodname=$rows["FoodName"];
                                $foodquantity=$rows["FoodQuantity"];
                                $foodprice=$rows["FoodTotalPrice"];
                                $foodimage=$rows["FoodImage"];
                                ?>
                                <div class="cartbox flex">
                                    <img src="../Upload Images/<?php echo $foodimage ?>" alt="">
                                    <h2><?php echo $foodname ?> </h2>
                                    <p>Quantity:<?php echo $foodquantity ?></p>
                                    <span>Price: Rs<?php echo $foodprice ?></span>
                                </div>
                                <?php
                            }
                        }
                    ?>
                    
                </div>
            </div>
            <button><a href="#">Proceed to payment</a></button>
        </section>
        <?php include("../Constrain/footer.php") ?>
    </main>
</body>