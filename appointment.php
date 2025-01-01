<?php include('navbar.php'); ?> 
<!--<style>
    body{
    background-image:url("https://www.hoopermedicalcentre.com.au/wp-content/uploads/2021/08/pexels-gustavo-fring-3985166-1024x683.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    
    }
</style>-->



    <!--<section class="breadcrumb-area" style="padding:0px;">
        <div class="container">
            <div class="row" style="height:60px; padding-top: 10px; padding-bottom: 10px;">
                <div class="col-md-12">
                    <div class="breadcrumbs">
                        <center>
                            <h1 class="htitle">Book an Appointment Online in Medicover Hospital</h1>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }
    .container {
        max-width: 800px;
        margin: 20px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h1 {
        text-align: center;
    }
    .time-slots {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        margin-top: 20px;
    }
    .time-slot {
        padding: 5px 10px;
        margin: 5px;
        background-color: #f0f0f0;
        border-radius: 5px;
        cursor: pointer;
    }
    .time-slot.booked {
        background-color: #dc3545;
        color: #fff;
        cursor: not-allowed;
    }
    .time-slot.selected {
        background-color: #007bff;
        color: #fff;
    }

    .date-slots {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        margin-top: 20px;
    }
    .date-slot {
        padding: 5px 10px;
        margin: 5px;
        background-color: #f0f0f0;
        border-radius: 5px;
        cursor: pointer;
    }
    .date-slot.booked {
        background-color: #dc3545;
        color: #fff;
        cursor: not-allowed;
    }
    .date-slot.selected {
        background-color: #007bff;
        color: #fff;
    }
</style>
</head>
<body>



    <section class="contact-form-area"
        style="padding-top:20px; background-image:url(https://assets-global.website-files.com/624629e0591bdc3b300cb644/628d1e2f335abe5b6f34674b_healthcare-v2%20(1).jpg); background-repeat: no-repeat;
        background-size: cover; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; ">
        <div class="container mx-auto " style="width: 600px;">

            <div class="contact-form form-top"
                style="color: rgb(65, 65, 198); text-align: center;">
                <h2>Book an Appointment Online in Shree Hospital</h2>
                <form class="signin-form" method="post" autocomplete="off" name="myform" action="asave.php">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-floating mt-3 mb-3">
                                <input type="text" class="form-control" required id="pname" placeholder="patient name"
                                    name="pname">
                                <label for="pname"> Patient Name</label>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12">
                            <div class="form-floating mt-3 mb-3">
                                <input style="width:100%" type="tel" name="pphone" id="pphone" maxlength="10"
                                    class="form-control" required pattern="[6789][0-9]{9}" value=""
                                    placeholder="Mobile Number*" required="true">
                                <label for="pphone">Mobile No.</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-floating mt-3 mb-3">
                                <input style="width:100%" type="tel" name="paadhar" id="paadhar" maxlength="12"
                                    pattern="[0-9]{12}" value="" placeholder="Enter Aadhar Number*" required="true"
                                    class="form-control" required>
                                <label for="paadhar"> Enter Aadhar number</label>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12 mb-3">
                            <div class="form-floating mt-3 mb-3">
                                <input style="width:100%" type="tel" name="page" id="page" pattern="[0-9]{2}" maxlength="2"
                              placeholder="Enter Age*" required="true" class="form-control" required>
                                <label for="page">Enter age</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-sm-12 mb-3">
                            <div class="form-floating mt-3 mb-3">
                                <select class="form-control" placeholder="Search District" name="pdistrict"
                                    id="pdistrict" required="" class="form-control" required>
                                    <option value="" style="color: maroon; font-weight: bold;" selected="">
                                        Select
                                        District</option>

                                    <option value="akola">Akola</option>
                                    <option value="ahmednagar">Ahmednagar</option>
                                    <option value="amravati">Amravati</option>
                                    <option value="aurangabad">Aurangabad</option>
                                    <option value="buldhana">Buldhana</option>
                                    <option value="beed">Beed</option>
                                    <option value="chandrapur">Chandrapur</option>
                                    <option value="dhule">Dhule</option>
                                    <option value="gadciroli">Gadciroli</option>
                                    <option value="gondia">Gondia</option>
                                    <option value="hingoli">Hingoli</option>
                                    <option value="jalna">Jalna</option>
                                    <option value="jalgoun">Jalgoun</option>
                                    <option value="kolhapur">Kolhapur</option>
                                    <option value="latur">Latur</option>
                                    <option value="mumbai city discrit">Mumbai city discrit</option>
                                    <option value="mumbai Suburban Discrit">Mumbai Suburban Discrit</option>
                                    <option value="nanded">Nanded</option>
                                    <option value="nagpur">Nagpur</option>
                                    <option value="nundarbar">Nundarbar</option>
                                    <option value="nashik">Nashik</option>
                                    <option value="osmanabad">Osmanabad</option>
                                    <option value="pune">Pune</option>
                                    <option value="parbhani">Parbhani</option>
                                    <option value="palghar">Palghar</option>
                                    <option value="raigad">Raigad</option>
                                    <option value="ratnagari">Ratnagari</option>
                                    <option value="sangali">Sangali</option>
                                    <option value="satara">Satara</option>
                                    <option value="solapur">Solapur</option>
                                    <option value="sindhudurga">Sindhudurga</option>
                                    <option value="thane">Thane</option>
                                    <option value="yavatmal">Yavatmal</option>
                                    <option value="out of maharashtra">Out of maharashtra</option>
                                </select>
                                <label for="pdiscrit">Select District</label>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12 mb-3">
                            <div class="form-floating mt-3 mb-3">
                                <input style="width:100%" type="text" name="ptaluka" id="ptaluka" value=""
                                    placeholder="Enter Your Taluka" required="true" class="form-control" required>
                                <label for="ptaluka">Enter your Taluka</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-sm-12 mb-3">
                            <div class="form-floating mt-3 mb-3">
                                <input style="width:100%" type="text" name="pcity" id="pcity" value=""
                                    placeholder="Enter Your City*" required="true" class="form-control" required>
                                <label for="pcity">Enter your City</label>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12 mb-3">
                            <div class="form-floating mt-3 mb-3">
                                <select class="form-control" placeholder="Search Specialties" name="pspeciality"
                                    id="pspeciality" required="" class="form-control" required>
                                    <option value="" style="color: maroon; font-weight: bold;" selected="">
                                        Select
                                        Specialty</option>

                                    <option value="anesthesiologists">Anesthesiologists</option>
                                    <option value="cardiologists">Cardiologists</option>
                                    <option value="critical-care">Critical-care</option>
                                    <option value="ctvs-cardiothoracic-and-vascular-surgery">
                                        Ctvs-cardiothoracic-and-vascular-surgery</option>
                                    <option value="dentists">Dentists</option>
                                    <option value="dermatologists">Dermatologists</option>
                                    <option value="emergencymedicine">Emergencymedicine</option>
                                    <option value="ent">Ent</option>
                                    <option value="gastroenterologists-medical">Gastroenterologists-medical
                                    </option>
                                    <option value="gastroenterologists">Gastroenterologists</option>
                                    <option value="general-medicine">General-medicine</option>
                                    <option value="general-surgeons">General-surgeons</option>
                                    <option value="gynecologists">Gynecologists</option>
                                    <option value="kidney-transplant-surgery">Kidney-transplant-surgery</option>
                                    <option value="neonatologists">Neonatologists</option>
                                    <option value="nephrologists">Nephrologists</option>
                                    <option value="neurologists">Neurologists</option>
                                    <option value="neurosurgeons">Neurosurgeons</option>
                                    <option value="oncologists">Oncologists</option>
                                    <option value="orthopedic-doctors">Orthopedic-doctors</option>
                                    <option value="pathologists">Pathologists</option>
                                    <option value="pediatricians">Pediatricians</option>
                                    <option value="pediatric-surgeon">Pediatric-surgeon</option>
                                    <option value="physiotherapists">Physiotherapists</option>
                                    <option value="plastic-surgeons">Plastic-surgeons</option>
                                    <option value="psychiatrist">Psychiatrist</option>
                                    <option value="Pulmonologists">Pulmonologists</option>
                                    <option value="radiologists">Radiologists</option>
                                    <option value="rheumatologists">Rheumatologists</option>
                                    <option value="urologists">Urologists</option>
                                    <option value="hematologists">Hematologists</option>
                                    <option value="gastroenterologists-surgical">Gastroenterologists-surgical
                                    </option>
                                    <option value="liver-transplant-surgeons">Liver-transplant-surgeons</option>
                                    <option value="vascular-and-oncointerventional-radiology">
                                        Vascular-and-oncointerventional-radiology</option>
                                    <option value="pediatric-cardiology">Pediatric-cardiology</option>
                                    <option value="endocrinologists">Endocrinologists</option>
                                    <option value="vascular-endovascular-surgeon">Vascular-endovascular-surgeon
                                    </option>
                                    <option value="electrophysiologist">Electrophysiologist</option>
                                    <option value="cosmetic-surgeons">Cosmetic-surgeons</option>
                                    <option value="pancreas-transplant-surgeons">Pancreas-transplant-surgeons
                                    </option>
                                    <option value="Neuro Spinal Surgeon">Neuro Spinal Surgeon</option>
                                    <option value="Other">Other</option>
                                </select>
                                <label for="pspeciality	">Select Specialties</label>
                            </div>  
                        </div>
                    </div>
                    <div class="row">
                    
                        <div class="col-md-6 col-sm-12">
                        <div class="form-floating mt-3 mb-3">
                        <div class="date-slots">
                        <label for="slot" id="date" name= "date">Select Date</label>
                       
                               <div class="date-slot" data-date="2024-04-17">April 17, 2024</div>
                                <div class="date-slot booked" data-date="2024-04-18">April 18, 2024 (Booked)</div>
                               <div class="date-slot" data-date="2024-04-19">April 19, 2024</div>
                                <div class="date-slot" data-date="2024-04-20">April 20, 2024</div>
                                <div class="date-slot" data-date="2024-04-21">April 21, 2024</div>
                                <div class="date-slot booked" data-date="2024-04-22">April 22, 2024 (Booked)</div>
                                <div class="date-slot" data-date="2024-04-23">April 23, 2024</div>
                        </div>
                     </div>
                        
                    </div>     
                        <div class="time-slots">
                        <div class="col-md-6 col-sm-12">
                            
                            <label for="slot" id= "slot" name= "slot">Select Slot</label>
                               
                           <div class="time-slot" data-time="09:00">09:00 AM</div>
                            <div class="time-slot booked" data-time="10:00">10:00 AM (Booked)</div>
                            <div class="time-slot" data-time="11:00">11:00 AM</div>
                            <div class="time-slot" data-time="12:00">12:00 PM</div>
                            <div class="time-slot" data-time="13:00">01:00 PM</div>
                            <div class="time-slot booked" data-time="14:00">02:00 PM (Booked)</div>
                            <div class="time-slot" data-time="15:00">03:00 PM</div>
                           <div class="time-slot" data-time="16:00">04:00 PM</div>
                        </div>
                       </div>
</div>
                    <div class="row mt-10">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-floating mt-3 mb-3">
                                <textarea style="width:100%" name="pmessage" placeholder="pmessage" value=""
                                    class="form-control" required></textarea>
                                    <label for="pmessage">Message</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 text-center mb-3">
                            
                            <button type="submit" class="btn btn-success btn-lg" name="asave">Submit</button>
                            <button type="reset" class="btn btn-warning btn-lg" name="areset">Reset</button>
                        </div>
                    </div>
                </form>

            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12" style="text-align: center;">
                    <div class="title">
                        <h2 class="" style="color:white; background-color: rgb(84, 84, 206);">Quick
                            Contact
                        </h2>
                        <h5>If you need any assistance in booking an appointment, please call our 24/7
                            Helpline Number</h5>

                        <h5><span>Phone:</span> <a href="tel:040-68334455">040-68334455</a></h5>
                    </div>
                </div>
            </div>

    </section>
    <script>
            function validation() {
                var pname = document.getElementById('pname').value;
                var pphone = document.getElementById('pphone').value;
                var paadhar = document.getElementById('paadhar').value;
                var page = document.getElementById('page').value;
                var pdistrict = document.getElementById('pdistrict').value;
                var ptaluka = document.getElementById('ptaluka').value;
                var pcity = document.getElementById('pcity').value;
                var pspeciality = document.getElementById('pspeciality').value;
                var fmessage = document.getElementById('fmessage').value;
    
                if (pname.trim() == '') {
                    alert('Please Enter Your Name');
                    document.getElementById('pname').value = "";
                    document.getElementById('pname').focus();
                    return false;
                }
                if (pphone.trim() == '') {
                    alert('Please Enter Your Mobile no.');
                    document.getElementById('pphone').value = "";
                    document.getElementById('pphone').focus();
                    return false;
                }
                if (paadhar.trim() == '') {
                    alert('Please Enter Your Aadhar no.');
                    document.getElementById('paadhar').value = "";
                    document.getElementById('paadhar').focus();
                    return false;
                }
                if (page.trim() == '') {
                    alert('Please Enter Current Age');
                    document.getElementById('page').value = "";
                    document.getElementById('page').focus();
                    return false;
                }
                if (pdistrict.trim() == '') {
                    alert('Please Select Your District');
                    document.getElementById('pdistrict').value = "";
                    document.getElementById('pdistrict').focus();
                    return false;
                }if (ptaluka.trim() == '') {
                    alert('Please Enter your Taluka');
                    document.getElementById('ptaluka').value = "";
                    document.getElementById('ptaluka').focus();
                    return false;
                }if (pcity.trim() == '') {
                    alert('Please Enter your City');
                    document.getElementById('pcity').value = "";
                    document.getElementById('pcity').focus();
                    return false;
                }if (pspeciality.trim() == '') {
                    alert('Please Enter your Speciality');
                    document.getElementById('pspeciality').value = "";
                    document.getElementById('pspeciality').focus();
                    return false;
                }if (pmessage.trim() == '') {
                    alert('Please Enter your Message');
                    document.getElementById('pmessage').value = "";
                    document.getElementById('pmessage').focus();
                    return false;
                }
                return true;
            }

            
    document.addEventListener('DOMContentLoaded', function() {
        const timeSlots = document.querySelectorAll('.time-slot');
        timeSlots.forEach(slot => {
            slot.addEventListener('click', function() {
                if (!this.classList.contains('booked')) {
                    timeSlots.forEach(slot => slot.classList.remove('selected'));
                    this.classList.add('selected');
                    const selectedTime = this.getAttribute('data-time');
                    alert(`You have selected ${selectedTime}`);
                } else {
                    alert("This slot is already booked. Please choose another slot.");
                }
            });
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        const dateSlots = document.querySelectorAll('.date-slot');
        dateSlots.forEach(slot => {
            slot.addEventListener('click', function() {
                if (!this.classList.contains('booked')) {
                    dateSlots.forEach(slot => slot.classList.remove('selected'));
                    this.classList.add('selected');
                    const selectedDate = this.getAttribute('data-date');
                    alert(`You have selected ${selectedDate}`);
                } else {
                    alert("This date is already booked. Please choose another date.");
                }
            });
        });
    });
</script>


    <?php include('footer.php'); ?> 