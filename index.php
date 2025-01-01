<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        body{
         background-image:url("https://assets-global.website-files.com/624629e0591bdc3b300cb644/628d1e2f335abe5b6f34674b_healthcare-v2%20(1).jpg")
        }
    </style>
</head>
<body>
    <?php 
        include_once('../connection.php');
        if(isset($_POST['login'])){
            $username=$_POST['username'];
            $password=$_POST['password'];
            $sqlquery="select * from dimuser where username='".$username."' and password='".$password."'";
            $res=mysqli_query($con,$sqlquery);
            if(mysqli_num_rows($res)>0){
                $row=mysqli_fetch_assoc($res);
                $_SESSION['id']=$row['id'];
                $_SESSION['username']=$row['username'];
                $otp=rand(100000,999999);
                $update="update dimuser set otp='".$otp."' where id='".$row['id']."'";
                mysqli_query($con,$update);
                $_SESSION['otp']=$otp;
                echo "<script> alert('Login Successfully.');</script>";
                ?>
                <script>
                    $(document).ready(function() {
                        $('#exampleModal').modal('show');
                    });
                 </script>
                <?php
            }else{
                echo "<script> alert('Your Username & Password Not Match. Please try Again.');</script>";
                echo "<script> window.location='index.php';</script>";
            }
        }
    ?>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
      <div class="modal-dialog modal-md ">
        <div class="modal-content" style="width: 600px; border-radius: 50px; " >
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">OTP Verification</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
                <form action="otpchk.php" method="post">
                    <div class="row">
                        <h6 class="text-center">OTP send on +9192xxxx1630</h6>
                        <h6 class="text-center">OTP : <?php echo $_SESSION['otp']; ?></h6>
                        <div class="col-12 p-5 ">
                            <div class="row mb-3">
                                <div class="col-12">
                                    <div class="input-group">
                                        <label for="" class="input-group-text"><i class="fa fa-key"></i></label>
                                        <input type="Password" name="otp" class="form-control" id="otp" placeholder="Enter OTP">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="check11" name="check11" value="something" onclick="showpasswords()">
                                        <label class="form-check-label" for="check1">Show OTP</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-primary" name="checkotp">Verify</button>
                                    <button type="reset" class="btn btn-warning">Reset</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
           </div>
        </div>
      </div>
    </div>
    <div class="container shadow mt-5 mx-auto p-3" style="width: 500px;border-radius: 50px;">
        <form action="" method="post">
            <div class="row">
                <h1 class="text-center">Admin Login</h1>
                <div class="col-12 p-5 ">
                    <div class="row mb-3">
                        <div class="col-12">
                            <div class="input-group">
                                <label for="" class="input-group-text"><i class="fa fa-user"></i></label>
                                <input type="text" name="username" class="form-control" id="username" placeholder="Enter Username">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12">
                            <div class="input-group">
                                <label for="" class="input-group-text"><i class="fa fa-key"></i></label>
                                <input type="Password" name="password" class="form-control" id="password" placeholder="Enter Password">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="check1" name="check1" value="something" onclick="showpassword()">
                                <label class="form-check-label" for="check1">Show Password</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primary" name="login">Login</button>
                            <button type="reset" class="btn btn-warning">Reset</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script>
        function showpasswords() {
            var x = document.getElementById("otp");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
        function showpassword() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</body>
</html>