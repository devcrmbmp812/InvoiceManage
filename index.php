<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Invoice</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

  <link rel='stylesheet' type='text/css' href='css/style.css' />
  <link rel='stylesheet' type='text/css' href='css/print.css' media="print" />
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html" style="margin-left: 80px;">C R M</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <!-- <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="#">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Charts</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="#">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Tables</span>
          </a>
        </li> -->
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#systemmanager" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">System Manager</span>
          </a>
          <ul class="sidenav-second-level collapse" id="systemmanager">
            <li>
              <a href="#">Company Profile</a>
            </li>
            <li>
              <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#SystemUtiliies">System Utilities</a>
              <ul class="sidenav-third-level collapse" id="SystemUtiliies">
                <li>
                  <a href="#">Backup Data Files</a>
                </li>
                <li>
                  <a href="#">Restore Data Files</a>
                </li>
                <li>
                  <a href="#">Initialize Master Files</a>
                </li>
              </ul>
            </li>
            <li>
              <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#migratedatafiles">Migrate Data Files</a>
              <ul class="sidenav-third-level collapse" id="migratedatafiles">
                <li>
                  <a href="#">Import Customer Data</a>
                </li>
                <li>
                  <a href="#">Import Billing Data</a>
                </li>
                <li>
                  <a href="#">Import Sales Person Data</a>
                </li>
              </ul>
            </li>
            <li>
              <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#masterfiles">Master Files</a>
              <ul class="sidenav-third-level collapse" id="masterfiles">
                <li>
                  <a href="#">Customer Master</a>
                </li>
                <li>
                  <a href="#">Supplier Master</a>
                </li>
                <li>
                  <a href="#">Billing Master</a>
                </li>
                <li>
                  <a href="#">Sales Person Master</a>
                </li>
                <li>
                  <a href="#">Account Master</a>
                </li>
                <li>
                  <a href="#">Payee Master</a>
                </li>
                <li>
                  <a href="#">Contract Master</a>
                </li>
              </ul>
            </li>
            <li>
              <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#combotables">System Utilities</a>
              <ul class="sidenav-third-level collapse" id="combotables">
                <li>
                  <a href="#">Forex Master</a>
                </li>
                <li>
                  <a href="#">GST Master</a>
                </li>
                <li>
                  <a href="#">Country</a>
                </li>
              </ul>
            </li>
            <li>
              <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#staffmanagement">Staff Management</a>
              <ul class="sidenav-third-level collapse" id="staffmanagement">
                <li>
                  <a href="#">Add Employee Group</a>
                </li>
                <li>
                  <a href="#">Add Employee</a>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Quotation</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
              <a href="#">Quotation Setting</a>
            </li>
            <li>
              <a href="#">New Quotation</a>
            </li>
            <li>
              <a href="#">Quotation Listing</a>
            </li>
            <li>
              <a href="#">Zap Quotation</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-sitemap"></i>
            <span class="nav-link-text">Invoice</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti">
            <li>
              <a href="#">Invoice Setting</a>
            </li>
            <li>
              <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">New Invoice</a>
              <ul class="sidenav-third-level collapse" id="collapseMulti2">
                <li>
                  <a href="#">Itemised Entries</a>
                </li>
                <li>
                  <a href="#">Extract Quotation</a>
                </li>
              </ul>
            </li>
            <li>
              <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti3">Invoice Listing</a>
              <ul class="sidenav-third-level collapse" id="collapseMulti3">
                <li>
                  <a href="#">Confirmed Invoice</a>
                </li>
                <li>
                  <a href="#">Posted Invoice</a>
                </li>
                <li>
                  <a href="#">Deleted Invoice</a>
                </li>
              </ul>
            </li>
            <li>
              <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti4">Other Listing</a>
              <ul class="sidenav-third-level collapse" id="collapseMulti4">
                <li>
                  <a href="#">AR Listing</a>
                </li>
                <li>
                  <a href="#">GL Listing</a>
                </li>
                <li>
                  <a href="#">GST Listing</a>
                </li>
                <li>
                  <a href="#">Stock Listing</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="#">Zap Invoice</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti1" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-link"></i>
            <span class="nav-link-text">Receipt</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti1">
            <li>
              <a href="#">Receipt Setting</a>
            </li>
            <li>
              <a href="#">New Receipt</a>
            </li>
            <li>
              <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti_ReceiptListing">Receipt Listing</a>
              <ul class="sidenav-third-level collapse" id="collapseMulti_ReceiptListing">
                <li>
                  <a href="#">Confirmed Receipt</a>
                </li>
                <li>
                  <a href="#">Posted Receipt</a>
                </li>
                <li>
                  <a href="#">Deleted Receipt</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="#">Zap Receipt</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#AccountsReceivable" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-sitemap"></i>
            <span class="nav-link-text">Accounts Receivable</span>
          </a>
          <ul class="sidenav-second-level collapse" id="AccountsReceivable">
            <li>
              <a href="#">Audit Listing</a>
            </li>
            <li>
              <a href="#">Opening Balance b/f</a>
            </li>
            <li>
              <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#openingbalance">Opening Listing</a>
              <ul class="sidenav-third-level collapse" id="openingbalance">
                <li>
                  <a href="#">Confirmed Opening Balance</a>
                </li>
                <li>
                  <a href="#">Posted Opening Balance</a>
                </li>
                <li>
                  <a href="#">Deleted Opening Balance</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="#">Debitor Statement</a>
            </li>
            <li>
              <a href="#">Debitors' Listing</a>
            </li>
            <li>
              <a href="#">Debitors' Ageing</a>
            </li>
            <li>
              <a href="#">Zap Accounts Receivable</a>
            </li>
          </ul>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
    <!--   <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-envelope"></i>
            <span class="d-lg-none">Messages
              <span class="badge badge-pill badge-primary">12 New</span>
            </span>
            <span class="indicator text-primary d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">New Messages:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>David Miller</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>Jane Smith</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>John Doe</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all messages</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-bell"></i>
            <span class="d-lg-none">Alerts
              <span class="badge badge-pill badge-warning">6 New</span>
            </span>
            <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">New Alerts:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-danger">
                <strong>
                  <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all alerts</a>
          </div>
        </li>
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Search for...">
              <span class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul> -->
    </div>
  </nav>
  <div class="content-wrapper">
    <div id="page-wrap">

    <textarea id="header">INVOICE</textarea>
    
    <div id="identity">
  
          <div style="text-align: center;">
              <img id="image" src="images/logo2.jpg" alt="logo" />
            </div>
    
    </div>
    
    <div style="clear:both"></div>
    <form id="_form" action="ajax/export_csv.php" method="POST">
    
    <div id="customer">
            <textarea id="customer-title">Demo customer name</textarea>
            <table id="meta">
                <tr>
                    <td class="meta-head">Date</td>
                    <td><textarea id="date">December 15, 2009</textarea></td>
                </tr>
            </table>
    
    </div>
    
    <table id="items">
      <tr>
          <th>Line Description</th>
          <th>Unit of measure</th>
        <th>Price per unit($)</th>
          <th>Qty</th>
          <th>Total</th>
      </tr>
      <tr class="item-row">
          <td class="item-name"><div class="delete-wpr"><textarea name="line_description[]">Regular Meter Delivery - Treated</textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>
          <td class="description"><input type="text" value="AF" name="unit_of_measure[]"></td>
          <td><input type="text" class="cost" value="$1145.00" name="price_per_unit[]"></input></td>
          <td><input type="text" class="qty" value="2496.30" name="qty_item[]"></td>
          <td><span class="price">$2858263.50</span><input type="hidden" class="price" name="total[]" value="$2858263.50"></td>

      </tr>
      
      <tr class="item-row">
          <td class="item-name"><div class="delete-wpr"><textarea name="line_description[]">Regular Meter Delivery - Untreated</textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>
          <td class="description"><input type="text" value="AF" name="unit_of_measure[]"></td>
          <td><input type="text" class="cost" value="$855.00" name="price_per_unit[]"></input></td>
          <td><input type="text" class="qty" value="13970.50" name="qty_item[]"></td>
          <td><span class="price">$11944777.50</span><input type="hidden" class="price_input" name="total[]" value="$11944777.50"></td>
      </tr>
      
      <tr id="hiderow">
        <td colspan="5"><a id="addrow" href="javascript:;" title="Enter a new line">Enter A New Line</a></td>
      </tr>
     
      <tr>
          <td colspan="2" class="blank"> </td>
          <td colspan="2" class="total-line">Total</td>
          <td class="total-value"><div id="total">$14803041.00</div></td>
      </tr>
    </table>
    <input type="submit" id="export" value="Export As CSV" class="button" style="float: right;">
    </form>
  </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
    <script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
    <script type='text/javascript' src='js/example.js?time=100'></script>
  </div>
</body>

</html>
