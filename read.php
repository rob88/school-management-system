<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>All Records</title>
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
      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
      <link rel="stylesheet" href="css/custom.css">
      <!-- <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'> -->
      <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
      <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <![endif]-->
   </head>
   <body >
      <div class="container">
         <div class="col-md-12">
             <?php include("navbar.php");?>
            <ol class="breadcrumb breadcrumb-arrow">
               <li><a href="index.php"><i class="glyphicon glyphicon-home"></i> Home</a></li>
               <li><a href="addNew.php"><i class="glyphicon glyphicon-comment"></i> Add New Record</a></li>
               <li><a href="select.php"><i class="glyphicon glyphicon-list"></i> Select School</a></li>
               <li><span><i class="glyphicon glyphicon-user"></i> Display All Members</span></li>
            </ol>
         </div>
         <!-- Panels Display All Records
            ================================================== -->
         <h4 class="example-title">All Records !!</h4>
         <div class="row">
            <div class="col-md-12">
               <div class="panel panel-primary">
                  <div class="panel-heading">
                     <h2 class="panel-title"><strong>Display All Records ?</strong></h2>
                  </div>
                  <div class="panel-body">
                     <?php
                        // include database connection
                         include 'config/db_connector.php';
                        // Calling readMe.php in lib folder to display all records 
                        include 'lib/readMe.php';
                        ?>
                      </table>
                  </div> <!-- /.panel-body  --> 
               </div><!-- /.panel panel-info  --> 
            </div> <!-- /.col-md-12  --> 
         </div> <!-- /.row  -->

         <div class="copyright clearfix">
            <p>&copy; 2017 <a href="https://github.com/rob88/School-Management-System" target="_blank">My github</a>,  Inc. All rights reserved.</p>
         </div>
      </div> <!-- /.container> -->
      
      <!-- JavaScripts-->
      <script type="text/javascript" src="js/site.min.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
      <script type="text/javascript">
         $(document).ready(function() {
             $('#example').DataTable();
         } );
      </script>
   </body>
</html>