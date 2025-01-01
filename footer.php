<footer class="container-fluid bg-dark p-5">
                 <div class="row">
                    <div class="col-md-4 col-sm-12 text-center">
                        <h4 class="text-white"></h4>
                        <img src="image/logo2.png" alt="" class="img-fluid">   
                        <p class="text-white" style="font-size: 20px; mt-40px;">“The greatest wealth is health”</p>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <h4 class="text-white">Menus</h4>
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php"><i class="fa fa-home"></i>  Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="specialties.php"><i class="fa fa-list"></i>  specialties</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="doctors.php"><i class="fa fa-user-md"></i>  Doctors</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.php"><i class="fa fa-user"></i>  About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contactus.php"><i class="fa fa-phone"></i>  Contact Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="admin/index.php"><i class="fa fa-lock"></i>  Admin Login</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <h4 class="text-white">Contact Details</h4>
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="tel:917766889944"><i class="fa fa-phone"></i> +91
                                    9209111630</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="info@shreehospital.in"><i class="fa fa-envelope"></i>
                                    info@shreehospital.in</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-home"></i>  Nagar Rd, Opp Aga Khan Palace, Hermes Heritage Phase 2, Hermes Heritage Society Phase 1, Shastrinagar, Yerawada, Pune, Maharashtra 411006</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-file"></i> GSTIN : 27AEPFS3719B1ZX</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-address-card"></i> PAN : AEPFS3719B</a>
                            </li>
                        </ul>
                        <ul class="d-inline-flex">
                            <li><a class="nav-link" href="#"><i class="fa fa-whatsapp fa-2x"></i></a></li>
                            <li><a class="nav-link" href="#"><i class="fa fa-facebook fa-2x"></i></a></li>
                            <li><a class="nav-link" href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
                            <li><a class="nav-link" href="#"><i class="fa fa-instagram fa-2x"></i></a></li>
                            <li><a class="nav-link" href="#"><i class="fa fa-linkedin fa-2x"></i></a></li>
                            <li><a class="nav-link" href="#"><i class="fa fa-youtube fa-2x"></i></a></li>
                            
                        </ul>
                    </div>
                </div>
                <hr class="bg-white">
                <p class="text-center text-white mt-3"><i class="fa fa-globe"></i> Develop By Padekar Payal @2023-2024.
                </p>
         </footer>
        <script>
            function validation() {
                var fname = document.getElementById('fname').value;
                var femail = document.getElementById('femail').value;
                var fmobile = document.getElementById('fmobile').value;
                var fsubject = document.getElementById('fsubject').value;
                var fmassege = document.getElementById('fmassege').value;
    
                if (fname.trim() == '') {
                    alert('Please Enter Your Name');
                    document.getElementById('fname').value = "";
                    document.getElementById('fname').focus();
                    return false;
                }
                if (femail.trim() == '') {
                    alert('Please Enter Your Email Id');
                    document.getElementById('femail').value = "";
                    document.getElementById('femail').focus();
                    return false;
                }
                if (fmobile.trim() == '') {
                    alert('Please Enter Your Mobile No');
                    document.getElementById('fmobile').value = "";
                    document.getElementById('fmobile').focus();
                    return false;
                }
                if (fsubject.trim() == '') {
                    alert('Please Enter Your Subject');
                    document.getElementById('fsubject').value = "";
                    document.getElementById('fsubject').focus();
                    return false;
                }
                if (fmassege.trim() == '') {
                    alert('Please Enter Your massege');
                    document.getElementById('fmassege').value = "";
                    document.getElementById('fmassege').focus();
                    return false;
                }
                return true;
            }
        </script>
         </div>

</body>

</html>