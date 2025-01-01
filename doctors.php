<?php include('navbar.php'); ?>
<div class="container mt-3">
    <h1 class="text-center">Doctors</h1>
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" data-bs-toggle="tab" href="#cardiology">Cardiology</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#nephrology">Nephrology</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#gastroenterology">Gastroenterology</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#oncology">Oncology</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#pediatrics">Pediatrics</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#kidneytransplantation">Kidney Transplantation</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#livertransplantation">Liver Transplantation</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#more">More</a>
        </li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <div id="cardiology" class="container tab-pane active">
            <h3>Cardiology</h3>
            <div class="row">
            <?php 
                    $select="select * from tbldoctor id where category='cardiology'";
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
        <div id="nephrology" class="container tab-pane">
            <h3>Nephrology</h3>
            <div class="row">
            <?php 
                    $select="select * from tbldoctor id where category='Nephrology'";
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
        <div id="gastroenterology" class="container tab-pane">
            <h3>Gastroenterology</h3>
            <div class="row">
            <?php 
                    $select="select * from tbldoctor id where category='Gastroenterology'";
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
        <div id="oncology" class="container tab-pane">
            <h3>Oncology</h3>
            <div class="row">
            <?php 
                    $select="select * from tbldoctor id where category='Oncology'";
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
        <div id="pediatrics" class="container tab-pane">
            <h3>Pediatrics</h3>
            <div class="row">
            <?php 
                    $select="select * from tbldoctor id where category='Pediatrics'";
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
        <div id="kidneytransplantation" class="container tab-pane">
            <h3>Kidney Transplantation</h3>
            <div class="row">
            <?php 
                    $select="select * from tbldoctor id where category='kidneytransplantation'";
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
        <div id="livertransplantation" class="container tab-pane">
            <h3>Liver Transplantation</h3>
            <div class="row">
            <?php 
                    $select="select * from tbldoctor id where category='livertransplantation'";
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
        <div id="more" class="container tab-pane">
            <h3>More</h3>
            <div class="row">
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
    </div>
</div>
    <?php include('footer.php'); ?>