
app1.controller('mycontroller', function($scope, $http) 
{

    select(); 
    
    function select()
    {
        $http.get("process/select.php").success(function(data) 
        {
            $scope.items = data;
        
        });
    }

    om(); 
    
    function om()
    {
        $http.get("process/select_all.php").success(function(data) 
        {
            $scope.items = data;
        
        });
    }

    $scope.insert = function() 
    {
        $http.post("process/insert.php", {username: $scope.username, email: $scope.email, mobile: $scope.mobile }).
        success(function(data, status, headers, config)
         {
           //alert("Data Inserted");
         });

        $scope.username = "";
        $scope.email = "";
        $scope.mobile = "";
    }

    $scope.edit = function( id, username, email, mobile, task, task_type) 
    {
        $scope.id = id;
        $scope.username = username;
        $scope.email = email;
        $scope.mobile = mobile;
        $scope.task = task;
        $scope.task_type = task_type;
        
    }


    $scope.update = function()
     {

        $http.post("process/update.php", {id: $scope.id, username:$scope.username, email:$scope.email, mobile:$scope.mobile, task: $scope.task, task_type: $scope.task_type}).
        success(function(data, status, headers, config) 
        {
            select(); 
            alert("Updated");
        });

        $scope.username = "";
        $scope.email = "";
        $scope.mobile = "";
        $scope.task = "";
        $scope.task_type = "";

    }


});

