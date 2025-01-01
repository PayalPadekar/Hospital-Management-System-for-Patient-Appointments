<?php include('navbar.php'); ?>
<div class="container-fluid p-5 bg-light text-black">
        <div class="row mb-3">
            <h1 class="text-center">About Us</h1>
            <hr>
            <?php 
                $select="select * from tblaboutus order by idabout desc";
                $res=mysqli_query($con,$select);
                while($row=mysqli_fetch_assoc($res)){
            ?>
            <div class="col-md-4 col-sm-12 p-5">
                <img src="admin/<?php echo $row['companylogo'] ?>" alt="" class="img-fluid">
            </div>
            <div class="col-md-8 col-sm-12">
                <h3 class="text-center"><?php echo $row['companyname'] ?></h2>
                <p style="text-indent: 50px;"><?php echo $row['companydesc'] ?></p>
                  
            </div>
            <?php } ?>
        </div>
    </div>
    <?php include('footer.php'); ?>