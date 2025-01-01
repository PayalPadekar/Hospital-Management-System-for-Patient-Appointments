<?php include('navbar.php'); ?>
<div class="container mt-3">
    <h1 class="text-center">Specialties</h1>
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
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <div id="cardiology" class="container tab-pane active">
            <div class="row">
                <?php 
                    $select="select * from tblspecialties where specialtiestitle='Cardiology'";
                    $res=mysqli_query($con,$select);
                    while($row=mysqli_fetch_assoc($res)){
                ?>
                <div class="col-12">
                    <h3 class="text-center"><?php echo $row['specialtiestitle']; ?></h3>
                    <p><?php echo $row['specialtiesdesc']; ?></p>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="admin/<?php echo $row['specialtiesimg']; ?>" class="img-fluid img-thumbnail" alt="...">
                        <hr>
                            <a href="https://www.medicoverhospitals.in/specialties/cardiology" class="btn btn-success"> Click here for more Information</a>
                        <hr>
                    </div>
                </div>
                <?php } ?>
             </div>
        </div>
        <div id="nephrology" class="container tab-pane fade">
            <?php 
                $select="select * from tblspecialties where specialtiestitle='Nephrology'";
                $res=mysqli_query($con,$select);
                while($row=mysqli_fetch_assoc($res)){
            ?>
            <div class="col-12">
                <h3 class="text-center"><?php echo $row['specialtiestitle']; ?></h3>
                <p><?php echo $row['specialtiesdesc']; ?></p>
            </div>
            <hr>
            <div class="row">
                <div class="col-12 text-center">
                    <img src="admin/<?php echo $row['specialtiesimg']; ?>" class="img-fluid img-thumbnail" alt="...">
                    <hr>
                        <a href="https://www.medicoverhospitals.in/specialties/cardiology" class="btn btn-success"> Click here for more Information</a>
                    <hr>
                </div>
            </div>
            <?php } ?>
        </div>
        <div id="gastroenterology" class="container tab-pane fade">
        <?php 
                $select="select * from tblspecialties where specialtiestitle='Gastroenterology'";
                $res=mysqli_query($con,$select);
                while($row=mysqli_fetch_assoc($res)){
            ?>
            <div class="col-12">
                <h3 class="text-center"><?php echo $row['specialtiestitle']; ?></h3>
                <p><?php echo $row['specialtiesdesc']; ?></p>
            </div>
            <hr>
            <div class="row">
                <div class="col-12 text-center">
                    <img src="admin/<?php echo $row['specialtiesimg']; ?>" class="img-fluid img-thumbnail" alt="...">
                    <hr>
                        <a href="https://www.medicoverhospitals.in/specialties/cardiology" class="btn btn-success"> Click here for more Information</a>
                    <hr>
                </div>
            </div>
            <?php } ?>
        </div>
        <div id="oncology" class="container tab-pane fade">
        <?php 
                $select="select * from tblspecialties where specialtiestitle='Oncology'";
                $res=mysqli_query($con,$select);
                while($row=mysqli_fetch_assoc($res)){
            ?>
            <div class="col-12">
                <h3 class="text-center"><?php echo $row['specialtiestitle']; ?></h3>
                <p><?php echo $row['specialtiesdesc']; ?></p>
            </div>
            <hr>
            <div class="row">
                <div class="col-12 text-center">
                    <img src="admin/<?php echo $row['specialtiesimg']; ?>" class="img-fluid img-thumbnail" alt="...">
                    <hr>
                        <a href="https://www.medicoverhospitals.in/specialties/cardiology" class="btn btn-success"> Click here for more Information</a>
                    <hr>
                </div>
            </div>
            <?php } ?>
        </div>
        <div id="pediatrics" class="container tab-pane fade">
        <?php 
                $select="select * from tblspecialties where specialtiestitle='Pediatrics'";
                $res=mysqli_query($con,$select);
                while($row=mysqli_fetch_assoc($res)){
            ?>
            <div class="col-12">
                <h3 class="text-center"><?php echo $row['specialtiestitle']; ?></h3>
                <p><?php echo $row['specialtiesdesc']; ?></p>
            </div>
            <hr>
            <div class="row">
                <div class="col-12 text-center">
                    <img src="admin/<?php echo $row['specialtiesimg']; ?>" class="img-fluid img-thumbnail" alt="...">
                    <hr>
                        <a href="https://www.medicoverhospitals.in/specialties/cardiology" class="btn btn-success"> Click here for more Information</a>
                    <hr>
                </div>
            </div>
            <?php } ?>
        </div>
        <div id="kidneytransplantation" class="container tab-pane fade">
        <?php 
                $select="select * from tblspecialties where specialtiestitle='Kidney Transplantation'";
                $res=mysqli_query($con,$select);
                while($row=mysqli_fetch_assoc($res)){
            ?>
            <div class="col-12">
                <h3 class="text-center"><?php echo $row['specialtiestitle']; ?></h3>
                <p><?php echo $row['specialtiesdesc']; ?></p>
            </div>
            <hr>
            <div class="row">
                <div class="col-12 text-center">
                    <img src="admin/<?php echo $row['specialtiesimg']; ?>" class="img-fluid img-thumbnail" alt="...">
                    <hr>
                        <a href="https://www.medicoverhospitals.in/specialties/cardiology" class="btn btn-success"> Click here for more Information</a>
                    <hr>
                </div>
            </div>
            <?php } ?>
        </div>
        <div id="livertransplantation" class="container tab-pane fade">
        <?php 
                $select="select * from tblspecialties where specialtiestitle='Liver Transplantation'";
                $res=mysqli_query($con,$select);
                while($row=mysqli_fetch_assoc($res)){
            ?>
            <div class="col-12">
                <h3 class="text-center"><?php echo $row['specialtiestitle']; ?></h3>
                <p><?php echo $row['specialtiesdesc']; ?></p>
            </div>
            <hr>
            <div class="row">
                <div class="col-12 text-center">
                    <img src="admin/<?php echo $row['specialtiesimg']; ?>" class="img-fluid img-thumbnail" alt="...">
                    <hr>
                        <a href="https://www.medicoverhospitals.in/specialties/cardiology" class="btn btn-success"> Click here for more Information</a>
                    <hr>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>