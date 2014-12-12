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
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">STUDENT DESK <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a id="srf" href="#">STUDENT REGISTRATION FORM</a></li>
            <li><a id="" href="#">UPDATE STUDENT PROFILE</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">EMPLOYEE DESK <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a id="erf" href="#">EMPLOYEE REGISTRATION FORM</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">VISITOR DESK <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a id="vlnk" href="#">VISITOR ENTRY FORM</a></li>
          </ul>
        </li>        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">OUTSOURCED SERVICE DESK <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a id="ostlnk" href="#">SERVICE PROVIDER REGISTRATION FORM</a></li>
          </ul>
        </li>
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

<!-- student registration form -->
<div id="stu_reg" class="container">
  <h3 class="page-header">STUDENT DESK</h3>
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h4 class="panel-title">Student Registration Form</h4>
    </div>
    <br>
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">Basic Information</h4>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table borderless table-condensed">
                <form class="form-inline" role="form">
                    <div class="form-group">
                      <tr>
                        <td><label for="sname">Firstname:</label></td>
                        <td><input type="text" id="sname" class="form-control input-sm eqtxt"></td>
                      </tr>
                      <tr>
                        <td><label for="slname">Lastname:</label></td>
                        <td><input type="text" id="slname" class="form-control input-sm eqtxt"></td>
                      </tr>
                      <tr>
                        <td><label for="sgen">Gender:</label></td>
                        <td>
                          <select id="sgen" class="form-control input-sm eqtxt">
                            <option>Male</option>
                            <option>Female</option>
                          </select>
                        </td>
                      </tr>
                      <tr>    
                        <td><label for="sdob">Date Of Birth:</label></td>
                        <td>                  
                            <div class="input-group date form_datetime eqtxt" data-date="2012-12-21T15:25:00Z">
                            <input id="sdob" type="text" class="form-control input-sm eqtxt" value="" readonly>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                            </div>   
                        </td>
                      </tr>
                      <tr>    
                        <td><label for="spob">Place Of Birth:</label></td>
                        <td><input type="text" id="spob" class="form-control input-sm eqtxt"></td>
                      </tr>
                      <tr>
                        <td><label for="snat">Nationality:</label></td>
                        <td><input type="text" id="snat" class="form-control input-sm eqtxt"></td>
                      </tr>
                      <tr>
                        <td><label for="slsah">Language Spoken at Home:</label></td>
                        <td><input type="text" id="slsah" class="form-control input-sm eqtxt"></td>
                      </tr>
                      <tr>
                        <td><label for="sols">Other Languages Spoken:</label></td>
                        <td><input type="text" id="sols" class="form-control input-sm eqtxt"></td>
                      </tr>
                      <tr>
                        <td><label for="sha">Home Address:</label></td>
                        <td><textarea id="sha" class="form-control input-sm eqtxt"></textarea></td>
                      </tr> 
                      <tr>
                        <td><label for="sphn">Phone No.:</label></td>
                        <td><input type="text" id="sphn" class="form-control input-sm eqtxt"></td>
                      </tr>  
                      <tr>
                        <td><label for="semail">Email-ID:</label></td>
                        <td><input type="text" id="semail" class="form-control input-sm eqtxt"></td>
                      </tr>
                      <tr>
                        <td><label for="ssaf">Standard Applying for:</label></td>
                        <td><input type="text" id="ssaf" class="form-control input-sm eqtxt"></td>
                      </tr>
                      <tr>
                        <td><label for="seca">ExtraCurricular Activities:</label></td>
                        <td><input type="text" id="seca" class="form-control input-sm eqtxt"></td>
                      </tr>
                      <tr>
                        <td><label for="srd">Registration Date:</label></td>
                        <td>
                            <div class="input-group date form_datetime eqtxt" data-date="2012-12-21T15:25:00Z">
                            <input id="srd" type="text" class="form-control input-sm eqtxt" value="" readonly>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                            </div>   
                        </td>
                      </tr> 
                    </div>
                 
                </table><!-- table closed -->
              </div><!-- table-responsive -->
            </div><!-- panel body closed -->
   
        <div class="panel-heading">
          <h4 class="panel-title">School History</h4>
        </div>
        <div class="panel-body">
          <div class="table-responsive">
            <table class="table borderless table-condensed">
              <form class="form-inline" role="form">
                <div class="form-group">
                  <tr>
                    <td><label for="sps">Present School:</label></td>
                    <td><input type="text" id="sps" class="form-control input-sm eqtxt"></td>
                  </tr> 
                  <tr>
                    <td><label for="sadd">Address:</label></td>
                    <td><textarea id="sadd" class="form-control input-sm eqtxt"></textarea></td>
                  </tr>
                  <tr>
                    <td><label for="sda">Dates attended:</label></td>
                    <td><input type="text" id="sda" class="form-control input-sm eqtxt"></td>
                  </tr>
                  <tr>
                    <td><label for="sstd">Standards:</label></td>
                    <td><input type="text" id="sstd" class="form-control input-sm eqtxt"></td>
                  </tr>
                  <tr>
                    <td><label for="sphno">Phone No.:</label></td>
                    <td><input type="text" id="sphno" class="form-control input-sm eqtxt"></td>
                  </tr>
                  <tr>
                    <td><label for="sloi">Language of Instruction:&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;</label></td>
                    <td><input type="text" id="sloi" class="form-control input-sm eqtxt"></td>
                  </tr> 
                </div>
             
            </table><!-- table closed -->
          </div><!-- table-responsive -->
        </div><!-- panel body closed -->
     
        <div class="panel-heading">
          <h4 class="panel-title">Family Information</h4>
        </div>
        <div class="panel-body">
          <div class="table-responsive">
            <table class="table borderless table-condensed">
              <form class="form-inline" role="form">
                <div class="form-group">
                  <tr>
                    <td><label for="sfat">Father Name:</label></td>
                    <td><input type="text" id="sfat" class="form-control input-sm eqtxt"></td>
                  </tr>
                  <tr>
                    <td><label for="smot">Mother Name:</label></td>
                    <td><input type="text" id="smot" class="form-control input-sm eqtxt"></td>
                  </tr>
                  <tr>
                    <td><label for="shadd">Home address <br>(if different from applicant)</label></td>
                    <td><textarea id="shadd" class="form-control input-sm eqtxt"></textarea></td>
                  </tr>
                  <tr>
                    <td><label for="sfpno">Phone No.:</label></td>
                    <td><input type="text" id="sfpno" class="form-control input-sm eqtxt"></td>
                  </tr>  
                  <tr>
                    <td><label for="sfemail">Email-ID:</label></td>
                    <td><input type="text" id="sfemail" class="form-control input-sm eqtxt"></td>
                  </tr>
                  <tr>
                    <td><label for="sgn">Guardian Name:</label></td>
                    <td><input type="text" id="sgn" class="form-control input-sm eqtxt"></td>
                  </tr>
                  <tr>
                    <td><label for="sgha">Home address <br>(if different from applicant)</label></td>
                    <td><textarea id="sgha" class="form-control input-sm eqtxt"></textarea></td>
                  </tr>
                  <tr>
                    <td><label for="sgpno">Phone No.:</label></td>
                    <td><input type="text" id="sgpno" class="form-control input-sm eqtxt"></td>
                  </tr>  
                  <tr>
                    <td><label for="sgemail">Email-ID:</label></td>
                    <td><input type="text" id="sgemail" class="form-control input-sm eqtxt"></td>
                  </tr>
                  <tr align="center">
                  <td colspan="2">
                    <a href="#" id="stubtn" type="button" class="btn btn-primary logbtn">Submit</a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <button type="reset" class="btn btn-primary logbtn">Reset</button>
                  </td>
                </tr>
                </div>
              </form><!-- form -->
            </table><!-- table closed -->
          </div><!-- table-responsive -->
        </div><!-- panel body closed -->
      </div><!-- panel closed -->
    </div><!-- column closed -->

    </div><!-- row closed -->
  </div><!-- Panel closed -->
</div><!-- container closed -->



<!-- Employee registration form -->
<div id="emp_reg" class="container">
  <h3 class="page-header">EMPLOYEE DESK</h3>
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h4 class="panel-title">Employee Registration Form</h4>
    </div>
    <br>
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">Basic Information</h4>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table borderless table-condensed">
                <form class="form-inline" role="form">
                  <div class="form-group">
                    <tr>
                      <td><label for="eid">Employee_ID:</label></td>
                      <td><input type="text" id="eid" class="form-control input-sm eqtxt"></td>
                    </tr>
                    <tr>
                      <td><label for="ename">First Name:</label></td>
                      <td><input type="text" id="ename" class="form-control input-sm eqtxt"></td>
                    </tr>
                    <tr>
                      <td><label for="elname">Last Name:</label></td>
                      <td><input type="text" id="elname" class="form-control input-sm eqtxt"></td>
                    </tr>
                    <tr>
                      <td><label for="edob">Date Of Birth:</label></td>
                      <td>                  
                          <div class="input-group date form_datetime eqtxt" data-date="2012-12-21T15:25:00Z">
                          <input id="edob" type="text" class="form-control input-sm eqtxt" value="" readonly>
                          <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                          </div>   
                      </td>
                    </tr>
                    <tr>
                      <td><label for="epob">Place of Birth:</label></td>
                      <td><input type="text" id="epob" class="form-control input-sm eqtxt"></td>
                    </tr>
                    <tr>
                      <td><label for="egen">Gender:</label></td>
                      <td>
                        <select class="form-control input-sm eqtxt" id="egen">
                          <option>Male</option>
                          <option>Female</option>
                        </select>
                      </td>
                    </tr>
                    <tr>
                      <td><label for="efat">Father's Name:</label></td>
                      <td><input type="text" id="efat" class="form-control input-sm eqtxt"></td>
                    </tr>
                    <tr>
                      <td><label for="emot">Mother's Name:</label></td>
                      <td><input type="text" id="emot" class="form-control input-sm eqtxt"></td>
                    </tr>
                    <tr>
                    <td><label for="epadd">Permanent Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;</label></td>
                      <td><input type="text" id="epadd" class="form-control input-sm eqtxt"></td>
                    </tr>
                    <tr>
                      <td><label for="etadd">Temporary Address:</label></td>
                      <td><input type="text" id="etadd" class="form-control input-sm eqtxt"></td>
                    </tr>
                    <tr>
                      <td><label for="ecno">Contact No.:</label></td>
                      <td><input type="text" id="ecno" class="form-control input-sm eqtxt"></td>
                    </tr>
                    <tr>
                      <td><label for="eemail">Email-ID:</label></td>
                      <td><input type="text" id="eemail" class="form-control input-sm eqtxt"></td>
                    </tr>
                    <tr>
                     <td><label for="edor">Registration Date:</label></td>
                      <td>
                        <div class="input-group date form_datetime eqtxt" data-date="2012-12-21T15:25:00Z">
                        <input id="edor" type="text" class="form-control input-sm eqtxt" value="" readonly>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                        </div>   
                      </td>
                    </tr>
                 </div><!-- form-group -->
                </table><!-- table closed -->
              </div><!-- table-responsive -->
            </div><!-- column closed -->

          <div class="panel-heading">
            <h4 class="panel-title">Education Details</h4>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table borderless table-condensed">
                <div class="form-group">
                  <tr>
                    <td><label for="eeduc">Education:</label></td>
                    <td><input type="text" id="eeduc" class="form-control input-sm eqtxt"></td>
                  </tr>
                  <tr>
                    <td><label for="espcl">Specialization:</label></td>
                    <td><input type="text" id="espcl" class="form-control input-sm eqtxt"></td>
                  </tr>
                  <tr>
                    <td><label for="eextra">Extracurricular Activities:</label></td>
                    <td><input type="text" id="eextra" class="form-control input-sm eqtxt"></td>
                  </tr>
                  <tr>
                    <td><label for="egoi">Games of Interest:</label></td>
                    <td><input type="text" id="egoi" class="form-control input-sm eqtxt"></td>
                  </tr>
                  <tr>
                    <td><label for="eachieve">Achievements (if any):</label></td>
                    <td><input type="text" id="eachieve" class="form-control input-sm eqtxt"></td>
                  </tr>
                  <tr align="center">
                    <td colspan="2">
                      <a href="#" id="empbtn" type="button" class="btn btn-primary logbtn">Submit</a>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <button type="reset" class="btn btn-primary logbtn">Reset</button>
                    </td>
                  </tr>              
                </div><!-- form-group -->
              </form>
          </table><!-- table closed -->
        </div><!-- table-responsive -->
      </div><!-- column closed -->
    </div>
    </div>
    </div>
    </div>
    </div>



<!-- Visitor Entry Form -->
<div id="visitor" class="container">
  <h3 class="page-header">VISITOR DESK</h3>
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h4 class="panel-title">Visitor Entry Registration Form</h4>
    </div>
    <br>
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">Visitor Details</h4>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table borderless table-condensed">
                <form class="form-inline" role="form">
                  <div class="form-group">
                  <tr>
                    <td><label for="vnme">Visitor Name:</label></td>
                    <td><input type="text" id="vnme" class="form-control input-sm eqtxt"></td>
                  </tr>
                  <tr>
                    <td><label for="vmono">Mobile No.:</label></td>
                    <td><input type="text" id="vmono" class="form-control input-sm eqtxt"></td>
                  </tr>
                  <tr>
                    <td><label for="qry">Query / Message:</label></td>
                    <td><textarea id="qry" cols="60" rows="9"></textarea></td>
                  </tr>
                  <tr>
                    <td colspan="2"></td>
                  </tr>
                  <tr align="center">
                    <td colspan="2">
                      <a id="vitbtn" type="button" class="btn btn-primary logbtn">Submit</a>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <button href="#" type="reset" class="btn btn-primary logbtn">Reset</button></td>
                  </tr>
                  </div>
                </form><!-- form closed -->
              </table><!-- table closed -->
            </div><!-- table-responsive -->
          </div><!-- panel-body -->
        </div><!-- panel panel-default closed -->
      </div><!-- col-md-10 closed -->
    </div><!-- row -->
  </div> <!-- panel panel-primary -->
</div><!-- visitor div closed -->


<!-- Outsourced Service Desk -->
<div id="ost" class="container">
  <h3 class="page-header">OUTSOURCED SERVICE DESK</h3>
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h4 class="panel-title">Service Provider Registration Form</h4>
    </div>
    <br>
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">Service Provider Entry</h4>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table borderless table-condensed">
                <form id="outsource" class="form-inline" role="form">
                    <div class="form-group">
                  <tr>
                    <td><label for="spname" >Service Provider Name:</label></td>
                    <td><input id="spname" type="text" class="form-control input-sm eqtxt"></td>
                  </tr>
                  <tr>
                    <td><label for="stype">Service Type:</label></td>
                    <td>
                      <select id="stype" class="form-control input-sm eqtxt">
                        <option>Bus Service</option>
                        <option>Taxi Service</option>
                        <option>Rikshaw Service</option>
                        <option>Cleaning Service</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td><label for="con">Tenure of Service:</label></td>
                    <td>
                    <select id="con" class="form-control input-sm eqtxt">
                        <option>Monthly</option>
                        <option>Three Months</option>
                        <option>Six Months</option>
                        <option>Yearly</option>
                        <option value="cont">Contract</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td><label class="ctd" for="contd">Contract Duration:</label></td>
                    <td><input type="text" id="contd" class="form-control input-sm eqtxt"></td>
                  </tr>
                  <tr>
                    <td><label for="cos">Cost of Service:</label></td>
                    <td><input id="cos" type="text" class="form-control input-sm eqtxt"></td>
                  </tr>
                  <tr>
                    <td><label for="sdate">Start Date:</label></td>
                    <td><input id="sdate" type="text" class="form-control input-sm eqtxt"></td>
                  </tr>
                  <tr>
                    <td><label for="edate">End Date:</label></td>
                    <td><input id="edate" type="text" class="form-control input-sm eqtxt"></td>
                  </tr>
                  <tr>
                    <td colspan="2"></td>
                  </tr>
                  <tr align="center">
                    <td colspan="2"><a id="osdbtn" href="#" type="button" class="btn btn-primary logbtn">Submit</a>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <button href="#" type="reset" class="btn btn-primary logbtn">Reset</button></td>
                  </tr>
                </div>
              </form>
          </table>
        </div>
      </div>
    </div>
</div>
</div>
</div>
</div>




  
 	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/bootstrap-datetimepicker.min.js"></script>
  <script type="text/javascript" src="js/sweet-alert.min.js"></script>
  <script type="text/javascript" src="js/academy.js"></script>
  <script type="text/javascript" src="js/emp_reg.js"></script>
  <script type="text/javascript" src="js/stu_reg.js"></script>
  <script type="text/javascript" src="js/v_entry.js"></script>
  <script type="text/javascript" src="js/ossd_entry.js"></script>


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