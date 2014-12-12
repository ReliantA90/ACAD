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
  <link href='http://fonts.googleapis.com/css?family=Philosopher:700' rel='stylesheet' type='text/css'>
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
  <div>
       <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
        <span class="sr-only">Toggle Navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="#" class="navbar-brand">XYZ Academy</a>
    </div>

    <div class="collapse navbar-collapse" id="example-navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
      </ul>
    </div>
  </div><!-- container -->
  </nav><!-- navbar closed -->
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-info">
          <div class="panel-heading">
            <h4 class="panel-title">Login here...</h4>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table borderless table-condensed">
                <form class="form-inline" role="form">
                  <div class="form-group">
                    <tr>
                      <td>
                        <div class="input-group">
                        <label for="user_category"><i class="fa fa-users"></i></label>
                        </div>
                      </td>
                      <td>
                        <select id="user_category" class="form-control input-sm"></select>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="input-group">
                        <label for="user_name"><span class="glyphicon glyphicon-user"></span></label>
                      </div>
                      </td>
                      <td>  
                        <input id="user_name" type="text" class="form-control input-sm" autofocus></td>
                    </tr>
                    <tr>
                      <td><label for="user_pass"><i class="fa fa-key"></i></label></td>
                      <td>
                          <input id="user_pass" type="password" class="form-control input-sm"></td>
                    </tr>
                    <tr>
                      <td></td>
                    </tr>
                    <tr>
                      <td colspan="2" align="right">
                        <button type="submit" id="lbtn" href="#" class="btn btn-primary logbtn">Login</button>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <button type="reset" id="rstbtn" href="#" class="btn btn-primary logbtn">Reset</button>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2" align="right">
                        <a href="#" data-toggle="modal" data-target="#myModal">
                          Forgot Password.
                        </a>
                      </td>
                    </tr>
                </div><!-- form-group -->
              </form><!-- form closed -->
            </table><!-- table -->
          </div><!-- table-responsive -->
        </div><!-- column closed -->
      </div><!-- row closed --><!-- get involved section closed -->
    </div>
  </div>



          <!-- modal -->
          <div class="modal fade" id="myModal" role="dialog" aria-labelledby="mymodallabel" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <div class="modal-body">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <p>Please type your details</p>
                      </div>
                      <div class="panel-body">
                        <div class="table-responsive">
                          <table class="table borderless table-condensed">
                            <tr>
                                <form class="form" role="form">
                                  <div class="form-group">
                                    <tr>
                                      <td><label for="sid">Username:</label></td>
                                      <td><input type="text" id="sid" class="form-control input-sm eqtxt"></td>
                                    </tr>
                                    <tr>
                                      <td><label for="sid">Designation:</label></td>
                                      <td><input type="text" id="sid" class="form-control input-sm eqtxt"></td>
                                    </tr>
                                  </div>
                                </form>
                              </tr>
                            </table>
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                      Close
                    </button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">
                      Submit
                    </button> 
                  </div>
                </div>
              </div>
            </div>  
          </div>  
            
 	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/sweet-alert.min.js"></script>
  <script type="text/javascript" src="js/log_mast.js"></script>
  <script type="text/javascript" src="js/retrieve_user_category.js"></script>
  

</body>
</html>