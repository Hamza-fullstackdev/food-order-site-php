    <?php include("../Constrain/panelheader.php") ?>
        <main>
            <div class="dashboardheading">
                <h1>Your Dashboard</h1>
                <p>Food online, Shop Online</p>
            </div>
            <div class="dashboardpanel flex">
                <div class="box center">
                    <div class="boxcontent">

                    <?php 
                        $sql="SELECT * FROM `fooddata`";
                        $res=mysqli_query($conn,$sql);
                        $foodquantity=mysqli_num_rows($res);
                    ?>
                        <h2>Total Food</h2>
                    <p><?php echo $foodquantity;?></p>
                    </div>
                </div>
                <?php 
                        $sql="SELECT * FROM `registerusers`";
                        $res=mysqli_query($conn,$sql);
                        $users=mysqli_num_rows($res);
                    ?>
                <div class="box center">
                    <div class="boxcontent">
                        <h2>Registered people</h2>
                    <p><?php echo $users?></p>
                    </div>
                </div>
                <?php 
                        $sql="SELECT * FROM `cart`";
                        $res=mysqli_query($conn,$sql);
                        $cartdata=mysqli_num_rows($res);
                    ?>
                <div class="box center">
                    <div class="boxcontent">
                        <h2>Orders</h2>
                    <p><?php echo $cartdata ?></p>
                    </div>
                </div>
            
            </div>
        </main>
    </div>
</body>
</html>