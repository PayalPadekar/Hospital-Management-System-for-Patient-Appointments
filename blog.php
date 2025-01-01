<?php include('navbar.php'); ?>
<div class="container-fluid p-5">
        <div class="row mb-3">
            <h1 class="text-center">Blog</h1>
            <?php 
                $select="select * from tblblog order by idblog desc";
                $res=mysqli_query($con,$select);
                while($row=mysqli_fetch_assoc($res)){
            ?>
            <div class="col-md-3 col-sm-12 pt-3 text-center ">
                <h3 class="text-center"><?php echo $row['blogtitle'] ?></h3>
                <hr>
                <img src="admin/<?php echo $row['blogimg'] ?>" alt="" class="img-fluid">
                <hr>
                <p style="text-indent: 50px;"><?php echo $row['blogdesc'] ?></p>
            </div>
            <?php } ?>
        </div>
     </div>
<?php include('footer.php'); ?>