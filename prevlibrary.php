<?php
session_start();
if($_SESSION['user']=== "Library" || $_SESSION['user']=== "Administrator"){}
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
  <div id="libnav" class="container">
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
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-user"></i> MEMBER <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a id="memlnk" href="#"><i class="fa fa-plus-circle"></i> Add Member</a></li>
              <li><a id="manage_member_lnk" href="#"><i class="fa fa-cog"></i> Manage Member Record</a></li>
            </ul>
          </li>    
        <li><a id="etylnk" href="#"><i class="fa fa-book"></i> BOOK ENTRY</a></li>
        <li><a id="serlnk" href="#"><i class="fa fa-search"></i> BOOK SEARCH</a></li>
        <li><a id="isslnk" href="#">BOOK ISSUE</a></li>
        <li><a id="retlnk" href="#">BOOK RETURN</a></li>
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

<div id="lib_image" class="container" align="center">
  <img src="img/lib.JPG" class="lib_img">
</div>

<!-- Member Entry Form -->
<div id="mef" class="container">
  <h3 class="page-header">MEMBER's DESK</h3>
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">Member Entry</h4>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table borderless table-condensed">
                <form class="form-inline" role="form">
                    <div class="form-group">
                      <tr>
                        <td><label for="mem_full_name">Full Name:</label></td>
                        <td><input type="text" id="mem_full_name" class="form-control input-sm eqtxt"></td>
                      </tr>
                      <tr>
                        <td><label for="mem_fat_name">Father Name:</label></td>
                        <td><input type="text" id="mem_fat_name" class="form-control input-sm eqtxt"></td>
                      </tr>
                      <tr>
                        <td><label for="mem_mot_name">Mother Name:</label></td>
                        <td><input type="text" id="mem_mot_name" class="form-control input-sm eqtxt"></td>
                      </tr>
                      <tr>    
                        <td><label for="mem_dob">Date Of Birth:</label></td>
                        <td>                  
                            <div class="input-group date form_datetime eqtxt" data-date="2012-12-21T15:25:00Z">
                            <input id="mem_dob" type="text" class="form-control input-sm eqtxt" value="" readonly>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                            </div>   
                        </td>
                      </tr>
                      <tr>
                        <td><label for="mem_phone_no">Phone No.:</label></td>
                        <td><input type="text" id="mem_phone_no" class="form-control input-sm eqtxt"></td>
                      </tr>  
                      <tr>
                        <td><label for="mem_email_id">Email-ID:</label></td>
                        <td><input type="text" id="mem_email_id" class="form-control input-sm eqtxt"></td>
                      </tr>
                      <tr>
                        <td><label for="mem_gender">Gender:</label></td>
                        <td>
                          <select id="mem_gender" class="form-control input-sm eqtxt">
                            <option>Male</option>
                            <option>Female</option>
                          </select>
                        </td>
                      </tr>
                      <tr>    
                        <td><label for="mem_designation">Designation:</label></td>
                        <td><input type="text" id="mem_designation" class="form-control input-sm eqtxt"></td>
                      </tr>
                      <tr>
                        <td><label for="mem_permanent_address">Permanent Address:</label></td>
                        <td><textarea id="mem_permanent_address" cols="50" rows="3"></textarea></td>
                      </tr>
                      <tr>
                        <td><label for="mem_mail_address">Mailing Address:</label></td>
                        <td><textarea id="mem_mail_address" cols="50" rows="3"></textarea></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                      </tr>
                      <tr align="center">
                        <td colspan="2">
                          <a href="#" id="mem_reg_btn" type="button" class="btn btn-primary logbtn">Register</a>
                          <button href="#" type="reset" class="btn btn-primary logbtn">Refresh</button>
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


<!-- Manage Member Form -->
<div id="manage_member_form" class="container">
  <h3 class="page-header">MEMBER's DESK</h3>
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">Manage Member's</h4>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table table-bordered table-condensed">
                <form class="form-inline" role="form">
                    <div class="form-group">
                      <tr>
                        <td>
                          <select id="member_id" class="form-control">
                            <option>--- Select ID ---</option>
                          </select>
                        </td>
                        <td>
                          <select id="member_name" class="form-control">
                            <option>--- Select Name ---</option>
                          </select>
                        </td>
                        <td>
                          <select id="member_designation" class="form-control">
                            <option>--- Select Designation ---</option>
                          </select>
                        </td>
                        <td align="center">
                          <a id="view" class="btn btn-info"><i class="fa fa-search"></i> Search</a>
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


<!-- Filter Member Form -->
<div id="member_filter_form" class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">Member Records</h4>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table id="filter_table" class="table table-bordered table-condensed">
                <form class="form-inline" role="form">
                    <div class="form-group">
                      <thead>
                      <tr>
                        <td><label>Member-ID</label></td>
                        <td><label>Full Name</label></td>
                        <td><label>Phone No</label></td>
                        <td><label>Email-ID</label></td>
                        <td><label>Designation</label></td>
                        <td><label>Permanent Address</label></td>
                        <td><label>Mailing Address</label></td>
                        <td><label>Edit/Delete</label></td>
                      </tr>
                      </thead>
                       <tbody>
                      </tbody>
                    </div>
                  </form><!-- form -->
                </table><!-- table closed -->
              </div><!-- table-responsive -->
            </div><!-- panel body closed -->
          </div><!-- panel closed -->
        </div><!-- column closed -->
    </div><!-- row closed -->
  </div><!-- Panel closed -->





<!-- Book Entry Form -->
<div id="bef" class="container">
  <h3 class="page-header">BOOKS DESK</h3>
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">Book Entry</h4>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table borderless table-condensed">
                <form class="form-inline" role="form">
                    <div class="form-group">
                      <!-- <tr>
                        <td><label for="entry_book_no">Book No.:</label></td>
                        <td><input type="text" id="entry_book_no" class="form-control input-sm eqtxt"></td>
                      </tr> -->
                      <tr>
                        <td><label for="entry_isbn">ISBN No.:</label></td>
                        <td><input type="text" id="entry_isbn" class="form-control input-sm eqtxt"></td>
                      </tr>
                      <tr>
                        <td><label for="entry_subject">Subject:</label></td>
                        <td><input type="text" id="entry_subject" class="form-control input-sm eqtxt"></td>
                      </tr>
                      <tr>    
                        <td><label for="entry_book_name">Book Name:</label></td>
                        <td><input type="text" id="entry_book_name" class="form-control input-sm eqtxt"></td>
                      </tr>
                      <tr>
                        <td><label for="entry_author">Author:</label></td>
                        <td><input type="text" id="entry_author" class="form-control input-sm eqtxt"></td>
                      </tr>
                      <tr>
                        <td><label for="entry_publisher">Publisher:</label></td>
                        <td><input type="text" id="entry_publisher" class="form-control input-sm eqtxt"></td>
                      </tr>
                      <tr>
                        <td><label for="entry_edition">Edition:</label></td>
                        <td><input type="text" id="entry_edition" class="form-control input-sm eqtxt"></td>
                      </tr>
                      <tr>
                        <td><label for="entry_copies">Copies:</label></td>
                        <td><input type="text" id="entry_copies" class="form-control input-sm eqtxt"></td>
                      </tr>
                      <tr>
                        <td><label for="entry_cost">Cost:</label></td>
                        <td><input type="text" id="entry_cost" class="form-control input-sm eqtxt"></td>
                      </tr>
                      <tr>
                        <td><label for="entry_catalog">Catalogue No.:</label></td>
                        <td><input type="text" id="entry_catalog" class="form-control input-sm eqtxt"></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                      </tr>
                      <tr align="center">
                        <td colspan="2">
                          <a href="#" id="entry_sub_btn" type="button" class="btn btn-primary logbtn">Submit</a>
                          <button href="#" type="reset" class="btn btn-primary logbtn">Refresh</button>
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


  <!-- Book Issue Form -->
<div id="bif" class="container">
  <h3 class="page-header">BOOKS DESK</h3>
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">Book Issue</h4>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table borderless table-condensed">
                <form class="form-inline" role="form">
                    <div class="form-group">
                      <tr>
                        <td><label for="issue_book_no">Book No.:</label></td>
                        <td><input type="text" id="issue_book_no" class="form-control input-sm eqtxt"></td>
                      </tr>
                      <tr>
                        <td><label for="issue_mem_id">Member ID:</label></td>
                        <td><input type="text" id="issue_mem_id" class="form-control input-sm eqtxt"></td>
                      </tr>
                      <tr>
                        <td><label for="issue_copies">Current No. of Copies Avaliable:</label></td>
                        <td><input type="text" id="issue_copies" class="form-control input-sm eqtxt"></td>
                      </tr>
                      <tr>    
                        <td><label for="issue_date">Issue Date:</label></td>
                        <td>
                          <div class="input-group date form_datetime eqtxt" data-date="2012-12-21T15:25:00Z">
                            <input id="issue_date" type="text" class="form-control input-sm eqtxt" value="" readonly>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td><label for="issue_due_date">Due Date:</label></td>
                        <td>
                          <div class="input-group date form_datetime eqtxt" data-date="2012-12-21T15:25:00Z">
                            <input id="issue_due_date" type="text" class="form-control input-sm eqtxt" value="" readonly>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                      </tr>
                      <tr align="center">
                        <td colspan="2">
                          <a href="#" id="issue_btn" type="button" class="btn btn-primary logbtn">Issue</a>
                          <button href="#" type="reset" class="btn btn-primary logbtn">Refresh</button>
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

 <!-- Book Return Form -->
<div id="brf" class="container">
  <h3 class="page-header">BOOKS DESK</h3>
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">Book Return</h4>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table borderless table-condensed">
                <form class="form-inline" role="form">
                    <div class="form-group">
                      <tr>
                        <td><label for="return_book_no">Book No.:</label></td>
                        <td><input type="text" id="return_book_no" class="form-control input-sm eqtxt"></td>
                      </tr>
                      <tr>
                        <td><label for="return_member_id">Member ID:</label></td>
                        <td><input type="text" id="return_member_id" class="form-control input-sm eqtxt"></td>
                      </tr>
                      <tr>
                        <td><label for="return_copies">Current No. of Copies Avaliable:</label></td>
                        <td><input type="text" id="return_copies" class="form-control input-sm eqtxt"></td>
                      </tr>
                      <tr>    
                        <td><label for="return_issue_date">Issue Date:</label></td>
                        <td>
                          <div class="input-group date form_datetime eqtxt" data-date="2012-12-21T15:25:00Z">
                            <input id="return_issue_date" type="text" class="form-control input-sm eqtxt" value="" readonly>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td><label for="return_due_date">Due Date:</label></td>
                        <td>
                          <div class="input-group date form_datetime eqtxt" data-date="2012-12-21T15:25:00Z">
                            <input id="return_due_date" type="text" class="form-control input-sm eqtxt" value="" readonly>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td><label for="return_date">Return Date:</label></td>
                        <td>
                          <div class="input-group date form_datetime eqtxt" data-date="2012-12-21T15:25:00Z">
                            <input id="return_date" type="text" class="form-control input-sm eqtxt" value="" readonly>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td><label for="return_fine">Fine, if any:</label></td>
                        <td><input type="text" id="return_fine" class="form-control input-sm eqtxt"></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                      </tr>
                      <tr align="center">
                        <td colspan="2">
                          <a href="#" id="return_sub_btn" type="button" class="btn btn-primary logbtn">Submit</a>
                          <button href="#" type="reset" class="btn btn-primary logbtn">Refresh</button>
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




  <!-- Book Search Form -->
<div id="bsf" class="container">
  <h3 class="page-header">BOOKS DESK</h3>
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">Search Book</h4>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table borderless table-condensed">
                <form class="form-inline" role="form">
                    <div class="form-group">
                      <tr>
                        <td><label for="search_book_name">Book Name:</label></td>
                        <td>
                          <select class="form-control input-sm eqtxt" id="search_book_name">
                            <option>---Please Select---</option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td><label for="search_subject">Subject.:</label></td>
                        <td>
                          <select id="search_subject" class="form-control input-sm eqtxt">
                            <option>---Please Select---</option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td><label for="search_author">Author:</label></td>
                        <td>
                          <select id="search_author" class="form-control input-sm eqtxt">
                            <option>---Please Select---</option>
                          </select>
                        </td>
                      </tr>
                       <tr>
                        <td><label for="search_publisher">Publisher:</label></td>
                        <td>
                          <select id="search_publisher" class="form-control input-sm eqtxt">
                            <option>---Please Select---</option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                      </tr>
                      <tr align="center">
                        <td colspan="2">
                          <a id="search_btn" type="button" class="btn btn-primary logbtn">Search</a>
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


<!-- search book records -->
  <div id="search_book_record" class="container">
  <!-- <h3 class="page-header">BOOKS DESK</h3> -->
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">Search Book Results</h4>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table id="search_book" class="table table-bordered table-hover table-condensed">
                <form class="form-inline" role="form">
                  <div class="form-group">
                    <thead>
                    <tr>
                      <td><label>Book ID</label></td>
                      <td><label>Book Name</label></td>
                      <td><label>Subject</label></td>
                      <td><label>Author</label></td>
                      <td><label>Publisher</label></td>
                      <td><label>No. of Copies Available</label></td>
                      <td><label>Catalogue No.</label></td>
                    </tr> 
                    </thead>
                    <!-- <tr>
                      <td id="retrieve_book_id"></td>
                      <td id="retrieve_book_name"></td>
                      <td id="retrieve_subject"></td>
                      <td id="retrieve_author"></td>
                      <td id="retrieve_publisher"></td>
                      <td id="retrieve_book_copies"></td>
                      <td id="retrieve_book_catalogue"></td>
                    </tr> -->
                    <tbody>
                    </tbody>
                  </div><!-- form group closed -->
                </form><!-- form -->
              </table><!-- table closed -->
            </div><!-- table-responsive -->
          </div><!-- panel body closed -->
        </div><!-- panel closed -->
      </div><!-- column closed -->
    </div><!-- row closed -->
  </div><!-- Panel closed -->


  
 	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/bootstrap-datetimepicker.min.js"></script>
  <script type="text/javascript" src="js/sweet-alert.min.js"></script>
  <script type="text/javascript" src="js/academy.js"></script>
  <script type="text/javascript" src="js/lib_mem_reg.js"></script>
  <script type="text/javascript" src="js/lib_book_reg.js"></script>
  <script type="text/javascript" src="js/lib_book_issue.js"></script>
  <script type="text/javascript" src="js/lib_book_return.js"></script>
  <script type="text/javascript" src="js/retrieve_book_search.js"></script>
  <script type="text/javascript" src="js/book_search_result.js"></script>
  <script type="text/javascript" src="js/manage_member_frm.js"></script>
  <script type="text/javascript" src="js/sort_member.js"></script>
  <script type="text/javascript" src="js/function.js"></script>


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