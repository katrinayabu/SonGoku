<script>
  $(document).ready(function(){
		$('#btn_update_ojt').click(function(){
			$.ajax({
				url:'<?php echo $base_url; ?>main/update_ojt',
				type:'post',
				beforeSend:function(){
					alert('Updating OJT Details');
				},
				data:{
					ojt_id:'<?php echo $ojt_details['OJTID'];?>',
					first_name:$('#update_ojt_fields #txt_first_name').val(),
					middle_name: $('#update_ojt_fields #txt_middle_name').val(),
					last_name: $('#update_ojt_fields #txt_last_name').val(),
					nick_name: $('#update_ojt_fields #txt_nick_name').val(),
					gender: $('#update_ojt_fields #txt_gender').val(),
					birthdate: $('#update_ojt_fields #txt_birthdate').val(),
					civil_status: $('#update_ojt_fields #txt_civil_status').val(),
					citizenship: $('#update_ojt_fields #txt_citizenship').val(),
					homeaddress: $('#update_ojt_fields #txt_homeaddress').val(),
					password: $('#update_ojt_fields #txt_password').val(),
					confirm_pass: $('#update_ojt_fields #txt_confirm_pass').val()
				},
				success:function(data){
					alert('OJT Updated');
					get_ojts_list();
				}						
			});
		});
	});
</script>

<div id="update_ojt_fields">
	<p>Firstname: <input type="text" id="txt_first_name" name="txt_first_name" value="<?php echo $ojt_details['Firstname'];?>" /></p>
	<p>Middlename: <input type="text" id="txt_middle_name" name="txt_middle_name" value="<?php echo $ojt_details['Middlename'];?>" /></p>
	<p>Lastname: <input type="text" id="txt_last_name" name="txt_last_name" value="<?php echo $ojt_details['Lastname'];?>" /></p>
	<p>Nickname: <input type="text" id="txt_nick_name" name="txt_nick_name" value="<?php echo $ojt_details['Nickname'];?>" /></p>
	<p>Gender: <input type="text" id="txt_gender" name="txt_gender" value="<?php echo $ojt_details['Gender'];?>" /></p>
	<p>Birthdate: <input type="text" id="txt_birthdate" name="txt_birthdate" value="<?php echo $ojt_details['Birthdate'];?>" /></p>
	<p>Civil Status: <input type="text" id="txt_civil_status" name="txt_civil_status" value="<?php echo $ojt_details['Civilstatus'];?>" /></p>
	<p>Citizenship: <input type="text" id="txt_citizenship" name="txt_citizenship" value="<?php echo $ojt_details['Citizenship'];?>" /></p>
	<p>Home Address: <input type="text" id="txt_homeaddress" name="txt_homeaddress" value="<?php echo $ojt_details['Homeaddress'];?>" /></p>
	<p>Password: <input type="text" id="txt_password" name="txt_password" value="<?php echo $ojt_details['Password'];?>" /></p>
	<p>Confirm Password: <input type="text" id="txt_confirm_pass" name="txt_confirm_pass" value="<?php echo $ojt_details['Confirmpassword'];?>" /></p>
</div>
<div id="button">
	<button id="btn_update_ojt" type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only ui-state-hover">
	ADD OJT
	</button>
</div>
