  <html>
<head>
	<title>Admin</title>
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
            <!--
            CSS
            ============================================= -->
            <link rel="stylesheet" href="css/linearicons.css">
            <link rel="stylesheet" href="css/font-awesome.min.css">
            <link rel="stylesheet" href="css/bootstrap.css">
            <link rel="stylesheet" href="css/magnific-popup.css">
            <link rel="stylesheet" href="css/nice-select.css">
            <script src="js/Angular-v1.3.15.min.js"></script> 
            <link rel="stylesheet" href="css/animate.min.css">
            <link rel="stylesheet" href="css/owl.carousel.css">
            <link rel="stylesheet" href="css/main.css">
            <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
            <script src="js/jquery.dataTables.min.js"></script>
            <script src="js/angular-datatables.min.js"></script>
</head>
<body ng-app="readApp" ng-controller="DbController">
	<div>
    <?php
        session_start()
    ?>
    <?php echo $_SESSION['user']; ?>
    <form class="login-form" method="POST" action="login.php"> 
    <a href="destroy.php">Logout</a>
    </form>

		<h3>Upload Gambar</h3>
	 	<form name="form" method="post" enctype="multipart/form-data" action="proses.php">
		
    <div class="container">
              <div class="form-group">
                Add Image : <input name="picture" type="file" />
              </div>  
              <div class="form-group">
                <label for="namepet">Name</label>
                <input type="text" class="form-control" placeholder="Name" name="namepet" id="namepet" required>
              </div>  
              <div class="form-group">
                <label for="breed">Breed</label>
                <input type="text" class="form-control" placeholder="Breed" name="breed" id="breed" required>
              </div>                
              <div class="form-group">
                <label for="desc">Description</label>
                <textarea class="form-control" placeholder="Description" name="desc" id="desc" rows="2" required></textarea> 
              </div>  
              <button type="submit" class="primary-btn float-right">Submit</button>         
          </div>
		</form>

</br></br></br></br></br>
<?php include'koneksi.php'; ?>
<div class="container">
         <div class="row">
          <div class="col-md-8">
<h2>List Gambar</h2>
<div class="">
<table class="table table-hover table-bordered">
    <tr>
      <th>Id</th>
      <th>Filename</th>
      <th>Name</th>
      <th>Breed</th>
      <th>Description</th>
      <th></th>
    </tr>
    <?php              
      $query = $db->query("SELECT * FROM image ORDER BY id") or die($db->error);
              if($query->num_rows){
                while($row = $query->fetch_assoc()){
                  echo '
                  <tr>
                  <td class="py-1">'.$row['id'].'</td>
                    <td class="pic"><img src="img/'.$row['filename'].'" alt="X"></td>
                    <td>'.$row['namapet'].'</td>
                    <td>'.$row['breed'].'</td>
                    <td>'.$row['desk'].'</td>  
                    <td><a href="Delete.php?id=$row[id];">Delete</a></td>
                  </tr>';
                }
              };
                     ?> 

</table>
</div>
</div>
</div>
</div>

</br></br></br></br></br>


    	<div class="container" ng-init="selectData()">
         <div class="row">
          <div class="col-md-8">
           <h2>List Voluntir</h2>
           <div class="table-responsive">
            <table class="table table-hover  table-bordered">
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
              <td><button type="button" ng-click="delete(data.id)" class="btn btn-danger btn-xs">Delete</button></td>
             </tr>
            </table>
           </div>
          </div>
         </div>
        </div>

  </div>
</body>

<script>
var app = angular.module('readApp', []);
app.controller('DbController', function($scope, $http){

  $scope.success = false;
  $scope.error = false;

  $scope.successTesti = false;
  $scope.error = false;

  $scope.delete = function(id){
    if(confirm("Are you sure you want to remove it?"))
    {
      $http({
        method:"POST",
        url:"insert.php",
        data:{'id':id, 'action':'Delete'}
      }).success(function(data){
        $scope.success = true;
        $scope.error = false;
        $scope.successMessage = data.message;
        $scope.selectData();
      }); 
    }
  };

});
</script>

<script src="readController.js"></script>
<script src="js/vendor/jquery-2.2.4.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="js/vendor/bootstrap.min.js"></script>          
            <script src="js/easing.min.js"></script>            
            <script src="js/hoverIntent.js"></script>
            <script src="js/superfish.min.js"></script> 
            <script src="js/jquery.ajaxchimp.min.js"></script>
            <script src="js/jquery.magnific-popup.min.js"></script> 
            <script src="js/owl.carousel.min.js"></script>
            <script src="js/jquery.nice-select.min.js"></script>
            <script src="js/mail-script.js"></script>   
            <script src="js/main.js"></script>
</html>