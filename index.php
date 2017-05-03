<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>School Management System</title>
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
   </head>
   <body >

      <div class="container">
         <div class="col-md-12">
             <?php include("navbar.php");?>
            <ol class="breadcrumb breadcrumb-arrow ">
               <li class="active"><span><i class="glyphicon glyphicon-home"></i> Home</span></li>
               <li><a href="addNew.php"><i class="glyphicon glyphicon-comment"></i> Add New Record</a></li>
               <li><a href="select.php"><i class="glyphicon glyphicon-list"></i> Select School</a></li>
               <li><a href="read.php"><i class="glyphicon glyphicon-user"></i> Display All Members</a></li>
            </ol>
         </div>
         <h2 class="example-title">Management System</h2>
         <h4 class="example-title">Hello , What Would You Like To Do ?</h4>
         <div class="row">
            <!-- Panel for Add New Records  -->  
            <div class="col-md-4">
               <div class="panel panel-warning">
                  <div class="panel-heading">
                     <h2 class="panel-title"><strong>Add New Record ?</strong></h2>
                  </div>
                  <div class="panel-body">
                     You Can Add As Many As Records You Like !! <br/><br/>
                     <a href="addNew.php"><button class="btn btn-warning">Add New Member</button></a>
                  </div>
               </div>
            </div>
            <!--/Panel for Add New Records  -->
            <!--   Panel for select members by School name  -->
            <div class="col-md-4">
               <div class="panel panel-primary">
                  <div class="panel-heading">
                     <h2 class="panel-title"><strong>Seclect School Members ?</strong></h2>
                  </div>
                  <div class="panel-body">
                     Display All Members For A Selected School<br/><br/>
                     <a href="select.php"><button class="btn btn-primary">Click Here To Learn More..</button></a>
                  </div>
               </div>
            </div>
            <!-- /Panel for select members by School name  -->
            <!--   Panel for Display All Records  -->
            <div class="col-md-4">
               <div class="panel panel-info">
                  <div class="panel-heading">
                     <h2 class="panel-title"><strong>Display All Records ?</strong></h2>
                  </div>
                  <div class="panel-body">
                     You Can See All Members Details !!<br/><br/>
                     <a href="addNew.php"><button class="btn btn-info">Display All Member Details</button></a>
                  </div>
               </div>
            </div>
            <!-- /Panel for Display All Records  -->
         </div>
         <!-- /.row  -->
         <div class="copyright clearfix">
            <p>&copy; 2017 <a href="https://github.com/rob88/School-Management-System" target="_blank">My github</a>,  Inc. All rights reserved.</p>
         </div>
      </div>
      <!-- /.container> -->
   </body>
</html>