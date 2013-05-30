<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
	<title>QnA Log-in</title>
	<META HTTP-EQUIV="Pragma" CONTENT="no-cache">
	<link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>styles/index_style/style.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>styles/jquery.jscrollpane.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>styles/index_style/scrollPaneDefault.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>styles/index_style/jqueryui.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>styles/login_qna.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>styles/style_stars.css" />
	<script type="text/javascript" src="<?php echo $base_url; ?>scripts/index/jquery.js"></script>
	<script type="text/javascript" src="<?php echo $base_url; ?>scripts/index/jqueryui.js"></script>
	<script type="text/javascript" src="<?php echo $base_url; ?>scripts/jquery-1.3.2.min.js"></script>
	<script type="text/javascript" src="<?php echo $base_url; ?>scripts/jquery.backgroundPosition.js"></script>
	<!--<script type="text/javascript" src="<?php echo $base_url; ?>scripts/jquery-1.9.1.js"></script>-->
	<script type="text/javascript">
		$(document).ready(function(){
			$('#midground').css({backgroundPosition: '0px 0px'});
			$('#foreground').css({backgroundPosition: '0px 0px'});
			$('#background').css({backgroundPosition: '0px 0px'});
			$('#midground').animate({
				backgroundPosition:"(-10000px -2000px)"
			}, 240000, 'linear');

			$('#foreground').animate({
				backgroundPosition:"(-10000px -2000px)"
			}, 120000, 'linear');

			$('#background').animate({
				backgroundPosition:"(-10000px -2000px)"
			}, 480000, 'linear');
			
			$('#login_form_qna').submit(function(){
				$.ajax({
					url:'<?php echo $base_url;?>authentication/login',
					type:'post',
					beforeSend:function(){
						$('#loading_page').css('display','block');
					},
					data:{
						username: $('#txt_username').val(),
						password: $('#txt_password').val()
					},
					success:function(user_id){
						// alert(user_id);return false;
						if(parseInt(user_id)>0){
							window.location = '<?php echo $base_url;?>qna';
							return false;
						}else{
							$('#loading_page').css('display','none');
							$('#notification_container').slideToggle(1000).slideToggle(1500);
						}
					}
				});
				return false;
			});
		});
	</script>
</head>
<body>
	
	<div id="background"></div>
	<div id="midground"></div>
	<div id="foreground"></div>
	
	<div class="loading" id="loading_page" style="position: fixed; z-index: 9999; background-color: rgb(0, 0, 0); opacity: 0.5; width: 100%; height: 100% !important; display: none; "><img style="width: 50px; height: 50px; position: absolute;  left: 50%; top: 50%; " src="<?php echo $base_url;?>images/loading.gif"></div>
	<div id="page-wrap">
		<div id="home">
			<center><img src="<?php echo $base_url; ?>images/red_logo_glow.png" /></center>
			<div class="log_container">
				<div class="border start">
					<form id="login_form_qna" action="<?php echo base_url(); ?>authentication/login" method="post">
						<label for="username">Username</label>
						<input id="txt_username" name="username" type="text" placeholder="User ID"/>
						<label for="pass">Password</label>
						<input id="txt_password" name="password" type="password" placeholder="Password"/>
						<div id="notification_container" style="display:none">Access denied!</div>
						<input id="btn_submit" type="submit" value="LOG IN" />
					</form>
				</div>
			</div>	
		</div>
	</div>
</body>
</html>
