<?php include('navbar.php'); ?>
<div class="container-fluid p-5" style="background-color:white" >
        <h1 class="text-center">Contact Us</h1>
        <hr>
        <div class="row">
            <div class="col-md-6 col-sm-12 text-center">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d121023.84518810631!2d73.66749286651613!3d18.574256844980596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2b953dbec2887%3A0x4366a8ec19eeefd9!2sShree%20Hospital!5e0!3m2!1sen!2sin!4v1708015072035!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
            <div class="col-md-6 col-sm-12 p-5">
                <h2 class="text-center">Inquiry</h2>
                <hr>
                <form action="save.php" method="post" onsubmit="return validation()">
                    <div class="row mb-3">
                        <div class="col-4">
                            <label for="">Name</label>
                        </div>
                        <div class="col-8"><input type="text" name="fname" id="fname" class="form-control" placeholder="Enter Name"></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-4">
                            <label for="">Email</label>
                        </div>
                        <div class="col-8"><input type="email" name="femail" id="femail" class="form-control" placeholder="Enter Email"></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-4">
                            <label for="">Mobile</label>
                        </div>
                        <div class="col-8"><input type="tel" name="fmobile" id="fmobile" class="form-control" placeholder="Enter Mobile No"></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-4">
                            <label for="">Subject</label>
                        </div>
                        <div class="col-8"><input type="text" name="fsubject" id="fsubject" class="form-control" placeholder="Enter Subject"></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-4">
                            <label for="">massege</label>
                        </div>
                        <div class="col-8">
                            <textarea name="fmassege" id="fmassege" rows="4" placeholder="Enter massege" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-success btn-lg" name="datasave">Save</button>
                            <button type="reset" class="btn btn-warning btn-lg">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php include('footer.php'); ?>     