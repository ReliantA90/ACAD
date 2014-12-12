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
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">ADMINISTRATOR DESK<span class="caret"></span></a>
           <ul class="dropdown-menu">
            <li><a href="#">REGISTERED EMPLOYEE DETAILS</a></li>
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
    </div>
  </div><!-- container -->
  </nav><!-- navbar closed -->
  </div><!-- container -->



<!-- Employee registration form -->
<div class="container">
  <h3 class="page-header">ADMINISTRATOR DESK</h3>
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h4 class="panel-title">Registered Employee Details</h4>
    </div>
    <br>
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">Basic Information</h4>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table id="emp_tab" class="table table-bordered table-hover table-condensed">
                <form class="form-inline" role="form">
                  <div class="form-group">
                    <tbody>
                    <tr>
                      <td><label for="eid">Employee_ID:</label></td>
                      <td><label for="ename">First Name:</label></td>
                      <td><label for="edob">Date Of Birth:</label></td>
                      <td><label for="ecno">Contact No.:</label></td>
                      <td><label for="eemail">Email-ID:</label></td>
                      <td><label for="eeduc">Education:</label></td>
                      <td><label for="espcl">Specialization:</label></td>
                    </tr>
                    <!-- <tr>
                      <td id="eid"></td>
                      <td id="ename"></td>
                      <td id="edob"></td>
                      <td id="ecno"></td>
                      <td id="eemail"></td>
                      <td id="eeduc"></td>
                      <td id="espcl"></td>
                    </tr> -->
                    </tbody>
                  </div><!-- form-group -->
                </form>
              </table><!-- table closed -->
            </div><!-- table-responsive -->
          </div><!-- panel-body closed -->
        </div><!-- column closed -->
      </div><!-- table-responsive -->
    </div><!-- column closed -->
  </div><!-- panel-closed -->
</div><!-- container closed -->

  
 	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/bootstrap-datetimepicker.min.js"></script>
  <script type="text/javascript" src="js/sweet-alert.min.js"></script>
  <script type="text/javascript" src="js/academy.js"></script>
  <script type="text/javascript" src="js/emp_reg_details.js"></script>
  <script type="text/javascript" src="js/emp_duty_allocation1.js"></script>

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