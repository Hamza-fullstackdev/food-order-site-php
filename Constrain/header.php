
<?php include("../Connection/websiteconnection.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Order Website</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../Css/website.css">
</head>
<body>
    <header class="flex">
        <div class="logo">
            <a href="./website.php"><h2>FoodOnline</h2></a>
        </div>
        <nav>
            <ul class="flex">
                <li><a href="website.php">Home</a></li>
                <li><a href="burgers.php">Burgers</a></li>
                <li><a href="pizza.php">Pizza</a></li>
                <li><a href="shawarma.php">Shawarma</a></li>
                <li><a href="biryani.php">Biryani</a></li>
            </ul>
        </nav>
        <div class="cart">
            <a href="../Php/cart.php"><i class="bi bi-bag"></i></a>
            <?php  $sql="SELECT * FROM `cart`";
                    $res=mysqli_query($conn,$sql);
                    $quantity=mysqli_num_rows($res);
            ?>
            <p><?php echo $quantity?></p>
        </div>
    </header>