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

<body class="fixed-nav sticky-footer" style="background-color:#007bff!important;"  id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="background-color:#007bff!important;" id="mainNav">
    <a class="navbar-brand" href="index.php" style="margin-left: 80px;">DAIS</a>
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
              <a href="?id=uploadinvoice">Upload Invoice to PeopleSoft</a>
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
    </div>
  </nav>
  <?php
    $id = ( isset($_GET["id"]) && trim($_GET["id"]) == 'uploadinvoice' ) ? trim ($_GET["id"]) : '';
    if($id == "uploadinvoice")
    {
      include 'uploadinvoice.php';
    }
    else 
    {
      include 'main.php';
    }
  ?>
  
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
        
    <script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
    <script type='text/javascript' src='js/example.js?time=100'></script>
  </div>
</body>

</html>
