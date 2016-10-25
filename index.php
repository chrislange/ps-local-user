<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Create Local User with PowerShell (chrislange.co)</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
		<link rel="stylesheet" href="css/main.css">
        

    </head>

    <body>
    <br><br><br>
    <center>
		<input type="text" id="username" placeholder="Full Name"><br />
		<input type="text" id="ninumber" placeholder="NI Number"><br />
		<input type="text" id="company" placeholder="Company Name"><br />
		<button id="button"> GENERATE </button>
		
		<div id="result"></div>
	</center>

<script>
$('#button').click(function() {
	var val1 = $('#username').val();
	var val2 = $('#ninumber').val();
	var val3 = $('#company').val();
		$.ajax({
		    type: 'POST',
		    url: 'process.php',
		    data: { username: val1, ninumber: val2, company: val3 },
		    success: function(response) {
		        $('#result').html(response);
		    }
		});
});
</script>
    </body>



</html>