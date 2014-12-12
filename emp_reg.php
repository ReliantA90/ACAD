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
    <h1 class="page-header"><p align="center" class="idxhead">STUDENT REGISTRATION FORM</p></h1>
<p align="center"><a href="index.html" type="button" class="btn btn-warning">Go Back</a></p>
<br>

<div class="row">
  <div class="col-md-12">
    <div class="table-responsive">
    <table class="table borderless table-condensed">
          <form class="form form-inline" role="form">
            <div class="form-group">
              <tr>
                <td><label for="sid">Student_ID:</label></td>
                <td><input type="text" id="sid" class="form-control"></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td><label for="sname">Name:</label></td>
                <td><input type="text" id="sname" class="form-control"></td>
                <td><label for="sdob">Date Of Birth:</label></td>
                <td>                  
                    <div class="input-group date form_datetime col-md-4" data-date="2012-12-21T15:25:00Z">
                    <input id="sdob" type="text" class="form-control" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                    </div>   
                </td>
              </tr>
              <tr>
                <td><label for="sgen">Gender:</label></td>
                <td>
                  <select class="form-control" id="sgen">
                    <option>Male</option>
                    <option>Female</option>
                  </select>
                </td>
                <td><label for="sfat">Father Name:</label></td>
                <td><input type="text" id="sfat" class="form-control"></td>
              </tr>
              <tr>
                <td><label for="smot">Mother Name:</label></td>
                <td><input type="text" id="smot" class="form-control"></td>
                <td><label for="sgur">Guardian Name:</label></td>
                <td><input type="text" id="sgur" class="form-control"></td>
              </tr>
              <tr>
                <td><label for="sgmono">Guardian Mobile No:</label></td>
                <td><input type="text" id="sgmono" class="form-control"></td>
                <td><label for="sfmono">Father Mobile No.:</label></td>
                <td><input type="text" id="sfmono" class="form-control"></td>
              </tr>
              <tr>
                <td><label for="sadd">Address:</label></td>
                <td><input type="text" id="sadd" class="form-control"></td>
                <td><label for="scity">City:</label></td>
                <td><input type="text" id="scity" class="form-control"></td>
              </tr>
              <tr>
                <td><label for="sste">State:</label></td>
                <td><input type="text" id="sste" class="form-control"></td>
                <td><label for="spin">PIN Code:</label></td>
                <td><input type="text" id="spin" class="form-control"></td>
              </tr>
              <tr>
                <td><label for="sric">Registered in Class:</label></td>
                <td><input type="text" id="sric" class="form-control"></td>
                <td><label for="srd">Registration Date:</label></td>
                <td>
                    <div class="input-group date form_datetime col-md-4" data-date="2012-12-21T15:25:00Z">
                    <input id="srd" type="text" class="form-control" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                    </div>   
                </td>
              </tr>
              <tr>

              </tr>
              <tr align="center">
                <td colspan="4"><a href="#" id="subbtn" type="button" class="btn btn-primary regbtn">Submit</a>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button href="#" type="reset" class="btn btn-primary regbtn">Reset</button></td>
              </tr>
            </div><!-- form-group -->
          </form><!-- form -->
      </table><!-- table closed -->
    </div><!-- table-responsive -->
  </div><!-- column closed -->
</div><!-- row closed -->
 
  </div><!-- container documnets -->

   
  
 	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/bootstrap-datetimepicker.min.js"></script>
  <script type="text/javascript" src="js/sweet-alert.min.js"></script>
  <script type="text/javascript" src="js/stud_reg.js"></script>
  
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