<!DOCTYPE html>
<html>
   <head>
      <?php include 'config/db_connector.php'; ?><!--Database Connection-->
      <meta charset="utf-8">
      <title>Select School</title>
      <!-- Sets initial viewport load and disables zooming  -->
      <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
      <!-- SmartAddon.com Verification -->
      <meta name="smartaddon-verification" content="936e8d43184bc47ef34e25e426c508fe" />
      <meta name="keywords" content=" London School Management System">
      <meta name="description" content="This is a simple School Management System">
      <link rel="shortcut icon" href="favicon_16.ico"/>
      <link rel="bookmark" href="favicon_16.ico"/>
      <!-- site css -->
      <link rel="stylesheet" href="css/site.min.css">
      <link rel="stylesheet" href="css/custom.css">
      <!-- <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'> -->
      <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
      <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <![endif]-->
      <script type="text/javascript" src="js/site.min.js"></script>
      <script
         src="https://code.jquery.com/jquery-1.12.4.js"
         integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
         crossorigin="anonymous"></script>
         <!-- Ajax used for display members when a school selected-->
      <script type="text/javascript">
         function fetch_select(val)
         {
          $.ajax({
          type: 'post',
          url: 'lib/fetch_data.php',
          data: {
           get_option:val
          },
          success: function (response) {
           document.getElementById("new_select").innerHTML=response; 
          }
          });
         }
      </script><!--/function fetch_select-->
   </head>
   <body >
      <div class="container">
         <div class="col-md-12">
           <?php include("navbar.php");?>
            <ol class="breadcrumb breadcrumb-arrow">
               <li><a href="index.php"><i class="glyphicon glyphicon-home"></i> Home</a></li>
               <li ><a href="addNew.php"><i class="glyphicon glyphicon-comment"></i> Add New Record</a></li>
               <li><span><i class="glyphicon glyphicon-list"></i> Select School</span></li>
               <li><a href="read.php"><i class="glyphicon glyphicon-user"></i> Display All Members</a></li>
            </ol>
         </div>
         <h4 class="example-title">Simply Select A School , See All The Associated Members</h4>
         <div class="row">
            <!-- Panels For Selecting A School , See All The Members
               ================================================== -->
            <div class="col-md-12">
               <div class="panel panel-primary">
                  <div class="panel-heading">
                     <h2 class="panel-title"><strong>Seclect School Members ?</strong></h2>
                  </div>
                  <div class="panel-body">
                     <p id="heading">Dynamic School Selecting</p>
                     <div>
                        <select  class"btn btn-primary " onchange="fetch_select(this.value);">
                           <option>Select A School</option>
                           <?php
                              
                              $query = "SELECT  school_name from school_ group by school_name";
                              $stmt = $con->prepare($query);
                              $stmt->execute();
                              $num = $stmt->rowCount();
                              while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
                              {
                              echo "<option>".$row['school_name']."</option>";
                              
                               }
                              ?>
                        </select>
                        <br/><br/>
                        <table  id='new_select' class='table table-hover table-responsive table-bordered'>
                           <tr>
                              <th>Name</th>
                              <th>email</th>
                           </tr>
                           <tr>
                              <td></td>
                              <td></td>
                           </tr>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- /.row  -->
         <div class="copyright clearfix">
            <p>&copy; 2017 <a href="https://github.com/rob88/School-Management-System" target="_blank">My github</a>,  Inc. All rights reserved.</p>
         </div>
      </div>
      <!-- /.container> -->
   </body>
</html>