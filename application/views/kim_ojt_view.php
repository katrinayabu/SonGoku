<html>
  <head>
		<title>
			Kim
		</title>
		<script type="text/javascript" src="<?php echo $base_url;?>scripts/jquery-2.0.0.js"></script>
		<script type="text/javascript" src="<?php echo $base_url;?>scripts/jquery-ui-1.10.2.custom/js/jquery-ui-1.10.2.custom.min.js"></script>
		<link type="text/css" rel="stylesheet" href="<?php echo $base_url;?>scripts/jquery-ui-1.10.2.custom/css/ui-darkness/jquery-ui-1.10.2.custom.min.css" />
		<script>
			$(document).ready(function(){
				get_ojts_list();				
				$('#btn_add_ojt').click(function(){
					$.ajax({
						url:'<?php echo $base_url; ?>main/add_ojt',
						type:'post',
						beforeSend:function(){
							var error = 0;
							var txt_password = $('#txt_password').val();
							var txt_confirm_pass = $('#txt_confirm_pass').val();
								if (txt_password == '' || txt_confirm_pass == '') {
								error = 1;
								alert('Please Fill Both Password and Confirm Password');
							}else if(txt_password != txt_confirm_pass){
								error = 1;
								alert('Passwords Do No Match');
							}

							if(error){
								return false;
							}else{
								return true;
						}

					},
	
						
						data:{
							first_name:$('#add_ojt_fields #txt_first_name').val(),
							middle_name: $('#add_ojt_fields #txt_middle_name').val(),
							last_name: $('#add_ojt_fields #txt_last_name').val(),
							nick_name: $('#add_ojt_fields #txt_nick_name').val(),
							gender: $('#add_ojt_fields #sel_gender').val(),
							birthdate: $('#add_ojt_fields #txt_birthdate').val(),
							civil_status: $('#add_ojt_fields #txt_civil_status').val(),
							citizenship: $('#add_ojt_fields #txt_citizenship').val(),
							homeaddress: $('#add_ojt_fields #txt_homeaddress').val(),
							password: $('#add_ojt_fields #txt_password').val(),
							confirm_pass: $('#add_ojt_fields #txt_confirm_pass').val()
							
						},
						success:function(data){
							alert('OJT Added');
							get_ojts_list();
						}						
					});
				});
				
				$('body').delegate('.btn_update,.btn_delete','click',function(){
					// alert($(this).attr('value')+' - '+$(this).attr('action'));
					action = $(this).attr('action');
					ojt_id = $(this).attr('value');
					if(action == 'delete'){
						remove_ojt(ojt_id);
					}else{
						get_ojt_details(ojt_id);
					}
				});
			
				  
			});
				
			
			function get_ojt_details(ojt_id){
				$.ajax({
					url:'<?php echo $base_url; ?>main/load_ojt_details',
					type:'post',
					beforeSend:function(){
					},
					data:{
						ojt_id:ojt_id
					},
					success:function(html){
						$('#modal_container').html(html);
						$('#modal_container').dialog({
							title:'OJT Update View',
							height:300,
							width:1000,
							modal:true
						});
					}
				});
			}
			
			function remove_ojt(ojt_id){
				$.ajax({
					url:'<?php echo $base_url; ?>main/remove_ojt',
					type:'post',
					beforeSend:function(){
					},
					data:{
						ojt_id:ojt_id
					},
					success:function(data){
						alert('OJT Deleted');
						get_ojts_list();
					}
				});
			}
			
			function get_ojts_list(){
				$.ajax({
					url:'<?php echo $base_url; ?>main/get_ojts',
					type:'post',
					beforeSend:function(){
						$('#data_container').html('<b>Loading OJTs...</b>');
					},
					success:function(html){
						$('#data_container').html(html);
					}
				});
			}
		</script>
	</head>
	<body>
		<div id="modal_container"></div>
		<div id="add_ojt_fields">
			<p>Firstname: <input type="text" id="txt_first_name" name="txt_first_name" value="" /></p>
			<p>Middlename: <input type="text" id="txt_middle_name" name="txt_middle_name" value="" /></p>
			<p>Lastname: <input type="text" id="txt_last_name" name="txt_last_name" value="" /></p>
			<p>Nickname: <input type="text" id="txt_nick_name" name="txt_nick_name" value="" /></p>
			<p>Gender: <select id="sel_gender">
				<option type="text" value="Male">Male</option>
				<option type="text" value="Female">Female</option>
				</select></p>
			<p>Birthdate: <input type="text" id="txt_birthdate" name="txt_birthdate" value="" /></p>
			<p>Civil Status: <input type="text" id="txt_civil_status" name="txt_civil_status" value="" /></p>
			<p>Citizenship: <input type="text" id="txt_citizenship" name="txt_citizenship" value="" /></p>
			<p>Home Address: <input type="text" id="txt_homeaddress" name="txt_homeaddress" value="" /></p>
			<p>Password: <input type="text" id="txt_password" name="txt_password" value="" /></p>
			<p>Confirm Password: <input type="text" id="txt_confirm_pass" name="txt_confirm_pass" value="" /></p>
		</div>
		<div id="button">
			<button id="btn_add_ojt" type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only ui-state-hover">
			ADD OJT
			</button>
		</div>
		List of OJTs
		<!-- container of retrieved data -->
		<div id="data_container">
			
		</div>
		<?php //echo $base_url; ?>
		<br/>
	</body>
</html>
