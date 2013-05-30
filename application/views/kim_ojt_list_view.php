<table border=1>
  <thead>
		<th>Index</th>
		<th>OJT ID</th>
		<th>First Name</th>
		<th>Middle Name</th>
		<th>Last Name</th>
		<th>Nick Name</th>
		<th>Gender</th>
		<th>Birth Date</th>
		<th>Civil Status</th>
		<th>Citizenship</th>
		<th>Home Address</th>
		<th>Password</th>
		<th>Confirm Password</th>
		<th>Action</th>
	</thead>
	<tbody>
		
	<?php
		if($ojts_list){
			foreach($ojts_list as $index=>$ojt){
	?>
		<tr>
			<td><?php echo $index;?></td>
			<td><?php echo $ojt['OJTID'];?></td>
			<td><?php echo $ojt['Firstname'];?></td>
			<td><?php echo $ojt['Middlename'];?></td>
			<td><?php echo $ojt['Lastname'];?></td>
			<td><?php echo $ojt['Nickname'];?></td>
			<td><?php echo $ojt['Gender'];?></td>
			<td><?php echo $ojt['Birthdate'];?></td>
			<td><?php echo $ojt['Civilstatus'];?></td>
			<td><?php echo $ojt['Citizenship'];?></td>
			<td><?php echo $ojt['Homeaddress'];?></td>
			<td><?php echo $ojt['Password'];?></td>
			<td><?php echo $ojt['Confirmpassword'];?></td>
			<td>
				<button class="btn_update" value="<?php echo $ojt['OJTID'];?>" action="update" >UPDATE</button>
				<button class="btn_delete" value="<?php echo $ojt['OJTID'];?>" action="delete" >DELETE</button>				
			</td>
		</tr>
	<?php
			}
		}
	?>
	</tbody>
</table>
