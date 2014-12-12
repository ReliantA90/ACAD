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
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css"/>
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
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">PHYSICS LAB <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a id="phy_inst_entry" href="#">Instruments Entry</a></li>
              <li><a id="phy_prac_entry" href="#">Practicals Entry</a></li>
              <li><a id="phy_stu_reg_sess" href="#">Student Registration (Session-Wise)</a></li>
              <li><a id="phy_stu_reg_prac" href="#">Student Registration (practical-Wise)</a></li>
            </ul>
          </li>    
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">CHEMISTRY LAB <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a id="che_che_entry" href="#">Chemicals Entry</a></li>
              <li><a id="che_inst_entry" href="#">Instruments Entry</a></li>
              <li><a id="che_prac_entry" href="#">Practicals Entry</a></li>
              <li><a id="che_stu_reg_sess" href="#">Student Registration (Session-Wise)</a></li>
              <li><a id="che_stu_reg_prac" href="#">Student Registration (practical-Wise)</a></li>
            </ul>
          </li>    
          <li><a href="#">BIOLOGY LAB</a></li>
          <li><a href="#">COMPUTER LAB</a></li>
          <li><a href="#">IT LAB</a></li>
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

<!-- Chemical (entry) Form -->
<div id="chemical_entry_form" class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">Chemical Entry</h4>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table borderless table-condensed">
                <form class="form form-inline" role="form">
                  <div class="form-group">
                    <tr>
                      <td><label for="">Chemical Name:</label></td>
                      <td><input type="text" id="" class="form-control input-sm eqtxt"></td>
                    </tr>
                    <tr>
                      <td><label for="">Chemical State:</label></td>
                      <td>
                        <select class="form-control input-sm eqtxt" id="">
                          <option>Sloid</option>
                          <option>Liquid</option>
                          <option>Gas</option>
                        </select>
                      </td>
                    </tr>
                    <tr>
                      <td><label for="">Chemical Quantity:</label></td>
                      <td><input type="text" id="" class="form-control input-sm eqtxt"></td>
                    </tr>
                    <tr>
                      <td><label for="">Chemical Cost:</label></td>
                      <td><input type="text" id="" class="form-control input-sm eqtxt"></td>
                    </tr>
                    <tr align="center">
                      <td colspan="2">
                        <a id="" type="button" class="btn btn-primary logbtn">Submit</a>
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
</div><!-- container closed -->



<!-- Laboratory Registration (operational) Form -->
<div id="labo_reg_ope_form" class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">Student Entry (Practical-Wise)</h4>
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
                      <td><label for="">Assigned Practical:</label></td>
                      <td>
                        <select class="form-control input-sm eqtxt" id="">
                          <option>Practical 1</option>
                          <option>Practical 2</option>
                          <option>Practical 3</option>
                          <option>Practical 4</option>
                          <option>Practical 5</option>
                        </select>
                      </td>
                    </tr>
                    <tr>
                      <td><label for="">Assignment Date:</label></td>
                      <td>
                        <div class="input-group date form_datetime eqtxt" data-date="2012-12-21T15:25:00Z">
                        <input id="" type="text" class="form-control input-sm eqtxt" value="" readonly>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                        </div> 
                      </td>
                    </tr>
                    <tr>
                      <td><label for="">Instrument Issued:</label></td>
                      <td> 
                        <select class="form-control input-sm eqtxt" id="">
                          <option>Instrument 1</option>
                          <option>Instrument 2</option>
                          <option>Instrument 3</option>
                          <option>Instrument 4</option>
                          <option>Instrument 5</option>
                        </select>
                      </td>
                    </tr>
                    <tr><td colspan="2"><label style="background:#eee;">Accompained By</label></td></tr>
                    <tr>
                      <td><label for="">Student ID:</label></td>
                      <td><input type="text" id="" class="form-control input-sm eqtxt"></td>
                    </tr>
                    <tr>
                      <td><label for="">Student Name:</label></td>
                      <td><input type="text" id="" class="form-control input-sm eqtxt"></td>
                    </tr>
                    <tr align="center">
                      <td colspan="2">
                        <a id="" type="button" class="btn btn-primary logbtn">Submit</a>
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
</div><!-- container closed -->


<!-- Laboratory Registration (session-wise) Form -->
<div id="labo_reg_sess_form" class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">Student Registration (Session-Wise)</h4>
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
                      <td>
                        <select class="form-control input-sm eqtxt" id="">
                          <option>Practical 1</option>
                          <option>Practical 2</option>
                          <option>Practical 3</option>
                          <option>Practical 4</option>
                          <option>Practical 5</option>
                        </select>
                      </td>
                    </tr>
                    <tr>
                      <td><label for="">Student Practicals hrs.:</label></td>
                      <td>
                        <div class="input-group date form_datetime eqtxt" data-date="2012-12-21T15:25:00Z">
                        <input id="" type="text" class="form-control input-sm eqtxt" value="" readonly>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                        </div> 
                      </td>
                    </tr>
                    <tr>
                      <td><label for="">Student Company ID:</label></td>
                      <td> 
                        <select class="form-control input-sm eqtxt" id="">
                          <option>Instrument 1</option>
                          <option>Instrument 2</option>
                          <option>Instrument 3</option>
                          <option>Instrument 4</option>
                          <option>Instrument 5</option>
                        </select>
                      </td>
                    </tr>
                    <tr><td colspan="2"><label style="background:#eee;">Accompained By</label></td></tr>
                    <tr>
                      <td><label for="">Student Company Name:</label></td>
                      <td><input type="text" id="" class="form-control input-sm eqtxt"></td>
                    </tr>
                    <tr>
                      <td><label for="">Student Company Standard :</label></td>
                      <td><input type="text" id="" class="form-control input-sm eqtxt"></td>
                    </tr>
                    <tr align="center">
                      <td colspan="2">
                        <a id="" type="button" class="btn btn-primary logbtn">Submit</a>
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
</div><!-- container closed -->




<!-- Instrument Entry Form -->
<div id="ins_ety_form" class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">Instrument Entry</h4>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table borderless table-condensed">
                <form class="form form-inline" role="form">
                  <div class="form-group">
                    <tr>
                      <td><label for="">Instrument Name:</label></td>
                      <td><input type="text" id="" class="form-control input-sm eqtxt"></td>
                    </tr>
                    <tr>
                      <td><label for="">Description:</label></td>
                      <td><textarea id="" class="form-control input-sm eqtxt" rows="5"></textarea></td>
                    </tr>
                    <tr>
                      <td><label for="">Purchase Date:</label></td>
                      <td>
                        <div class="input-group date form_datetime eqtxt" data-date="2012-12-21T15:25:00Z">
                        <input id="" type="text" class="form-control input-sm eqtxt" value="" readonly>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                        </div> 
                      </td>
                    </tr>
                    <tr>
                      <td><label for="">Condition / Status:</label></td>
                      <td> 
                        <select class="form-control input-sm eqtxt" id="">
                          <option>Very Good</option>
                          <option>Good</option>
                          <option>Satisfactory</option>
                          <option>Faulty</option>
                        </select>
                      </td>
                    </tr>
                    <tr>
                      <td><label for="">Purchase Cost:</label></td>
                      <td><input type="text" id="" class="form-control input-sm eqtxt"></td>
                    </tr>
                    <tr>
                      <td><label for="">For Practicals:</label></td>
                      <td><textarea id="" class="form-control input-sm eqtxt" rows="5"></textarea></td>
                    </tr>
                    <tr align="center">
                      <td colspan="2">
                        <a id="" type="button" class="btn btn-primary logbtn">Submit</a>
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
</div><!-- container closed -->

<!-- Practicals Entry Form -->
<div id="prac_ety_form" class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">Practicals Entry</h4>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table borderless table-condensed">
                <form class="form form-inline" role="form">
                  <div class="form-group">
                    <tr>
                      <td><label for="">Practical Name:</label></td>
                      <td><input type="text" id="" class="form-control input-sm eqtxt"></td>
                    </tr>
                    <tr>
                      <td><label for="">Description:</label></td>
                      <td><textarea id="" class="form-control input-sm eqtxt" rows="5"></textarea></td>
                    </tr>
                    <tr>
                      <td><label for="">Required Instruments:</label></td>
                      <td><input type="text" id="" class="form-control input-sm eqtxt"></td>
                    </tr>
                    <tr>
                      <td><label for="">Branch:</label></td>
                      <td><input type="text" id="" class="form-control input-sm eqtxt"></td>
                    </tr>
                    <tr align="center">
                      <td colspan="2">
                        <a id="" type="button" class="btn btn-primary logbtn">Submit</a>
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
</div><!-- container closed -->
  
 	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/bootstrap-datetimepicker.min.js"></script>
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"></script>
  <script type="text/javascript" src="js/sweet-alert.min.js"></script>
  <script type="text/javascript" src="js/laboratory.js"></script>

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