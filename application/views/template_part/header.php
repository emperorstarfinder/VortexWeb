<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <base href="<?= $base_href ?>">
  <title><?= $page_title ?> |  MyAccount</title>

  <!-- Custom fonts for this template-->
  <link href="resources/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="resources/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
<script>
var baseUrl = "<?= $base_href ?>";
</script>
 <!-- Custom styles for this template-->
  <link href="resources/css/sb-admin.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
var site = (function () {
    var json = null;
    $.ajax({
        'async': false,
        'global': false,
        'url': baseUrl+"data",
        'dataType': "json",
        'success': function (data) {
            json = data;
        }
    });
    return json;
})(); 
	</script>
</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" id="gridname" href="<?= $base_href ?>">MyAccount</a>
<script>
document.getElementById("gridname").innerHTML = site.gridname;
</script>
    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>
<!--
   
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
	    </div></form>
-->

    <ul class="navbar-nav ml-auto ml-md-0">

    
     <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
	    
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="<?= $base_href ?>"">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="landDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Land</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="landDropdown">
          <h6 class="dropdown-header">Administration</h6>
          <a class="dropdown-item" href="land/regions">Manage Regions</a>
	<a class="dropdown-item" href="land/estates">Manage Estates</a>					      
        </div>

      </li>
<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="accountDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Account</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="accountDropdown">
          <a class="dropdown-item" href="account/">Account Summary</a>
						  <!--
          <a class="dropdown-item" href="account/transactions">Transactions</a>
          <a class="dropdown-item" href="account/email">Email Settings</a>
          <a class="dropdown-item" href="account/contact">Contact Information</a>
          <a class="dropdown-item" href="account/password">Change Password</a>
          <a class="dropdown-item" href="account/partners">Partners</a>
							  -->
        </div>

      </li>
<!--
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" id="storeDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="fas fa-fw fa-folder"></i>
<span>Store</span>
</a>
<div class="dropdown-menu" aria-labelledby="storeDropdown">
          <a class="dropdown-item" href="store/">Store</a>
          <a class="dropdown-item" href="store/subscriptions">Subscriptions</a>
          <a class="dropdown-item" href="store/buy">Buy</a>
        </div>

      </li>	
-->						
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
			      <li class="breadcrumb-item">Home</li>
			      


<?php


    echo "<li class='breadcrumb-item active'>" . $page_title . "</li>";

?>
                  </ol>
