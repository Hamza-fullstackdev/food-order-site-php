<?php include("../Constrain/panelheader.php") ?>

        <main>
            <div class="dashboardheading">
                <h1>Registered Peoples</h1>
                <p>Food online, Shop Online</p>
            </div>
            <div class="managefood center">
                <table>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql="SELECT * FROM `registerusers`";
                            $res=mysqli_query($conn,$sql);
                            if(mysqli_num_rows($res)>0){
                                $serial=1;
                                while($rows=mysqli_fetch_assoc($res)){
                                    $id=$rows["Id"];
                                    $fname=$rows["FirstName"];
                                    $lname=$rows["LastName"];
                                    $email=$rows["Email"];
                                    ?>
                                    <tr>
                                        <td><?php echo $serial++ ?></td>
                                        <td><?php echo $fname ?></td>
                                        <td><?php echo $lname ?></td>
                                        <td><?php echo $email ?></td>
                                        <td>
                                            
                                            <a href="#"><i class="bi bi-trash3 delete"></i></a>
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