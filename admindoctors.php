<?php include_once('adminnavbar.php'); ?>
      <main class="col-md-9 mt-5 col-lg-10 px-md-4">
         <section class="content-header">
			<h4 class="text-center">
				<button type="button" class="btn btn-success" data-bs-toggle="modal"
					onclick="callupdate('Save');" data-bs-target="#modaldefault"><i class="fa fa-plus"></i> New </button>
				<span class="pagenavhead">Our Doctors List</span>
			</h4>
		</section>
        <div class="modal modal-default fade" id="modaldefault">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header text-center d-block">
						<h4 class="modal-title"> Doctors</h4>
					</div>
					<div class="modal-body">
						<form id="formid" enctype="multipart/form-data">
							<input type="text" class="form-control textfields d-none" id="iddoctor" name="iddoctor">
							<input type="text" class="form-control textfields d-none" id="crud" name="crud" value="">
							<div class="row mb-3">
                                <div class="col-4">
                                    <label>Doctors Category</label>
                                </div>
                                <div class="col-8">
                                   <select class="form-control textfields required" id="category" name="category">
                                        <option value="">Select Doctors Category</option>
                                        <option value="cardiology">Cardiology</option>
                                        <option value="nephrology">Nephrology</option>
                                        <option value="gastroenterology">Gastroenterology</option>
                                        <option value="oncology">Oncology</option>
                                        <option value="pediatrics">Pediatrics</option>
                                        <option value="kidneytransplantation">Kidney Transplantation</option>
                                        <option value="livertransplantation">Liver Transplantation</option>
                                        <option value="more">More</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-4">
                                    <label>Doctor Name</label>
                                </div>
                                <div class="col-8">
                                    <input type="text" class="form-control textfields required" id="doctorname" name="doctorname"
                                        placeholder="Enter Doctor Name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-4">
                                    <label>Education</label>
                                </div>
                                <div class="col-8">
                                    <input type="text" class="form-control textfields required" id="education" name="education"
                                        placeholder="Enter Education">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-4">
                                    <label>Experience</label>
                                </div>
                                <div class="col-8">
                                    <input type="text" class="form-control textfields required" id="experience" name="experience"
                                        placeholder="Enter Experience">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-4">
                                    <label>Languages spoken</label>
                                </div>
                                <div class="col-8">
                                    <input type="text" class="form-control textfields required" id="languagesspoken" name="languagesspoken"
                                        placeholder="Enter Product Description">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-4">
                                    <label>Professional Memberships</label>
                                </div>
                                <div class="col-8">
                                    <input type="text" class="form-control textfields required" id="professionalmemberships" name="professionalmemberships"
                                        placeholder="Enter Professional memberships">
                                </div>
                            </div>
                            <div class="row mb-3">
                            <div class="col-4">
                                    <label>Contact no.</label>
                                </div>
                                <div class="col-8">
                                    <input type="text" class="form-control textfields required" id="contactnow" name="contactnow"
                                        placeholder="Enter Contact no.">
                                </div>
							</div>
                            <div class="row mb-3">
                                <div class="col-12 text-center d-block">
                                    <button type="button" id="Save" name="Save" class="btn btn-primary"
                                    onclick="return checkformvalidation();">Save</button>
                                </div>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger pull-right" data-bs-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
        <div id="recordshow" class="table-responsive">
        </div>
      </main>
    <script>
        function callupdate(opration, data) {
            $(".textfields").val("");
            $("#formid img").addClass("d-none");
            if (data) {
                Object.entries(data).forEach(([key, value]) => {
                    // console.log(key , value);
                    if ($("img." + key).length && value != '') {
                        $(".img." + key).removeClass("d-none");
                        $(".img." + key).attr('src', value);
                        $("#" + key + "_old").val(value);
                    } else if ($("#formid #" + key).length) {
                        $("#formid #" + key).val(value);
                    }
                });
            }
            $("#crud").val(opration);
            $("#Save").text(opration);
        }
        function checkformvalidation() {
            var condition = "";
            $(document).find("#formid .required").each(function() {
                if ($(this).val().trim() == '') {
                    condition = "Y";
                    $(this).focus();
                    alert("Please Enter Value");
                    return false;
                }
            });
            if (condition == "") {
                CRUDOPAjax();
                return true;
            }
        }
        function CRUDOPAjax() {
            $("#modaldefault").modal('hide');
            var crud=$("#crud").val().trim();
            if (crud == 'Delete') {
                var result = confirm("Do you want to Delete?");
                if (result == false) {
                    return false;
                }
            }
            var formData = new FormData($("#formid")[0]);
            var req = $.ajax({
                url: 'doctorsave.php',
                type: 'POST',
                cache: false,
                data: formData,
                mimeType: "multipart/form-data",
                contentType: false,
                processData: false
            });
            req.done(function(text) {
                var return_data = text.trim();
                console.log("return_data="+return_data);
                if (return_data == "1") {
                    if(crud == 'Save'){
                        alert("Inserted Successfully");
                    }else if(crud == 'Update'){
                        alert("Updated Successfully");
                    }else if(crud == 'Delete'){
                        alert("Deleted Successfully");
                    }
                    refreshdata();
                } else {
                    alert("try again");
                }
            });
        }
        function refreshdata() {
            var req = $.ajax({
                url: 'getdoctordata.php',
                type: 'get',
                cache: false
            });
            req.done(function(text) {
                $('#recordshow').html(text);
            });
        }
        $(document).ready(function() {
            refreshdata();
        });
    </script>
<?php include_once('adminfooter.php'); ?>