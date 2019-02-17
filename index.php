<!DOCTYPE html>
<html>

<head>
    
    <title>Register form</title>
    <!-- Bootstrap Files-->
    <link href="bootstrap/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap/jquery.min.js"></script>
    <script src="bootstrap/bootstrap.min.js"></script>
    <script src="js/mdb.min.js "></script>
    <link href="css/mdb.min.css" rel="stylesheet">
    <!--Bootstrap files end here-->     
    
    <!--Include Angular Js Lib-->
    <script src="js/angular.js"></script>
    <!-- Angular JS module and controller files-->
    
    <script src="js/myapp.js"></script>
    <script src="js/myctrl.js"></script>

    <!-- Angular JS module and controller files end here-->

    <!--styling-->
     <style type="text/css">
        .form-user 
        {
          background-color: #EDEDED;
          padding-top: 20px;
          padding-bottom: 80px;
          padding-left: 70px;
          padding-right: 70px;
          border-radius: 15px;
          border-color:#d2d2d2;
          border-width: 20px;
          box-shadow:0 1px 0 #cfcfcf;
        }

         h3 
          { 
            border:0 solid #fff; 
            border-bottom-width:1px;
            padding-bottom:20px;
            text-align: center;
          }

        .form-control 
          {
            border-radius: 10px;
          }
          button
          {
            border-radius: 25px; width: 150px; height: 35px; color: white; border: none;
          }
      </style> 
    <!--styling-->

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script>
        $(document).ready(function()
        {
          $(".task2").click(function()
          {
            $(".task1").toggle();
          });
        });


        $(document).ready(function()
        {
          $(".selectall2").click(function()
          {
            $(".selectall").toggle();
          });
        });

      </script>


</head>
      
    <body> 
      <div  ng-app="userapp" ng-controller="mycontroller">
      <div class="modal-header" style="border-bottom: none;">
        <!-- header section-->      
      </div>
  
    <div class="container">      
      <div class="col-md-offset-3 col-md-6">
        <div class="form-user">
            <br><h3 style="color:blue; font-family: italic;" align="center"><b>Register user</b></h3>
          
            <form method="" enctype="multipart/form-data">
              <input type="text" placeholder="NAME" ng-model="username" id="name" name="username" class="form-control" style="font-weight: bold;" required>

              <input type="email" placeholder="EMAIL*" ng-model="email" id="email1" name="email" class="form-control" style="font-weight: bold;" required>

              <input type="text" placeholder="MOBILE NO*" minlength="10" maxlength="10" ng-model="mobile" name="mobile" class="form-control" style="font-weight: bold;" required>

              <div class="task1" style="display: none;">

              <textarea class="form-control" rows="3" ng-model="task"  placeholder="TASK*" style="font-weight: bold;" required></textarea><br>

              <label>TASK-TYPE<select class="form-control" placeholder="TASK-TYPE" ng-model="task_type" required></label>
                <option value="Yes">YES</option>
                <option value="No">NO</option>
              </select><br>

              <div align="center">
                <button type="submit" ng-click="update();" class="btnbtn btn-primary waves-effect waves-light">UPDATE USER</button>
              </div><br>

            </div>

              <div align="center">
                <button type="submit" ng-click="insert();" class="btnbtn btn-primary waves-effect waves-light">ADD USER</button><br>
              </div>

              <div align="center">
                <br><button type="all" ng-click="om();" id="dload" class="selectall2 btnbtn btn-primary waves-effect waves-light">ASSIGNED TASK</button>
              </div>

            </form>
        </div>     
      </div>
      
    </div><br>
    

  <div class="selectall">

    <div class="container">
      <h4 align="center" style="color: blue; font-family: italic;">USERS & TASK</h4>
      <div class="table-responsive">          
        <table class="table table-control">
          <thead>
            <tr>
              <th>ID</th>
              <th>NAME</th>
              <th>EMAIL*</th>
              <th>MOBILE*</th>
              <th>TASK</th>
              <th>TASK-TYPE</th>
            </tr>
          </thead>
          
          <tbody ng-init="select();">
              <tr ng-repeat="item in items">
                
                <td>{{item.id}}</td>
                <td>{{item.username}}</td>
                <td>{{item.email}}</td>
                <td>{{item.mobile}}</td>
                <td>{{item.task}}</td>
                <td>{{item.task_type}}</td>
                <td></td>
              </tr>             
            </tbody>
        </table>
  
      </div>
    </div>
  </div>  

  <div class="selectfew">
    <div class="container">
      <h4 align="center" style="color: blue; font-family: italic;">USERS</h4>
      <div class="table-responsive">          
        <table class="table table-control">
          <thead>
            <tr>
              <th>ID</th>
              <th>NAME</th>
              <th>EMAIL*</th>
              <th>MOBILE NO*</th>
              <th></th>
              <th>UPDATE TASK</th>
            </tr>
          </thead>
          
          <tbody ng-init="select();">
              <tr ng-repeat="item in items">
                
                <td>{{item.id}}</td>
                <td>{{item.username}}</td>
                <td>{{item.email}}</td>
                <td>{{item.mobile}}</td>
                <td></td>
                <td>
                  <button class="task2" ng-click="edit(item.id, item.username, item.email, item.mobile, item.task, item.task_type);" class="btnbtn btn-primary waves-effect waves-light" style="border-radius: 25px; width: 150px; height: 35px; color:black ; border-bottom: none; border-right: none;">UPDATE</button>
                </td>
              </tr>             
            </tbody>
        </table>
  
      </div>
    </div>
  </div> 
  
    
 

<div class="footer">
    <!--footer-->
  </div>
</div>
</body>

</html>    

    