<?php
session_start();
if($_SESSION['user']=== "Administrator"){}
  else
  {
    echo "Unauthorised Access";
    exit();
  }
?>
<!DOCTYPE html>
<html>
<title>Academy</title>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=8" />
  <meta http-equiv="X-UA-Compatible" content="IE=9" />
  <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-datetimepicker.min.css">
  <link rel="stylesheet" type="text/css" href="css/sweet-alert.css">
  <link rel="stylesheet" type="text/css" href="css/site.min.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
  <div class="container">
   <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
        <span class="sr-only">Toggle Navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <div class="collapse navbar-collapse" id="example-navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">ADMINISTRATOR DESK <span class="caret"></span></a>
           <ul class="dropdown-menu">
            <li><a href="emp_reg_details.php" target="__parent">REGISTERED EMPLOYEE DETAILS</a></li>
            <li><a href="#">EMPLOYEE DUTY ALLOCATION</a></li>
            <li><a href="#">EMPLOYEE/OFFICE COMMUNICATION</a></li>
            <li><a href="#">MESSAGE MULTICAST</a></li>
            </ul>
        </li>
        <li><a href="office.php">OFFICE</a></li>
        <li><a href="acoffice.php">A/C OFFICE</a></li>
        <li><a href="acaoffice.php">ACADEMIC OFFICE</a></li>
        <li><a href="library.php">LIBRARY</a></li>
        <li><a href="labo.php">LABORATRY</a></li>
        <li><a href="#">SPORTS</a></li>
        <li><a href="#">MESS</a></li>
        <li><a href="#">INFIRMARY</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li>&nbsp;&nbsp;&nbsp;</li>
        <li><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
      </ul>
    </div>
  </div><!-- container -->
  </nav><!-- navbar closed -->
  </div><!-- container -->
<br>
<br>
<br>

<!-- Employee Duty Allocation -->
<div class="container">
  <h3 class="page-header">ADMINISTRATOR DESK</h3>
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h4 class="panel-title">Employee Duty Allocation Form</h4>
    </div>
    <br>
<div class="row">
  <div class="col-md-10 col-md-offset-1">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title"></h4>
      </div>
      <div class="panel-body">
        <div class="table-responsive">
          <table class="table borderless table-condensed">
            <form class="form form-inline" role="form">
              <div class="form-group">
                <tr>
                  <td><label for="duty_eid">Employee_ID:</label></td>
                  <td><input type="text" id="duty_eid" class="form-control input-sm eqtxt" autofocus></td>
                </tr>
                <tr>
                  <td><label for="duty_office">Office Attached with:</label></td>
                  <td><input type="text" id="duty_office" class="form-control input-sm eqtxt"></td>
                </tr>
                <tr>
                  <td><label for="duty_position">Position / Category:</label></td>
                  <td><input type="text" id="duty_position" class="form-control input-sm eqtxt"></td>
                </tr>
                <tr>
                  <td><label for="duty_emp_name">Employee Name:</label></td>
                  <td><input type="text" id="duty_emp_name" class="form-control input-sm eqtxt"></td>
                </tr>
                <tr>
                  <td><label for="duty_emp_gen">Gender:</label></td>
                  <td>
                    <select class="form-control input-sm eqtxt" id="duty_emp_gen">
                      <option>Male</option>
                      <option>Female</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td><label for="duty_emp_contact">Contact No.:</label></td>
                  <td><input type="text" id="duty_emp_contact" class="form-control input-sm eqtxt"></td>
                </tr>
                <tr>
                  <td><label for="duty_emp_email">Email-ID:</label></td>
                  <td><input type="text" id="duty_emp_email" class="form-control input-sm eqtxt"></td>
                </tr>
                <tr>
                 <td><label for="duty_emp_reg_date">Registration Date:</label></td>
                  <td><input type="text" id="duty_emp_reg_date" class="form-control input-sm eqtxt"></td>
                </tr>
                <tr align="center">
                  <td colspan="2">
                    <a id="duty_sub_btn" type="button" class="btn btn-primary logbtn">Submit</a>
                    &nbsp;&nbsp;&nbsp;
                    <a href="#" id="duty_edit_btn" type="button" class="btn btn-primary logbtn">Edit</a>
                    &nbsp;&nbsp;&nbsp;
                    <button type="reset" class="btn btn-primary logbtn">Reset</button>
                  </td>
                </tr>
              </div><!-- form-group -->
            </form><!-- form closed -->
          </table><!-- table closed -->
        </div><!-- table-responsive -->
      </div><!-- panel-body closed -->
    </div><!-- panel closed -->
  </div><!-- column closed -->
</div><!-- row closed -->
  
 	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/bootstrap-datetimepicker.min.js"></script>
  <script type="text/javascript" src="js/sweet-alert.min.js"></script>
  <script type="text/javascript" src="js/academy.js"></script>
  <script type="text/javascript" src="js/emp_duty_allocation1.js"></script>
  <script type="text/javascript" src="js/emp_duty_allocation2.js"></script>
  <script type="text/javascript" src="js/emp_duty_allocation3.js"></script>

<script type="text/javascript">
    $(".form_datetime").datetimepicker({
        format: "dd MM yyyy - HH:ii P",
        showMeridian: true,
        autoclose: true,
        todayBtn: true
    });
</script>  

</body>
</html>