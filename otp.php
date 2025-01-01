<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Verification</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>

    </style>
</head>
<body class="bg-primary">
    <?php 
        include_once('../connection.php');
        if(isset($_POST['checkotp'])){
            $otp=$_POST['otp'];
            $sqlquery="select * from dimuser where otp='".$otp."' and id='".$_SESSION['id']."'";
            $res=mysqli_query($con,$sqlquery);
            if(mysqli_num_rows($res)>0){
                $row=mysqli_fetch_assoc($res);
                echo "<script> alert('OTP Verification Successfully.');</script>";
                echo "<script> window.location='dashboard.php';</script>";
            }else{
                echo "<script> alert('Your entered OTP Not Match. Please try Again.');</script>";
                echo "<script> window.location='otp.php';</script>";
            }
        }
    ?>
    <div class="container mt-5 mx-auto p-5" style="width: 600px; border-radius: 50px;">
        <form action="" method="post">
            <div class="row">
                <h1 class="text-center">OTP Verification</h1>
                <h5 class="text-center">OTP send on +9192xxxx1630</h5>
                <h5 class="text-center">OTP : <?php echo $_SESSION['otp']; ?></h5>
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
                                <input type="radio" class="form-check-input" id="check1" name="option1" value="something" onclick="showpassword()">
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
    <script>
        function showpassword() {
            var x = document.getElementById("otp");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</body>
</html>