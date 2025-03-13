    <?php include("../Constrain/header.php") ?>
    <main>
        <section class="herosection center">
           <div class="heromiddle flex">
            <div class="leftherosection">
                <h1>Food Online</h1>
                <p>Your meal at your destination, Shop online from your <br> home now!!</p>
            </div>
            <div class="rightherosection">
                <img src="../Images/pizza 3.png" alt="">
            </div>
           </div>
        </section>
        <div class="mainheading">
            <h2>Order food from our best deals</h2>
        </div>
        <section class="mainsection center">
            <div class="mainsectioncontent flex">
                <?php 
                    $sql="SELECT * FROM `fooddata`";
                    $res=mysqli_query($conn,$sql);
                    if(mysqli_num_rows($res)>0){
                        while ($rows=mysqli_fetch_assoc($res)) {
                            $id=$rows["Id"];
                            $foodtitle=$rows["FoodName"];
                            $foodimage=$rows["FoodImage"];
                            $foodtagline=$rows["FoodTagline"];
                            $foodprice=$rows["FoodPrice"];
                            ?>
                                        <div class="boxcard">
                                <div class="boximage">
                                    <img src="../Images/<?php echo $foodimage?>" alt="">
                                </div>
                                <div class="boxcontent">
                                    <h2><?php echo $foodtitle ?></h2>
                                    <p><?php echo $foodtagline ?></p>
                                    <h2>Rs <?php echo $foodprice ?></h2>
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
                
                
               
            </div>
        </section>

        <div class="serviceheading">
            <h2>Our Services Satisfaction</h2>
        </div>
        <section class="servicessection center">
            <div class="services flex">
                <div class="servicebox">
                    <i class="bi bi-truck"></i>
                    <p>Free Delivery</p>
                </div>
                <div class="servicebox">
                    <i class="bi bi-people"></i>
                    <p>People believe</p>
                </div>
                <div class="servicebox">
                    <i class="bi bi-award"></i>
                    <p>Best Quality</p>
                </div>
            </div>
        </section>

        <section class="contactsection center">
            <div class="contactform">
                <h2>Stay updated from our latest Deals</h2>
                <form action="" method="POST">
                    <?php
                        if($_SERVER["REQUEST_METHOD"]=="POST"){
                            $fname=$_POST["fname"];
                        $lname=$_POST["lname"];
                        $email=$_POST["email"];
                        $sql="INSERT INTO `registerusers`(`FirstName`, `LastName`, `Email`) VALUES ('$fname','$lname','$email')";
                        $res=mysqli_query($conn,$sql);
                        }
                    ?>
                    <label for="fname">Enter first name</label><br>
                    <input type="text" name="fname" required><br><br>
                    <label for="lname">Enter second name</label><br>
                    <input type="text" name="lname" required><br><br>
                    <label for="email">Enter working email</label><br>
                    <input type="email" name="email" required><br><br>
                    <div class="button">
                        <button><a href="#">Register</a></button>
                    </div>
                </form>
            </div>
        </section>

        <?php include("../Constrain/footer.php") ?>
    </main>
</body>
</html>