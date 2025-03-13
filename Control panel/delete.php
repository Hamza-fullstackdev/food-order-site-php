<?php include("../Connection/connection.php"); ?>
<?php
    $id=$_GET["id"];
    $sql="DELETE FROM `fooddata` WHERE Id=$id";
    $res=mysqli_query($conn,$sql);
    if($res){
        header("location:managefood.php");
    }
?>