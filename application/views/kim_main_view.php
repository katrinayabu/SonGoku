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
				alert('Welcome Kim');
				/*
					selectors
						- tag
						- id -> #
						- class -> .
				*/
				$('button').click(function(){
					alert("I'm Clicked");
					$('#dialog').dialog({
						title:'Dialog Title',
						height:300,
						width:300,
						buttons:{
							'OK':function(){
								$('#dialog').dialog('close');
							}
						}
					})
				});
			});
		</script>
	</head>
	<body>
		<div id="button">
			<button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only ui-state-hover">Button</button>
		</div>
		<div id="dialog">
			dialog
		</div>
		<?php echo $base_url;?>
		<br/>
		<?php print_r($main_data);?>
	</body>
</html>
