var crudApp = angular.module('readApp',[]);

crudApp.controller("DbController",['$scope','$http', function($scope,$http){

 getMhs();
 simpan();
 function getMhs()
 {
  $http.post('get.php').success(function(data){
  
  $scope.database = data;
  });
 }

 function simpan()
 {
  $http.post('simpan.php').success(function(data){
   });
 }

 $scope.deleteTesti = function(id){
    if(confirm("Are you sure you want to remove it?"))
    {
      $http({
        method:"POST",
        url:"deletevoluntir.php",
        data:{'id':id, 'action':'DeleteTesti'}
      }).success(function(data){
        $scope.successTesti = true;
        $scope.successMessageT = 'Data Deleted';
        getMhs();
      }); 
    }
  };
}
]);




