<?php
include_once("connection.php");
if(isset($_POST['datasave'])){
    $fname=$_POST['fname'];
    $femail=$_POST['femail'];
    $fmobile=$_POST['fmobile'];
    $fsubject=$_POST['fsubject'];
    $fmassege=$_POST['fmassege'];
    echo "<br>fname= ".$fname;
    echo "<br>femail= ".$femail;
    echo "<br>fmobile= ".$fmobile;
    echo "<br>fsubject= ".$fsubject;
    echo "<br>fmassege= ".$fmassege;
    $inserttime=date('Y-m-d h:i:s a');
    echo"<br>sqlquery = ".$sqlquery= "insert into contactus(fname,femail,fmobile,fsubject,fmassege,inserttime) values('".$fname."','".$femail."','".$fmobile."','".$fsubject."','".$fmassege."','".$inserttime."')";
    mysqli_query($con,$sqlquery);
    header('location:contactus.php');
}
?>
