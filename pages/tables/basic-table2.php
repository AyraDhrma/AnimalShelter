<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin Free Bootstrap Admin Dashboard Template</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.addons.css">
  <script src="js/Angular-v1.3.15.min.js"></script> 
  <script src="js/jquery.dataTables.min.js"></script>
  <script src="js/angular-datatables.min.js"></script>

  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body ng-app="readApp" ng-controller="DbController">
  <div class="container-scroller">
    <?php
        session_start()
    ?>
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="admin.php">
          <img src="images/logo.svg" alt="logo" />
        </a>
        <a class="navbar-brand brand-logo-mini" href="admin.php">
          <img src="images/logo-mini.svg" alt="logo" />
        </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown d-none d-xl-inline-block">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <span class="profile-text"><?php echo $_SESSION['user']; ?>
              </span>
              <img class="img-xs rounded-circle" src="images/faces/face1.jpg" alt="Profile image">
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <a class="dropdown-item" href="destroy.php">Logout</a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="basic-table.php">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Table Image</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="basic-table2.php">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Table Volunteer</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->

      <?php include'koneksi.php'; ?>
      
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
          <div class="col-md-8">
           <h2>List Voluntir</h2>
           <div class="table-responsive">
            <table datatable="ng" dt-options="vm.dtOptions" class="table table-hover  table-bordered">
             <tr class="success">
              <th>Id</th>
              <th>Nama</th>
              <th>Email</th>
              <th>Telepon</th>
              <th></th>
             </tr>
             <tr ng-repeat="data in database">
              <td>{{data.id}}</td>
              <td>{{data.nama}}</td>
              <td>{{data.email}}</td>
              <td>{{data.telpon}}</td>
              <td><button type="button" ng-click="deleteTesti(data.id)" class="btn btn-danger btn-xs">Delete</button></td>
             </tr>
            </table>
           </div>
          </div>
         </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018
              <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with
              <i class="mdi mdi-heart text-danger"></i>
            </span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <script>
    var app = angular.module('readApp', ['datatables']);
app.controller('DbController', function($scope, $http){

  $scope.success = false;
  $scope.error = false;

  $scope.successTesti = false;
  $scope.error = false;

  $scope.selectData = function(){
    $http.get('select.php').success(function(data){
      $scope.database = data;
    });
  };

  

});

  </script>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <script src="../../vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/misc.js"></script>
  <script src="readController.js"></script>

  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>