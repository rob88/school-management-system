<?php  
/*
 *addNew.php 
 * Use lib/create.php server side script to store Memebers Detasil 
 * Author Ruben Faraj 
 * Email: Reben_f@hotmail.co.uk 
 * Date : 02-05-2017 

*/
   include 'config/db_connector.php';
   ?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Add New Record</title>
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
            <ol class="breadcrumb breadcrumb-arrow">
               <li><a href="index.php"><i class="glyphicon glyphicon-home"></i> Home</a></li>
               <li ><span><i class="glyphicon glyphicon-comment"></i> Add New Record</span></li>
               <li><a href="select.php"><i class="glyphicon glyphicon-list"></i> Select School</a></li>
               <li><a href="read.php"><i class="glyphicon glyphicon-user"></i> Display All Members</a></li>
            </ol>
         </div>
      
         <h4 class="example-title">Here You Can Add New Members </h4>
         <div class="row">
            <div class="col-md-12">
               <div class="panel panel-primary">
                  <div class="panel-heading">
                     <h2 class="panel-title"><strong>Add New Record ?</strong></h2>
                  </div>
                  <div class="panel-body">
                    <div class="col-md-6">
                     <!-- html form here where the Members information will be entered -->
                     <form action="lib/create.php" method="post">
                        <table class='table table-hover table-responsive table-bordered'>
                           <tr>
                              <td>Name</td>
                              <td><input type='text' name='name' class='form-control' required /></td>
                           </tr>
                           <tr>
                              <td>email</td>
                              <td><input type='email' name='email' class='form-control' required/></td>
                           </tr>
                           <tr>
                              <td>School Name</td>
                              <td><input type='text' name='school_name' class='form-control' required /></td>
                           </tr>
                           <tr>
                              <td></td>
                              <td>
                                 <button type='submit' class='btn btn-primary glyphicon glyphicon-floppy-save'> Save </button>
                                 <button type='reset' class='btn btn-danger glyphicon glyphicon-remove-sign'> Reset </button>
                              </td>
                           </tr>
                        </table><!-- /.table-->
                     </form><!-- /.form-->
                    </div><!-- /.col-md-6-->
                  </div><!-- /.panel-body--> 
               </div><!-- /.panel panel-primary-->
            </div><!-- /.col-md-12-->
            <div class="copyright clearfix">
            <p>&copy; 2017 <a href="https://github.com/rob88/School-Management-System" target="_blank">My github</a>,  Inc. All rights reserved.</p>
         </div><!-- /.copyright  -->
         </div><!-- /.row  -->
      </div><!-- /.container> -->
   </body>
</html>