<!Doctype>
<head>
<script language="javascript">
function postDataReturnText(url, data, callback){
	var XMLHttpRequestObject = false;
	
	if(window.XMLHttpRequest){
		XMLHttpRequestObject = new XMLHttpRequest();
	}
	else if(window.ActiveXObject){
		XMLHttpRequestObject = new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	if (XMLHttpRequestObject){
		XMLHttpRequestObject.open("POST", url);
		XMLHttpRequestObject.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		XMLHttpRequestObject.onreadystatechange = function(){
			if(XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200){
				callback(XMLHttpRequestObject.responseText);
				delete XMLHttpRequestObject;
				XMLHttpRequestObject = null;
			}
		}
		XMLHttpRequestObject.send(data);
	}
}

function display(text){
	document.getElementById('targetDiv').innerHTML = text;
}
</script>
</head>

<body>
	<form><input type="button" value="Get the message" onClick="postDataReturnText('echo.php', 'message=Good afternoon.', display)">Okay</form>
        <div id="targetDiv">Muya Mark</div>
</body>