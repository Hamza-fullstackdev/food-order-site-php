<?php include("../Constrain/panelheader.php") ?>

<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $title=$_POST["title"];
        $imagename=$_FILES["image"]["name"];
        $imageupload=$_FILES["image"]["tmp_name"];
        $folder="../Upload Images/".$imagename;
        if($_FILES["image"]){
            move_uploaded_file($imageupload,$folder);
        }else{
            echo "Error Uploading Image";
        }
        $tagline=$_POST["tagline"];
        $category=$_POST["category"];
        $price=$_POST["price"];
        $textarea=$_POST["textarea"];
        
        $sql="INSERT INTO `fooddata`(`FoodName`, `FoodImage`, `FoodTagline`, `FoodDescription`, `FoodPrice`, `FoodCategory`) VALUES ('$title','$imagename','$tagline','$textarea','$price','$category')";
        $res=mysqli_query($conn,$sql) or die("Error");
        if($res){
            header("location:managefood.php");
        }
    }
?>
        <main>
            <div class="dashboardheading">
                <h1>Add Food</h1>
                <p>Food online, Shop Online</p>
            </div>
            <section class="addfoodsection">
                <form action="" method="POST" enctype="multipart/form-data">
                    <label for="title">Food title</label><br>
                    <input type="text" required name="title"><br><br>
                    <label for="image">Select Food Image</label><br>
                    <input type="file" required name="image"><br><br>
                    <label for="tagline">Add Tagline</label><br>
                    <input type="text" required name="tagline" autocomplete="off"><br><br>
                    <label for="tagline">Select Category</label><br>
                    <select name="category" id="" required>
                        <option value="0" selected>Choose Category</option>
                        <option value="1" >Pizza</option>
                        <option value="2" >Burger</option>
                        <option value="3" >Biryani</option>
                        <option value="4" >Shawarma</option>
                    </select><br><br>
                    <label for="price">Add price</label><br>
                    <input type="number" required name="price"><br><br>
                    <label for="desc">Add Description</label><br>
                    <textarea name="textarea" id="textarea" cols="80" rows="20" name="textarea"></textarea><br><br>
                    <div class="submitform">
                        <input type="submit" name="submit">&nbsp; &nbsp;
                        <input type="reset">
                    </div>
                </form>
            </section>
        </main>
    </div>
</body>