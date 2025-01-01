<?php include_once('adminnavbar.php'); ?>
      <main class="col-md-9 mt-5 col-lg-10 px-md-4">
         <section class="content-header">
			<h4 class="text-center">
				<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modaldefault" onclick="callupdate('Save');" ><i class="fa fa-plus"></i> New </button>
				<span class="pagenavhead">Our Gallery Data</span>
			</h4>
		</section>
        <div class="modal modal-default fade" id="modaldefault">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header text-center d-block">
						<h4 class="modal-title">Gallery</h4>
					</div>
					<div class="modal-body">
						<form id="formid" enctype="multipart/form-data">
							<input type="text" class="form-control d-none textfields" id="id" name="id">
							<input type="text" class="form-control d-none textfields" id="crud" name="crud" value="">
                            <div class="row mb-3">
                                <div class="col-4">
                                    <label> Image</label>
                                </div>
                                <div class="col-8">
                                    <input type="file" class="form-control textfields" id="logo" name="logo">
                                    <input type="text" class="form-control d-none textfields" id="logo_old"
                                        name="logo_old">
                                    <img src="" class="img img-responsive d-none logo" width="100px" height="50px">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-4">
                                    <label>Video/Documentry</label>
                                </div>
                                <div class="col-8">
                                    <textarea name="documentry" id="documentry" placeholder="Enter video/Documentry" class="form-control textfields " rows="10"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-4">
                                    <label>Category</label>
                                </div>
                                <div class="col-8">
                                    <input type="text" id="category" name="category" placeholder="Enter Category" class="form-control textfields required">
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
            // alert('hiii');
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
                url: 'gallerysave.php',
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
                url: 'getgallerydata.php',
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