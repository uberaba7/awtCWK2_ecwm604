<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <title></title>

    <link href="<?php echo base_url();?>css/styles.css" type=text/css rel=stylesheet>
    <script src="<?php echo base_url(); ?>js/rotate.js" type="text/javascript"></script>
	<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/twitter-bootstrap/2.0.4/css/bootstrap-combined.min.css" />
    <script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	
	 <script language="javascript">
			// $(document).ready(function() {
			// $('#findsubmit').click(function() {
			// var firstname;
			// $.get("/code/index.php/find/test",{	firstname : $('#firstname').val()  } , function(data) {
 
            // $('#result').html('Firstname: ' + data.firstname + ' Lastname: ' + data.lastname); },"json"); return false; });
			// });
	 </script>

</head>
<body>
		<div class="container"> <div class="row">
        <div class="form-format">
        <form action="/ecwm604/index.php/find/findemp" method="GET" >
					Employee No:        <input type=text name='empno' id='empno'style="margin-left: 0px"><br/>
					First name:         <input type=text name='firstname' id='firstname'style="margin-left: 0px"><br/>
                    Last name:          <input type=text name='lastname' id='lastname'style="margin-left: 0px"><br/>
                    Department Name:    <input type=text name='dept' id='dept'style="margin-left: 0px"><br/>
                    Current job Title:  <input type=text name='jobtitle' id='jobtile' style="margin-left: 0px"><br/>
					<input type=submit value="Search" id="findsubmit">
        </form>
		<div class="row" id="result">   </div><br/>
		</div>
		</div>
        </div>
		
</body>
</html>