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
            $('#submit').click(function(e) {
                e.preventDefault();
                var query_string = "http://www.ecwm604.us/w1292342/ecwm604/index.php/find/findemp?" + "empno=" + $('#empno').val()
                        + "&firstname=" + $('#firstname').val() + "&lastname=" + $('#lastname').val()
                        + "&dept=" + $('#dept').val() + "&jobtitle=" + $('#jobtitle').val();

                $.getJSON(query_string, null
                        ,
                        function(data){

                            if(data == 'wrong'){$('#response').append('<div id="bad_response">' +
                                    'Please, fill at least one of the fields' + '</div>');}

                            $.each(data, function() {
                                $.each(this, function(i, item) {

                                    $('#result').append(
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

            $('#delete').click(function(e) {
                e.preventDefault();
                var query_string = "http://www.ecwm604.us/w1292342/ecwm604/index.php/find/findemp?" + "inputemp=" + $('#inputemp').val();

                $.getJSON(query_string, null
                        ,
                        function(data){

                            $.each(data, function() {
                                $.each(this, function(i, item) {

                                    if(item.deleted == 'deleted'){

                                        $(".remove1").remove();
                                        $(".remove2").remove();
                                        $(".remove3").remove();
                                        $(".remove4").remove();
                                        $("#bad_response").remove();

                                        $('#resp').append('<div id="good_response">' +
                                                'Employee Deleted!' + '</div>');

                                    }
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
                Search employee and use the employee number to delete it.<br/><br/>
                Emp_no: <input type=text name='empno' id='empno' style="margin-left: 0px"><br/>
                First name: <input type=text name='firstname' id='firstname' style="margin-left: 0px"><br/>
                Last name: <input type=text name='lastname' id='lastname' style="margin-left: 0px"><br/>
                Department Name: <input type=text name='dept' id='dept' style="margin-left: 0px"><br/>
                Current job Title: <input type=text name='jobtitle' id='jobtitle' style="margin-left: 0px"><br/>
                <input type=submit value="Search" id="submit" class="btn btn-primary">
                <input type=reset value="Reset" id="reset" class="btn btn-primary"><br/>
                <br/>
                Insert Employee number to be deleted: <input type=text name='inputemp' id='inputemp' style="margin-left: 0px"><br/>
                <input type=submit value="Delete" id="delete" class="btn btn-primary">
                <br/>
            </form>
            <div id="response" style="color: red"></div>
            <div id="resp" style="color: red"></div>

        </div>
    </div>

</div>

</body>
</html>
