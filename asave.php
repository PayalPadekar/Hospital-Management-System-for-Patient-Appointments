<?php
include_once("connection.php");
if(isset($_POST['asave'])){
    $pname=$_POST['pname'];
    $pphone=$_POST['pphone'];
    $paadhar=$_POST['paadhar'];
    $page=$_POST['page'];
    $pdistrict=$_POST['pdistrict'];
    $ptaluka=$_POST['ptaluka'];
    $pcity=$_POST['pcity'];
    $pspeciality=$_POST['pspeciality'];
    $date=$_POST['date'];
    $slot=$_POST['slot'];
    $pmessage=$_POST['pmessage'];
    
    /*echo "<br>pname= ".$pname;
    echo "<br>pphone= ".$pphone;
    echo "<br>paadhar= ".$paadhar;
    echo "<br>page= ".$page;
    echo "<br>pdistrict= ".$pdistrict;
    echo "<br>ptaluka= ".$ptaluka;
    echo "<br>pcity= ".$pcity;
    echo "<br>pspeciality= ".$pspeciality;
    echo "<br>pmessage= ".$pmessage;*/
    $inserttime=date('Y-m-d h:i:s a');
    echo"<br>sqlquery = ".$sqlquery= "insert into appointment(pname,pphone,paadhar,page,pdistrict,ptaluka,pcity,pspeciality,date,slot,pmessage,inserttime) values('".$pname."','".$pphone."','".$paadhar."','".$page."','".$pdistrict."','".$ptaluka."','".$pcity."','".$pspeciality."','".$date."','".$slot."','".$pmessage."','".$inserttime."')";
    mysqli_query($con,$sqlquery);
    header('location:appointment.php');
}
?>
