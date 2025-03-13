<?php include("../Constrain/panelheader.php") ?>

        <main>
            <div class="dashboardheading">
                <h1>Manage Food</h1>
                <p>Food online, Shop Online</p>
            </div>
            <div class="managefood center">
                <table>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Image</th>
                            <th>Food Name</th>
                            <th>Tagline</th>
                            <th>Price</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql="SELECT * FROM `fooddata`";
                            $res=mysqli_query($conn,$sql);
                            if(mysqli_num_rows($res)>0){
                                $serial=1;
                                while($rows=mysqli_fetch_assoc($res)){
                                    $id=$rows['Id'];
                                    $image=$rows['FoodImage'];
                                    $foodname=$rows['FoodName'];
                                    $tagline=$rows['FoodTagline'];
                                    $price=$rows['FoodPrice'];

                                    ?>
                                    <tr>
                            <td><?php echo $serial++?></td>
                            <td><img src="../Upload Images/<?php echo $image ?>" alt=""></td>
                            <td><?php echo $foodname?></td>
                            <td><?php echo $tagline?></td>
                            <td><?php echo $price?></td>
                            <td>
                                <a href="<?php echo SITEURL;?>/update.php?id=<?php echo $id;?>">Update</a> &nbsp; &nbsp;
                                <a href="<?php echo SITEURL;?>/delete.php?id=<?php echo $id;?>">Delete</a>
                            </td>
                        </tr>

                        <?php
                                }
                            }
                        ?>
                        
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</body>