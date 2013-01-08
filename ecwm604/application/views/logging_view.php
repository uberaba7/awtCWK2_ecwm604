<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <title>Login Details</title>
    <link href="<?php echo base_url();?>css/styles.css" type=text/css rel=stylesheet>
    <!-- <script src="<?php /*echo base_url(); */?>js/rotate.js" type="text/javascript"></script>
    <script src="<?php /*echo base_url(); */?> /js/jquery-1.8.3.js" type="text/javascript"></script>-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/twitter-bootstrap/2.0.4/css/bootstrap-combined.min.css"/>
    <script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>

</head>
<body>

<div align="centre" style="margin-left: 40%">
    <ul class="nav nav-tabs"  style="width: 38%; margin-left: -5%">
        <li><a href="http://www.ecwm604.us/w1292342/ecwm604/index.php/home_page">Home</a></li>
        <li><a href="http://www.ecwm604.us/w1292342/ecwm604/index.php/contact_us">Contact us</a></li>
        <li><a href="http://www.ecwm604.us/w1292342/ecwm604/index.php/about_us">About us</a></li>
        <li><a href="http://www.ecwm604.us/w1292342/ecwm604/index.php/login">Login</a></li>
    </ul>


<br/>
<br/>


    <form action="http://www.ecwm604.us/w1292342/ecwm604/index.php/auth/authenticate" method="POST">
        Username: <input type="text" name='uname' length="10" size="10"> <br>
        Password: <input type="password" name='pword' size="30"> <br>
        <input type="submit" value='Login' style="width: 100px; height: 30px; margin-left: 77px"></br></br>
        if you do not yet have a password, please click <a href="http://www.ecwm604.us/w1292342/ecwm604/index.php/auth/register">here</a>
    </form>

</div>


</body>
</html>