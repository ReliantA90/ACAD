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
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">STUDENT A/C DESK <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Student Fees Submission</a></li>
          </ul>
        </li>
        <li><a href="#">EMPLOYEE A/C DESK</a></li>
        <li><a href="#">EVENT & EXPENSES</a></li>
        <li><a href="#">OTHER A/C</a></li>
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
  <div class="container">
  <a><img src="img/back.png" class="bck pull-right" onclick="history.go(-1);"></a>
</div>
<br>

<!-- student fees submission Form -->
<div class="container">
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h4 class="panel-title">Physics Laboratory</h4>
    </div>
    <br>
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">Student Entry</h4>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table borderless table-condensed">
                <form class="form form-inline" role="form">
                  <div class="form-group">
                    <tr>
                      <td><label for="">Student ID:</label></td>
                      <td><input type="text" id="" class="form-control input-sm eqtxt"></td>
                    </tr>
                    <tr>
                      <td><label for="">Student Name:</label></td>
                      <td><input type="text" id="" class="form-control input-sm eqtxt"></td>
                    </tr>
                    <tr>
                      <td><label for="">Student Standard:</label></td>
                      <td><input type="text" id="" class="form-control input-sm eqtxt"></td>
                    </tr>
                    <tr>
                      <td><label for="">Fees Amount:</label></td>
                      <td><input type="text" id="fee_amount" class="form-control input-sm eqtxt"></td>
                    </tr>
                    <tr>
                      <td><label for="">Date of Deposit:</label></td>
                      <td>
                        <div class="input-group date form_datetime eqtxt" data-date="2012-12-21T15:25:00Z">
                        <input id="" type="text" class="form-control input-sm eqtxt" value="" readonly>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                        </div> 
                      </td>
                    </tr>
                    <tr align="center">
                      <td colspan="2">
                        <a id="fees_sub_btn" type="button" class="btn btn-primary logbtn">Submit</a>
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
  </div><!-- main panel closed -->
</div><!-- container closed -->


 	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/bootstrap-datetimepicker.min.js"></script>
  <script type="text/javascript" src="js/sweet-alert.min.js"></script>
  <script type="text/javascript" src="js/academy.js"></script>

  <script type="text/javascript">
    $('#fees_sub_btn').on('click',function(){
      if($('#fee_amount').val() < 70000)
      {
        sweetAlert("Message","Amount is less than marginal amount, so it's your sole responsibility","error");
      }
      else
      {
        sweetAlert("Message","Fees Submitted Successfully","success");
      }
    });
  </script>

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