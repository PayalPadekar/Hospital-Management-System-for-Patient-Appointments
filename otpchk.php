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