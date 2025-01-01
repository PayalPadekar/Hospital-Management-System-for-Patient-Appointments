<?php include_once('adminnavbar.php'); ?>
<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div
          class="row">
          <h1 class="h2">Appointment Data</h1>
        <div class="col-12">
          <table class="table table-borderd">
            <thead>
              <tr>
              <th>Action</th>
                <th>Sr.No.</th>
                <th>Name</th>
                <th>Mobile No.</th>
                <th>Aadhar No.</th>
                <th>Age</th>
                <th>District</th>
                <th>Taluka</th>
                <th>City</th>
                <th>Speciality</th>
                <th>Message</th>
                <th>Date & Time</th>
              </tr>
            </thead>
            <tbody>
                <?php 
                $sqlquery="select * from appointment";
                $res=mysqli_query($con,$sqlquery);
                $i=1;
                while($row=mysqli_fetch_assoc($res)){ ?>
                    <tr>
                    <td>
                          <form action="" method="post">
                            <input type="hidden" name="id_<?php echo $row['id']; ?>" id="id_<?php echo $row['id']; ?>" value="<?php echo $row['id']; ?>">
                            <button type="submit" name="delete_<?php echo $row['id']; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</button>
                          </form>
                          <?php 
                            if(isset($_POST['delete_'.$row['id']])){
                            $id=$_POST['id_'.$row['id']];
                              $delsql="delete from appointment where id='$id'";
                              $sss=mysqli_query($con,$delsql);
                              if($sss){
                                echo "<script> alert('Appointment Delete Succesfully.')</script>";
                                echo "<script> window.location='adminappointment.php';</script>";
                              }
                            }
                          ?>
                        </td>
                        <th><?php echo $i++; ?></th>
                        <td><?php echo $row['pname']; ?></td>
                        <td><?php echo $row['pphone']; ?></td>
                        <td><?php echo $row['paadhar']; ?></td>
                        <td><?php echo $row['page']; ?></td>
                        <td><?php echo $row['pdistrict']; ?></td>
                        <td><?php echo $row['ptaluka']; ?></td>
                        <td><?php echo $row['pcity']; ?></td>
                        <td><?php echo $row['pspeciality']; ?></td>
                        <td><?php echo $row['pmessage']; ?></td>
                        <td><?php echo $row['inserttime']; ?></td>
                       
                     </tr>
              <?php  }
                ?>
            </tbody>
          </table>
          </div>
        </div>
      </main>
    </div>
  </div>
  <?php include_once('adminfooter.php'); ?> 