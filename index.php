<?php include('navbar.php'); ?>
         <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                aria-label="Slide 5"></button>
            </div>
            <div class="carousel-inner w-100 h-50 mb-3">
                <div class="carousel-item active">
                    <img src="image/slide12.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="image/slide4.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="image/slide3.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="image/slide2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="image/slide11.jpg" class="d-block w-100 h-auto" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
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
     <div class="container-fluid p-5 bg-primary text-white">
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
    <div class="container-fluid p-3 fade show bg-light">
        <div class="row ">
            <h1 class="text-center">specialties</h1>
            <?php 
                $select="select * from tblspecialties order by id asc";
                $res=mysqli_query($con,$select);
                while($row=mysqli_fetch_assoc($res)){
            ?>
            <div class="col-md-3 col-sm-12 mt-3 text-center">
                <h3 class="text-center"><?php echo $row['specialtiestitle']; ?></h3>
                <hr>
                <p><?php echo substr($row['specialtiesdesc'],0,350)."..."; ?></p>
                <a href="specialties.php" class="btn btn-primary mx-auto"><i class="fa fa-list"></i> More Info</a>
            </div>
            <?php } ?>
         </div>
    </div>
    <div class="container-fluid p-3 bg-primary">
        <div class="row">
            <h1 class="text-center text-white">Doctors</h1>
            <?php 
                    $select="select * from tbldoctor id where category='More'";
                    $res=mysqli_query($con,$select);
                    while($row=mysqli_fetch_assoc($res)){
                ?>
            <div class="col-md-3 col-sm-6 mb-sm-3">
                    <div class="card">
                        <div class="card-body text-center">
                        <img src="image/user.png" class="img-fluid mx-auto d-block" style="width:100px;height:100px;">
                            <h5 class="card-title"><?php echo $row['doctorname']; ?></h5>
                            <p class="card-text">
                            <?php echo $row['education']; ?></p>
                            <p class="card-text">
                            <?php echo $row['experience']; ?></p>
                            <p class="card-text">
                            <?php echo $row['languagesspoken']; ?></p>
                            <a class="btn btn-success" href="appointment.php"><i class="fa fa-stethoscope"></i> Appointment Now</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
            
        </div>
    </div>
    <div class="container-fluid p-3 bg-light">
        <h1 class="text-center">Our Images</h1>
        <hr>
        <div class="row">
        <?php 
                $select="select * from tblgallery id where category='image' limit 6";
                $res=mysqli_query($con,$select);
                while($row=mysqli_fetch_assoc($res)){
            ?>
            <div class="col-md-2 col-sm-6 mb-sm-3">
                <img src="admin/<?php echo $row['logo']; ?>" class="img-fluid img-thumbnail w-100 h-100" alt="...">
            </div>
            <?php } ?>
         </div>
        <h1 class="text-center">Our Videos</h1>
        <hr>
        <div class="row mb-3">
        <?php 
                $select="select * from tblgallery id where category='video'";
                $res=mysqli_query($con,$select);
                while($row=mysqli_fetch_assoc($res)){
            ?>
            <div class="col-md-3 col-sm-6 mb-sm-3">
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