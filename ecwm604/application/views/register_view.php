<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <title>Register Password</title>

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

            <form action="http://www.ecwm604.us/w1292342/ecwm604/index.php/auth/set_password" method="POST">



                Employee ID:

                <input type="text" name='emp_id' > <br>

                First name:

                <input type="text" name='first_name'  > <br>

                Last name:

                <input type="text" name='last_name'  > <br>

                Hired date:

                <input type="text" name='hired_date' > <br>

                Choose password:

                <input type="password" name='password'> <br/>

                Confirm password:

                <input type="password" name='conf_pword' ><br/>



                <input type="submit" value='Set password' >
                <a href="/ecwm604/index.php/login" >Go back</a>

            </form>
        </div>



</body>
</html>




