<?php
	require_once("../connection.php");
?>
	<table id="dttable" class="table table-bordered table-hover">
		<thead>
			<tr style='background-color:#3c8dbc;color:white;'>
				<th class="text-center">SI</th>
				<th class="text-center">Category</th>
				<th class="text-center">Doctor Name</th>
				<th class="text-center">Education</th>
				<th class="text-center">Experience</th>
				<th class="text-center">Languages spoken</th>
				<th class="text-center">Professional Memberships</th>
				<th class="text-center">Contact Now</th>
				<th class="text-center">UPDATE</th>
				<th class="text-center">DELETE</th>
			</tr>
		</thead>
		<tbody>
		<?php
			$sql = "select * from tbldoctor";
			$res = mysqli_query($con,$sql);
			$i=1;
			while($row = mysqli_fetch_assoc($res)){
				$dfdsfasf=json_encode($row);
				?>
				<tr>
					<td class='text-center'><?php echo $i++; ?></td>
					<td><?php echo $row['category']; ?></td>
					<td><?php echo $row['doctorname']; ?></td>
					<td><?php echo $row['education']; ?></td>
					<td><?php echo $row['experience']; ?></td>
					<td><?php echo $row['languagesspoken']; ?></td>
                    <td><?php echo $row['professionalmemberships']; ?></td>
                    <td><?php echo $row['contactnow']; ?></td>

					<td class='text-center'>
						<button type="button" class="btn btn-primary pull-left" data-bs-toggle="modal" data-bs-target="#modaldefault"  
						onclick='callupdate("Update",<?php echo $dfdsfasf; ?>);'><i class="fa fa-edit"></i> Update </button>
					</td>
					<td class='text-center'> 
						<button type="button" class="btn btn-danger pull-left" 
						onclick='callupdate("Delete",<?php echo $dfdsfasf; ?>);CRUDOPAjax();'><i class="fa fa-trash"></i> Delete </button>
					</td>
				</tr>
			<?php  } ?>
		</tbody>
	</table>
	<script>
		$(document).ready(function(){
			var table=$('#dttable').DataTable({
				'paging'      : true,
				'lengthChange': true,
				'searching'   : true,
				'ordering'    : true,
				'info'        : true,
				'responsive'  : true,
				'autoWidth'   : true,
				"lengthMenu": [[10, 25, 50, 100, 250, 500, 1000, -1], [10, 25, 50, 100, 250, 500, 1000, "All"]]
			});
		});
	</script>