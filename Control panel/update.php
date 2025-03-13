<?php include("../Constrain/panelheader.php") ?>

        <main>
            <div class="dashboardheading">
                <h1>Update Food</h1>
                <p>Food online, Shop Online</p>
            </div>
        </main>
        <?php
            $id=$_GET["id"];
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
        <section class="addfoodsection">
            <form action="" method="POST" enctype="multipart/form-data">
                <label for="title">Change title</label><br>
                <input type="text" required name="title" placeholder="<?php echo $foodname ?>"><br><br>
                <label for="image">Change Image</label><br>
                <input type="file" required name="image" <?php echo $foodname ?>><br><br>
                <label for="tagline">Change Tagline</label><br>
                <input type="text" required name="tagline" placeholder="<?php echo $tagline ?>"><br><br>
                <label for="tagline">Select Category</label><br>
                <select name="category" id="" required>
                    <option value="0" selected>Choose Category</option>
                    <option value="1" >Pizza</option>
                    <option value="2" >Burger</option>
                    <option value="3" >Biryani</option>
                    <option value="4" >Shawarma</option>
                </select><br><br>
                <label for="price">Change price</label><br>
                <input type="number" required name="price" placeholder="<?php echo $price ?>"><br><br>
                <label for="desc">Change Description</label><br>
                <textarea name="textarea" id="textarea" cols="80" rows="20" placeholder="<?php echo $description?>"></textarea><br><br>
                <div class="submitform">
                    <input type="submit" value="Update">&nbsp; &nbsp;
                    <input type="reset">
                </div>
            </form>
        </section>
    </div>
</body>
<?php 
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $newtitle=$_POST["title"];
        $imagename=$_FILES["image"]["name"];
        $imagetmp=$_FILES["image"]["tmp_name"];
        $folder="../Upload Image/".$imagename;
        $newtagline=$_POST["tagline"];
        $newprice=$_POST["price"];
        $newcategory=$_POST["category"];
        $newtextarea=$_POST["textarea"];

        if(move_uploaded_file($imagetmp,$folder)){
            header("location:managefood.php");
        }
        $sql1="UPDATE `fooddata` SET `Id`='$id',`FoodName`='$newtitle',`FoodImage`='$imagename',`FoodTagline`='$newtagline',`FoodDescription`='$newtextarea',`FoodPrice`='$newprice',`FoodCategory`='$newcategory' WHERE Id=$id";
        $result=mysqli_query($conn,$sql1);
        if($result){
            header("location:managefood.php");
        }
    }
?>