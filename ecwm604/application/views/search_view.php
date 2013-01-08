<!DOCTYPE html>
<html>
<head>
    <title></title>



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

                            $(".remove1").remove();
                            $(".remove2").remove();
                            $(".remove3").remove();
                            $(".remove4").remove();
                            $("#bad_response").remove();
                            $("#warn").remove();

                            if(data == 'wrong'){$('#response').append( '<span class="label label-warning" id="warn">Warning</span>' + '  ' +
                                    '<div id="bad_response">' +
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

            $("#reset").click(function () {

                $(".remove1").remove();
                $(".remove2").remove();
                $(".remove3").remove();
                $(".remove4").remove();
                $("#bad_response").remove();
                $("#warn").remove();

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
                Emp_no: <input type=text name='empno' id='empno'data-provide="typeahead" ><br/>
                First name: <input type=text name='firstname' id='firstname' data-provide="typeahead"><br/>
                Last name: <input type=text name='lastname' id='lastname' style="margin-left: 0px"><br/>
                Department Name: <input type=text name='dept' id='dept' style="margin-left: 0px"><br/>
                Current job Title: <input type=text name='jobtitle' id='jobtitle' style="margin-left: 0px"><br/>
                <input type=submit value="Search" id="submit" class="btn btn-primary">
                <input type=reset value="Reset" id="reset" class="btn btn-primary">
            </form>



            <div id="response" style="color: orange"></div>
            <div  id="blabla">
                <table class="table table-striped" style="margin-left: -25%; margin-top: 5% ">

                    <thead>
                    <th>First name  </th>
                    <th>Last Name</th>
                    <th>Department Name </th>
                    <th>Title</th>
                    </thead>

                    <tbody id="result">

                    </tbody>

                </table>
            </div>
        </div>
    </div>

</div>

</body>
</html>
