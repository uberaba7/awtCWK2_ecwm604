<!DOCTYPE html>
<html>
<head>
    <title></title>


    <link href="<?php echo base_url();?>css/styles.css" type=text/css rel=stylesheet>
    <!-- <script src="<?php /*echo base_url(); */?>js/rotate.js" type="text/javascript"></script>
    <script src="<?php /*echo base_url(); */?> /js/jquery-1.8.3.js" type="text/javascript"></script>-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/twitter-bootstrap/2.0.4/css/bootstrap-combined.min.css"/>
    <script src="http://code.jquery.com/jquery-latest.js"></script>

    <script language="javascript">

        $(document).ready(function(){
            $('#add').click(function(e) {
                e.preventDefault();
                var query_string = "http://www.ecwm604.us/w1292342/ecwm604/index.php/add_employee/add_emp?"
                        + "empno=" + $('#empno').val()
                        + "&firstname=" + $('#firstname').val()
                        + "&lastname=" + $('#lastname').val()
                        + "&birthday=" + $('#birthday').val()
                        + "&gender=" + $('#gender').val()
                        + "&hiredfromdate=" + $('#hiredfromdate').val()
                        + "&hiredtodate=" + $('#hiredtodate').val()
                        + "&jobtitle=" + $('#jobtitle').val()
                        + "&department=" + $('#department').val()
                        + "&salary=" + $('#salary').val();

                $.getJSON(query_string, null
                        ,
                        function(data){

                            if(data == 'wrong'){$('#').append('<div id="bad_response">' +
                                    'Please, fill at least one of the fields' + '</div>');}

                            $.each(data, function() {
                                $.each(this, function(i, item) {

                                    $('#').append(
                                            '<tr>' +
                                                    '<td class="remove1">' + item.firstname  + '</td>'+
                                                    '<td class="remove2">' + item.lastname + '</td>'+
                                                    '<td class="remove3">' + item.dept + '</td>'+
                                                    '<td class="remove4">' + item.title + '</td>'
                                                    + '</tr>'
                                    );
                                });
                            });
                        });
            });

            $("#").click(function () {

                $(".remove1").remove();
                $(".remove2").remove();
                $(".remove3").remove();
                $(".remove4").remove();
                $("#bad_response").remove();

            });
        });

    </script>
</head>
<body>
<div align="centre" style="margin-left: 40%">
    <ul class="nav nav-tabs"  style="width: 38%; margin-left: -5%">
        <li><a href="http://www.ecwm604.us/w1292342/ecwm604/index.php/home_page">Home</a></li>
        <li><a href="http://www.ecwm604.us/w1292342/ecwm604/index.php/contact_us">Contact us</a></li>
        <li><a href="http://www.ecwm604.us/w1292342/ecwm604/index.php/about_us">About us</a></li>
        <li><a href="http://www.ecwm604.us/w1292342/ecwm604/index.php/login">Login</a></li>
    </ul>

    <br>
    <br>

    <div class="row">
        <div>
            <form method="GET">
                Emp_no: <input type=text name='empno' id='empno' style="margin-left: 0px"><br/>
                First name: <input type=text name='firstname' id='firstname' style="margin-left: 0px"><br/>
                Last name: <input type=text name='lastname' id='lastname' style="margin-left: 0px"><br/>
                Birthday: <input type=text name='birthday' id='birthday' style="margin-left: 0px"><br/>
                Gender: <input type=text name='gender' id='gender' style="margin-left: 0px"><br/>
                Hire from date: <input type=text name='hiredfromdate' id='hiredfromdate' style="margin-left: 0px"><br/>
                Hire to date: <input type=text name='hiredtodate' id='hiredtodate' style="margin-left: 0px"><br/>
                Job Title: <input type=text name='jobtitle' id='jobtitle' style="margin-left: 0px"><br/>
                Department: <input type=text name='department' id='department' style="margin-left: 0px"><br/>
                Salary(£): <input type=text name='salary' id='salary' style="margin-left: 0px"><br/>
                <input type=submit value="Search" id="add" class="btn btn-primary">
                <input type=reset value="Reset" id="reset" class="btn btn-primary">
            </form>
            <div id="response" style="color: red"></div>

        </div>
    </div>

</div>

</body>
</html>
