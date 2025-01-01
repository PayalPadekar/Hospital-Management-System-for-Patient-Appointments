<?php include_once('adminnavbar.php'); ?>
      <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div
          class="row">
          <h1 class="h2">Contact us Data</h1>
        <div class="col-12">
          <table class="table table-borderd">
            <thead>
              <tr>
                <th>Action</th>
                <th>SrNo</th>
                <th>Full Name</th>
                <th>Email-ID</th>
                <th>Mobile</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Date & Time</th>
              </tr>
            </thead>
            <tbody>
                <?php 
                $sqlquery="select * from contactus";
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
                              $delsql="delete from contactus where id='$id'";
                              $sss=mysqli_query($con,$delsql);
                              if($sss){
                                echo "<script> alert('Contact Us Delete Succesfully.')</script>";
                                echo "<script> window.location='admincontact.php';</script>";
                              }
                            }
                          ?>
                        </td>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $row['fname']; ?></td>
                        <td><?php echo $row['femail']; ?></td>
                        <td><?php echo $row['fmobile']; ?></td>
                        <td><?php echo $row['fsubject']; ?></td>
                        <td><?php echo $row['fmassege']; ?></td>
                        <td><?php echo $row['inserttime']; ?></td>
                     </tr>
              <?php  }
                ?>
            </tbody>
          </table>
          </div>
        </div>
      </main>
<?php include_once('adminfooter.php'); ?>
