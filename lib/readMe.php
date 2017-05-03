<?php
    /*
    *readMe.php 
    * used for retrieving All data from database , used by read.php 
    * Author Ruben Faraj 
    * Email: Reben_f@hotmail.co.uk 
    * Date : 02-05-2017 
   */
   // include database connection
    include 'config/db_connector.php';
/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */    
   // select all data
   $query = "SELECT id, name, email, school_name FROM school_ ORDER BY id DESC";
   $stmt = $con->prepare($query);
   $stmt->execute();
   // this is how to get number of rows returned
   $num = $stmt->rowCount();
/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/    
   
/* ========================================================================================= */
   //check if more than 0 record found
   if($num>0){
    
  echo "<table id='example' class='table table-striped table-bordered' cellspacing='0' width='100%''>";
    //creating All School Members table heading
       echo"<thead>";
           echo "<tr>";
               echo "<th>Id</th>";
               echo "<th>Name</th>";
               echo "<th>Email</th>";
               echo "<th>School Name</th>";
          echo "</tr>";
      echo"</thead>";
/*=====================================================================================================*/
           // retrieve All School Members table contents
           // fetch() is faster than fetchAll()
           while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
               // extract row
               extract($row);
               // creating new table row per record
                echo "<tbody";
               echo "<tr>";
                   echo "<td>{$id}</td>";
                   echo "<td>{$name}</td>";
                   echo "<td>{$email}</td>";
                   echo "<td>{$school_name}</td>";
               echo "</tr>";
               echo "</tbody";
           }// End while()
        
       // end table
       echo "</table>";
        
   }// end if()
/*===================================================================================================*/


/*-----------<><><>><><><><><><><><><><><><><><>><><><><><><><><><><>><><><><><><>>----------------- */    
   // else if no records found
   else{
       echo "<div class='alert alert-danger'>No records found.</div>";
   }// end else
   
/*-----------<><><>><><><><><><><><><><><><><><>><><><><><><><><><><>><><><><><><>>----------------- */   
   
   ?>