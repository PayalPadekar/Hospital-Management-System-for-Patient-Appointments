<?php include('navbar.php'); ?>
<div class="container-fluid p-3">
        <h1 class="text-center">Our Images</h1>
        <hr>
        <div class="row">
                <?php 
                    $select="select * from tblgallery id where category='image'";
                    $res=mysqli_query($con,$select);
                    while($row=mysqli_fetch_assoc($res)){
                ?>
                <div class="col-md-4 col-sm-6 mb-3">
                    <img src="admin/<?php echo $row['logo']; ?>" class="img-fluid img-thumbnail w-100 h-100" alt="...">
                </div>
                <?php } ?>
        </div>
        <h1 class="text-center">Our Videos</h1>
        <hr>
        <div class="row">
                <?php 
                    $select="select * from tblgallery id where category='video'";
                    $res=mysqli_query($con,$select);
                    while($row=mysqli_fetch_assoc($res)){
                ?>
                <div class="col-md-3 col-sm-6 mb-3">
                    <p>
                    <iframe width="100%" height="100%" src="<?php echo $row['documentry']; ?>"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
                     </p>
                </div>
                <?php } ?>
            </div>
</div>
        <?php include('footer.php'); ?>